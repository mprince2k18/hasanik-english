<?php


namespace App\Http\Traits;


use App\Models\GroupHasPermission;
use App\Models\Module;
use App\Models\ModuleHasPermission;
use App\Models\UserHasGroup;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Junges\ACL\Http\Models\Group;
use Junges\ACL\Http\Models\Permission;

trait GroupPermissionTraits
{
    //users
    public function userIndex()
    {
        $users = User::with('groups')->get();
        return view('dashboard.backEnd.common.users.user.index')->with('users', $users);
    }

    public function userCreate()
    {
        $groups = Group::all();
        return view('dashboard.backEnd.common.users.user.create')->with('groups', $groups);
    }

    public function userStore(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $user = new User();
        $user->name = $request->name;
        //slug save
        $slug =Str::slug($request->name);
        $person = User::where('slug',$slug)->get();
        if($person->count() > 0){
            $user->slug = $slug.($person->count()+1);
        }else{
            $user->slug = $slug;
        }
        $user->genders = $request->genders;
        $user->tel_number = $request->genders;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        if ($user->save()) {
            if ($request->group_id != null) {
                $user->assignGroup($request->group_id);
                return redirect()->back()->with('success', 'User Create With Permission Successfully');
            }


            return redirect()->back()->with('success', 'User Create Successfully');
        } else {
            return redirect()->back()->with('failed', 'There are Some Problem Try again ');
        }
    }

    /*user show*/
    public function userShow($id)
    {
        $user = User::where('id', $id)->with('groups')->first();
        return view('backEnd.common.users.user.show', compact('user'));
    }


    /*user banned*/
    public function userBanned($id)
    {
        $user = User::where('id', $id)->first();
        $user->banned == true;
        $user->save();
        return back()->with('success',translate('This user is banned'));
    }

    /*user edit*/
    public function userEdit()
    {

        //change hare for auth user
        $groups = Group::all();
        $user = User::where('id', Auth::id())->with('groups')->first();
        return view('dashboard.backEnd.common.users.user.edit', compact('user', 'groups'));

    }

    public function userUpdate(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);


        try {
            $user =User::where('id',Auth::id())->first();
            $user->name = $request->name;
            $user->email = $request->email;
            if($request->hasFile('avatar')){
                $user->avatar = fileUpload($request->avatar,'user');
            }
            $user->genders = $request->genders;
            $user->tel_number = $request->tel_number;
            $user->password = Hash::make($request->password);
            $user->save();

            //delete old data form group_has_permission table
            UserHasGroup::where('user_id', $request->id)->delete();
            //after delete add new data in group_has_permission table
            foreach ($request->group_id as $id) {
                $gpc = new UserHasGroup();
                $gpc->group_id = $id;
                $gpc->user_id = $request->id;
                $gpc->save();
            }

            if ($user) {
                return redirect()->back()->with('success', 'User update successfully');
            } else {
                return redirect()->back()->with('error', 'There are Some problem try again ');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('failed', 'There are some problem try again ' . $e);
        }

    }


    public function userDestroy($id)
    {
        /*change here auth delete*/
        User::where('id', $id)->delete() && UserHasGroup::where('user_id', $id)->delete();
        return redirect()->back()->with('success', 'User delete successfully');

    }

    //todo::permission crud
    public function permissionIndex()
    {
        $permissions = Permission::all();
        return view('dashboard.backEnd.common.users.permission.index', compact('permissions'));
    }


    public function permissionCreate()
    {
        return view('dashboard.backEnd.common.users.permission.create');
    }


