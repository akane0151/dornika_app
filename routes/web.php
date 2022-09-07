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



//Route::get('/{name}', function ($name) {
//
//    return view('dashboard.'.$name);
//});

Auth::routes();

Route::prefix('admin')->middleware("admin")->group(function () {
    Route::get('/logout', [App\Http\Controllers\AdminController::class, 'logout']);
    Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard']);
    //admin user actions
    Route::get('/users', [App\Http\Controllers\AdminController::class, 'users']);
    Route::post('/newUser', [App\Http\Controllers\AdminController::class, 'newUser']);
    Route::post('/editUser', [App\Http\Controllers\AdminController::class, 'editUser']);
    Route::post('/removeUser', [App\Http\Controllers\AdminController::class, 'removeUser']);
});

Route::get('/', function (){
    return redirect("/login");
});
