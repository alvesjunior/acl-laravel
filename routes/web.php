<?php

use Illuminate\Support\Facades\Gate;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
return auth()->user()->load('roles.permissions');
    $user_permissions = auth()->user()->load('roles.permissions')->roles->transform(function ($role) {
        return $role->permissions->transform(function ($permission) {
            return $permission->name;
        });
    });
    dd($user_permissions->first()->toArray());


    if (!Gate::allows('realizar-venda')) {
        abort(403);
    }
    return view('dashboard');
})->name('dashboard');
