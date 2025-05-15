<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseviewController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EnrollController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

// Route::get('/', function () {
//     return view('home');
// });




Route::group(['prefix'=>'admin'],function(){

    //login page
Route::get('/login',[AuthenticationController::class,'viewlogin'])->name('login');
Route::post('/loggedin',[AuthenticationController::class,'afterlogin'])->name('after.login');


Route::group(['middleware'=>'auth'],function(){

    Route::get('/logout',[AuthenticationController::class,'logout'])->name('log.out');
   
    //dashboard

    Route::get ('/dashboard',[DashboardController::class,'home'] )->name('dashboard');

    
//category  routelist

Route::get ('/categorylist',[CategoryController::class,'list'] )->name('category.list');
Route::get ('/categorycreate',[CategoryController::class,'form'] )->name('cat.create');   
Route::post ('/categorystore',[CategoryController::class,'store'] )->name('cat.store'); 
Route:: get('/categorydelete/ {id}',[CategoryController::class,'delete']) ->name ('cat.delete');

//course routelist

Route::get ('/courselist',[CourseController::class,'mycourse'] ) ->name('course') ;
Route::get ('/coursecreate',[CourseController::class,'create'] ) ->name('courselist') ;
Route::post ('/coursestore',[CourseController::class,'store'] ) ->name('course.store') ;
Route::get('/coursedelete/{id}',[CourseController::class,'delete'] ) ->name('coursedelete') ;
//instructor routelist

Route::get('/instructorlist',[InstructorController::class,'myinstructor'])->name('instructor');
Route::get('/instructor.create',[InstructorController::class,'create'])->name('i_list');
Route::post('/instructor.store',[InstructorController::class,'store'])->name('i_store');
Route::get('/instructor.delete/{id}',[InstructorController::class,'delete'])->name('i_delete');
//viewing instructor
Route::get('/InstructorView/{id}',[InstructorController::class,'profile'])->name('i.view');


});

});

// Route for frontend 
//home


Route::get('/',[homeController::class,'myhome'])->name('home');
//registraion/login route
Route::get('/studens/regitster',[StudentController::class,'viewregister'])->name('s.register');
Route::post('/student/registration/submit',[StudentController::class,'store'])->name('register.store');
Route::get('/student/login',[StudentController::class,'viewlogin'])->name('s.login');
Route::post('/loggedin',[StudentController::class,'loginstore'])->name('login.store');

//courseview Route
Route::get('/course/view',[CourseviewController::class,'viewcourse'])->name('course.view');

//add to cart 
Route::get('/student/{course}',[EnrollController::class,'addtocart'])->name('enroll.cart');
//course cart view
Route::get('/course/cartview',[EnrollController::class,'coursecartview'])->name('cart.view');


Route::group(['middleware'=>'student'],function(){
 //checkout course enrollment
Route::get('/check/enrollment',[EnrollController::class,'checkEnroll'])->name('check.enroll');
//place course enrollment
Route::post('/enrollment',[EnrollController::class,'placeEnroll'])->name('place.enroll');

});











