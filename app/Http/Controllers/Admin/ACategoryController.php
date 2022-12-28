<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

use App\Models\SubCategory;
use DataTables;

class ACategoryController extends Controller
{
    public function index()
    {
		//print_r(Auth::user());
        return view('admin.category.form');
    }
    
    public function save(Request $request)
    {
        sleep(2);
        $edit_id=$request->update_id;
        $subcategory=$request->subcategory_name;
        if(!empty($edit_id))
        {
            $rule="required|unique_with:property_sub_category,type,category,$edit_id";
            $object=SubCategory::find($edit_id);
        }
        else
        {
            $rule="required|unique_with:property_sub_category,type,category";
            $object=new SubCategory();
        }
        
        $validator = Validator::make($request->all(), [
                                    'type' => 'required',
                                    'category' => 'required',
                                    'subcategory_name' => $rule,
        ],['type.required'=>'Choose property type.','category.required'=>'Choose subcategory.','subcategory_name.required'=>'Enter subcategory name.','subcategory_name.unique_with'=>"<b class='subcat'>$subcategory</b> already exist in given combination !"]);
     
        if ($validator->passes())
        {
        
          /* $obj              = new Category();*/
           $object->type                    = $request->type;
           $object->category                = $request->category;
           $object->subcategory_name        = $request->subcategory_name;
           $object->slug                 = preg_replace('/[^a-zA-Z0-9_-]/s','-',$request->subcategory_name);
           $object->property_location       = @implode("----",$request->property_location);
           $object->property_location_key   = @implode(",",array_keys($request->property_location));
            
           $object->location_advantage       = @implode("----",$request->location_advantage);
           $object->location_advantage_key   = @implode(",",array_keys($request->location_advantage));
            
           $object->location_environment       = @implode("----",$request->location_environment);
           $object->location_environment_key   = @implode(",",array_keys($request->location_environment));
            
           $object->location_commuting       = @implode("----",$request->location_commuting);
           $object->location_commuting_key   = @implode(",",array_keys($request->location_commuting));
            
           $object->location_interest       = @implode("----",$request->location_interest);
           $object->location_interest_key   = @implode(",",array_keys($request->location_interest));
            
           $object->property_features       = @implode("----",$request->property_features);
           $object->property_features_key   = @implode(",",array_keys($request->property_features));
           $object->property_area           = @implode("----",$request->property_area);
           $object->property_area_key       = @implode(",",array_keys($request->property_area));
           $object->property_rent_lease     = @implode("----",$request->property_rent_lease);
    $object->property_rent_lease_key       = @implode(",",array_keys($request->property_rent_lease));
           $object->save();
            $response = array("err" => 0,"msg" => "Sub Category successfully saved !");
                           
        }
        else
        { 
            $errors = $validator->errors()->messages();
                $response = array("err" => 1,"msg" => $errors );
           
        }
         return json_encode($response);
        
    }
    
    
    public function categoryList(Request $request)
    {
       if ($request->ajax()) {
            $data = SubCategory::orderby('id','desc')->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('type', function($data){
                        return getPropertyType($data->type);
                    })
                    ->addColumn('category', function($data){
                        return getCategoryName($data->category);
                    })
                   ->addColumn('subcategory', function($data){
                           return $data->subcategory_name; 
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
                                                    $.get("'.route('category_status').'",{status:1,id:'.$data->id.'},function(ret){
                                                        $.notify("Category Active Successfully !", "success");
                                                    });
                                                }
                                                else if($(this).prop("checked") == false){
                                                    $(this).val(0);
                                                    $.get("'.route('category_status').'",{status:0,id:'.$data->id.'},function(ret){
                                                        $.notify("Category Disabled Successfully !", "error");
                                                    });
                                                }
                                            });
                                        });
                                        </script>     
                                    </div>';
                         return $button;
                    })
                    ->addColumn('action', function($data){
                        
                           $property_location_key    = $data->property_location_key;
                           $location_advantage_key   = $data->location_advantage_key;
                           $location_environment_key = $data->location_environment_key;
                           $location_commuting_key   = $data->location_commuting_key;
                           $location_interest_key    = $data->location_interest_key;
                           $property_features_key    = $data->property_features_key;
                           $property_area_key        = $data->property_area_key;
                           $property_rent_lease_key  = $data->property_rent_lease_key;
                        
                           $btn='<a href="#" class="btn btn-primary btn-sm update" data-id="'.$data->id.'" type="'.$data->type.'" category="'.$data->category.'" subcategory="'.$data->subcategory_name.'" property_location_key="'.$property_location_key.'" location_advantage_key="'.$location_advantage_key.'" location_environment_key="'.$location_environment_key.'" location_commuting_key="'.$location_commuting_key.'" location_interest_key="'.$location_interest_key.'" property_features_key="'.$property_features_key.'" property_area_key="'.$property_area_key.'" property_rent_lease_key="'.$property_rent_lease_key.'" title="Update"><i class="ri-pencil-fill"></i></a>
                           |
                           <a href="#" class="btn btn-warning btn-sm" title="Delete"><i class="ri-delete-bin-2-fill"></i></a>
                           ';
                        return $btn;
                    })
                    
                    ->rawColumns(['action','status'])
                    ->make(true);
        }
        
    }
    
    public function changeStatus(Request $request)
    {
        $status=$request->status;
        $product_id=$request->id;
        
            $product=SubCategory::find($product_id);
            $product->status=$status;
            $product->save();
        
        die;
    }
    
}
 