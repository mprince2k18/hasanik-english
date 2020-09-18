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
