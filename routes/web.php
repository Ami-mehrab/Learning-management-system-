<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InstructorController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

// Route::get('/', function () {
//     return view('home');
// });




Route::get ('/',[DashboardController::class,'home'] );

//category  routelist 

Route::get ('/categorylist',[CategoryController::class,'list'] );  
Route::get ('/categorycreate',[CategoryController::class,'form'] );   
Route::post ('/categorystore',[CategoryController::class,'store'] ); 
Route:: get('/categorydelete/ {cat_delete}',[CategoryController::class,'delete']) ->name ('cat.delete');

//course routelist

Route::get ('/courselist',[CourseController::class,'mycourse'] ) ->name('course') ;
Route::get ('/coursecreate',[CourseController::class,'create'] ) ->name('courselist') ;
Route::post ('/coursestore',[CourseController::class,'store'] ) ->name('course.store') ;
Route::get('/coursedelete/{id}',[CourseController::class,'delete'] ) ->name('coursedelete') ;
//instructor routelist

Route::get('instructorlist',[InstructorController::class,'myinstructor'])->name('instructor');
Route::get('/instructor.create',[InstructorController::class,'create'])->name('i_list');
Route::post('/instructor.store',[InstructorController::class,'store'])->name('i_store');
Route::get('/instructor.delete/{id}',[InstructorController::class,'delete'])->name('i_delete');
