<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Journal\BulkDestroyJournal;
use App\Http\Requests\Admin\Journal\DestroyJournal;
use App\Http\Requests\Admin\Journal\IndexJournal;
use App\Http\Requests\Admin\Journal\StoreJournal;
use App\Http\Requests\Admin\Journal\UpdateJournal;
use App\Models\Journal;
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

class JournalsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexJournal $request
     * @return array|Factory|View
     */
    public function index(IndexJournal $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Journal::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'published_at', 'tags', 'title'],

            // set columns to searchIn
            ['content', 'id', 'tags', 'title']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.journal.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.journal.create');

        $journals = Journal::all();
        $resultSet = [];
        
        foreach($journals as $journal){
            foreach(
                explode(',', $journal->tags) as $tag){
                array_push($resultSet, $tag);
            }
        }

        return view('admin.journal.create', [
            "tags" => $resultSet
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreJournal $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreJournal $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Journal
        $journal = Journal::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/journals'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/journals');
    }

    /**
     * Display the specified resource.
     *
     * @param Journal $journal
     * @throws AuthorizationException
     * @return void
     */
    public function show(Journal $journal)
    {
        $this->authorize('admin.journal.show', $journal);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Journal $journal
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Journal $journal)
    {
        $this->authorize('admin.journal.edit', $journal);


        return view('admin.journal.edit', [
            'journal' => $journal,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateJournal $request
     * @param Journal $journal
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateJournal $request, Journal $journal)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Journal
        $journal->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/journals'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
                'object' => $journal
            ];
        }

        return redirect('admin/journals');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyJournal $request
     * @param Journal $journal
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyJournal $request, Journal $journal)
    {
        $journal->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyJournal $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyJournal $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Journal::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
