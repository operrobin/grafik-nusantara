<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CollectionType\BulkDestroyCollectionType;
use App\Http\Requests\Admin\CollectionType\DestroyCollectionType;
use App\Http\Requests\Admin\CollectionType\IndexCollectionType;
use App\Http\Requests\Admin\CollectionType\StoreCollectionType;
use App\Http\Requests\Admin\CollectionType\UpdateCollectionType;
use App\Models\CollectionType;
use Brackets\AdminListing\Facades\AdminListing;
use Carbon\Carbon;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class CollectionTypesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexCollectionType $request
     * @return array|Factory|View
     */
    public function index(IndexCollectionType $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(CollectionType::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['description', 'id', 'name'],

            // set columns to searchIn
            ['description', 'id', 'name']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.collection-type.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.collection-type.create');

        return view('admin.collection-type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreCollectionType $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreCollectionType $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the CollectionType
        $collectionType = CollectionType::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/collection-types'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/collection-types');
    }

    /**
     * Display the specified resource.
     *
     * @param CollectionType $collectionType
     * @throws AuthorizationException
     * @return void
     */
    public function show(CollectionType $collectionType)
    {
        $this->authorize('admin.collection-type.show', $collectionType);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param CollectionType $collectionType
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(CollectionType $collectionType)
    {
        $this->authorize('admin.collection-type.edit', $collectionType);


        return view('admin.collection-type.edit', [
            'collectionType' => $collectionType,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCollectionType $request
     * @param CollectionType $collectionType
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateCollectionType $request, CollectionType $collectionType)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values CollectionType
        $collectionType->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/collection-types'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/collection-types');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyCollectionType $request
     * @param CollectionType $collectionType
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyCollectionType $request, CollectionType $collectionType)
    {
        $collectionType->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyCollectionType $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyCollectionType $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    DB::table('collectionTypes')->whereIn('id', $bulkChunk)
                        ->update([
                            'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
                    ]);

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
