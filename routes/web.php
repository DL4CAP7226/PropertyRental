<?php

use Illuminate\Support\Facades\Route;

/*################# Frontend Controller ###############################*/

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\RegisterController;
use App\Http\Controllers\Frontend\CustomerController;
use App\Http\Controllers\Frontend\EnquiryController;

/*################# PUBLIC ###############################*/
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\GeoLocationController;
use App\Http\Controllers\TestController;

 
/*HomeController Route*/

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('home',[HomeController::class,'index'])->name('home');
Route::get('about',[HomeController::class,'about'])->name('about');
Route::get('exploreGoa',[HomeController::class,'exploreGoa'])->name('exploreGoa');
Route::get('careers',[HomeController::class,'careers'])->name('careers');
Route::get('terms',[HomeController::class,'terms'])->name('terms');
Route::get('privacyPolicy',[HomeController::class,'privacyPolicy'])->name('privacyPolicy');
Route::get('advertiseWithUs',[HomeController::class,'advertiseWithUs'])->name('advertiseWithUs');
Route::get('newsAarticles',[HomeController::class,'newsArticles'])->name('newsAarticles');
Route::get('sitemap',[HomeController::class,'sitemap'])->name('sitemap');
Route::get('help',[HomeController::class,'help'])->name('help');
Route::get('faq',[HomeController::class,'faq'])->name('faq');
Route::get('premiumAds',[HomeController::class,'premiumAds'])->name('premiumAds');
Route::get('propertyServices',[HomeController::class,'propertyServices'])->name('propertyServices');
Route::get('contactUs',[HomeController::class,'contactUs'])->name('contactUs');

Route::get('property-details/{id}',[HomeController::class,'propertyDetails'])->name('property_details',['id']);
 
Route::get('property-type/{type}',[HomeController::class,'single'])->name('property_type',['type']);
Route::get('-{type}/{category}/{subcategory}',[HomeController::class,'category'])->name('category',['type','category','subcategory']);

/*RegisterController Route*/
Route::get('signup',[RegisterController::class,'index'])->name('customer_signup');
Route::post('signup',[RegisterController::class,'save'])->name('customer_signup');

/*EnquiryController Route*/
Route::post('/send-contact',[EnquiryController::class,'sendContact'])->name('send-contact');
Route::post('/send-enquiry',[EnquiryController::class,'sendEnquiry'])->name('send-enquiry');


/*LoginController Route*/

Route::get('/login',[LoginController::class,'loginForm'])->name('login');
Route::post('/login',[LoginController::class,'authentication'])->name('login');

/*AjaxController Route*/
Route::get('get-category',[AjaxController::class,'getCategory'])->name('get_category');
Route::get('get-sub-category',[AjaxController::class,'getSubCategory'])->name('get_sub_category');
Route::get('get_property_field',[AjaxController::class,'getPropertyField'])->name('get_property_field');
 
Route::get('change-status', [AjaxController::class, 'changeStatus'])->name('change_status');

/*GeoLocationController Route*/
Route::get('/location',[GeoLocationController::class,'index']);
Route::get('/test',[TestController::class,'test']);


/*for customer routes*/
Route::group(['prefix'=>'customer'],function(){
   
    Route::group(['middleware'=>['customer.auth']],function(){
        
        Route::get('/',[CustomerController::class,'dashboard'])->name('customer_dashboard');
        Route::post('customer-logout',[CustomerController::class,'logout'])->name('customer_logout');
        
        
    });  
});
/*for customer routes end*/


/*artisan command on server*/
Route::get('/clear', function () {
    $clearcache = Artisan::call('cache:clear');
    echo "Cache cleared<br>";

    $clearview = Artisan::call('view:clear');
    echo "View cleared<br>";

    $clearconfig = Artisan::call('config:cache');
    echo "Config cleared<br>";
    
    $clearconfig = Artisan::call('route:clear');
    echo "Route cleared<br>";
    
   
});