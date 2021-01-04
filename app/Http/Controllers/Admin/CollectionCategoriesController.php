<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CollectionCategory\BulkDestroyCollectionCategory;
use App\Http\Requests\Admin\CollectionCategory\DestroyCollectionCategory;
use App\Http\Requests\Admin\CollectionCategory\IndexCollectionCategory;
use App\Http\Requests\Admin\CollectionCategory\StoreCollectionCategory;
use App\Http\Requests\Admin\CollectionCategory\UpdateCollectionCategory;
use App\Models\CollectionCategory;
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

class CollectionCategoriesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexCollectionCategory $request
     * @return array|Factory|View
     */
    public function index(IndexCollectionCategory $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(CollectionCategory::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['description', 'id', 'name', 'type_id'],

            // set columns to searchIn
            ['description', 'id', 'name']
        );

        $data->load('Type');

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.collection-category.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.collection-category.create');

        return view('admin.collection-category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreCollectionCategory $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreCollectionCategory $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the CollectionCategory
        $collectionCategory = CollectionCategory::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/collection-categories'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/collection-categories');
    }

    /**
     * Display the specified resource.
     *
     * @param CollectionCategory $collectionCategory
     * @throws AuthorizationException
     * @return void
     */
    public function show(CollectionCategory $collectionCategory)
    {
        $this->authorize('admin.collection-category.show', $collectionCategory);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param CollectionCategory $collectionCategory
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(CollectionCategory $collectionCategory)
    {
        $this->authorize('admin.collection-category.edit', $collectionCategory);


        return view('admin.collection-category.edit', [
            'collectionCategory' => $collectionCategory,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCollectionCategory $request
     * @param CollectionCategory $collectionCategory
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateCollectionCategory $request, CollectionCategory $collectionCategory)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values CollectionCategory
        $collectionCategory->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/collection-categories'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/collection-categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyCollectionCategory $request
     * @param CollectionCategory $collectionCategory
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyCollectionCategory $request, CollectionCategory $collectionCategory)
    {
        $collectionCategory->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyCollectionCategory $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyCollectionCategory $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    DB::table('collectionCategories')->whereIn('id', $bulkChunk)
                        ->update([
                            'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
                    ]);

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
