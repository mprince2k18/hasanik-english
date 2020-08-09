<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrgSetting;

class OrgSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.org_settings.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $system = new OrgSetting();
        
        if ($request->hasFile('logo')) {
            $system = OrgSetting::where('type', $request->type_logo)->first();
            $system->value = fileUpload($request->logo,'site');
            $system->save();
        }
        if ($request->has('name')) {
            $system = OrgSetting::where('type', $request->type_name)->first();
            $system->value = $request->name;
            $system->save();
        }
        if ($request->has('footer')) {
            $system = OrgSetting::where('type', $request->type_footer)->first();
            $system->value = $request->footer;
            $system->save();
        }
        if ($request->has('fb')) {
            $system = OrgSetting::where('type', $request->type_fb)->first();
            $system->value = $request->fb;
            $system->save();
        }
        if ($request->has('tw')) {
            $system = OrgSetting::where('type', $request->type_tw)->first();
            $system->value = $request->tw;
            $system->save();
        }
        if ($request->has('google')) {
            $system = OrgSetting::where('type', $request->type_google)->first();
            $system->value = $request->google;
            $system->save();
        }
        if ($request->has('youtube')) {
            $system = OrgSetting::where('type', $request->type_youtube)->first();
            $system->value = $request->youtube;
            $system->save();
        }
        if ($request->has('map')) {
            $system = OrgSetting::where('type', $request->type_map)->first();
            $system->value = $request->map;
            $system->save();
        }
        if ($request->has('address')) {
            $system = OrgSetting::where('type', $request->type_address)->first();
            $system->value = $request->address;
            $system->save();
        }
        if ($request->has('number')) {
            $system = OrgSetting::where('type', $request->type_number)->first();
            $system->value = $request->number;
            $system->save();
        }
        if ($request->has('mail')) {
            $system = OrgSetting::where('type', $request->type_mail)->first();
            $system->value = $request->mail;
            $system->save();
        }
        if ($request->has('f_logo')) {
            $system = OrgSetting::where('type', $request->footer_logo)->first();
            $system->value = fileUpload($request->f_logo,'site');
            $system->save();
        }
        if ($request->has('f_icon')) {
            $system = OrgSetting::where('type', $request->favicon_icon)->first();
            $system->value =fileUpload($request->f_icon,'site');
            $system->save();
        }
        if ($request->has('color')) {
            $system = OrgSetting::where('type', $request->primary_color)->first();
            $system->value = $request->color;
            $system->save();
        }
        if ($request->has('f_color')) {
            $system = OrgSetting::where('type', $request->font_color)->first();
            $system->value = $request->f_color;
            $system->save();
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getOrg()
    {
        return OrgSetting::all();
    }
}
