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

    public function blog($id)
    {
        return view("blog", ["id" => $id]);
    }
}
