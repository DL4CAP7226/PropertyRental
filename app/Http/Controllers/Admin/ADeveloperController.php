<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Developer;
use App\Models\DeveloperProject;
use Image;
use DB;
class ADeveloperController extends Controller
{
    public function form()
    {
        return view('admin.developer.form');
    }
    
    public function create(Request $request)
    {
        sleep(1); 
        $validator = Validator::make($request->all(), 
             [
            'd_name' => 'required',
            'd_contact' => 'required',
            'dp_name' => 'required',
            'dc_name' => 'required',
            'dp_location' => 'required',
            'dp_type' => 'required',
            'dp_price' => 'required',
            'd_marketed_by' => 'required',
            'logo' => 'required',
            'display_location' => 'required',
            'image' => 'required',
             ],
             ['type.required'=>'Choose property type.']);
     
        if ($validator->passes())
        {
            
            DB::beginTransaction();
            try 
            {
                    $developerobj                   = new Developer();
                    $developerobj->d_name           = $request->d_name;
                    $developerobj->d_contact        = $request->d_contact;
                    $developerobj->dp_name          = $request->dp_name;
                    $developerobj->dc_name          = $request->dc_name;
                    $developerobj->dp_location      = $request->dp_location;
                    $developerobj->dp_type          = $request->dp_type;
                    $developerobj->dp_price         = $request->dp_price;
                    $developerobj->d_marketed_by    = $request->d_marketed_by;
                    $developerobj->display_location = $request->display_location;
                
                if ($request->hasFile('logo'))
                {
                    $imageName = time().'.'.$request->logo->extension();
                    $request->logo->move(public_path('developer_project_img/logo'), $imageName);
                    $developerobj->logo = $imageName;
                }
                $developerobj->save();
        
                     $items = [];
                    if($request->hasfile('image'))
                     {
                        foreach($request->file('image') as $key=>$file)
                        {
                            $originalPath = public_path('/developer_project_img/original');
                            $compressPath = public_path('/developer_project_img/compress');

                            $name = time().$key.'.'.$file->extension();

                            $img = Image::make($file->getRealPath());
                            $img->resize(2272, 1704, function ($constraint) {
                                        $constraint->aspectRatio();
                                    })->save($compressPath.'/'.$name);

                              $file->move($originalPath, $name); 


                             $data=[
                                'developer_id'=>$developerobj->id,
                                'image'=>$name,
                               ];
                         array_push($items,$data); 
                        }
                         DB::table('developer_project_images')->insert($items);
                     }
                DB::commit();
                // all good
            } 
            catch (\Exception $e) 
            {
                DB::rollback();
                // something went wrong
                $response = array("err" => 0,"msg" => "Oops something went wrong !");
                return json_encode($response); 
            }
               
            $response = array("err" => 0,"msg" => "Developer details successfully saved !");
               return json_encode($response); 
        }
        else
        { 
            $errors = $validator->errors()->messages();
                $response = array("err" => 1,"msg" => $errors );
           
        }
         return json_encode($response);
        
    }
    
}
