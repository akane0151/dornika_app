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
Route::get("/account", [App\Http\Controllers\Auth\AdminLoginController::class, 'loginForm']);
Route::post("/account", [App\Http\Controllers\Auth\AdminLoginController::class, 'login'])->name('adminLogin');

Route::get('/reload-captcha', [App\Http\Controllers\CaptchaController::class, 'reloadCaptcha']);
Route::prefix('admin')->middleware("admin")->group(function () {
    Route::get('/logout', [App\Http\Controllers\AdminController::class, 'logout']);
    Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard']);

    Route::get('/states', [App\Http\Controllers\GeoController::class, 'stateList']);
    Route::get('/cities', [App\Http\Controllers\GeoController::class, 'cityList']);
    Route::post('/state', [App\Http\Controllers\GeoController::class, 'getState']);
    Route::post('/city', [App\Http\Controllers\GeoController::class, 'getCity']);
    Route::post('/addState', [App\Http\Controllers\GeoController::class, 'addState']);
    Route::post('/addCity', [App\Http\Controllers\GeoController::class, 'addCity']);
    Route::post('/editState', [App\Http\Controllers\GeoController::class, 'editState']);
    Route::post('/editCity', [App\Http\Controllers\GeoController::class, 'editCity']);
    Route::post('/removeState', [App\Http\Controllers\GeoController::class, 'removeState']);
    Route::post('/removeCity', [App\Http\Controllers\GeoController::class, 'removeCity']);


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
//    Route::get('/permissions', [App\Http\Controllers\PermissionController::class, 'permissions'])->name("permissions");
//    Route::post('/newPerm', [App\Http\Controllers\PermissionController::class, 'newRole'])->name("newPerm");
//    Route::post('/editPerm', [App\Http\Controllers\PermissionController::class, 'editRole'])->name("editPerm");
//    Route::post('/removePerm', [App\Http\Controllers\PermissionController::class, 'removeRole'])->name("removePerm");
});
Route::get('/login',function (){
    return redirect("/");
});
Route::get('/', function (){
    return redirect("/home");
})->name("home");
Route::get('/home', function (){
    return view("home");
});
Route::get('/logout', [App\Http\Controllers\UserController::class, 'logout']);
Route::prefix('user')->middleware("auth")->group(function () {
    Route::get('/verify', [App\Http\Controllers\UserController::class, 'verifyForm']);
    Route::post('/verify', [App\Http\Controllers\UserController::class, 'verifyUser']);
    Route::post('/resendToken', [App\Http\Controllers\TokenController::class, 'resendToken']);
});
Route::prefix('user')->middleware(["auth","verified"])->group(function () {
    Route::get('/panel', [App\Http\Controllers\UserController::class, 'panel']);
    Route::get('/profile', [App\Http\Controllers\UserController::class, 'profile']);
    Route::get('/editProfile', [App\Http\Controllers\UserController::class, 'editProfileForm']);
    Route::post('/editProfile', [App\Http\Controllers\UserController::class, 'editProfile'])->name('editProfile');
});
