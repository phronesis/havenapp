<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(function () {
    Route::get('/admin/admin-users',                            'Admin\AdminUsersController@index');
    Route::get('/admin/admin-users/create',                     'Admin\AdminUsersController@create');
    Route::post('/admin/admin-users',                           'Admin\AdminUsersController@store');
    Route::get('/admin/admin-users/{adminUser}/edit',           'Admin\AdminUsersController@edit')->name('admin/admin-users/edit');
    Route::post('/admin/admin-users/{adminUser}',               'Admin\AdminUsersController@update')->name('admin/admin-users/update');
    Route::delete('/admin/admin-users/{adminUser}',             'Admin\AdminUsersController@destroy')->name('admin/admin-users/destroy');
    Route::get('/admin/admin-users/{adminUser}/resend-activation','Admin\AdminUsersController@resendActivationEmail')->name('admin/admin-users/resendActivationEmail');
});

/* Auto-generated profile routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(function () {
    Route::get('/admin/profile',                                'Admin\ProfileController@editProfile');
    Route::post('/admin/profile',                               'Admin\ProfileController@updateProfile');
    Route::get('/admin/password',                               'Admin\ProfileController@editPassword');
    Route::post('/admin/password',                              'Admin\ProfileController@updatePassword');
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(function () {
    Route::get('/admin/categories',                             'Admin\CategoriesController@index');
    Route::get('/admin/categories/create',                      'Admin\CategoriesController@create');
    Route::post('/admin/categories',                            'Admin\CategoriesController@store');
    Route::get('/admin/categories/{category}/edit',             'Admin\CategoriesController@edit')->name('admin/categories/edit');
    Route::post('/admin/categories/{category}',                 'Admin\CategoriesController@update')->name('admin/categories/update');
    Route::delete('/admin/categories/{category}',               'Admin\CategoriesController@destroy')->name('admin/categories/destroy');
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(function () {
    Route::get('/admin/users',                                  'Admin\UsersController@index');
    Route::get('/admin/users/create',                           'Admin\UsersController@create');
    Route::post('/admin/users',                                 'Admin\UsersController@store');
    Route::get('/admin/users/{user}/edit',                      'Admin\UsersController@edit')->name('admin/users/edit');
    Route::post('/admin/users/{user}',                          'Admin\UsersController@update')->name('admin/users/update');
    Route::delete('/admin/users/{user}',                        'Admin\UsersController@destroy')->name('admin/users/destroy');
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(function () {
    Route::get('/admin/chapters',                               'Admin\ChaptersController@index');
    Route::get('/admin/chapters/create',                        'Admin\ChaptersController@create');
    Route::post('/admin/chapters',                              'Admin\ChaptersController@store');
    Route::get('/admin/chapters/{chapter}/edit',                'Admin\ChaptersController@edit')->name('admin/chapters/edit');
    Route::post('/admin/chapters/{chapter}',                    'Admin\ChaptersController@update')->name('admin/chapters/update');
    Route::delete('/admin/chapters/{chapter}',                  'Admin\ChaptersController@destroy')->name('admin/chapters/destroy');
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(function () {
    Route::get('/admin/giving-channels',                        'Admin\GivingChannelsController@index');
    Route::get('/admin/giving-channels/create',                 'Admin\GivingChannelsController@create');
    Route::post('/admin/giving-channels',                       'Admin\GivingChannelsController@store');
    Route::get('/admin/giving-channels/{givingChannel}/edit',   'Admin\GivingChannelsController@edit')->name('admin/giving-channels/edit');
    Route::post('/admin/giving-channels/{givingChannel}',       'Admin\GivingChannelsController@update')->name('admin/giving-channels/update');
    Route::delete('/admin/giving-channels/{givingChannel}',     'Admin\GivingChannelsController@destroy')->name('admin/giving-channels/destroy');
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(function () {
    Route::get('/admin/giving-records',                         'Admin\GivingRecordsController@index');
    Route::get('/admin/giving-records/create',                  'Admin\GivingRecordsController@create');
    Route::post('/admin/giving-records',                        'Admin\GivingRecordsController@store');
    Route::get('/admin/giving-records/{givingRecord}/edit',     'Admin\GivingRecordsController@edit')->name('admin/giving-records/edit');
    Route::post('/admin/giving-records/{givingRecord}',         'Admin\GivingRecordsController@update')->name('admin/giving-records/update');
    Route::delete('/admin/giving-records/{givingRecord}',       'Admin\GivingRecordsController@destroy')->name('admin/giving-records/destroy');
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(function () {
    Route::get('/admin/account-types',                          'Admin\AccountTypesController@index');
    Route::get('/admin/account-types/create',                   'Admin\AccountTypesController@create');
    Route::post('/admin/account-types',                         'Admin\AccountTypesController@store');
    Route::get('/admin/account-types/{accountType}/edit',       'Admin\AccountTypesController@edit')->name('admin/account-types/edit');
    Route::post('/admin/account-types/{accountType}',           'Admin\AccountTypesController@update')->name('admin/account-types/update');
    Route::delete('/admin/account-types/{accountType}',         'Admin\AccountTypesController@destroy')->name('admin/account-types/destroy');
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(function () {
    Route::get('/admin/accounts',                               'Admin\AccountsController@index');
    Route::get('/admin/accounts/create',                        'Admin\AccountsController@create');
    Route::post('/admin/accounts',                              'Admin\AccountsController@store');
    Route::get('/admin/accounts/{account}/edit',                'Admin\AccountsController@edit')->name('admin/accounts/edit');
    Route::post('/admin/accounts/{account}',                    'Admin\AccountsController@update')->name('admin/accounts/update');
    Route::delete('/admin/accounts/{account}',                  'Admin\AccountsController@destroy')->name('admin/accounts/destroy');
});