<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest:admin');
    }

    /**
     * Show the application roles.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function roles()
    {
        $user = Auth::guard("admin")->user();
        $roles = Role::all();
        return view("admin.roles",["roles"=>$roles,"user"=>$user]);
    }

    public function add()
    {
        $user = Auth::guard("admin")->user();
        $users = User::all();
        return view("admin.users",["user"=>$user,"users"=>$users]);
    }

    public function logout()
    {
        Auth::guard("admin")->logout();
        return redirect("/");
    }

}
