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
        return view('dashboard.backEnd.pages.team');
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

        $team->fb = $request->fb;
        $team->tw = $request->tw;
        $team->skype = $request->skype;
        $team->linked = $request->linked;
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
    //END
}
