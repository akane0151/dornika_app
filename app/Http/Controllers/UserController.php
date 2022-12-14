<?php

namespace App\Http\Controllers;

use App\Models\VerifyToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    //show verify form if user still unverified
    public function verifyForm(){
        if(!Auth::user()->verified){
            return view("auth.verification");
        }else{
            return redirect("/user/panel");
        }
    }
    //verify user
    public function verifyUser(Request $request){
        $validator = \Validator::make($request->all(), [
            'token' => ['required', 'string', 'max:8'],

        ]);
        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator);
        }
        $user = Auth::user();
        $original_token = VerifyToken::where("userId",$user->id)->first();

        if(!Auth::user()->verified&&$original_token){
            if($original_token->token==$request->post("token")){
                $user->update([
                    "verified"=>true
                ]);
            }else{
                return back()
                    ->withErrors(['msg'=>"کد تایید نامعتیر!"]);
            }
            return redirect("/user/panel");
        }else{
            return redirect("user/panel");
        }
    }
    //show user panel after login or verification
    public function panel(){
        if(Auth::user()->verified){
            return view("user.controlpanel");
        }
    }
    /**
     * Log out account user.
     *
     * @return \Illuminate\Routing\Redirector
     */
    public function logout()
    {
        Session::flush();

        Auth::logout();

        return redirect('/');
    }
}
