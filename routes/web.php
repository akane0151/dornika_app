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
    Route::get('/changePassword', [App\Http\Controllers\AdminController::class, 'changePassword']);
    Route::post('/editMyAdminPassword', [App\Http\Controllers\AdminController::class, 'editMyAdminPassword'])->name("editMyAdminPassword");


    //create-admin and view list of admins
    Route::group(['middleware' => ['permission:create-admin,admin']], function () {
        Route::get('/admins', [App\Http\Controllers\AdminController::class, 'admins']);
        Route::get('/newAdminForm', [App\Http\Controllers\AdminController::class, 'newAdminForm']);
        Route::post('/newAdmin', [App\Http\Controllers\AdminController::class, 'newAdmin'])->name('newAdmin');
    });
    //edit-admin as well as password change
    Route::group(['middleware' => ['permission:edit-admin,admin']], function () {
        Route::get('/edit/{id}', [App\Http\Controllers\AdminController::class, 'editAdminForm']);
        Route::post('/editAdmin', [App\Http\Controllers\AdminController::class, 'editAdmin'])->name('editAdmin');
        Route::get('/changePassword/{id}', [App\Http\Controllers\AdminController::class, 'getAdminPassword']);
        Route::post('/editAdminPassword', [App\Http\Controllers\AdminController::class, 'editAdminPassword'])->name("editAdminPassword");
    });


    //geo manage such as add,edit,remove state and city
    Route::group(['middleware' => ['permission:manage-geo,admin']], function () {
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
    });

    //user actions
    Route::group(['middleware' => ['permission:edit-users,admin']], function () {
        Route::get('/users', [App\Http\Controllers\AdminController::class, 'users'])->name("users");
        Route::get('/user/{id}', [App\Http\Controllers\AdminController::class, 'getUser'])->name("getUser");
        Route::post('/editUser', [App\Http\Controllers\AdminController::class, 'editUser'])->name("editUser");
        Route::get('/passwordUser/{id}', [App\Http\Controllers\AdminController::class, 'getUserPassword'])->name("getUserPassword");
        Route::post('/editUserPassword', [App\Http\Controllers\AdminController::class, 'editUserPassword'])->name("editUserPassword");
    });
        //role user actions
    Route::group(['middleware' => ['permission:edit-roles,admin']], function () {
        Route::get('/roles', [App\Http\Controllers\RoleController::class, 'roles'])->name("roles");
        Route::get('/getRole/{id}', [App\Http\Controllers\RoleController::class, 'getRole'])->name("getRole");
        Route::get('/newRole', [App\Http\Controllers\RoleController::class, 'newRoleForm'])->name("newRoleForm");
        Route::post('/newRole', [App\Http\Controllers\RoleController::class, 'newRole'])->name("newRole");
        Route::post('/editRole', [App\Http\Controllers\RoleController::class, 'editRole'])->name("editRole");
    });
    //posts actions
    Route::group(['middleware' => ['permission:edit-blog-posts,admin']], function () {
        Route::get('/posts', [App\Http\Controllers\PostController::class, 'posts'])->name("posts");
        Route::get('/editPost/{id}', [App\Http\Controllers\PostController::class, 'editPostForm'])->name("editPostForm");
        Route::get('/newPost', [App\Http\Controllers\PostController::class, 'newPostForm'])->middleware("permission:create-blog-posts,admin")->name("newPostForm");
        Route::post('/newPost', [App\Http\Controllers\PostController::class, 'newPost'])->middleware("permission:create-blog-posts,admin")->name("newPost");
        Route::post('/editPost', [App\Http\Controllers\PostController::class, 'editPost'])->name("editPost");
    });
});
Route::get('/login',function (){
    return redirect("/");
});
Route::get('/', function (){
    return redirect("/home");
})->name("home");
Route::get('/home', [App\Http\Controllers\HomeController::class, 'home']);

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
    Route::get('/changePassword', [App\Http\Controllers\UserController::class, 'changePassword']);
    Route::post('/editMyUserPassword', [App\Http\Controllers\UserController::class, 'editMyUserPassword'])->name("editMyUserPassword");

});
