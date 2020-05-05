<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// https://github.com/xiaomalover/laravel-skeleton

Route::pattern('id', '[0-9]+');

Route::get('', 'WelcomeController@index');

Auth::routes();

Route::namespace('Backend')->group(function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});

Route::namespace('Admin')->prefix('admin')->group(function () {
    Route::resource('role', 'RoleController')
        ->except(['create', 'edit'])
        ->names([
            'index'     => 'admin.role.index',
            'show'      => 'admin.role.show',
            'store'     => 'admin.role.store',
            'update'    => 'admin.role.update',
            'destroy'   => 'admin.role.destroy',
        ]);
});
