<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogPost()
    {
    	return view('rk_blog.blog-post');
    }

    public function about()
    {
    	return view('rk_blog.about');
    }

    public function blogList()
    {
    	return view('rk_blog.blog-list');
    }
}
