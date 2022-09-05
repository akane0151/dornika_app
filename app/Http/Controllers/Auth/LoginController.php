<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected function redirectTo(){
        if(Auth::check()&&Auth::guard()=="admin"){
            return "/admin/dahsboard";
        }elseif (Auth::check()&&Auth::guard()=="web"){
            return "/user/panel";
        }
    }

    public function username()
    {
        return 'nationalId';
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|string|min:10|max:10',
            'password' => 'required|min:6|max:16'
        ]);
        if (Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password], $request->get('remember'))){
            return redirect()->intended('/admin/dashboard');
        } elseif (Auth::guard('web')->attempt(['username' => $request->username, 'password' => $request->password], $request->get('remember'))){
            return redirect()->intended('/user/panel');
        }else {
            return back()->withInput($request->only('username', 'remember'));
        }
    }
}
