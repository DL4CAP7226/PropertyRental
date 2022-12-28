<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminDashboard extends Controller
{
    public function dashboard()
    {
		//print_r(Auth::user());
        return view('admin/dashboard');
    }
    
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
         
            return redirect()->route('home');
            //return redirect()->route('login')->with('status','Admin Logout Successfully !');
        
    }
    
    
    
    public function test()
    {
        $row = DB::table('categories')->where('id',64)->first();
        
        $property_location_key = $row->property_location_key;
        $arr = explode(',',$property_location_key);
        echo "<pre>";
        print_r($arr);
        
        
    }
    
    public function test_1()
    {
        $row = DB::table('categories')->where('id',64)->first();
        
        $property_location = $row->property_location;
        $arr = explode('----',$property_location);
        foreach($arr as $val)
        {
            echo decrypt($val);
        }
        
    }
    
}
 