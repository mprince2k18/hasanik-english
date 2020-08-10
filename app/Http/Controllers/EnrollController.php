<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enroll;
use App\Models\Occupation;
use App\Models\Schedule;
use App\Models\Payment;
use App\Models\FormQuestion;
use App\Models\FormHelp;
use App\Models\Course;
use Mail;
use Alert;
use App\Mail\Enrollmail;

class EnrollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $occupations = Occupation::all();
        $schedules = Schedule::all();
        $payments = Payment::all();
        $courses = Course::all();
        $questions = FormQuestion::first();
        $tips = FormHelp::first();
        return view('enroll.index',compact('occupations','schedules','payments','questions','courses','tips'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {

      $request->validate([
            'name' => 'required',
            'email' => 'required',
        ],
        [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
        ]);

        
        $check_exist = Enroll::where('email',$request->email)
                              ->where('phone',$request->phone)
                              ->where('course_id',$request->course_id)
                              ->first();

        if (isset($check_exist)) {
          Alert::success('Exist','You Already Enrolled This Course.');
          return back();
        }else {
          Enroll::create($request->except('_token','website','terms','process'));

          $name = $request->name;
          $email = $request->email;
          Mail::to($email)->send(new Enrollmail($name));

          Alert::success('success','DONE');
          return redirect()->route('enroll.success');
        }

    }

    /**
     * SUCCESS
     */

    public function success()
    {
        return view('enroll.success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Enroll::findOrFail($id);
        return view('dashboard.backEnd.enrollment.show',compact('student'));
    }

    // form_data
    public function form_data()
    {
        $occupations = Occupation::all();
        $schedules = Schedule::all();
        $payments = Payment::all();
        return view('backend.form_data.index',compact('occupations','schedules','payments'));
    }

    // occupation_store
    public function occupation_store(Request $request)
    {
      Occupation::create($request->except('_token'));
      return back();
    }

    // occupation_store
    public function schedule_store(Request $request)
    {
      Schedule::create($request->except('_token'));
      return back();
    }

    // payment_store
    public function payment_store(Request $request)
    {
      Payment::create($request->except('_token'));
      return back();
    }

    // form_question
    public function form_question()
    {
      $questions = FormQuestion::first();
      return view('dashboard.backEnd.enrollment.enroll_form',compact('questions'));
    }
    
    // form_question_store
    public function form_question_store(Request $request)
    {
      FormQuestion::where('id',$request->id)->update($request->except('_token'));
      return back();
    }
    
    // form_help
    public function form_help()
    {
      $help_questions = FormHelp::first();
      $questions = FormQuestion::first();
      return view('dashboard.backEnd.enrollment.form_help',compact('help_questions','questions'));
    }
    
    // form_help_store
    public function form_help_store(Request $request)
    {
      FormHelp::where('id',$request->id)->update($request->except('_token'));
      return back();
    }

    /**
     * getCoursePrice
     */

     public function getCoursePrice(Request $request)
    {
        $course_price = Course::where('id', $request->course_id)->first();

        return response()->json($course_price, 200);
    }

}
