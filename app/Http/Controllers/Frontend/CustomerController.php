<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\PropertyType;


class CustomerController extends Controller
{
    public function dashboard(Request $request)
    {
       return view('website.customer.dashboard');
    }
    
    public function logout(Request $request)
    {
        Auth::guard('customer')->logout();
        Auth::guard('web')->logout();
        return redirect()->route('customer_signup'); 
    }
    
}
