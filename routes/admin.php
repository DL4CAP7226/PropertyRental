<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Router;
use Illuminate\Http\Request;
 

/*################# ADMIN ###############################*/
use App\Http\Controllers\Admin\AdminDashboard;
use App\Http\Controllers\Admin\ACategoryController;
use App\Http\Controllers\Admin\APropertyController;
use App\Http\Controllers\Admin\ACustomerController;
use App\Http\Controllers\Admin\AVendorController;
use App\Http\Controllers\Admin\ADeveloperController;
use App\Http\Controllers\Admin\CareerController;
use App\Http\Controllers\Admin\AdvertiseController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\NewsArticleController;
use App\Http\Controllers\Admin\ExploreGoaController;


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


Route::get('/',[AdminDashboard::class,'dashboard'])->name('admin_dashboard');
Route::get('test',[AdminDashboard::class,'test'])->name('admin_test');
Route::get('dashboard',[AdminDashboard::class,'dashboard'])->name('admin_dashboard');
Route::post('logout',[AdminDashboard::class,'logout'])->name('admin.logout');

Route::get('category',[ACategoryController::class,'index'])->name('admin_category');
Route::post('category',[ACategoryController::class,'save'])->name('admin_category');
Route::get('category-list',[ACategoryController::class,'categoryList'])->name('admin_category_list');
Route::get('category-status', [ACategoryController::class, 'changeStatus'])->name('category_status');

/*APropertyController Route*/
Route::get('property-save',[APropertyController::class,'index'])->name('admin_product_save');
Route::post('property-save',[APropertyController::class,'save'])->name('admin_product_save');
Route::get('property-list',[APropertyController::class,'propertyList'])->name('admin_property_list');
Route::get('property-view/{id}',[APropertyController::class,'propertyView'])->name('admin_property_view',['id']);
Route::get('property-delete/{id}', [APropertyController::class,'propertyDelete'])->name('admin_property_delete',['id']);

/*ADeveloperController Route*/
Route::get('developer-create',[ADeveloperController::class,'form'])->name('admin_developer_create');
Route::post('developer-create',[ADeveloperController::class,'create'])->name('admin_developer_create');


/*AVendorController Route*/
Route::get('vendor-list',[AVendorController::class,'List'])->name('admin_vendor_list');

/*Career Controller*/ 
Route::get('career',[CareerController::class,'index'])->name('career');
Route::get('createCareer', [CareerController::class, 'createCareer'])->name('createCareer');
Route::Post('addCareer', [CareerController::class, 'addCareer'])->name('addCareer');
Route::get('editCareer/{id}', [CareerController::class, 'editCareer'])->name('editCareer');
Route::post('updateCareer/{id}', [CareerController::class, 'update'])->name('updateCareer');
Route::get('deleteCareer/{id}', [CareerController::class, 'deleteCareer'])->name('deleteCareer');

/*Advertise Controller*/ 
Route::get('advertise',[AdvertiseController::class,'index'])->name('advertise');
Route::get('createAdvertise', [AdvertiseController::class, 'createAdvertise'])->name('createAdvertise');
Route::Post('addAdvertise', [AdvertiseController::class, 'addAdvertise'])->name('addAdvertise');
Route::get('editAdvertise/{id}', [AdvertiseController::class, 'editAdvertise'])->name('editAdvertise');
Route::post('updateAdvertise/{id}', [AdvertiseController::class, 'update'])->name('updateAdvertise');
Route::get('deleteAdvertise/{id}', [AdvertiseController::class, 'deleteAdvertise'])->name('deleteAdvertise');

/*Service Controller*/ 
Route::get('Service',[ServiceController::class,'index'])->name('Service');
Route::get('createService', [ServiceController::class, 'createService'])->name('createService');
Route::Post('addService', [ServiceController::class, 'addService'])->name('addService');
Route::get('editService/{id}', [ServiceController::class, 'editService'])->name('editService');
Route::post('updateService/{id}', [ServiceController::class, 'update'])->name('updateService');
Route::get('deleteService/{id}', [ServiceController::class, 'deleteService'])->name('deleteService');

/*NewsArticle Controller*/ 
Route::get('NewsArticle',[NewsArticleController::class,'index'])->name('NewsArticle');
Route::get('createNewsArticle', [NewsArticleController::class, 'createNewsArticle'])->name('createNewsArticle');
Route::Post('addNewsArticle', [NewsArticleController::class, 'addNewsArticle'])->name('addNewsArticle');
Route::get('editNewsArticle/{id}', [NewsArticleController::class, 'editNewsArticle'])->name('editNewsArticle');
Route::post('updateNewsArticle/{id}', [NewsArticleController::class, 'update'])->name('updateNewsArticle');
Route::get('deleteNewsArticle/{id}', [NewsArticleController::class, 'deleteNewsArticle'])->name('deleteNewsArticle');

/*ExploreGoa Controller*/ 
Route::get('ExploreGoa',[ExploreGoaController::class,'index'])->name('ExploreGoa');
Route::get('createExploreGoa', [ExploreGoaController::class, 'createExploreGoa'])->name('createExploreGoa');
Route::Post('addExploreGoa', [ExploreGoaController::class, 'addExploreGoa'])->name('addExploreGoa');
Route::get('editExploreGoa/{id}', [ExploreGoaController::class, 'editExploreGoa'])->name('editExploreGoa');
Route::post('updateExploreGoa/{id}', [ExploreGoaController::class, 'update'])->name('updateExploreGoa');
Route::get('deleteExploreGoa/{id}', [ExploreGoaController::class, 'deleteExploreGoa'])->name('deleteExploreGoa');




