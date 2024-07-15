<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;

class BlogController extends Controller
{
    //
    public function allBlog()
    {
        $blogs = Blog::orderBy('id', 'desc')->paginate(9);
        return view('admin.all-blog', [
            'blogs' => $blogs,
        ]);
    }
    public function newBlog()
    {
        return view('admin.new-blog');
    }
}
