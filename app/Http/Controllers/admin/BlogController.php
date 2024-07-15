<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function allBlog(){
        return view('admin.all-blog');
    }
    public function newBlog(){
        return view('admin.new-blog');
    }
}
