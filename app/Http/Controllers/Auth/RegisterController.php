<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\MailNotify;
use App\Models\VerifyToken;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Rules\nationalId;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = "/user/verify";

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
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
            'password' => ['required', 'string', 'min:8','max:16', 'confirmed'],
            'state' => ['nullable','string', 'max:64'],
            'city' => ['nullable','string', 'max:64'],
        ]);
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     //* @return \App\Models\User
     */
    protected function create(array $data)
    {
        $avatarName = null;
            if(request()->hasfile('avatar')){

                $avatarName = request()->last_name.'_'.time().'.'.request()->avatar->getClientOriginalExtension();

                request()->avatar->move(public_path('avatars'), $avatarName);

            }
          $user =  User::create([
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'nationalId' => $data['nationalId'],
                'mobileNumber' => $data['mobileNumber'],
                'gender' => $data['gender'],
                'vState' => $data['vState'],
                'birthDate' => $data['birthDate'],
                'avatar' => $avatarName,
                'username' => $data['username'],
                'state' => $data['state'],
                'city' => $data['city'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);
            //token generate for verification
          $token = substr(str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 8);
            //token insert in its table for checking
          VerifyToken::insert([
              "userId"=>$user->id,
              "token"=>$token
          ]);
            //mail to user the token for verification
          Mail::to($user)->send(new MailNotify($token,$user->id));

          return $user;
    }
}
