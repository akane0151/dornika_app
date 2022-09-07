<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        $user = Auth::guard("admin")->user();
        $userCount = User::all()->count();
        return view("admin.dashboard",["user"=>$user,"userCount"=>$userCount]);
    }

    public function users(){
        $user = Auth::guard("admin")->user();
        return view("admin.users",["user"=>$user]);
    }



    public function logout()
    {
        Auth::guard("admin")->logout();
        return redirect("/");
    }

}
