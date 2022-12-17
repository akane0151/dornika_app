<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use App\Models\VerifyToken;
use App\Rules\nationalId;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;
use Morilog\Jalali\Jalalian;

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
    public function editProfile(UpdateUserRequest $request, User $user){
        $user = Auth::user();
        //validate base on request
        $validated = $request->validated();

        $avatarName = null;
        if(request()->hasfile('avatar')){
            $img = request()->avatar;
            $avatarName = request()->last_name.'_'.time().'.'.request()->avatar->getClientOriginalExtension();
            $imgFile = Image::make($img->getRealPath());
            $imgFile->resize(400, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('avatars400x400').'/'.$avatarName);
            if($user->avatar!=null){
                File::delete(public_path("avatars400x400/".$user->avatar));
            }

        }
        $user->update([
            'first_name' => $request->post("first_name"),
            'last_name' => $request->post("last_name"),
            'nationalId' => $request->post("nationalId"),
            'mobileNumber' => $request->post("mobileNumber"),
            'gender' => $request->post("gender"),
            'vState' => $request->post("vState"),
            'birthDate' => Jalalian::fromFormat('Y/m/d',$request->post('birthDate'))->toCarbon(),
            'avatar' => $avatarName!=null?$avatarName:$user->avatar,
            'username' => $request->post("username"),
            'state' => $request->post("state"),
            'city' => $request->post("city"),
            'email' => $request->post("email"),
        ]);
        return back()
            ->with('success', 'اطلاعات بروزرسانی شد!');
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
