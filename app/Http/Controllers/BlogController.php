<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogs()
    {
        return view("blogs");
    }

    public function blog($id)
    {
        return view("blog", ["id" => $id]);
    }
}
