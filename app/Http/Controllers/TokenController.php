<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Mail\MailNotify;
use App\Models\User;
use App\Models\VerifyToken;
use App\Rules\nationalId;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;

class TokenController extends Controller
{
    //resend token
    public function resendToken(Request $request){
        $validator = \Validator::make($request->all(), [
            'email' => ['required', 'regex:/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}/', 'email', 'max:255'],
        ]);
        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator);
        }
        $user = User::where("id",Auth::user()->id)->first();
        if($user->email==$request->post("email")){
            //token generate for verification
            $token = substr(str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 8);
            //get last token
            $tokenRecord = VerifyToken::where("userId",$user->id)->first();
            //token insert in its table for checking
            $tokenRecord->update([
                "token"=>$token
            ]);
            //mail to user the token for verification
            Mail::to($user)->send(new MailNotify($token,$user->id));
            return response()->json(['success'=>true,"msg"=>$user->id]);
        }else{
            return response()->json(['success'=>false,"error"=>"حساب کاربر نامعتبر، لطفاً با پشتیبانی تماس بگیرید!"]);
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
            'birthDate' => $request->post("birthDate"),
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
