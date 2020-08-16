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
        

        /**
         * Payment
         */
      $jan   = Enroll::select('course_price')->whereBetween('created_at',['2020-01-01 00:00:00','2020-01-31 00:00:00'])->pluck('course_price')->sum();
      $feb   = Enroll::select('course_price')->whereBetween('created_at',['2020-02-01 00:00:00','2020-02-31 00:00:00'])->pluck('course_price')->sum();
      $mar   = Enroll::select('course_price')->whereBetween('created_at',['2020-03-01 00:00:00','2020-03-31 00:00:00'])->pluck('course_price')->sum();
      $apr   = Enroll::select('course_price')->whereBetween('created_at',['2020-04-01 00:00:00','2020-04-31 00:00:00'])->pluck('course_price')->sum();
      $may   = Enroll::select('course_price')->whereBetween('created_at',['2020-05-01 00:00:00','2020-05-31 00:00:00'])->pluck('course_price')->sum();
      $june  = Enroll::select('course_price')->whereBetween('created_at',['2020-06-01 00:00:00','2020-06-31 00:00:00'])->pluck('course_price')->sum();
      $july  = Enroll::select('course_price')->whereBetween('created_at',['2020-07-01 00:00:00','2020-07-31 00:00:00'])->pluck('course_price')->sum();
      $aug   = Enroll::select('course_price')->whereBetween('created_at',['2020-08-01 00:00:00','2020-08-31 00:00:00'])->pluck('course_price')->sum();
      $sep   = Enroll::select('course_price')->whereBetween('created_at',['2020-09-01 00:00:00','2020-09-31 00:00:00'])->pluck('course_price')->sum();
      $oct   = Enroll::select('course_price')->whereBetween('created_at',['2020-10-01 00:00:00','2020-10-31 00:00:00'])->pluck('course_price')->sum();
      $nov   = Enroll::select('course_price')->whereBetween('created_at',['2020-11-01 00:00:00','2020-11-31 00:00:00'])->pluck('course_price')->sum();
      $dec   = Enroll::select('course_price')->whereBetween('created_at',['2020-12-01 00:00:00','2020-12-31 00:00:00'])->pluck('course_price')->sum();
        /**
         * Payment:END
         */


        return view('dashboard.backEnd.home.index', compact(
            'enroll_count',
            'blog_count',
            'course_count',
            'teams',
            'jan',
            'feb',
            'mar',
            'apr',
            'may',
            'june',
            'july',
            'aug',
            'sep',
            'oct',
            'nov',
            'dec'
            ));
    }

    // enroll_index
    public function enroll_index()
    {
        $enrolls = Enroll::latest()->get();
        return view('dashboard.backEnd.enrollment.index',compact('enrolls'));
    }

    // enrollment.destroy
    public function destroy($id)
    {
        Enroll::findOrFail($id);
        Alert::toast('Trashed','success');
        return back();
    }
    // END
}
