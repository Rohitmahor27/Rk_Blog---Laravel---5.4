<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use DB;

class AdminController extends Controller
{
     public function login(Request $request)
    {
    	if($request->isMethod('post'))
    	{
    		$data = $request->Input();
    		if(Auth::attempt([
    			'email'    =>$data['username'],
    			'password' =>$data['password'],
    			]))
    		{
    			return redirect('admin/dashboard');
    		}
    		else
    		{
    			return redirect('/admin')->with('flash_message_error','Invalid Username Or Paasword');
    		}
    	}
    	return view('admin.admin_login');
    }

    public function dashboard()
    {
    	return view('admin.dashboard');
    }

    public function logout()
    {
    	Session::flush();
    	return redirect('/admin')->with('flash_message_success','loged out Successfully');
    }

    public function profile(Request $request, $id=null)
    {
        if($request->isMethod('post'))
        {
            $data = $request->all();
            // dd($data);

            //-------------------------------------------------------------------------
            if($request->hasFile('image'))
            {
                $file = $request->file('image');
                if($file->isValid())
                {
                    $extension = $file->getClientOriginalExtension();
                    $filename = rand(111,9999).'.'.$extension;
                    $path = 'upload/profile/';

                    $file->move($path, $filename);
                }
            }
            else if(!empty($data['current_image']))
            {
                $filename = $data['current_image'];
            }
            else
            {
                $filename = '';
            }
            //----------------------------------------------------------------------------

            DB::table('profile')->where('id',$id)->update([
                                        'title'      =>$data['title'],
                                        'description'=>$data['description'],
                                        'facebook'   =>$data['facebook'],
                                        'instagram'  =>$data['instagram'],
                                        'twitter'    =>$data['twitter'],
                                        'linkedin'   =>$data['linkedin'],
                                        'github'     =>$data['github'],
                                        'image'      =>$filename
            ]);
            return redirect()->back()->with('status','Profile has been Updated !');
        }   

        $profileDetails = DB::table('profile')->where(['id'=>1])->first();
        return view('admin.admin_profile')->with(compact('profileDetails'));
    }
}
