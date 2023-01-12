<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Permission;
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
    }

    /**
     * Show the application roles.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function roles()
    {
        $roles = Role::all();
        $perms = Permission::all();
        return view("admin.roles",["roles"=>$roles,"perms"=>$perms]);
    }
    /**
     * Show the application permissions.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function perms()
    {
        $perms = Permission::all();
        return view("admin.permissions",["perms"=>$perms]);
    }
    public function getRole($id){
        $role = Role::where('id',$id)->first();
        $perms = Permission::all();
        if($role){
            return view("admin.editRole",["role"=>$role,"perms"=>$perms]);
        }else{
            return abort(404);
        }
    }
    public function newRoleForm()
    {
        $perms = Permission::all();
        return view("admin.newRole",["perms"=>$perms]);
    }
    public function newRole(Request $request)
    {
        $validateData = $request->validate([
            'name' => ['required', 'string','max:32',"unique:roles"],
        ]);
        try{

                $perms = Permission::all();
                $newPerms = [];
                foreach ($perms as $p){
                    if($request->has($p->name)){
                        $newPerms[] = $p->name;
                    }
                }
                $role = Role::create(["name"=>$request->post("name"),"guard_name"=>"admin"]);
                $role->syncPermissions($newPerms);

                return redirect("/admin/roles");
        }
        catch (\Exception $e){
            return back()->with("error",$e->getMessage());
        }
    }
    public function editRole(Request $request)
    {
        $validateData = $request->validate([
            'id' => ['required', 'integer'],
            'name' => ['required', 'string','max:32',Rule::unique('roles')->ignore(Role::findById($request->post("id")))],
        ]);
        try{


                $role = Role::findById($request->post("id"));
                if($role){
                    $perms = Permission::all();
                    $newPerms = [];
                    foreach ($perms as $p){
                        if($request->has($p->name)){
                            $newPerms[] = $p->name;
                        }
                    }
                    $users = Admin::role($role->name)->get();
                    foreach ($users as $u){
                        $u->syncPermissions($newPerms);
                    }
                    $perms = $role->syncPermissions($newPerms);
                    $role->update(["name"=>$request->post("name")]);
                    return back()
                        ->with('success', 'اطلاعات بروزرسانی شد!');
                }else{
                    return back()->with("error","خطایی رخ داده!");
                }
        }
        catch (\Exception $e){
            return back()->with("error",$e->getMessage());
        }
    }

}
