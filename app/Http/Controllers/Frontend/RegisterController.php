<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Hash;  //for password encrypt
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


use App\Models\User;

use Carbon\Carbon;


class RegisterController extends Controller
{
    public function index(Request $request)
    {
        return view('website.signup');
    }
    
    public function save(Request $request)
    {
        
         $validator = Validator::make($request->all(), [
                                    'name' => 'required',
                                    'email' => 'required|unique:users,email',
                                    'mobile_no' => 'required',
                                    'password' => 'required',
                                    'cpassword' => 'required|same:password',
        ],['cpassword.same'=>'Password must be match','email.unique'=>'User email already exists !!']);
     
        if ($validator->passes())
        {
           try
            { 
               $obj = new User();
               $obj->name        = $request->name;
               $obj->email       = $request->email;
               $obj->mobile_no   = $request->mobile_no;
               $obj->password    = Hash::make($request->password);
               $obj->type        = $request->usertype;
               $obj->created_at  =Carbon::now();
               $obj->save();
               
               
                $response = array("err" => 0,"msg" =>"Register Successfully !! " );
               
            } 
            catch(\Illuminate\Database\QueryException $ex)
            { 
                 $response = array("err" => 2,"msg" => $ex->getMessage() );
            } 
        }
        else
        { 
            $errors = $validator->errors()->messages();
                $response = array("err" => 1,"msg" => $errors );
           
        }
        
        sleep(2);
         return json_encode($response);
    }
    
}
