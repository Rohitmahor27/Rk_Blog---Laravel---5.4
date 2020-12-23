<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use DB;
class IndexController extends Controller
{
    public function index()
    {
        $profileDetails = DB::table('profile')->where(['id'=>1])->first();
		return view('rk_blog.homepage',compact('profileDetails'));
    }

    public function aboutPage()
    {
    	return view('rk_blog.about');
    }
}
