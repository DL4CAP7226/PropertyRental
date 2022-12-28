<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;  //for password encrypt
use Illuminate\Support\Facades\DB;


use App\Models\PropertyType;
use App\Models\Category;
use App\Models\SubCategory;

class AjaxController extends Controller
{
    
    public function changeStatus(Request $request)
    {
        $status=$request->status;
        $table =$request->table;
        $msg   =$request->msg;
        $id=$request->id;
        
            DB::table($table)->where('id',$id)->update(['status'=>$status]);
            $response = array("err" => 0,"msg" =>$msg );
        
          return json_encode($response);
    }
    
    
    public function getCategory(Request $request)
    {
        $type=$request->type;
       
        $arr = Category::where('property_type_id',$type)->get();
        
        echo '<option value="">-----Choose-----</option>';
        foreach($arr as $val)
        {
         ?>
           <option value="<?=$val->id?>"><?=$val->name?></option>
         <?php
        }
       return ;
    }
    
    public function getSubCategory(Request $request)
    {
        $type=$request->type;
        $category=$request->category;
        
        $arr = SubCategory::where('type',$type)->where('category',$category)->where('status','1')->get();
        
        echo '<option value="">-----Choose-----</option>';
        foreach($arr as $val)
        {
         ?>
           <option value="<?=$val->id?>"><?=$val->subcategory_name?></option>
         <?php
        }
       return ;
    }
    
    public function getPropertyField(Request $request)
    {
        $subcategory = $request->subcategory;
        
        $row = SubCategory::find($subcategory);
        
        
        $endTag ='</div> 
              
          </div>
       </div>
     </div>
  </div>';
        
        if(!empty($row->property_location))
        {
           $property_location = $row->property_location;
            $arr = explode('----',$property_location);
            echo $this->startingTag('Property Location');
            foreach($arr as $val)
            {
                echo decrypt($val);
            }
            echo $endTag;
        }
        
        if(!empty($row->location_advantage))
        {
           $location_advantage = $row->location_advantage;
            $arr = explode('----',$location_advantage);
            echo $this->startingTag('Location Advantage');
            foreach($arr as $val)
            {
                echo decrypt($val);
            }
            echo $endTag;
        }
        
        if(!empty($row->location_environment))
        {
           $location_environment = $row->location_environment;
            $arr = explode('----',$location_environment);
            echo $this->startingTag('Location Environment');
            foreach($arr as $val)
            {
                echo decrypt($val);
            }
            echo $endTag;
        }
        
        if(!empty($row->location_commuting))
        {
           $location_commuting = $row->location_commuting;
            $arr = explode('----',$location_commuting);
            echo $this->startingTag('Location Commuting');
            foreach($arr as $val)
            {
                echo decrypt($val);
            }
            echo $endTag;
        }
        
        if(!empty($row->location_interest))
        {
           $location_interest = $row->location_interest;
            $arr = explode('----',$location_interest);
            echo $this->startingTag('Place of Interest');
            foreach($arr as $val)
            {
                echo decrypt($val);
            }
            echo $endTag;
        }
      
        if(!empty($row->property_features))
        {
           $property_features = $row->property_features;
            $arr = explode('----',$property_features);
            echo $this->startingTag('Property Features');
            foreach($arr as $val)
            {
                echo decrypt($val);
            }
            echo $endTag;
        }
        
        if(!empty($row->property_area))
        {
           $property_area = $row->property_area;
            $arr = explode('----',$property_area);
            echo $this->startingTag('Property Area');
            foreach($arr as $val)
            {
                echo decrypt($val);
            }
            echo $endTag;
        }
        
        if(!empty($row->property_rent_lease))
        {
           $property_rent_lease = $row->property_rent_lease;
            $arr = explode('----',$property_rent_lease);
            echo $this->startingTag('Rent/ Lease Details');
            foreach($arr as $val)
            {
                echo decrypt($val);
            }
            echo $endTag;
        }
        
        
       return ;
    }
    
    public function startingTag($title)
    {
        return '<div class="row">
                        <div class="col-sm-12 col-lg-12">
                           <div class="card">
                              <div class="card-header d-flex justify-content-between" style="padding:2px 30px;">
                                 <div class="header-title">
                                    <h4 class="card-title">'.$title.'</h4>
                                 </div>
                              </div>
                              <div class="card-body">

                                   <div class="row">';
    }
    
    
}

