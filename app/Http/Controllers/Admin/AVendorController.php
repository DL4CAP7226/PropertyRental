<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\SubCategory;
use App\Models\Property;
use App\Models\PropertyImage;
use DataTables;
use Image;

class AVendorController extends Controller
{
    
    
    public function index()
    {
        return view('admin.property.form');
    }
    
    public function save(Request $request)
    {
        sleep(2); 
        $validator = Validator::make($request->all(), 
             [
            'type' => 'required',
            'category' => 'required',
            'subcategory' => 'required',
            'property_type' => 'required',
            'property_name' => array_key_exists("property_name",$request->all()) ? 'required' : '',
            'state' => array_key_exists("state",$request->all()) ? 'required' : '',
            'city' => array_key_exists("city",$request->all()) ? 'required' : '',
            'image' => 'required',
             ],
             ['type.required'=>'Choose property type.']);
     
        if ($validator->passes())
        {
          
            $obj     = new Property();
            $obj->type  = $request->type;
            $obj->category  = $request->category;
            $obj->subcategory  = $request->subcategory;
            $obj->property_name  = $request->property_name;
            $obj->slug           = strtolower(preg_replace('/[^a-zA-Z0-9_-]/s','-',$request->property_name));
            $obj->state  = $request->state;
            $obj->city  = $request->city;
            $obj->locality  = $request->locality;
            $obj->land_zone  = $request->land_zone;
            $obj->near_by_business  = $request->near_by_business;
            $obj->floor_no  = $request->floor_no;
            $obj->total_floor  = $request->total_floor;
            $obj->floor_alow_for_constr  = $request->floor_alow_for_constr;
            $obj->open_side  = $request->open_side;
            $obj->bathrooms  = $request->bathrooms;
            $obj->width_of_road  = $request->width_of_road;
            $obj->furnished_status  = $request->furnished_status;
            $obj->ac  = $request->ac;
            $obj->bed  = $request->bed;
            $obj->wardrobe  = $request->wardrobe;
            $obj->tv  = $request->tv;
            $obj->fridge  = $request->fridge;
            $obj->sofa  = $request->sofa;
            $obj->microwave  = $request->microwave;
            $obj->dining_table  = $request->dining_table;
            $obj->washing_machine  = $request->washing_machine;
            $obj->gas_connection  = $request->gas_connection;
            $obj->one_bhk  = $request->one_bhk;
            $obj->two_bhk  = $request->two_bhk;
            $obj->three_bhk  = $request->three_bhk;
            $obj->cover_area  = $request->cover_area;
            $obj->cover_area_unit  = $request->cover_area_unit;
            $obj->plot_area  = $request->plot_area;
            $obj->plot_area_unit  = $request->plot_area_unit;
            $obj->plot_length  = $request->plot_length;
            $obj->plot_length_unit  = $request->plot_length_unit;
            $obj->plot_breadth  = $request->plot_breadth;
            $obj->plot_breadth_unit  = $request->plot_breadth_unit;
            $obj->monthly_rent  = $request->monthly_rent;
            $obj->daily_rent  = $request->daily_rent;
            $obj->electr_charge  = $request->electr_charge;
            $obj->other_charge  = $request->other_charge;
            $obj->security_amount  = $request->security_amount;
            $obj->maintenance_charge  = $request->maintenance_charge;
            $obj->maintenance_charge_unit  = $request->maintenance_charge_unit;
            $obj->property_type  = $request->property_type;
            $obj->created_by  = Auth::user()->id;
            $obj->save();
            
            
             $items = [];
            if($request->hasfile('image'))
             {
                foreach($request->file('image') as $key=>$file)
                {
                    $originalPath = public_path('/property_img/original');
                    $compressPath = public_path('/property_img/compress');
                    
                    $name = time().$key.'.'.$file->extension();
                    
                    /*compress file start here */
                    $img = Image::make($file->getRealPath());
                    $img->resize(2272, 1704, function ($constraint) {
                                $constraint->aspectRatio();
                            })->save($compressPath.'/'.$name);
                    /*compress file end here */
                    
                    /*original file upload here */
                      $file->move($originalPath, $name); 
                    /*original file upload end here */
                    
                     $data=[
                        'property_id'=>$obj->id,
                        'image_name'=>$name,
                       ];
                 array_push($items,$data); 
                }
                 DB::table('properties_images')->insert($items);
             }
            
            $response = array("err" => 0,"msg" => "Property successfully saved !");
            return json_encode($response);       
        }
        else
        { 
            $errors = $validator->errors()->messages();
                $response = array("err" => 1,"msg" => $errors );
           
        }
         return json_encode($response);
        
    }
    
   public function List(Request $request)
    {  
       if ($request->ajax()) {
            $data = User::where('type','vendor')->orderby('id','desc')->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('name', function($data){
                           return $data->name;
                    }) 
                    ->addColumn('status', function($data){
                       $checked=$data->status == 1 ? 'checked' : '';
                         $button=' <div class="onoffswitch1">
                                    <input type="checkbox" name="onoffswitch1" value="1" class="onoffswitch1-checkbox1 "  id="myonoffswitch1'.$data->id.'" '.$checked.'>
                                    <label class="onoffswitch1-label1" for="myonoffswitch1'.$data->id.'">
                                    <span class="onoffswitch1-inner1"></span>
                                    <span class="onoffswitch1-switch1"></span>
                                    </label>
                                     <script>
                                        $(document).ready(function(){
                                            $("#myonoffswitch1'.$data->id.'").click(function(){
                                                if($(this).prop("checked") == true){
                                                    $(this).val(1);
                                                    $.get("'.route('change_status').'",{status:1,id:'.$data->id.',table:"users",msg:"Category Activate Successfully"},function(ret){
                                                        var res=JSON.parse(ret);
                                                        $.notify(res.msg, "success");
                                                    });
                                                }
                                                else if($(this).prop("checked") == false){
                                                    $(this).val(0);
                                                    $.get("'.route('change_status').'",{status:0,id:'.$data->id.',table:"users",msg:"Category Disabled Successfully"},function(ret){
                                                        var res=JSON.parse(ret);
                                                        $.notify(res.msg, "error");
                                                    });
                                                }
                                            });
                                        });
                                        </script>     
                                    </div>';
                         return $button;
                    })
                    ->addColumn('action', function($data){
                        
                           $btn='<a href="'.route('admin_property_view',$data->id).'" class="btn btn-info btn-sm action"   title="View"><i class="ri-eye-fill"></i></a>
                           |
                           <a href="#" class="btn btn-primary btn-sm action"   title="Update"><i class="ri-pencil-fill"></i></a>
                           |
                           <a href="#" class="btn btn-warning btn-sm action" title="Delete"><i class="ri-delete-bin-2-fill"></i></a>
                           ';
                        return $btn;
                    })
                    
                    ->rawColumns(['action','status'])
                    ->make(true);
        }
        
        return view('admin/vendor/list');

    }
    
 
    public function propertyView($id)
    {
        $property = Property::find($id);
        $property_images = PropertyImage::where('property_id',$id)->get();
        $data = [
                 'property'=>$property,
                 'property_image'=>$property_images,
                ];
        return view('admin/property/property_view',$data);
    }
    
    public function changeStatus(Request $request)
    {
        $status=$request->status;
        $product_id=$request->id;
        
            $product=User::find($product_id);
            $product->status=$status;
            $product->save();
        
        die;
    }
    
}
 