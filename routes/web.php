<?php

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

Auth::routes();

Route::prefix('admin')->middleware("admin")->group(function () {
    Route::get('/logout', [App\Http\Controllers\AdminController::class, 'logout']);
    Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard']);
    //admin user actions
    Route::get('/users', [App\Http\Controllers\AdminController::class, 'users'])->name("users");
    Route::post('/newUser', [App\Http\Controllers\AdminController::class, 'newUser'])->name("newUser");
    Route::post('/editUser', [App\Http\Controllers\AdminController::class, 'editUser'])->name("editUser");
    Route::post('/removeUser', [App\Http\Controllers\AdminController::class, 'removeUser'])->name("removeUser");
    //role user actions
    Route::get('/roles', [App\Http\Controllers\RoleController::class, 'roles'])->name("roles");
    Route::post('/newRole', [App\Http\Controllers\RoleController::class, 'newRole'])->name("newRole");
    Route::post('/editRole', [App\Http\Controllers\RoleController::class, 'editRole'])->name("editRole");
    Route::post('/removeRole', [App\Http\Controllers\RoleController::class, 'removeRole'])->name("removeRole");
    //role user actions
    Route::get('/permissions', [App\Http\Controllers\PermissionController::class, 'permissions'])->name("permissions");
    Route::post('/newPerm', [App\Http\Controllers\PermissionController::class, 'newRole'])->name("newPerm");
    Route::post('/editPerm', [App\Http\Controllers\PermissionController::class, 'editRole'])->name("editPerm");
    Route::post('/removePerm', [App\Http\Controllers\PermissionController::class, 'removeRole'])->name("removePerm");
});

Route::get('/', function (){
    return redirect("/home");
});
Route::get('/home', function (){
    return view("home");
});
Route::get('/logout', [App\Http\Controllers\UserController::class, 'logout']);
Route::prefix('user')->middleware("auth")->group(function () {
    Route::get('/verify', [App\Http\Controllers\UserController::class, 'verifyForm']);
    Route::post('/verify', [App\Http\Controllers\UserController::class, 'verifyUser']);
    Route::get('/panel', [App\Http\Controllers\UserController::class, 'panel']);

});
