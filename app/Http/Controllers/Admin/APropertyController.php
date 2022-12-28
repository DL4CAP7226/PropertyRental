<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

use App\Models\SubCategory;
use App\Models\Property;
use App\Models\PropertyImage;
use DataTables;
use Image;

class APropertyController extends Controller
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
            $arr = $request->all();
            unset($arr['image']);
            unset($arr['_token']);
             
            $type_slug   = getSlugById($arr['type'],'property_type');
            $cat_slug    = getSlugById($arr['category'],'property_category');
            $subcat_slug = getSlugById($arr['subcategory'],'property_sub_category');
            
            $prop_slug = strtolower(preg_replace('/[^a-zA-Z0-9_-]/s','-',$request->property_name));
            $slug = $type_slug."/".$cat_slug."/".$subcat_slug;
            
            
            $arr['slug']       = $slug;
            $arr['created_by'] = Auth::user()->id;
          
            
             DB::table('properties')->insert($arr);
             $last_inserted_id = DB::getPdo()->lastInsertId();
        
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
                        'property_id'=>$last_inserted_id,
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
    
   public function propertyList(Request $request)
    {
       if ($request->ajax()) {
            //$data = DB::table('properties')->orderby('id','desc')->get();
            $data = Property::orderby('id','desc')->with('user:id,name')->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('type', function($data){
                           return getPropertyType($data->type);
                    }) 
                    ->addColumn('category', function($data){
                           return getCategoryName($data->category);
                    })
                   ->addColumn('subcategory', function($data){
                           return getSubCategoryById($data->subcategory); 
                    })
                   ->addColumn('property_name', function($data){
                           return $data->property_name; 
                    })
                   ->addColumn('created_by', function($data){
                           return $data->user->name; 
                    })
                   ->addColumn('show', function($data){
                           return $data->property_type; 
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
                                                    $.get("'.route('change_status').'",{status:1,id:'.$data->id.',table:"properties",msg:"Property Activate Successfully"},function(ret){
                                                        var res=JSON.parse(ret);
                                                        $.notify(res.msg, "success");
                                                    });
                                                }
                                                else if($(this).prop("checked") == false){
                                                    $(this).val(0);
                                                    $.get("'.route('change_status').'",{status:0,id:'.$data->id.',table:"properties",msg:"Property Disabled Successfully"},function(ret){
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
                           <a  href="'.route('admin_property_delete',$data->id).'"  class="btn btn-warning btn-sm action" title="Delete"><i class="ri-delete-bin-2-fill"></i></a>
                           ';
                        return $btn;
                    })
                    
                    ->rawColumns(['action','status'])
                    ->make(true);
        }
        
        return view('admin/property/property_list');

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

    
    public function propertyDelete($id){
        
        $property = DB::delete('delete from properties where id = ?',[$id]);
        return redirect()->route('admin_property_list')->with('success', 'Property deleted successfully');
     
         }
    
}
 