<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Collection\BulkDestroyCollection;
use App\Http\Requests\Admin\Collection\DestroyCollection;
use App\Http\Requests\Admin\Collection\IndexCollection;
use App\Http\Requests\Admin\Collection\StoreCollection;
use App\Http\Requests\Admin\Collection\UpdateCollection;
use App\Models\Collection;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class CollectionsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexCollection $request
     * @return array|Factory|View
     */
    public function index(IndexCollection $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Collection::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['category_id', 'created_when', 'created_who', 'description', 'id', 'image_path', 'name'],

            // set columns to searchIn
            ['created_when', 'created_who', 'description', 'id', 'image_path', 'name']
        );

        $data->load('Category');

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.collection.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.collection.create');

        return view('admin.collection.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreCollection $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreCollection $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Collection
        $collection = Collection::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/collections'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/collections');
    }

    /**
     * Display the specified resource.
     *
     * @param Collection $collection
     * @throws AuthorizationException
     * @return void
     */
    public function show(Collection $collection)
    {
        $this->authorize('admin.collection.show', $collection);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Collection $collection
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Collection $collection)
    {
        $this->authorize('admin.collection.edit', $collection);


        return view('admin.collection.edit', [
            'collection' => $collection,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCollection $request
     * @param Collection $collection
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateCollection $request, Collection $collection)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Collection
        $collection->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/collections'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/collections');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyCollection $request
     * @param Collection $collection
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyCollection $request, Collection $collection)
    {
        $collection->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyCollection $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyCollection $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Collection::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
