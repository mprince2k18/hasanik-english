<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enroll;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    // index
    public function index()
    {
        $enroll_count = Enroll::count();
        $male = Enroll::where('gender','Male')->count();
        $female = Enroll::where('gender','Female')->count();
        return view('backend.dashboard.index',compact('enroll_count','male','female'));
    }

    // enroll_index
    public function enroll_index()
    {
        $enrolls = Enroll::latest()->get();
        return view('backend.enrollments.index',compact('enrolls'));
    }
    // END
}
