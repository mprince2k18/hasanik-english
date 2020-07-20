<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{

    /**
     * ABOUT
     */
    
    public function about()
    {
        return view('backend.pages.about');
    }
    
    /**
     * about_store
     */

    public function about_store(Request $request)
    {
        Page::where('type',$request->type)->update($request->except('_token'));
        return back();
        // return $request;
    }
    
    /**
     * mission_store
     */

    public function mission_store(Request $request)
    {
        Page::where('type',$request->type)->update($request->except('_token'));
        return back();
        // return $request;
    }

    /**
     * API
     * ABOUT
     */
    public function getAbout()
    {
        return Page::where('type','about')->first();
    }

    /**
     * API
     * ABOUT
     */
    public function getMission()
    {
        return Page::where('type','mission')->first();
    }

    /**
     * END
     */
}
