<?php


function getPropertyType($id)
{
    $row = DB::table('property_type')->find($id);
    return $row->name;
}

function getCategoryName($id)
{
    $row = DB::table('property_category')->find($id);
    return $row->name; 
}

function getSubCategoryById($id)
{
    $row = DB::table('property_sub_category')->find($id);
    return $row->subcategory_name;
}

function getPrimaryImage($property_id)
{
    $row = DB::table('properties_images')->where('property_id',$property_id)->first();
    return $row->image_name;
}

function getIdBySlug($slug,$table)
{
    $row = DB::table($table)->where('slug',$slug)->first();
    return $row->id;
}


function getSlugById($id,$table)
{
    $row = DB::table($table)->find($id);
    return $row->slug;
}

?>