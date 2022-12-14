<?php


namespace App\Http\Traits;


use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

trait SettingTraits
{
    //smtp View
    public function smtpCreate()
    {

        return view('dashboard.backEnd.common.setting.smtp.smtp');
    }

    //there are store the smtp setting get all request,
    // data and overWrite in overWriteEnvFile() in .env file
    public function smtpStore(Request $request)
    {
        foreach ($request->types as $key => $type) {
            overWriteEnvFile($type, $request[$type]);
        }
        return back()->with('success',translate('Mail setup  successfully'));
    }


    /*All site setting here*/
    public function siteSetting(){
        return view('dashboard.backEnd.common.setting.siteSetting');
    }

    /*update the site setting*/
    public  function siteSettingUpdate(Request $request){

        if ($request->hasFile('logo')) {
            $system = Settings::where('name', $request->type_logo)->first();
            $system->value = fileUpload($request->logo,'site');
            $system->save();
        }
        if ($request->hasFile('f_icon')) {
            $system = Settings::where('name', $request->favicon_icon)->first();
            $system->value = fileUpload($request->f_icon,'site');
            $system->save();
        }

        if ($request->hasFile('f_logo')) {
            $system = Settings::where('name', $request->footer_logo)->first();
            $system->value = fileUpload($request->f_logo,'site');
            $system->save();
        }
        if ($request->has('name')) {
            $system = Settings::where('name', $request->type_name)->first();
            $system->value = $request->name;
            $system->save();
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




        return back()->with('success',translate('Site setting is done'));
    }








}
