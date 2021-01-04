<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\EmailConfig\BulkDestroyEmailConfig;
use App\Http\Requests\Admin\EmailConfig\DestroyEmailConfig;
use App\Http\Requests\Admin\EmailConfig\IndexEmailConfig;
use App\Http\Requests\Admin\EmailConfig\StoreEmailConfig;
use App\Http\Requests\Admin\EmailConfig\UpdateEmailConfig;
use App\Models\EmailConfig;
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

class EmailConfigsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexEmailConfig $request
     * @return array|Factory|View
     */
    public function index(IndexEmailConfig $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(EmailConfig::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['driver', 'email', 'encryption', 'host', 'id', 'port', 'username'],

            // set columns to searchIn
            ['driver', 'email', 'encryption', 'host', 'id', 'username']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.email-config.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.email-config.create');

        return view('admin.email-config.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreEmailConfig $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreEmailConfig $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the EmailConfig
        $emailConfig = EmailConfig::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/email-configs'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/email-configs');
    }

    /**
     * Display the specified resource.
     *
     * @param EmailConfig $emailConfig
     * @throws AuthorizationException
     * @return void
     */
    public function show(EmailConfig $emailConfig)
    {
        $this->authorize('admin.email-config.show', $emailConfig);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param EmailConfig $emailConfig
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(EmailConfig $emailConfig)
    {
        $this->authorize('admin.email-config.edit', $emailConfig);


        return view('admin.email-config.edit', [
            'emailConfig' => $emailConfig,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateEmailConfig $request
     * @param EmailConfig $emailConfig
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateEmailConfig $request, EmailConfig $emailConfig)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values EmailConfig
        $emailConfig->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/email-configs'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/email-configs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyEmailConfig $request
     * @param EmailConfig $emailConfig
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyEmailConfig $request, EmailConfig $emailConfig)
    {
        $emailConfig->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyEmailConfig $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyEmailConfig $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    EmailConfig::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
