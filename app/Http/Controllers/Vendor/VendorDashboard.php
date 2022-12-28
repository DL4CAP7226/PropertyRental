<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VendorDashboard extends Controller
{
    public function dashboard()
    {
		//print_r(Auth::user());
        return view('vendor/dashboard');
    }
    
    public function logout(Request $request)
    {
        Auth::guard('vendor')->logout();
            return redirect()->route('login');
            //return redirect()->route('login')->with('status','Admin Logout Successfully !');
        
    }
    
}
 