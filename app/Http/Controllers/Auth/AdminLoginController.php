<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
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
        return "admin/dashboard";
    }

    public function username()
    {
        return 'username';
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function loginForm()
    {
        return view("auth.adminlogin");
    }
    public function login(Request $request)
    {
//        $this->validate($request, [
//            'username' => 'required|string|min:6|max:32',
//            'password' => 'required|min:8|max:16'
//        ]);

        $validator = \Validator::make($request->all(), [
            'username' => ['required', 'string','min:6', 'max:32'],
            'password' => ['required', 'string','min:8', 'max:16']

        ]);
        if ($validator->fails())
        {
            return response()->json(['success'=>false,"error"=>"اطلاعات نامعتبر!"]);
        }
        if (Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password], $request->get('remember'))){
            return redirect()->intended('/admin/dashboard');
            //return response()->json(['success'=>true]);
        }else {
            return back()->withInput($request->only('username', 'remember'));
            //return response()->json(['success'=>false,"error"=>"اطلاعات نا معتبر!"]);
        }
    }

}
