<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enroll;
use App\Models\Blog;
use App\Models\Course;
use App\Models\Team;

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
        $blog_count = Blog::count();
        $course_count = Course::count();
        $teams = Team::all();
        return view('dashboard.backEnd.home.index', compact('enroll_count','blog_count','course_count','teams'));
    }

    // enroll_index
    public function enroll_index()
    {
        $enrolls = Enroll::latest()->get();
        return view('dashboard.backEnd.enrollment.index',compact('enrolls'));
    }
    // END
}
