<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('blog-post');
    }

    public function show()
    {
        return view('blog-post');
    }
}



