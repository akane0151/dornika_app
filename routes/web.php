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

Route::get('/', function () {
    return redirect("/home");
});

//Route::get('/{name}', function ($name) {
//
//    return view('dashboard.'.$name);
//});

Auth::routes();

Route::prefix('admin')->group(function () {
    Route::get('/logout', [App\Http\Controllers\AdminController::class, 'logout']);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
