<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class InstallerController extends Controller
{
    protected function welcome()
    {
        overWriteEnvFile('APP_URL', URL::to('/'));
        return view('dashboard.install.welcome');
    }

    // permission
    protected function permission()
    {
        $permission['curl_enabled'] = function_exists('curl_version');
        $permission['db_file_write_perm'] = is_writable(base_path('.env'));
        return view('dashboard.install.permission', compact('permission'));
    }

    // create
    protected function create()
    {

        return view('dashboard.install.setup');
    }

    //save database information in env file
    //here the get database key or data for env file
    // clear cache
    protected function dbStore(Request $request)
    {

        foreach ($request->types as $type) {
            //here the get database key or data for env file
            overWriteEnvFile($type, $request[$type]);
        }
        return redirect()->route('check.db');

    }

    // checkDbConnection
    protected function checkDbConnection()
    {
        try {
            //check the database connection for import the sql file
            DB::connection()->getPdo();

            return redirect()->route('sql.setup')->with('success', 'Your database connection done successfully');
        } catch (\Exception $e) {
            return redirect()->route('sql.setup')->with('wrong', 'Could not connect to the database. Please check your configuration');

        }
    }


    //import sql page
    protected function importSql()
    {
        return view('dashboard.install.importSql');
    }

    //import the sql file in database or goto organization setup page
    protected function sqlUpload()
    {
        try {
            //import the sql file in database
            $sql_path = base_path('install.sql');
            DB::unprepared(file_get_contents($sql_path)); // uploaded sql
            return view('dashboard.install.setupOrg');
        } catch (\Exception $e) {
            die("There are some problems, Please check your configuration. error:" . $e);
        }
    }

    //store the organization details in db
    protected function orgSetup(Request $request)
    {
        if ($request->hasFile('logo')) {
            $system = Settings::where('name', $request->type_logo)->first();
            $system->value = fileUpload($request->logo, 'site');
            $system->save();
        }
        if ($request->has('f_logo')) {
            $system = Settings::where('name', $request->footer_logo)->first();
            $system->value = fileUpload($request->f_logo,'site');
            $system->save();
        }
        if ($request->has('f_icon')) {
            $system = Settings::where('name', $request->favicon_icon)->first();
            $system->value =fileUpload($request->f_icon,'site');
            $system->save();
        }
        if ($request->has('name')) {
            $system = Settings::where('name', $request->type_name)->first();
            $system->value = $request->name;
            $system->save();
            overWriteEnvFile('APP_NAME', $request->name);
        }
        if ($request->has('footer')) {
            $system = Settings::where('name', $request->type_footer)->first();
            $system->value = $request->footer;
            $system->save();
        }
        if ($request->has('fb')) {
            $system = Settings::where('name', $request->type_fb)->first();
            $system->value = $request->fb;
            $system->save();
        }
        if ($request->has('tw')) {
            $system = Settings::where('name', $request->type_tw)->first();
            $system->value = $request->tw;
            $system->save();
        }
        if ($request->has('google')) {
            $system = Settings::where('name', $request->type_google)->first();
            $system->value = $request->google;
            $system->save();
        }
        if ($request->has('address')) {
            $system = Settings::where('name', $request->type_address)->first();
            $system->value = $request->address;
            $system->save();
        }
        if ($request->has('number')) {
            $system = Settings::where('name', $request->type_number)->first();
            $system->value = $request->number;
            $system->save();
        }
        if ($request->has('mail')) {
            $system = Settings::where('name', $request->type_mail)->first();
            $system->value = $request->mail;
            $system->save();
        }

        return redirect()->route('admin.create');
    }

    //admin create page
    protected function adminCreate()
    {
        return view('dashboard.install.user');
    }

    //create a admin with full access
    //save and add the super access permission
    // replace the RouteService provider when installation is done
    //return the dashboard when all is done
    protected function adminStore(Request $request)
    {
        $request->validate([
            'name'      => ['required', 'string', 'max:255', 'unique:users'],
            'email'     => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'  => ['required', 'string', 'min:8', 'confirmed'],
        ],
            [
                'name.required' => translate('Name is required'),
                'name.unique' => translate('Name already exist'),
                'email.required' => translate('Email is required'),
                'email.email' => translate('invalid email'),
                'email.unique' => translate('Email already exist'),
                'password.unique' => translate('Password is required'),
                'password.min' => translate('Password must be minimum 8 characters'),
                'password.confirmed' => translate('Password did not matched'),
            ]);
        //create admin and hash password
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        //slug save
        $user->slug =Str::slug($request->name);
        if ($user->save()) {
            overWriteEnvFile('APP_INSTALL', 'YES');
            //replace the env file
            $se =Str::before(env('APP_URL'),'/public');
            overWriteEnvFile('APP_URL',$se);
            return view('dashboard.install.done');
        } else {
            return redirect()->back()->with('failed', translate('There are some problem try again'));
        }
    }
}
