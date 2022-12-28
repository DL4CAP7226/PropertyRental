<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Router;
use Illuminate\Http\Request;
 

/*################# VENDOR ###############################*/
use App\Http\Controllers\Vendor\VendorDashboard;
use App\Http\Controllers\Vendor\VPropertyController;

/*
|--------------------------------------------------------------------------
| Vendor Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/



Route::get('',[VendorDashboard::class,'dashboard'])->name('vendor_dashboard');
Route::get('dashboard',[VendorDashboard::class,'dashboard'])->name('vendor_dashboard');
Route::post('logout',[VendorDashboard::class,'logout'])->name('vendor.logout');
 
/*VPropertyController Route*/
Route::get('property-save',[VPropertyController::class,'index'])->name('vendor_product_save');
Route::post('property-save',[VPropertyController::class,'save'])->name('vendor_product_save');
Route::get('property-list',[VPropertyController::class,'propertyList'])->name('vendor_property_list');
Route::get('property-view/{id}',[VPropertyController::class,'propertyView'])->name('vendor_property_view',['id']);