<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Admin\GivingRecord\IndexGivingRecord;
use App\Http\Requests\Admin\GivingRecord\StoreGivingRecord;
use App\Http\Requests\Admin\GivingRecord\UpdateGivingRecord;
use App\Http\Requests\Admin\GivingRecord\DestroyGivingRecord;
use Brackets\AdminListing\Facades\AdminListing;
use App\Models\GivingRecord;

class GivingRecordsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param  IndexGivingRecord $request
     * @return Response|array
     */
    public function index(IndexGivingRecord $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(GivingRecord::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'amount', 'currency', 'giving_channel_id', 'accounts_id'],

            // set columns to searchIn
            ['id', 'currency']
        );

        if ($request->ajax()) {
            return ['data' => $data];
        }

        return view('admin.giving-record.index', ['data' => $data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function create()
    {
        $this->authorize('admin.giving-record.create');

        return view('admin.giving-record.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreGivingRecord $request
     * @return Response|array
     */
    public function store(StoreGivingRecord $request)
    {
        // Sanitize input
        $sanitized = $request->validated();

        // Store the GivingRecord
        $givingRecord = GivingRecord::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/giving-records'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/giving-records');
    }

    /**
     * Display the specified resource.
     *
     * @param  GivingRecord $givingRecord
     * @return void
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function show(GivingRecord $givingRecord)
    {
        $this->authorize('admin.giving-record.show', $givingRecord);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  GivingRecord $givingRecord
     * @return Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function edit(GivingRecord $givingRecord)
    {
        $this->authorize('admin.giving-record.edit', $givingRecord);

        return view('admin.giving-record.edit', [
            'givingRecord' => $givingRecord,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateGivingRecord $request
     * @param  GivingRecord $givingRecord
     * @return Response|array
     */
    public function update(UpdateGivingRecord $request, GivingRecord $givingRecord)
    {
        // Sanitize input
        $sanitized = $request->validated();

        // Update changed values GivingRecord
        $givingRecord->update($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/giving-records'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/giving-records');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  DestroyGivingRecord $request
     * @param  GivingRecord $givingRecord
     * @return Response|bool
     * @throws \Exception
     */
    public function destroy(DestroyGivingRecord $request, GivingRecord $givingRecord)
    {
        $givingRecord->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    }
