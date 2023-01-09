<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use App\Rules\nationalId;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Morilog\Jalali\Jalalian;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

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
    public function changePassword(){
        return view("admin.myPassword");
    }
    public function editMyAdminPassword(Request $request){
        $validateData = $request->validate([
            'password' => ['required', 'string','min:8', 'max:32'],
            'password_confirm' => ['required', 'string','min:8', 'max:32'],
        ]);
        try{
            if($request->post('password')==$request->post('password_confirm'))
            {
                $my = Auth::guard('admin')->user();
                if($my){
                    $my->update([
                        'password' => Hash::make($request->post("password")),
                    ]);
                    return back()->with('success', 'اطلاعات بروزرسانی شد!');
                }else{
                    return back()->with("error","خطایی رخ داده!");
                }
            }
            else
            {
                return back()->with("error","رمزعبور با تکرار آن همخوانی ندارد!");
            }
        }
        catch (\Exception $e){
            return back()->with("error",$e->getMessage());
        }
    }
    public function users(){
        $users = User::all();
        return view("admin.users",["users"=>$users]);
    }
    public function getUser($id){
        $user = User::where('id',$id)->first();
        if($user){
            return view("admin.user",["user"=>$user]);
        }else{
            return abort(404);
        }
    }
    public function getUserPassword($id){
        $user = User::where('id',$id)->first();
        if($user){
            return view("admin.userPassword",["user"=>$user]);
        }else{
            return abort(404);
        }
    }
    public function editUser(Request $request){
        try{
            $validateData = $request->validate([
                'id' => ['required', 'integer', 'max:64'],
                'first_name' => ['required', 'string', 'max:64'],
                'last_name' => ['required', 'string', 'max:64'],
                'nationalId' => ['required', 'regex:/^[0-9]{10}$/', new nationalId],
                'mobileNumber' => ['required', 'regex:/^09[0-9]{9}$/'],
                'gender' => ['required', 'string', 'max:6'],
                'vState' => ['nullable', 'string', 'max:3'],
                'birthDate' => ['nullable','regex:/^\d{4}\/(0[1-9]|1[012])\/(0[1-9]|[12][0-9]|3[01])$/', 'max:12'],
                'username' => ['required', 'regex:/^(?=.{8,20}$)(?![_.0-9])(?!.*[_.]{2})[a-zA-Z0-9._]+(?<![_.])$/', 'max:32'],
                'email' => ['required', 'regex:/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}/', 'email', 'max:255'],
                'state' => ['nullable','string', 'max:64'],
                'city' => ['nullable','string', 'max:64'],
            ]);
            $user = User::where('id',$request->post('id'))->first();
            if($user){
                $user->update([
                    'first_name' => $request->post("first_name"),
                    'last_name' => $request->post("last_name"),
                    'nationalId' => $request->post("nationalId"),
                    'mobileNumber' => $request->post("mobileNumber"),
                    'gender' => $request->post("gender"),
                    'vState' => $request->post("vState"),
                    'birthDate' => Jalalian::fromFormat('Y/m/d',$request->post('birthDate'))->toCarbon(),
                    'username' => $request->post("username"),
                    'state' => $request->post("state"),
                    'city' => $request->post("city"),
                    'email' => $request->post("email"),
                ]);
                return back()
                    ->with('success', 'اطلاعات بروزرسانی شد!');
            }else{
                return back()->with("error","خطایی رخ داده!");
            }
        }
        catch (\Exception $e){
            return $e->getMessage();
        }

    }
    public function editUserPassword(Request $request){
        $validateData = $request->validate([
            'id' => ['required', 'integer', 'max:64'],
            'password' => ['required', 'string','min:8', 'max:32'],
            'password_confirm' => ['required', 'string','min:8', 'max:32'],
        ]);
        try{
            if($request->post('password')==$request->post('password_confirm'))
            {
                $user = User::where('id',$request->post('id'))->first();
                if($user){
                    $user->update([
                        'password' => Hash::make($request->post("password")),
                    ]);
                    return back()->with('success', 'اطلاعات بروزرسانی شد!');
                }else{
                    return back()->with("error","خطایی رخ داده!");
                }
            }
            else
            {
                return back()->with("error","رمزعبور با تکرار آن همخوانی ندارد!");
            }
        }
        catch (\Exception $e){
            return back()->with("error",$e->getMessage());
        }
    }
    public function admins(){
        $admins = Admin::all()->except(Auth::guard("admin")->user()->getAuthIdentifier());
        return view("admin.admins",["admins"=>$admins]);
    }
    public function newAdminForm(){
        if(Auth::guard('admin')->user()->hasRole('super-admin')){
            $roles = Role::all();
        }else{
            $roles = Role::all()->except(1);
        }
        return view("admin.newAdmin",["roles"=>$roles]);
    }
    public function editAdminForm($id){
        if(Auth::guard('admin')->user()->hasRole('super-admin')){
            $roles = Role::all();
        }else{
            $roles = Role::all()->except(1);
        }
        $admin = Admin::where('id',$id)->first();
        if($admin){
            return view("admin.editAdmin",["roles"=>$roles,"admin"=>$admin]);
        }else{
            return abort(404);
        }

    }
    public function newAdmin(Request $request)
    {
        $validateData = $request->validate([
            'full_name' => ['required', 'string','max:64'],
            'username' => ['required', 'string','max:64'],
            'email' => ['required', 'email','max:64'],
            'password' => ['required', 'string','min:8','max:16'],
            'role' => ['required', 'string','max:64'],
        ]);
        try{
            $admin = Admin::create(["full_name"=>$request->post("full_name"),
                "username"=>$request->post("username"),
                "email"=>$request->post("email"),
                "password"=>Hash::make($request->post("password"))
            ]);
            $admin->assignRole($request->post("role"));
            $perms = Role::findByName($request->post("role"));
            $admin->syncPermissions($perms);
            return redirect("/admin/admins");
        }
        catch (\Exception $e){
            return back()->with("error",$e->getMessage());
        }
    }
    public function editAdmin(Request $request)
    {
        $validateData = $request->validate([
            'id'=>['required','integer'],
            'full_name' => ['required', 'string','max:64'],
            'username' => ['required', 'string','max:64'],
            'email' => ['required', 'email','max:64'],
            'role' => ['required', 'string','max:64'],
        ]);
        try{
            $admin = Admin::find($request->post('id'));
            if($admin){
                $admin->update(["full_name"=>$request->post("full_name"),
                    "username"=>$request->post("username"),
                    "email"=>$request->post("email"),
                ]);
                $admin->syncRoles([$request->post("role")]);
                $perms = Role::findByName($request->post("role"));
                $admin->syncPermissions($perms);
                return redirect("/admin/admins");
            }else{
                return back()->with("error","اطلاعات کاربر مورد نظر موجود نیست!");
            }

        }
        catch (\Exception $e){
            return back()->with("error",$e->getMessage());
        }
    }
    public function getAdminPassword($id){
        $admin = Admin::where('id',$id)->first();
        if($admin){
            return view("admin.adminPassword",["admin"=>$admin]);
        }else{
            return abort(404);
        }
    }
    public function editAdminPassword(Request $request){
        $validateData = $request->validate([
            'id' => ['required', 'integer', 'max:64'],
            'password' => ['required', 'string','min:8', 'max:32'],
            'password_confirm' => ['required', 'string','min:8', 'max:32'],
        ]);
        try{
            if($request->post('password')==$request->post('password_confirm'))
            {
                $admin = Admin::where('id',$request->post('id'))->first();
                if($admin){
                    $admin->update([
                        'password' => Hash::make($request->post("password")),
                    ]);
                    return back()->with('success', 'اطلاعات بروزرسانی شد!');
                }else{
                    return back()->with("error","خطایی رخ داده!");
                }
            }
            else
            {
                return back()->with("error","رمزعبور با تکرار آن همخوانی ندارد!");
            }
        }
        catch (\Exception $e){
            return back()->with("error",$e->getMessage());
        }
    }
    public function logout()
    {
        Auth::guard("admin")->logout();
        return redirect("/");
    }

}
