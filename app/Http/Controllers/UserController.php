<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\VerifyToken;
use App\Rules\nationalId;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

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
            return redirect("/");
        }else{
            return redirect("/");
        }
    }
    //show user panel after login or verification
    public function panel(){
        if(Auth::user()->verified){
            return view("user.controlpanel");
        }
    }
    //show profile
    public function profile(){
        if(Auth::user()->verified){
            return view("user.profile");
        }else{
            return view("auth.verification");
        }
    }
    //show edit profile form
    public function editProfileForm(){
            return view("user.editProfile");
    }
    //edit user personal information
    public function editProfile(Request $request){
        $validator = \Validator::make($request->all(), [
            'id' => ['required', 'integer', 'max:64'],
            'first_name' => ['required', 'string', 'max:64'],
            'last_name' => ['required', 'string', 'max:64'],
            'nationalId' => ['required', 'regex:/^[0-9]{10}$/', new nationalId,'unique:users'],
            'mobileNumber' => ['required', 'regex:/^09[0-9]{9}$/'],
            'gender' => ['required', 'string', 'max:6'],
            'vState' => ['nullable', 'string', 'max:3'],
            'birthDate' => ['nullable','string', 'max:12'],
            'avatar' => [ 'nullable','image','mimes:jpeg,jpg', 'max:200'],
            'username' => ['required', 'regex:/^[a-zA-Z]/', 'max:32','unique:users'],
            'email' => ['required', 'regex:/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}/', 'email', 'max:255', 'unique:users'],
            //'password' => ['required', 'string', 'min:8','max:16', 'confirmed'],
            'state' => ['nullable','string', 'max:64'],
            'city' => ['nullable','string', 'max:64'],

        ]);
        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator);
        }

        $user = User::where("id",$request->post("id"))->first();

        $avatarName = null;
        if(request()->hasfile('avatar')){
            $img = request()->avatar;
            $avatarName = request()->last_name.'_'.time().'.'.request()->avatar->getClientOriginalExtension();
            $imgFile = Image::make($img->getRealPath());
            $imgFile->resize(400, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('avatars400x400').'/'.$avatarName);
            //request()->avatar->move(public_path('avatars'), $avatarName);

        }
        $user->update([
            'first_name' => $request->post("first_name"),
            'last_name' => $request->post("last_name"),
            'nationalId' => $request->post("nationalId"),
            'mobileNumber' => $request->post("mobileNumber"),
            'gender' => $request->post("gender"),
            'vState' => $request->post("vState"),
            'birthDate' => $request->post("birthDate"),
            'avatar' => $avatarName!=null?$avatarName:$user->avatar,
            'username' => $request->post("username"),
            'state' => $request->post("state"),
            'city' => $request->post("city"),
            'email' => $request->post("email"),
        ]);
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
