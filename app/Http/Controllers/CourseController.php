<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Course;
use Alert;

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

        Alert::toast('Published', 'success');

        return back();
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function courses()
    {
        $courses = Course::latest()->paginate(10);
        return view('dashboard.backEnd.courses.all',compact('courses'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $single_course = Course::where('id', $id)->first();
        return view('dashboard.backEnd.courses.edit', compact('single_course'));
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
        $update_course = Course::findOrFail($id);
        $update_course->name = $request->name;
        
        if ($request->hasFile('thumbnail')) {
            $update_course->thumbnail = env('APP_URL') . '/' . fileUpload($request->thumbnail,'courses');
        }else {
            $update_course->thumbnail = $request->oldThumbnail;
        }
        $update_course->short_desc = $request->short_desc;
        $update_course->big_desc = $request->big_desc;
        $update_course->price = $request->price;
        
        if ($request->is_discount === 'on') {
            $update_course->is_discount = true;
            $update_course->discount_price = $request->discount_price;
        }else{
            $update_course->is_discount = false;
            $update_course->discount_price = null;
        }
        
        $update_course->slug = Str::slug($update_course->name);
        $update_course->meta_title = $request->meta_title;
        $update_course->meta_description = $request->meta_description;
        $update_course->save();

        Alert::toast('Updated', 'success');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Course::findOrFail($id)->delete();
        Alert::toast('Trashed', 'success');
        return back();
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
