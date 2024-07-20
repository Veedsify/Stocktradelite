<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class BlogController extends Controller
{
    public function blogs()
    {
        $categories = Blog::select('category')->distinct()->orderBy('category')->get();
        $blogs = Blog::where('status', 'published')->paginate(6);
        return view("blogs", [
            "blogs" => $blogs,
            "categories" => $categories,
        ]);
    }

    public function blog($slug)
    {
        if(!$slug){
            return redirect()->route("blogs");
        }
        $blog = Blog::where('slug', $slug)->first();
        if(!$blog){
            return abort(404);
        }
        return view("blog", [
            "blog" => $blog,
        ]);
    }
}
