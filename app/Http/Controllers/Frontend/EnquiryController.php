<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Hash;  //for password encrypt
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Mail\EnquiryMail;           
use App\Mail\GetContactMail;           
use Illuminate\Support\Facades\Mail; 

use App\Models\User;

use Carbon\Carbon;


class EnquiryController extends Controller
{
    public function index(Request $request)
    {
        return view('website.signup');
    }
    
    public function sendContact(Request $request)
    {
         $validator = Validator::make($request->all(), [
                                    'name' => 'required',
                                    'email' => 'required',
                                    'mobile_no' => 'required',
                                    'message' => 'required',
        ],['name'=>'Name required !!']);
     
        if ($validator->passes())
        {
           try
            { 
                $details = [
                    'name'      => $request->name,
                    'email'     => $request->email,
                    'mobile_no' => $request->mobile_no,
                    'message'   => $request->message,
                   ];
             Mail::to(['jeeturay21@gmail.com'])->send(new GetContactMail($details));
                $response = array("err" => 0,"msg" =>"Thank you , I will contact you soon !! " );
               
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
    
    public function sendEnquiry(Request $request)
    {
         $validator = Validator::make($request->all(), [
                                    'ename' => 'required',
                                    'eemail' => 'required',
                                    'emessage' => 'required',
        ],['ename'=>'Name required !!']);
     
        if ($validator->passes())
        {
           try
            { 
               $details = [
                    'name' => $request->ename,
                    'email' => $request->eemail,
                    'enquiry' => $request->emessage,
                   ];
             Mail::to(['jeeturay21@gmail.com'])->send(new EnquiryMail($details));
                $response = array("err" => 0,"msg" =>"Enquiry successfully sent !! " );
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
