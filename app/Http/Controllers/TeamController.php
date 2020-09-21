<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    /**
     * INDEX
     */
    public function index()
    {
        $teams = Team::all();
        return view('dashboard.backEnd.pages.team', compact('teams'));
    }
    /**
     * STORE
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'photo' => 'required',
        ],
        [
            'slider.required' => 'Slider is required',
            'position.required' => 'Position is required',
            'photo.required' => 'Photo is required',
        ]);

        $team  = new Team();
        $team->name = $request->name;
        $team->position = $request->position;
        
        if ($request->hasFile('photo')) {
            $team->photo = env('APP_URL') . '/' . fileUpload($request->photo,'teams');
        }

        if ($request->has('fb')) {
            $team->fb = $request->fb;
        }else{
            $team->fb = null;
        }

        if ($request->has('tw')) {
            $team->tw = $request->tw;
        }else{
            $team->tw = null;
        }

        if ($request->has('skype')) {
            $team->skype = $request->skype;
        }else{
            $team->skype = null;
        }

        if ($request->has('linked')) {
            $team->linked = $request->linked;
        }else{
            $team->linked = null;
        }

        $team->save();
        return back();
    }

    /**
     * API TEAM
     */
    public function getTeam()
    {
        return Team::all();
    }

    /**
     * Destroy TEAM
     */
    public function destroy($id)
    {
        Team::findOrFail($id)->delete();
        return back();
    }
    //END
}
