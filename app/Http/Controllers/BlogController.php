<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use Auth;
use Alert;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('dashboard.backEnd.blogs.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog = new Blog();
        $blog->user_id = Auth::id();
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->category_id = $request->category_id;

        if ($request->hasFile('thumbnail')) {
            $blog->thumbnail = env('APP_URL') . '/' . fileUpload($request->thumbnail,'blogs');
        }

        $blog->meta_title = $request->meta_title;
        $blog->meta_description = $request->meta_description;
        $blog->save();
        Alert::toast('Published', 'success');
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $single_blog = Blog::where('id', $id)->first();
        return view('dashboard.backEnd.blogs.edit',compact('categories','single_blog'));
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
        $update_blog = Blog::findOrFail($id);
        $update_blog->user_id = Auth::id();
        $update_blog->title = $request->title;
        $update_blog->description = $request->description;
        $update_blog->category_id = $request->category_id;

        if ($request->hasFile('thumbnail')) {
            $update_blog->thumbnail = env('APP_URL') . '/' . fileUpload($request->thumbnail,'blogs');
        }else {
            $update_blog->thumbnail =  $request->oldThumbnail;
        }

        $update_blog->meta_title = $request->meta_title;
        $update_blog->meta_description = $request->meta_description;
        $update_blog->save();
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
        Blog::findOrFail($id)->delete();
        Alert::toast('Trashed', 'success');
        return back();
    }

    /**
     * ALL BLOGS
     */

     public function blogs()
     {
         $blogs = Blog::latest()->paginate(10);
         return view('dashboard.backEnd.blogs.all',compact('blogs'));
     }

    /**
     * getBlogs
     * @api call
     */
    public function getBlogs()
    {
        return Blog::latest()->with('category')
                    ->with('user')
                    ->get();
        // return Blog::latest()->with('category')
        //             ->with('user')
        //             ->paginate(10);
    }

    /**
     * getBlog
     * @api call
     */
    public function getBlog($id)
    {
        return Blog::where('id',$id)->with('category')
                    ->with('user')
                    ->first();
    }
}
