<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Admin\Account\IndexAccount;
use App\Http\Requests\Admin\Account\StoreAccount;
use App\Http\Requests\Admin\Account\UpdateAccount;
use App\Http\Requests\Admin\Account\DestroyAccount;
use Brackets\AdminListing\Facades\AdminListing;
use App\Models\Account;

class AccountsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param  IndexAccount $request
     * @return Response|array
     */
    public function index(IndexAccount $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Account::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'acc_number', 'account_type_id', 'account_status_id'],

            // set columns to searchIn
            ['id', 'acc_number']
        );

        if ($request->ajax()) {
            return ['data' => $data];
        }

        return view('admin.account.index', ['data' => $data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function create()
    {
        $this->authorize('admin.account.create');

        return view('admin.account.create',[

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreAccount $request
     * @return Response|array
     */
    public function store(StoreAccount $request)
    {
        // Sanitize input
        $sanitized = $request->validated();

        // Store the Account
        $account = Account::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/accounts'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/accounts');
    }

    /**
     * Display the specified resource.
     *
     * @param  Account $account
     * @return void
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function show(Account $account)
    {
        $this->authorize('admin.account.show', $account);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Account $account
     * @return Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function edit(Account $account)
    {
        $this->authorize('admin.account.edit', $account);

        return view('admin.account.edit', [
            'account' => $account,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateAccount $request
     * @param  Account $account
     * @return Response|array
     */
    public function update(UpdateAccount $request, Account $account)
    {
        // Sanitize input
        $sanitized = $request->validated();

        // Update changed values Account
        $account->update($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/accounts'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/accounts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  DestroyAccount $request
     * @param  Account $account
     * @return Response|bool
     * @throws \Exception
     */
    public function destroy(DestroyAccount $request, Account $account)
    {
        $account->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    }
