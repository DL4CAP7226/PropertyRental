<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Property;
use App\Models\PropertyType;
use App\Models\Category;
use App\Models\SubCategory;


class HomeController extends Controller
{
    public function index(Request $request)
    {
        $top_property = Property::orderby('priority','asc')->get();
        $trending_project = Property::orderby('priority','asc')->get();
         
        $data =[
                'top_property'=>$top_property,
                'trending_project'=>$trending_project,
               ];
        
        return view('website.home',$data);
    }
    
    public function propertyDetails($id ='')
    {
       $property = Property::with('images')->find($id);
     
        
        $data =[
                'property'=>$property
               ];
        
        return view('website.property_details',$data);
    }  
    
    public function single($type = '')
    {
        echo $type;
        echo "jkl";
    }
    
    public function category($type,$category,$subcat)
    {
         $slug = $type.'/'.$category.'/'.$subcat; 
        $properties = Property::with('types')->with('subcat')->with('cat')->where('slug',$slug)->orderby('priority','asc')->get();
        
        $data =[
                'properties'=>$properties,
               ];
        
        return view('website.category',$data);
    }
    
    public function advertiseWithUs()
    {
        return view('website.advertiseWithUs');

    }

    public function contactUs()
    {
       return view('website.contactUs');
    }

    public function about()
    {
        return view('website.about');
    }

    public function exploreGoa()
    {
         $top_property = Property::orderby('priority','asc')->get();
        $trending_project = Property::orderby('priority','asc')->get();
         
        $data =[
                'top_property'=>$top_property,
                'trending_project'=>$trending_project,
               ];
               
        return view('website.exploreGoa', $data);
    }

    public function careers()
    {
        return view('website.careers');
    }

    public function terms()
    {
        return view('website.terms');
    }

    public function privacyPolicy()
    {
        return view('website.privacyPolicy');
    }

    public function newsArticles()
    {
        return view('website.newsArticles');
    }
    
    public function sitemap()
    {
        return view('website.sitemap');
    }
    
    public function help()
    {
        return view('website.help');
    }
    
    public function faq()
    {
        return view('website.faq');
    }
    
    public function premiumAds()
    {
        return view('website.premiumAds');
    }
    
    public function propertyServices()
    {
        return view('website.propertyServices');
    }
    
}
