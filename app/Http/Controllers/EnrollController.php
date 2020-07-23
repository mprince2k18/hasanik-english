<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enroll;
use App\Models\Occupation;
use App\Models\Schedule;
use App\Models\Payment;
use App\Models\FormQuestion;

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
        $questions = FormQuestion::first();
        return view('enroll.index',compact('occupations','schedules','payments','questions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Enroll::create($request->except('_token','website','terms','process'));
        return back();
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
        return view('backend.enrollments.show',compact('student'));
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
      return view('backend.form_question.index',compact('questions'));
    }

    // form_question_store
    public function form_question_store(Request $request)
    {
      FormQuestion::where('id',$request->id)->update($request->except('_token'));
      return back();
    }


}