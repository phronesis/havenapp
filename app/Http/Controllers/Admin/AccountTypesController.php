<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Admin\AccountType\IndexAccountType;
use App\Http\Requests\Admin\AccountType\StoreAccountType;
use App\Http\Requests\Admin\AccountType\UpdateAccountType;
use App\Http\Requests\Admin\AccountType\DestroyAccountType;
use Brackets\AdminListing\Facades\AdminListing;
use App\Models\AccountType;

class AccountTypesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param  IndexAccountType $request
     * @return Response|array
     */
    public function index(IndexAccountType $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(AccountType::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'type'],

            // set columns to searchIn
            ['id', 'type']
        );

        if ($request->ajax()) {
            return ['data' => $data];
        }

        return view('admin.account-type.index', ['data' => $data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function create()
    {
        $this->authorize('admin.account-type.create');

        return view('admin.account-type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreAccountType $request
     * @return Response|array
     */
    public function store(StoreAccountType $request)
    {
        // Sanitize input
        $sanitized = $request->validated();

        // Store the AccountType
        $accountType = AccountType::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/account-types'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/account-types');
    }

    /**
     * Display the specified resource.
     *
     * @param  AccountType $accountType
     * @return void
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function show(AccountType $accountType)
    {
        $this->authorize('admin.account-type.show', $accountType);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  AccountType $accountType
     * @return Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function edit(AccountType $accountType)
    {
        $this->authorize('admin.account-type.edit', $accountType);

        return view('admin.account-type.edit', [
            'accountType' => $accountType,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateAccountType $request
     * @param  AccountType $accountType
     * @return Response|array
     */
    public function update(UpdateAccountType $request, AccountType $accountType)
    {
        // Sanitize input
        $sanitized = $request->validated();

        // Update changed values AccountType
        $accountType->update($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/account-types'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/account-types');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  DestroyAccountType $request
     * @param  AccountType $accountType
     * @return Response|bool
     * @throws \Exception
     */
    public function destroy(DestroyAccountType $request, AccountType $accountType)
    {
        $accountType->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    }
