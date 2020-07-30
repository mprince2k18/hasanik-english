<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Course;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.backEnd.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course = new Course();
        $course->name = $request->name;
        
        if ($request->hasFile('thumbnail')) {
            $course->thumbnail = env('APP_URL') . '/' . fileUpload($request->thumbnail,'courses');
        }
        $course->short_desc = $request->short_desc;
        $course->big_desc = $request->big_desc;
        $course->price = $request->price;
        
        if ($request->is_discount === 'on') {
            $course->is_discount = true;
            $course->discount_price = $request->discount_price;
        }else{
            $course->is_discount = false;
            $course->discount_price = null;
        }
        
        $course->slug = Str::slug($course->name);
        $course->meta_title = $request->meta_title;
        $course->meta_description = $request->meta_description;
        $course->save();

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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * getCourses
     */
    public function getCourses()
    {
        return Course::latest()->paginate(10);
    }

    /**
     * getCourse
     */
    public function getCourse($slug)
    {
        return Course::where('slug',$slug)->first();
    }
}
