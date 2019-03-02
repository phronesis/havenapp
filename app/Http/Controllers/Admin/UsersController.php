<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Admin\User\IndexUser;
use App\Http\Requests\Admin\User\StoreUser;
use App\Http\Requests\Admin\User\UpdateUser;
use App\Http\Requests\Admin\User\DestroyUser;
use Brackets\AdminListing\Facades\AdminListing;
use App\Models\User;

class UsersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param  IndexUser $request
     * @return Response|array
     */
    public function index(IndexUser $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(User::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'firstname', 'lastname', 'email_verified_at', 'email', 'phone', 'birthday', 'chapters_id'],

            // set columns to searchIn
            ['id', 'firstname', 'lastname', 'email', 'phone']
        );

        if ($request->ajax()) {
            return ['data' => $data];
        }

        return view('admin.user.index', ['data' => $data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function create()
    {
        $this->authorize('admin.user.create');

        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreUser $request
     * @return Response|array
     */
    public function store(StoreUser $request)
    {
        // Sanitize input
        $sanitized = $request->validated();

        // Store the User
        $user = User::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/users'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  User $user
     * @return void
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function show(User $user)
    {
        $this->authorize('admin.user.show', $user);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  User $user
     * @return Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function edit(User $user)
    {
        $this->authorize('admin.user.edit', $user);

        return view('admin.user.edit', [
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateUser $request
     * @param  User $user
     * @return Response|array
     */
    public function update(UpdateUser $request, User $user)
    {
        // Sanitize input
        $sanitized = $request->validated();

        // Update changed values User
        $user->update($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/users'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  DestroyUser $request
     * @param  User $user
     * @return Response|bool
     * @throws \Exception
     */
    public function destroy(DestroyUser $request, User $user)
    {
        $user->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    }
