@extends('admin/layout/master')
@section('title','Categories')
@section('body')
<style>
    .text-danger{   position: absolute;
                    top: -24px;
                    z-index: 2500;
                    left: 86px;
                }
    .notifyjs-bootstrap-base{background-color:black;color:white;width:300px;text-align: center;}
    
    tr>th>input { width: 80%;outline:1px solid gray;}
</style>

<style>
  tr>th>input { width: 90%;}
    .subcat{
            text-transform: uppercase;
            color: green;
           }
    .edit{left:0px;}
</style>

<style>
.onoffswitch1 {
    position: relative; width: 95px;
    -webkit-user-select:none; -moz-user-select:none; -ms-user-select: none;
}
.onoffswitch1-checkbox1 {
    display: none;
}
.onoffswitch1-label1 {
    display: block; overflow: hidden; cursor: pointer;
    border-radius: 20px;
}
.onoffswitch1-inner1 {
    display: block; width: 200%; margin-left: -100%;
    transition: margin 0.3s ease-in 0s;
}
.onoffswitch1-inner1:before, .onoffswitch1-inner1:after {
    display: block; float: left; width: 50%; height: 20px; padding: 0; line-height: 20px;
    font-size: 14px; color: white; font-family: Trebuchet, Arial, sans-serif; font-weight: bold;
    box-sizing: border-box;
}
.onoffswitch1-inner1:before { 
    content: "Active";
    padding-left: 10px;
    background-color: #45c24c; color: #FFFFFF;
}
.onoffswitch1-inner1:after {
    content: "Disable";
    background-color: #e50101;
    color: white;
    text-align: right;
    font-size: 10px;
    padding-right: 8px;
}
.onoffswitch1-switch1 {
    display: block; width: 18px; margin: 6px;
    background: #FFFFFF;
    position: absolute; top: 0; bottom: 0;
    right:65px;
    border: 2px solid #999999; border-radius: 20px;
    transition: all 0.3s ease-in 0s; 
}
.onoffswitch1-checkbox1:checked + .onoffswitch1-label1 .onoffswitch1-inner1 {
    margin-left: 0;
}
.onoffswitch1-checkbox1:checked + .onoffswitch1-label1 .onoffswitch1-switch1 {
    right: 0px; 
}
    
</style>
<style>
    input{background-color:white !important;}
</style>
<form id="categoryForm" method="post" >
                @csrf 
                <input type="hidden" name="update_id" value="" id="update_id">
<div class="row" >
  <div class="col-sm-12 col-lg-12 col-md-12">
      <div class="card" >
          <!--<div class="card-header d-flex justify-content-between" style="padding:2px 30px;">
             <div class="header-title">
                <h4 class="card-title"> @yield('title') </h4>
             </div>
          </div>-->
          <div class="card-body" style="padding-bottom:14px;" >
            
             <div class="row">
                <div class="col-sm-3" style="position:relative;">
                    <i id="typeError" class="text-danger"></i>
                    <div class="input-group input-group-sm ">
                        <div class="input-group-prepend">
                           <label class="input-group-text">Type</label>
                        </div>
                        <select name="type" id="type" class="custom-select property_type" >
                           <option value="" >Choose...</option>
                           <option value="1">Rent-Lease</option>
                           <option value="2">Sale</option>
                        </select>
                     </div>
                 </div>
                  
                 <div class="col-sm-3" style="position:relative;">
                     <i id="categoryError" class="text-danger"></i>
                    <div class="input-group input-group-sm ">
                        <div class="input-group-prepend">
                           <label class="input-group-text">Category</label>
                        </div>
                        <select name="category" id="categoryedit" class="custom-select category" >
                           <option value="" >Choose...</option>
                            <!--data comes from ajax-->
                        </select>
                     </div>
                 </div>
                 
                 <div class="col-sm-4" style="position:relative;">
                     <i id="subcategoryError" class="text-danger "></i>
                    <div class="input-group input-group-sm ">
                        <div class="input-group-prepend">
                           <span class="input-group-text" id="inputGroup-sizing-sm">Sub Category</span>
                        </div>
                        <input type="text" name="subcategory_name" id="subcategory" value="" placeholder="Enter Sub Category" class="form-control" style="background-color:white;" >
                     </div>
                 </div>
                 
                 <div class="col-sm-2">
                    <div class="input-group input-group-sm ">
                        <button type="submit" id="category_btn" class="btn btn-success btn-sm" style="width:100px;">Save
                          <img id="category_load" src="{{asset('public')}}/uploads/default/load.gif"  style="width:17px;float:right;">
                        </button>
                        
                        <button type="reset" class="btn btn-danger btn-sm">Set</button>
                         
                     </div>
                 </div>
                 
              </div>
            
             
          </div>
       </div>  
  </div> 
</div>

 <div class="row">
    <div class="col-sm-12 col-lg-12">
       <div class="card">
          <div class="card-header d-flex justify-content-between" style="padding:2px 30px;">
             <div class="header-title">
                <h4 class="card-title">Property Location</h4>
             </div>
          </div>
          <div class="card-body">
             
               <div class="row">
