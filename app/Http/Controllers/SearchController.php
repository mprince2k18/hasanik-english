<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $search_posts = Blog::where('title', 'LIKE', '%'.$request->post_title.'%')
                            ->get();
        return view('search.search_post', compact('search_posts'));
    }
}
