<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use Alert;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $top_sliders = Slider::latest()->where('type','top')->paginate(10);
        $aside_sliders = Slider::latest()->where('type','aside')->paginate(10);
        $bottom_sliders = Slider::latest()->where('type','bottom')->paginate(10);
        return view('dashboard.backEnd.slider.index',compact('top_sliders','aside_sliders','bottom_sliders'));
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
            'slider' => 'required',
        ],
        [
            'slider.required' => 'Slider is required',
        ]);

        $slider = new Slider();

        if ($request->hasFile('slider')) {
            $slider->slider = fileUpload($request->slider, 'sliders');
        }

        $slider->type = $request->type;
        
        if ($slider->is_active == 'on') {
            $slider->is_active = true;
        }else {
            $slider->is_active = false;
        }

        $slider->save();
        Alert::toast('Published', 'success');
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
        Slider::findOrFail($id)->delete();
        Alert::toast('Trashed', 'success');
        return back();

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
        $slide->save();
        }

        return response(['message' => 'Slider status is changed '], 200);
    }
}
