<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::latest()->paginate(10);
        return view('dashboard.backEnd.slider.index',compact('sliders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slider = new Slider();

        if ($request->hasFile('slider')) {
            $slider->slider = fileUpload($request->slider, 'sliders');
        }
        
        if ($slider->is_active == 'on') {
            $slider->is_active = true;
        }else {
            $slider->is_active = false;
        }

        $slider->save();
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function slider_activation(Request $request)
    {
        $slide = Slider::where('id', $request->id)->first();
        if ($slide->is_active == 0) {
        $slide->is_active = 1;
        $slide->save();
        }else {
        $slide->is_active = 0;
        $slide->type = $request->type;
        $slide->save();
        }
        return response(['message' => 'Slider status is changed '], 200);
    }
}
