<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Admin\GivingChannel\IndexGivingChannel;
use App\Http\Requests\Admin\GivingChannel\StoreGivingChannel;
use App\Http\Requests\Admin\GivingChannel\UpdateGivingChannel;
use App\Http\Requests\Admin\GivingChannel\DestroyGivingChannel;
use Brackets\AdminListing\Facades\AdminListing;
use App\Models\GivingChannel;

class GivingChannelsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param  IndexGivingChannel $request
     * @return Response|array
     */
    public function index(IndexGivingChannel $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(GivingChannel::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'channel', 'active', 'description'],

            // set columns to searchIn
            ['id', 'channel', 'description']
        );

        if ($request->ajax()) {
            return ['data' => $data];
        }

        return view('admin.giving-channel.index', ['data' => $data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function create()
    {
        $this->authorize('admin.giving-channel.create');

        return view('admin.giving-channel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreGivingChannel $request
     * @return Response|array
     */
    public function store(StoreGivingChannel $request)
    {
        // Sanitize input
        $sanitized = $request->validated();

        // Store the GivingChannel
        $givingChannel = GivingChannel::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/giving-channels'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/giving-channels');
    }

    /**
     * Display the specified resource.
     *
     * @param  GivingChannel $givingChannel
     * @return void
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function show(GivingChannel $givingChannel)
    {
        $this->authorize('admin.giving-channel.show', $givingChannel);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  GivingChannel $givingChannel
     * @return Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function edit(GivingChannel $givingChannel)
    {
        $this->authorize('admin.giving-channel.edit', $givingChannel);

        return view('admin.giving-channel.edit', [
            'givingChannel' => $givingChannel,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateGivingChannel $request
     * @param  GivingChannel $givingChannel
     * @return Response|array
     */
    public function update(UpdateGivingChannel $request, GivingChannel $givingChannel)
    {
        // Sanitize input
        $sanitized = $request->validated();

        // Update changed values GivingChannel
        $givingChannel->update($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/giving-channels'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/giving-channels');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  DestroyGivingChannel $request
     * @param  GivingChannel $givingChannel
     * @return Response|bool
     * @throws \Exception
     */
    public function destroy(DestroyGivingChannel $request, GivingChannel $givingChannel)
    {
        $givingChannel->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    }