<?php
   $property_name = encrypt('<div class="form-group col-sm-3">
   <label>Name of Project/Society </label>
   <input type="text" name="property_name" class="form-control form-control-sm"
      placeholder="Name of Project/Society">
</div>');
?>
                        <div class="form-group col-sm-3">
                           <label>Name of Project/Society <input name="property_location[property_name]" type="checkbox" style="margin-left:10px;" value="<?=$property_name?>"> </label>
                           <input type="text" class="form-control form-control-sm"
                              placeholder="Name of Project/Society">
                        </div>
<?php
   $state = encrypt('<div class="form-group col-sm-2">
   <label>State</label>
   <input type="text" name="state" class="form-control form-control-sm"
      placeholder="State">
</div>');
?>
                   
                        <div class="form-group col-sm-2">
                           <label>State <input name="property_location[state]" type="checkbox" style="margin-left:10px;" value="<?=$state?>" > </label>
                           <input type="text" class="form-control form-control-sm"
                              placeholder="State">
                        </div>
<?php
   $city = encrypt('<div class="form-group col-sm-2">
                           <label>City</label>
                           <input type="text" name="city" class="form-control form-control-sm"
                              placeholder="City">
                        </div>');
?>                          
                        <div class="form-group col-sm-2">
                           <label>City  <input name="property_location[city]" type="checkbox" style="margin-left:10px;" value="<?=$city?>" > </label>
                           <input type="text" class="form-control form-control-sm"
                              placeholder="City">
                        </div>
<?php
   $locality = encrypt('<div class="form-group col-sm-2">
                           <label>Locality</label>
                           <input type="text" name="locality" class="form-control form-control-sm"
                              placeholder="Locality">
                        </div>');
?>              
                        <div class="form-group col-sm-2">
                           <label>Locality <input name="property_location[locality]" type="checkbox" style="margin-left:10px;" value="<?=$locality?>" > </label>
                           <input type="text" name="locality" class="form-control form-control-sm"
                              placeholder="Locality">
                        </div>
          
<?php
$land_zone = encrypt('<div class="form-group col-sm-3">
                           <label>Land Zone</label>
                            <select name="land_zone" class="form-control form-control-sm mb-3">
                                <option value="">Select Land Zone</option>
                                <option value="Industrial">Industrial</option>
                                <option value="Commercial">Commercial</option>
                                <option value="Residential">Residential</option>			      
                                <option value="Transport and Communication">Transport and Communication</option>
                                <option value="Public Utilities">Public Utilities</option>
                                <option value="Public and Semi Public Use">Public and Semi Public Use</option>
                                <option value="Open Spaces">Open Spaces</option>
                                <option value="Agricultural Zone">Agricultural Zone</option>
                                <option value="Special Economic Zone">Special Economic Zone</option>
                                <option value="Natural Conservation Zone">Natural Conservation Zone</option>
                                <option value="Government Use">Government Use</option>
                            </select>
                        </div>');
?> 
                        <div class="form-group col-sm-3">
                           <label>Land Zone <input name="property_location[land_zone]" type="checkbox" style="margin-left:10px;" value="<?=$land_zone?>" > </label>
                            <select name="land_zone" class="form-control form-control-sm mb-3">
                                <option value="">Select Land Zone</option>
                                <option value="36100">Industrial</option>
                                <option value="36101">Commercial</option>
                                <option value="36102">Residential</option>			      
                                <option value="36108">Transport and Communication</option>
                                <option value="36109">Public Utilities</option>
                                <option value="36110">Public and Semi Public Use</option>
                                <option value="36111">Open Spaces</option>
                                <option value="36112">Agricultural Zone</option>
                                <option value="36113">Special Economic Zone</option>
                                <option value="36114">Natural Conservation Zone</option>
                                <option value="36115">Government Use</option>
                            </select>
                        </div>
<?php
$near_by_business = encrypt('<div class="form-group col-sm-3">
                           <label>Nearby Businesses</label>
                            <textarea class="form-control" name="near_by_business"></textarea>
                        </div>');
?>                          
                        <div class="form-group col-sm-3">
                           <label>Nearby Businesses <input name="property_location[near_by_business]" type="checkbox" style="margin-left:10px;" value="<?=$near_by_business?>" > </label>
                            <textarea class="form-control" name="near_by_business"></textarea>
                        </div>
                   
                   
               </div> 
              
          </div>
       </div>
     </div>
  </div>
  <!--property location end-->

<div class="row">
    <div class="col-sm-12 col-lg-12">
       <div class="card">
          <div class="card-header d-flex justify-content-between" style="padding:2px 30px;">
             <div class="header-title">
                <h4 class="card-title">Property Features</h4>
             </div>
          </div>
          <div class="card-body">
             
               <div class="row">
<?php
$floor_no = encrypt('<div class="form-group col-sm-3">
                           <label>Floor No</label>
                           <select name="floor_no" class="form-control form-control-sm mb-3">
                                <option value="Lower Basement">Lower Basement</option>
                                <option value="Upper Basement">Upper Basement</option>
                                <option value="Ground">Ground</option>			      
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                        </div>');
?>        
                        <div class="form-group col-sm-3">
                           <label>Floor No <input name="property_features[floor_no]" type="checkbox" style="margin-left:10px;" value="<?=$floor_no?>" > </label>
                           <select name="floor_no" class="form-control form-control-sm mb-3">
                                <option value="36100">Lower Basement</option>
                                <option value="36101">Upper Basement</option>
                                <option value="36102">Ground</option>			      
                                <option value="36108">1</option>
                                <option value="36109">2</option>
                                <option value="36110">3</option>
                                <option value="36111">4</option>
                                <option value="36112">5</option>
                                <option value="36113">6</option>
                            </select>
                        </div>
                   
<?php
$total_floor = encrypt('<div class="form-group col-sm-2">
                           <label>Total Floors</label>
                           <select name="total_floor" class="form-control form-control-sm mb-3">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                        </div>');
?>  
                       <div class="form-group col-sm-2">
                           <label>Total Floors <input name="property_features[total_floor]" type="checkbox" style="margin-left:10px;" value="<?=$total_floor?>" > </label>
                           <select name="total_floor" class="form-control form-control-sm mb-3">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                        </div>
                   
<?php
$floor_alow_for_constr = encrypt('<div class="form-group col-sm-3">
                           <label>Floors Allowed for construction</label>
                           <select name="floor_alow_for_constr" class="form-control form-control-sm mb-3">			      
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                        </div>');
?> 
                        <div class="form-group col-sm-3">
                           <label>Floors Allowed for construction <input name="property_features[floor_alow_for_constr]" type="checkbox" style="margin-left:10px;" value="<?=$floor_alow_for_constr?>" >  </label>
                           <select name="floor_alow_for_constr" class="form-control form-control-sm mb-3">			      
                                <option value="36108">1</option>
                                <option value="36109">2</option>
                                <option value="36110">3</option>
                                <option value="36111">4</option>
                                <option value="36112">5</option>
                                <option value="36113">6</option>
                            </select>
                        </div>
                   
<?php
$side_open = encrypt('<div class="form-group col-sm-2">
                           <label>No of open sides</label>
                           <select name="open_side" class="form-control form-control-sm mb-3">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>');
?>
                       <div class="form-group col-sm-2">
                           <label>No of open sides <input name="property_features[side_open]" type="checkbox" style="margin-left:10px;" value="<?=$side_open?>" > </label>
                           <select name="side_open" class="form-control form-control-sm mb-3">
                                <option value="36108">1</option>
                                <option value="36109">2</option>
                                <option value="36110">3</option>
                                <option value="36111">4</option>
                            </select>
                        </div>
              
<?php
$bathrooms = encrypt('<div class="form-group col-sm-2">
                           <label>Bathrooms</label>
                           <select name="bathrooms" class="form-control form-control-sm mb-3">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3 +"> 3 +</option>
                            </select>
                        </div>');
?>
                        <div class="form-group col-sm-2">
                           <label>Bathrooms <input name="property_features[bathrooms]" type="checkbox" style="margin-left:10px;" value="<?=$bathrooms?>" > </label>
                           <select name="bathrooms" class="form-control form-control-sm mb-3">
                                <option value="36108">0</option>
                                <option value="36108">1</option>
                                <option value="36109">2</option>
                                <option value="36110"> 3 +</option>
                            </select>
                        </div>
                   
                   
<?php
$width_of_road = encrypt('<div class="form-group col-sm-4">
                           <label>Width of road facing the plot (In Meter)</label>
                           <input type="text" name="width_of_road" class="form-control form-control-sm"
                              placeholder="In Meter">
                        </div>');
?>
                        <div class="form-group col-sm-4">
                           <label>Width of road facing the plot (In Meter) <input name="property_features[width_of_road]" type="checkbox" style="margin-left:10px;" value="<?=$width_of_road?>" > </label>
                           <input type="text" name="width_of_road" class="form-control form-control-sm"
                              placeholder="In Meter">
                        </div>
                 
<?php
$furnished_status = encrypt('<div class="form-group col-sm-2">
                           <label>Furnished Status</label>
                           <select name="furnished_status" class="form-control form-control-sm mb-3">        <option value="Furnished">Furnished</option>
                                <option value="UnFurnished">UnFurnished</option>
                                <option value="Semi-Furnished">Semi-Furnished</option>
                            </select>
                        </div>');
?>
                        <div class="form-group col-sm-2">
                           <label>Furnished Status <input name="property_features[furnished_status]" type="checkbox" style="margin-left:10px;" value="<?=$furnished_status?>" > </label>
                           <select name="furnished_status" class="form-control form-control-sm mb-3">        <option value="36108">Furnished</option>
                                <option value="36109">UnFurnished</option>
                                <option value="36110">Semi-Furnished</option>
                            </select>
                        </div>
                   
<?php
$ac = encrypt('<div class="form-group col-sm-2">
                           <label>Ac</label>
                           <select name="ac" class="form-control form-control-sm mb-3">			      
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>');
?>
                        <div class="form-group col-sm-2">
                           <label>Ac <input name="property_features[ac]" type="checkbox" style="margin-left:10px;" value="<?=$ac?>" > </label>
                           <select name="ac" class="form-control form-control-sm mb-3">			      
                                <option value="36108">0</option>
                                <option value="36109">1</option>
                                <option value="36110">2</option>
                                <option value="36111">3</option>
                            </select>
                        </div>
                   
<?php
$bed = encrypt('<div class="form-group col-sm-2">
                           <label>Bed</label>
                           <select name="bed" class="form-control form-control-sm mb-3">			          <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>');
?>
                        <div class="form-group col-sm-2">
                           <label>Bed <input name="property_features[bed]" type="checkbox" style="margin-left:10px;" value="<?=$bed?>" > </label>
                           <select name="bed" class="form-control form-control-sm mb-3">			          <option value="36108">0</option>
                                <option value="36109">1</option>
                                <option value="36110">2</option>
                                <option value="36111">3</option>
                            </select>
                        </div>
                   
<?php
$wardrobe = encrypt('<div class="form-group col-sm-2">
                           <label>Wardrobe</label>
                           <select name="wardrobe" class="form-control form-control-sm mb-3">			      <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>');
?>
                        <div class="form-group col-sm-2">
                           <label>Wardrobe <input name="property_features[wardrobe]" type="checkbox" style="margin-left:10px;" value="<?=$wardrobe?>" > </label>
                           <select name="wardrobe" class="form-control form-control-sm mb-3">			      <option value="36108">0</option>
                                <option value="36109">1</option>
                                <option value="36110">2</option>
                                <option value="36111">3</option>
                            </select>
                        </div>
                 
<?php
$tv = encrypt('<div class="form-group col-sm-2">
                           <label>Tv</label>
                           <select name="tv" class="form-control form-control-sm mb-3">			      
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>');
?>
                       <div class="form-group col-sm-2">
                           <label>Tv <input name="property_features[tv]" type="checkbox" style="margin-left:10px;" value="<?=$tv?>" > </label>
                           <select name="tv" class="form-control form-control-sm mb-3">			      
                                <option value="36108">0</option>
                                <option value="36109">1</option>
                                <option value="36110">2</option>
                                <option value="36111">3</option>
                            </select>
                        </div>
      
<?php
$fridge = encrypt('<div class="form-group col-sm-1">
                           <label>Fridge</label>
                           <input type="checkbox" name="fridge" value="yes" class="form-control " style="height:30px;">
                       </div>');
?>
                       <div class="form-group col-sm-1">
                           <label>Fridge <input name="property_features[fridge]" type="checkbox" style="margin-left:10px;" value="<?=$fridge?>" > </label>
                           <input type="checkbox" name="fridge" class="form-control " style="height:30px;">
                       </div>
                   
<?php
$sofa = encrypt('<div class="form-group col-sm-1">
                           <label>Sofa</label>
                           <input type="checkbox" name="sofa" value="yes" class="form-control " style="height:30px;">
                       </div>');
?>
                       <div class="form-group col-sm-1">
                           <label>Sofa <input name="property_features[sofa]" type="checkbox" style="margin-left:10px;" value="<?=$sofa?>" > </label>
                           <input type="checkbox" name="sofa" class="form-control " style="height:30px;">
                       </div>
                   
<?php
$microwave = encrypt('<div class="form-group col-sm-2">
                           <label>Microwave</label>
                           <input type="checkbox" name="microwave"  value="yes" class="form-control " style="height:30px;">
                       </div>');
?>
                       <div class="form-group col-sm-2">
                           <label>Microwave <input name="property_features[microwave]" type="checkbox" style="margin-left:10px;" value="<?=$microwave?>" > </label>
                           <input type="checkbox" name="microwave" class="form-control " style="height:30px;">
                       </div>
              
<?php
$dining_table = encrypt('<div class="form-group col-sm-2">
                           <label>Dining Table</label>
                           <input type="checkbox" name="dining_table" value="yes" class="form-control " style="height:30px;">
                       </div>');
?>
                       <div class="form-group col-sm-2">
                           <label>Dining Table <input name="property_features[dining_table]" type="checkbox" style="margin-left:10px;" value="<?=$dining_table?>" > </label>
                           <input type="checkbox" name="dining_table" class="form-control " style="height:30px;">
                       </div>
                  
<?php
$washing_machine = encrypt('<div class="form-group col-sm-2">
                           <label>Washing Machine</label>
                           <input type="checkbox" name="washing_machine" value="yes" class="form-control " style="height:30px;">
                       </div>');
?>
                       <div class="form-group col-sm-2">
                           <label>Washing Machine <input name="property_features[washing_machine]" type="checkbox" style="margin-left:10px;" value="<?=$washing_machine?>" > </label>
                           <input type="checkbox" name="washing_machine" class="form-control " style="height:30px;">
                       </div>
                   
<?php
$gas_connection = encrypt('<div class="form-group col-sm-2">
                           <label>Gas Connection</label>
                           <input type="checkbox" name="gas_connection" value="yes" class="form-control " style="height:30px;">
                       </div>');
?>
                       <div class="form-group col-sm-2">
                           <label>Gas Connection <input name="property_features[gas_connection]" type="checkbox" style="margin-left:10px;" value="<?=$gas_connection?>" > </label>
                           <input type="checkbox" name="gas_connection" class="form-control " style="height:30px;">
                       </div>
                   
<?php
$one_bhk = encrypt('<div class="form-group col-sm-2">
                           <label>1 BHK</label>
                           <input type="checkbox" name="one_bhk" value="yes" class="form-control " style="height:30px;">
                       </div>');
?>
                       <div class="form-group col-sm-2">
                           <label>1 BHK <input name="property_features[one_bhk]" type="checkbox" style="margin-left:10px;" value="<?=$one_bhk?>" > </label>
                           <input type="checkbox" name="one_bhk" class="form-control " style="height:30px;">
                       </div>
                   
<?php
$two_bhk = encrypt('<div class="form-group col-sm-2">
                           <label>2 BHK</label>
                           <input type="checkbox" name="two_bhk" value="yes" class="form-control " style="height:30px;">
                       </div>');
?>
                       <div class="form-group col-sm-2">
                           <label>2 BHK <input name="property_features[two_bhk]" type="checkbox" style="margin-left:10px;" value="<?=$two_bhk?>" > </label>
                           <input type="checkbox" name="two_bhk" class="form-control " style="height:30px;">
                       </div>
                   
<?php
$three_bhk = encrypt('<div class="form-group col-sm-2">
                           <label>3 BHK</label>
                           <input type="checkbox" name="three_bhk" value="yes" class="form-control " style="height:30px;">
                       </div>');
?>
                       <div class="form-group col-sm-2">
                           <label>3 BHK <input name="property_features[three_bhk]" type="checkbox" style="margin-left:10px;" value="<?=$three_bhk?>" > </label>
                           <input type="checkbox" name="three_bhk" class="form-control " style="height:30px;">
                       </div>
                   
               </div> 
              
          </div>
       </div>
     </div>
  </div>
  <!--Property Features end-->

<div class="row">
    <div class="col-sm-12 col-lg-12">
       <div class="card">
          <div class="card-header d-flex justify-content-between" style="padding:2px 30px;">
             <div class="header-title">
                <h4 class="card-title">Property Area</h4>
             </div>
          </div>
          <div class="card-body">
             
               <div class="row">

<?php
$cover_area = encrypt('<div class="form-group col-sm-3" style="position:relative;">
                           <label>Covered Area</label>
                           <input type="text" name="cover_area" class="form-control form-control-sm"
                              placeholder="Covered Area" style="width:60%;">
                            <select name="cover_area_unit" class="form-control form-control-sm" style="width: 41%;position: absolute;right: 0;top: 36px;">
                                <option value="Sq-ft">Sq-ft</option>
                                <option value="Sq-yrd">Sq-yrd</option>
                                <option value="Sq-m">Sq-m</option>
                                <option value="Acre">Acre</option>
                                <option value="Bigha">Bigha</option>
                                <option value="Hectare">Hectare</option>
                                <option value="Marla">Marla</option>
                                <option value="Kanal">Kanal</option>
                                <option value="Biswa1">Biswa1</option>
                                <option value="Biswa2">Biswa2</option>
                                <option value="Ground">Ground</option>
                                <option value="Aankadam">Aankadam</option>
                                <option value="Rood">Rood</option>
                                <option value="Chatak">Chatak</option>
                                <option value="Kottah">Kottah</option>
                                <option value="Marla">Marla</option>
                                <option value="Cent">Cent</option>
                                <option value="Perch">Perch</option>
                                <option value="Guntha">Guntha</option>
                                <option value="Are">Are</option>
                            </select>
                        </div>');
?>
                        <div class="form-group col-sm-3" style="position:relative;">
                           <label>Covered Area <input name="property_area[cover_area]" type="checkbox" style="margin-left:10px;" value="<?=$cover_area?>" > </label>
                           <input type="text" name="cover_area" class="form-control form-control-sm"
                              placeholder="Covered Area" style="width:60%;">
                            <select class="form-control form-control-sm" style="width: 41%;position: absolute;right: 0;top: 36px;">
                                <option value="12800">Sq-ft</option>
                                <option value="12803">Sq-yrd</option>
                                <option value="12801">Sq-m</option>
                                <option value="12804">Acre</option>
                                <option value="12805">Bigha</option>
                                <option value="12806">Hectare</option>
                                <option value="12807">Marla</option>
                                <option value="12808">Kanal</option>
                                <option value="12809">Biswa1</option>
                                <option value="12810">Biswa2</option>
                                <option value="12811">Ground</option>
                                <option value="12812">Aankadam</option>
                                <option value="12813">Rood</option>
                                <option value="12814">Chatak</option>
                                <option value="12815">Kottah</option>
                                <option value="12816">Marla</option>
                                <option value="12817">Cent</option>
                                <option value="12818">Perch</option>
                                <option value="12819">Guntha</option>
                                <option value="12820">Are</option>
                            </select>
                        </div>
                 
<?php
$plot_area = encrypt('<div class="form-group col-sm-3" style="position:relative;">
                           <label>Plot Area</label>
                           <input type="text" name="plot_area" class="form-control form-control-sm"
                              placeholder="Plot Area" style="width:60%;">
                            <select name="plot_area_unit" class="form-control form-control-sm" style="width: 41%;position: absolute;right: 0;top: 36px;">
                                <option value="Sq-ft">Sq-ft</option>
                                <option value="Sq-yrd">Sq-yrd</option>
                                <option value="Sq-m">Sq-m</option>
                                <option value="Acre">Acre</option>
                                <option value="Bigha">Bigha</option>
                                <option value="Hectare">Hectare</option>
                                <option value="Marla">Marla</option>
                                <option value="Kanal">Kanal</option>
                                <option value="Biswa1">Biswa1</option>
                                <option value="Biswa2">Biswa2</option>
                                <option value="Ground">Ground</option>
                                <option value="Aankadam">Aankadam</option>
                                <option value="Rood">Rood</option>
                                <option value="Chatak">Chatak</option>
                                <option value="Kottah">Kottah</option>
                                <option value="Marla">Marla</option>
                                <option value="Cent">Cent</option>
                                <option value="Perch">Perch</option>
                                <option value="Guntha">Guntha</option>
                                <option value="Are">Are</option>
                            </select>
                        </div>');
?>
                        <div class="form-group col-sm-3" style="position:relative;">
                           <label>Plot Area <input name="property_area[plot_area]" type="checkbox" style="margin-left:10px;" value="<?=$plot_area?>" > </label>
                           <input type="text" name="plot_area" class="form-control form-control-sm"
                              placeholder="Plot Area" style="width:60%;">
                            <select class="form-control form-control-sm" style="width: 41%;position: absolute;right: 0;top: 36px;">
                                <option value="12800">Sq-ft</option>
                                <option value="12803">Sq-yrd</option>
                                <option value="12801">Sq-m</option>
                                <option value="12804">Acre</option>
                                <option value="12805">Bigha</option>
                                <option value="12806">Hectare</option>
                                <option value="12807">Marla</option>
                                <option value="12808">Kanal</option>
                                <option value="12809">Biswa1</option>
                                <option value="12810">Biswa2</option>
                                <option value="12811">Ground</option>
                                <option value="12812">Aankadam</option>
                                <option value="12813">Rood</option>
                                <option value="12814">Chatak</option>
                                <option value="12815">Kottah</option>
                                <option value="12816">Marla</option>
                                <option value="12817">Cent</option>
                                <option value="12818">Perch</option>
                                <option value="12819">Guntha</option>
                                <option value="12820">Are</option>
                            </select>
                        </div>
                   
<?php
$plot_length = encrypt('<div class="form-group col-sm-3" style="position:relative;">
                           <label>Plot Length</label>
                           <input type="text" name="plot_length" class="form-control form-control-sm"
                              placeholder="Plot Length" style="width:60%;">
                            <select name="plot_length_unit" class="form-control form-control-sm" style="width: 41%;position: absolute;right: 0;top: 36px;">
                                <option value="Sq-ft">Sq-ft</option>
                            </select>
                        </div>');
?>
                       <div class="form-group col-sm-3" style="position:relative;">
                           <label>Plot Length <input name="property_area[plot_length]" type="checkbox" style="margin-left:10px;" value="<?=$plot_length?>" >  </label>
                           <input type="text" name="plot_length" class="form-control form-control-sm"
                              placeholder="Plot Length" style="width:60%;">
                            <select class="form-control form-control-sm" style="width: 41%;position: absolute;right: 0;top: 36px;">
                                <option value="12800">Sq-ft</option>
                            </select>
                        </div>
                   
<?php
$plot_breadth = encrypt('<div class="form-group col-sm-3" style="position:relative;">
                           <label>Plot Breadth</label>
                           <input type="text" name="plot_breadth" class="form-control form-control-sm"
                              placeholder="Plot Breadth" style="width:60%;">
                            <select name="plot_breadth_unit" class="form-control form-control-sm" style="width: 41%;position: absolute;right: 0;top: 36px;">
                                <option value="Sq-ft">Sq-ft</option>
                            </select>
                        </div>');
?>
                      <div class="form-group col-sm-3" style="position:relative;">
                           <label>Plot Breadth <input name="property_area[plot_breadth]" type="checkbox" style="margin-left:10px;" value="<?=$plot_breadth?>" >  </label>
                           <input type="text" name="plot_breadth" class="form-control form-control-sm"
                              placeholder="Plot Breadth" style="width:60%;">
                            <select class="form-control form-control-sm" style="width: 41%;position: absolute;right: 0;top: 36px;">
                                <option value="12800">Sq-ft</option>
                            </select>
                        </div>
                   
               </div> 
              
          </div>
       </div>
     </div>
  </div>
  <!--property area end-->

<div class="row">
    <div class="col-sm-12 col-lg-12">
       <div class="card">
          <div class="card-header d-flex justify-content-between" style="padding:2px 30px;">
             <div class="header-title">
                <h4 class="card-title">Rent/ Lease Details</h4>
             </div>
          </div>
          <div class="card-body">
             
              <div class="row">
                      
<?php
$monthly_rent = encrypt('<div class="form-group col-sm-2">
                           <label>Monthly Rent</label>
                           <input type="text" name="monthly_rent" class="form-control form-control-sm"
                              placeholder="Monthly Rent">
                        </div>');
?>
                        <div class="form-group col-sm-2">
                           <label>Monthly Rent <input name="property_rent_lease[monthly_rent]" type="checkbox" style="margin-left:10px;" value="<?=$monthly_rent?>" >  </label>
                           <input type="text" name="monthly_rent" class="form-control form-control-sm"
                              placeholder="Monthly Rent">
                        </div>
                       
<?php
$daily_rent = encrypt('<div class="form-group col-sm-2">
                           <label for="colFormLabelSm">Daily Rent</label>
                           <input type="text" name="daily_rent" class="form-control form-control-sm"
                              placeholder="Daily Basis Rent">
                        </div>');
?>
                        <div class="form-group col-sm-2">
                           <label for="colFormLabelSm">Daily Rent <input name="property_rent_lease[daily_rent]" type="checkbox" style="margin-left:10px;" value="<?=$daily_rent?>" >  </label>
                           <input type="text" name="daily_rent" class="form-control form-control-sm"
                              placeholder="Daily Basis Rent">
                        </div>
                           
<?php
$electr_charge = encrypt('<div class="form-group col-sm-4">
                           <label>Electricity & Water charges excluded</label>
                            <select name="electr_charge" class="form-control form-control-sm mb-3">
                                 <option value="1">Exclude</option>
                                 <option value="2">Include</option>
                            </select>
                        </div>');
?>               
                        <div class="form-group col-sm-4">
                           <label>Electricity & Water charges excluded <input name="property_rent_lease[electr_charge]" type="checkbox" style="margin-left:10px;" value="<?=$electr_charge?>" >  </label>
                            <select name="electr_charge" class="form-control form-control-sm mb-3">
                                 <option value="1">Exclude</option>
                                 <option value="2">Include</option>
                            </select>
                        </div>
                 
<?php
$other_charge = encrypt('<div class="form-group col-sm-2">
                           <label>Other Charge</label>
                           <input type="text" name="other_charge" class="form-control form-control-sm"
                              placeholder="Other Charges">
                        </div>');
?>
                        <div class="form-group col-sm-2">
                           <label>Other Charge  <input name="property_rent_lease[other_charge]" type="checkbox" style="margin-left:10px;" value="<?=$other_charge?>" >  </label>
                           <input type="text" name="other_charge" class="form-control form-control-sm"
                              placeholder="Other Charges">
                        </div>
                   
<?php
$security_amount = encrypt('<div class="form-group col-sm-3">
                           <label>Security Amount</label>
                           <input type="text" name="security_amount" class="form-control form-control-sm" 
                              placeholder="Security Amount">
                        </div>');
?>
                        <div class="form-group col-sm-3">
                           <label>Security Amount <input name="property_rent_lease[security_amount]" type="checkbox" style="margin-left:10px;" value="<?=$security_amount?>" >  </label>
                           <input type="text" name="security_amount" class="form-control form-control-sm" 
                              placeholder="Security Amount">
                        </div>
                     
<?php
$maintenance_charge = encrypt('<div class="form-group col-sm-3" style="position:relative;">
                           <label>Maintenance Charges</label>
                           <input type="text" name="maintenance_charge" class="form-control form-control-sm" 
                              placeholder="Maintenance Charges" style="width:60%;">
                            <select name="maintenance_charge_unit" class="form-control form-control-sm" style="width: 41%;position: absolute;right: 0;top: 36px;">
                                <option value="Monthly">Monthly</option>
                                <option value="Quarterly">Quarterly</option>
                                <option value="Yearly">Yearly</option>
                                <option value="One-Time">One-Time</option>
                            </select>
                        </div>');
?>
                        <div class="form-group col-sm-3" style="position:relative;">
                           <label>Maintenance Charges <input name="property_rent_lease[maintenance_charge]" type="checkbox" style="margin-left:10px;" value="<?=$maintenance_charge?>" >  </label>
                           <input type="text" name="maintenance_charge" class="form-control form-control-sm" 
                              placeholder="Maintenance Charges" style="width:60%;">
                            <select class="form-control form-control-sm" style="width: 41%;position: absolute;right: 0;top: 36px;">
                                <option value="1">Monthly</option>
                                <option value="2">Quarterly</option>
                                <option value="2">Yearly</option>
                                <option value="2">One-Time</option>
                            </select>
                        </div>
                  
               </div> 
              
          </div>
       </div>
     </div>
  </div>
  <!--Rent/ Lease Details end-->
</form>

<div class="row">
    <div class="col-sm-12">
       <div class="card">
          <div class="card-header d-flex justify-content-between" style="padding:2px 30px;">
             <div class="header-title">
                <h4 class="card-title"> @yield('title') </h4>
             </div>
          </div>
          <div class="card-body">
             <div class="table-responsive">
                <table id="category-list"  class="table table-striped" style="width:100%" >
                   <thead>
                      <tr class="ligth">
                         <th style="width:20px;">#</th>
                         <th>Type</th>
                         <th>Category</th>
                         <th>Sub Category</th>
                         <th style="width:100px;">Status</th>
                         <th>Action</th>
                      </tr>
                   </thead>
                   <tfoot>
                      <tr>
                         <th>#</th>
                         <th>Type</th>
                         <th>Category</th>
                         <th>Sub Category</th>
                         <th>Status</th>
                         <th>Action</th>
                      </tr>
                   </tfoot>
                </table>
             </div>
          </div>
       </div>
    </div>
</div>

@endsection
@push('scripts')

<script>
    $(document).on('click','.update',function(){
         var id        = $(this).attr('data-id'); 
         var type        = $(this).attr('type'); 
         var category    = $(this).attr('category'); 
         var subcategory = $(this).attr('subcategory'); 
         
        $.get("{{route('get_category')}}",{type:type},function(ret){
           $('.category').html(ret);
        });
        
         var property_location_key = $(this).attr('property_location_key').split(','); 
         var property_features_key = $(this).attr('property_features_key').split(','); 
         var property_area_key = $(this).attr('property_area_key').split(','); 
         var property_rent_lease_key = $(this).attr('property_rent_lease_key').split(','); 
         
        
        $.each(property_location_key, function( index, value )
        {
          $('input:checkbox[name="property_location['+value+']"]').attr('checked', 'checked'); 
        });
        
        $.each(property_features_key, function( index, value )
        {
          $('input:checkbox[name="property_features['+value+']"]').attr('checked', 'checked'); 
        });
        
        $.each(property_area_key, function( index, value )
        {
          $('input:checkbox[name="property_area['+value+']"]').attr('checked', 'checked'); 
        });
        
        $.each(property_rent_lease_key, function( index, value )
        {
          $('input:checkbox[name="property_rent_lease['+value+']"]').attr('checked', 'checked'); 
        });
        
        $('#update_id').val(id);
        
        $('#type').val(type);
        $('#subcategory').val(subcategory);
        //$('#category_btn').text("Update");
        $('#category_btn').addClass('btn-warning');
        $('#subcategoryError').addClass('edit');
        //alert(type+"  "+category+"  "+subcategory);
        //alert(type+" "+category);
       setTimeout(function(){
                               $('#categoryedit').val(category);
                            }, 1000);
        
    });
</script>

<script>    
$('#category_load').hide();
  $('#categoryForm').on('submit',function(e){
		e.preventDefault();
		 $.ajax({
			        url: "{{route('admin_category')}}",
				    type: "POST",
				    data:  new FormData(this),
					contentType: false,
		   		    cache: false,
					processData:false,
				    beforeSend : function()
							   {
								   $('#category_load').show();
                                   $('#category_btn').prop('disabled', true);
                                   
							   },
				    success: function(data) 
					  {
                          //alert(data);
                           $('#category_load').hide();
						  var res=JSON.parse(data);
                           if(res.err===1)
							{
                                $('#typeError').html(typeof res.msg.type === 'undefined' ? '' : res.msg.type);
                                $('#categoryError').html(typeof res.msg.category === 'undefined' ? '' : res.msg.category);
                                $('#subcategoryError').html(typeof res.msg.subcategory === 'undefined' ? '' : res.msg.subcategory);
                                
                                
                                $('#category_btn').prop('disabled', false);
							}
							else
							{
                                 $('#category-list').DataTable().ajax.reload();
                                $.notify(res.msg, "success");
                                $('.text-danger').html('');
                                //swal("", res.msg , "success");
                                
                                $('#categoryForm')[0].reset();
                                 $('#category_btn').prop('disabled', false);
							}
					  }
		      });
	});
</script>

<script>
$(document).ready(function(){
   
 $('#category-list').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{route('admin_category_list')}}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'type', name: 'type'},
            {data: 'category', name: 'category'},
            {data: 'subcategory', name: 'subcategory'},
            {data: 'status', name: 'status'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ],
        dom: 'lBfrtip',
        initComplete: function () {
            this.api().columns().every(function (colIdx) {
                if (colIdx == 0||colIdx == 4||colIdx == 5) return;
                var column = this;
                var input = document.createElement('input');
                $(input).appendTo($(column.footer()).empty())
                .on('change', function () {
                    var val = $.fn.dataTable.util.escapeRegex($(this).val());

                    column.search(val ? val : '', true, false).draw();
                });
            });
        },
        buttons: [
                    { extend: 'excel', exportOptions: { columns: [0,1,2,3]} },
                    { extend: 'csv',   exportOptions: { columns: [0,1,2,3]} },
                    { extend: 'pdf',   exportOptions: { columns: [0,1,2,3]} },
                    { extend: 'print', exportOptions: { columns: [0,1,2,3]} },
                    { extend: 'copy',  exportOptions: { columns: [0,1,2,3]} },        
                ] 
    });
    
    
});
</script> 

<script>
$(document).on('change','.property_type',function(){
    var type = $(this).val();
    if(type == '')
              {
                  return false;
              }
    $.get("{{route('get_category')}}",{type:type},function(ret){
          $('.category').html(ret);
     });
});
</script>

@endpush