    public function permissionStore(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'unique:permissions', 'max:255'],
        ]);
        $permission = new Permission();
        $permission->name = $request->name;
        $permission->slug = Str::slug($request->name, '-');
        $permission->description = $request->description ?? null;
        $permission->save();
        return redirect()->back()->with('success', 'Permission Create Successfully');

    }


    public function permissionShow($id)
    {
        try {
            $permission = Permission::where('id', $id)->first();
            return view('dashboard.backEnd.common.users.permission.show', compact('permission'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'There are Some Problem Try again ' . $e);
        }
    }


    public function permissionEdit($id)
    {
        try {
            $permission = Permission::where('id', $id)->first();
            return view('dashboard.backEnd.common.users.permission.edit', compact('permission'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'There are Some Problem Try again ' . $e);
        }
    }


    public function permissionUpdate(Request $request)
    {
        Permission::where('id', $request->id)->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name, '-'),
            'description' => $request->description,
        ]);
        return redirect()->back()->with('success', 'Permission Update Successfully');
    }


    public function permissionDestroy($id)
    {
        Permission::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Permission Delete Successfully');
    }
    //end permission

    //group
    public function groupIndex()
    {
        $groups = Group::with('permissions')->get();
        return view('dashboard.backEnd.common.users.group.index', compact('groups'));
    }


    public function groupCreate()
    {
        $modules = Module::with('permissions')->get();

        return view('dashboard.backEnd.common.users.group.create', compact('modules'));
    }


    public function groupStore(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'unique:groups', 'max:255'],
        ]);
        $group = new Group();
        $group->name = $request->name;
        $group->slug = Str::slug($request->name, '-');
        $group->description = $request->description ?? null;
        if ($group->save()) {
            if ($request->permission_id != null) {
                $group->assignPermissions($request->permission_id);
                return redirect()->back()->with('success', 'Group Create With Permission Successfully');
            }
            return redirect()->back()->with('success', 'Group Create Successfully');
        } else {
            return redirect()->back()->with('error', 'There are Some Problem Try again ');
        }

    }


    public function groupShow($id)
    {
        $group = Group::where('id', $id)->with('permissions')->first();
        return view('dashboard.backEnd.common.users.group.show', compact('group'));
    }


    public function groupEdit($id)
    {

        $group = Group::where('id', $id)->with('permissions')->first();
        $modules = Module::with('permissions')->get();
        return view('dashboard.backEnd.common.users.group.edit', compact('modules', 'group'));
    }


    public function groupUpdate(Request $request)
    {

        try {
            $group = Group::where('id', $request->id)->update([
                'name' => $request->name,
                'slug' => Str::slug($request->name, '-'),
                'description' => $request->description,
            ]);
            //delete old data form group_has_permission table
            GroupHasPermission::where('group_id', $request->id)->delete();
            //after delete add new data in group_has_permission table
            foreach ($request->permission_id as $id) {
                $gpc = new GroupHasPermission();
                $gpc->group_id = $request->id;
                $gpc->permission_id = $id;
                $gpc->save();
            }
            if ($group) {
                return redirect()->back()->with('success', 'Group Update Successfully');
            } else {
                return redirect()->back()->with('error', 'There are Some Problem Try again ');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'There are Some Problem Try again ' . $e);
        }
    }


    public function groupDestroy($id)
    {
        if (Group::where('id', $id)->delete() && GroupHasPermission::where('group_id', $id)->delete()) {
            return redirect()->back()->with('success', 'Group Delete Successfully');
        } else {
            return redirect()->back()->with('error', 'There are Some Problem Try again ');
        }
    }
    //end group



    /*permission Module*/
    public function moduleIndex(){
        $modules = Module::with('permissions')->get();

        $permissions =Permission::all();
        return view('dashboard.backEnd.common.users.module.index',compact('modules','permissions'));
    }

    /*permission store*/
    public function moduleStore(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);
        $module =new Module();
        $module->name = $request->name;
        $module->save();
        //save the module ways permission
        foreach ($request->p_id as $id){
            $mp = new ModuleHasPermission();
            $mp->permission_id = $id;
            $mp->module_id = $module->id;
            $mp->save();
        }
        return back()->with('success',translate('Module permission create successfully done'));
    }

    /*module edit view*/
    public function moduleEdit($id){
        $module = Module::with('permissions')->findOrFail($id);
        $permissions = Permission::all();
        return view('dashboard.backend.common.users.module.edit',compact('module','permissions'));
    }

    /*module update*/
    public function moduleUpdate(Request $request){
        $request->validate([
            'id'=>'required',
            'name' => ['required', 'string', 'max:255'],
        ]);
        $module = Module::findOrFail($request->id);
        $module->name = $request->name;
        $module->save();

        //delete the module permission
        ModuleHasPermission::where('module_id',$request->id)->delete();

        //save the module ways permission
        foreach ($request->p_id as $id){
            $mp = new ModuleHasPermission();
            $mp->permission_id = $id;
            $mp->module_id = $module->id;
            $mp->save();
        }

        return back()->with('success',translate('Module permission update successfully done'));
    }

    /*module delete view*/
    public function moduleDestroy($id){
        //delete the module permission
        ModuleHasPermission::where('module_id',$id)->delete();
        //delete the module
        Module::where('id',$id)->delete();

        return back()->with('success',translate('Module permission deleted successfully done'));
    }

}
