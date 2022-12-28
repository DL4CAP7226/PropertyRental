<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;  //for password encrypt
use Auth; 
use App\Models\Admin;
use App\Models\User;
class LoginController extends Controller
{
    public function loginForm()
    {
        return view('login');
    }
    
     public function authentication(Request $request)
    {
        $validator = Validator::make($request->all(), [
                                    'email' => 'required',
                                    'password' => 'required',
        ],['email.required'=>'The email field is required.']);
     
        if ($validator->passes())
        {
            sleep(2);
            $user = User::where('email',$request->email)->first();
            if(!empty($user))
            {
                if(Hash::check($request->password, $user['password']))
                {
                     $credentials=$request->only('email','password');
                    if($user->type == 'owner')
                    {
                        Auth::guard('admin')->login($user);
                          $response = array("err" => 0,"msg" => "Login Success !",'url'=>route('admin_dashboard') );
                          return json_encode($response);
                    }
                    else if($user->type == 'builder')
                    {
                          Auth::guard('vendor')->login($user);
                          $response = array("err" => 0,"msg" => "Login Success !",'url'=>route('vendor_dashboard') );
                          return json_encode($response);
                    }
                    else if($user->type == 'agent')
                    {
                          Auth::guard('vendor')->login($user);
                          $response = array("err" => 0,"msg" => "Login Success !",'url'=>route('vendor_dashboard') );
                          return json_encode($response);
                    }
                    else if($user->type == 'customer')
                    {
                          Auth::guard('customer')->login($user);
                          $response = array("err" => 0,"msg" => "Login Success !",'url'=>route('customer_dashboard') );
                          return json_encode($response);
                    }
                }
                else
                {
                    $errors = $validator->errors()->add('password','Incorrect Password !');
                    $response = array("err" => 1,"msg" => $errors );
                    return json_encode($response);
                }
                
            }
            else
            {
                $errors = $validator->errors()->add('email','Invalid Email Id !');
                $response = array("err" => 1,"msg" => $errors );
                return json_encode($response);
            }
          
        }
        else
        { 
            $errors = $validator->errors()->messages();
                $response = array("err" => 1,"msg" => $errors );
           
        }
         return json_encode($response);
        
    }
    
    
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
         
            return redirect()->route('admin.login')->with('status','Admin Logout Successfully !');
        
    }
    
    
    public function test()
    {
        echo '<pre>';
        print_r(Auth::user());
    }
    
    
    
    
    
    
    
    
}