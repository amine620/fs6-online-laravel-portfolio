<?php

use App\Http\Controllers\AwardController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\InterestController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[ShowController::class,'show']);





Route::group(['middleware'=>'auth'],function(){


// experience
Route::get('admin.create_experience',[ExperienceController::class,'create_experience']);
Route::post('admin.store_experience',[ExperienceController::class,'store_experience']);
Route::delete('admin.destroy_experience/{id}',[ExperienceController::class,'destroy_experience']);
Route::get('admin.show_experience/{id}',[ExperienceController::class,"show_experience"]);
Route::put('admin.update_experience/{id}',[ExperienceController::class,"update_experience"]);

// education
Route::get('admin.create_education',[EducationController::class,'create_education']);
Route::post('admin.store_education',[EducationController::class,'store_education']);
Route::delete('admin.destroy_education/{id}',[EducationController::class,'destroy_education']);
Route::get('admin.show_education/{id}',[EducationController::class,"show_education"]);
Route::put('admin.update_education/{id}',[EducationController::class,"update_education"]);

//interest
Route::get('admin.create_interest',[InterestController::class,'create_interest']);
Route::get('admin.show_interest/{id}',[InterestController::class,'show_interest']);
Route::post('admin.store_interest',[InterestController::class,'store_interest']);
Route::delete('admin.destroy_interest/{id}',[InterestController::class,'destroy_interest']);
Route::put('admin.update_interest/{id}',[InterestController::class,'update_interest']);


// award
Route::get('admin.create_award',[AwardController::class,'create_award']);
Route::post('admin.store_award',[AwardController::class,'store_award']);
Route::delete('admin.destroy_award/{id}',[AwardController::class,'destroy_award']);
Route::get('admin.show_award/{id}',[AwardController::class,'show_award']);
Route::put('admin.update_award/{id}',[AwardController::class,'update_award']);


// profile

Route::get('admin.create_profile',[ProfileController::class,'create_profile']);
Route::post('admin.store_profile',[ProfileController::class,'store_profile']);
Route::delete('admin.destroy_profile/{id}',[ProfileController::class,'destroy_profile']);
Route::get('admin.show_profile/{id}',[ProfileController::class,'show_profile']);
Route::put('admin.update_profile/{id}',[ProfileController::class,'update_profile']);

// project
Route::get('admin.create_project',[ProjectController::class,'create_project']);


});



Route::group(['prefix'=>'admin_mrourid_amine_123'], function(){

    Auth::routes();

});