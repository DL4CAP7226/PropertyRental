<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PropertyType;
use App\Models\Category;

use App\Models\Property;
use App\Models\PropertyImage;

class TestController extends Controller
{
    
    public function test()
    { 
        
        $property = Property::with('user:id,name')->get();
        echo "<pre>";
        foreach($property as $prop)
        {
            //echo $prop->property_name." - ";
            echo $prop->user->name.'<br>';
            //print_r($prop->user);
        }
        
    }
    
    public function test_1()
    {
        
        /*$properties = Property::all();
        
        echo "<pre>";
        foreach($properties as $prop)
        {
            print_r($prop->images);
        }*/
        
       /* $properties = Category::all();
        
        echo "<pre>";
        foreach($properties as $prop)
        {
            print_r($prop->subcategory);
        }*/
        
         $properties = PropertyType::all();
        
        echo "<pre>";
        foreach($properties as $type)
        {
            echo $type->name."<br>";
            
            foreach($type->category as $category)
            {
                echo "&nbsp;&nbsp;".$category->name."<br>";
                
                foreach($category->subcategory as $subcat)
                {
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$subcat->subcategory_name."<br>";
                }
            }
            
            echo "<hr>";
        }
        
    }
}
