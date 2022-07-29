<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\PageController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes(['register'=>false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
/****admin auth section ***/
Route::group(['prefix'=>'admin'],function(){

    Route::get('/login',[App\Http\Controllers\Auth\Admin\LoginController::class,'showLoginForm'])->name('admin.login');
    Route::post('/login',[App\Http\Controllers\Auth\Admin\LoginController::class,'login'])->name('admin.login.post');
    Route::post('/logout',[App\Http\Controllers\Auth\Admin\LoginController::class,'logout'])->name('admin.logout');

});
/* dashboard all route */
Route::group(['prefix'=>'/school','middleware' => ['admin']], function() {
    /* dashboard */
    Route::get('/back-end', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::resource('about','App\Http\Controllers\Admin\AboutController');
    Route::resource('logo','App\Http\Controllers\Admin\LogoController');
    Route::resource('contact','App\Http\Controllers\Admin\ContactController');
    Route::resource('event','App\Http\Controllers\Admin\EventController');
    Route::resource('faq','App\Http\Controllers\Admin\FaqController');
    Route::resource('gallery','App\Http\Controllers\Admin\GalleryController');


    Route::resource('slider','App\Http\Controllers\Admin\SliderController');
    Route::get('slider/enable/{id}','App\Http\Controllers\Admin\SliderController@enable');
    Route::get('slider/disable/{id}','App\Http\Controllers\Admin\SliderController@disable');


    Route::resource('message','App\Http\Controllers\Admin\MessageController');
    Route::get('message/enable/{id}','App\Http\Controllers\Admin\MessageController@enable');
    Route::get('message/disable/{id}','App\Http\Controllers\Admin\MessageController@disable');

    Route::resource('link','App\Http\Controllers\Admin\LinkController');
    Route::get('link/enable/{id}','App\Http\Controllers\Admin\LinkController@enable');
    Route::get('link/disable/{id}','App\Http\Controllers\Admin\LinkController@disable');

    Route::resource('partner','App\Http\Controllers\Admin\PartnerController');
    Route::get('partner/enable/{id}','App\Http\Controllers\Admin\PartnerController@enable');
    Route::get('partner/disable/{id}','App\Http\Controllers\Admin\PartnerController@disable');

    Route::resource('policy','App\Http\Controllers\Admin\PolicyController');


});




// user side
// Home page
Route::get('/', [HomeController::class, 'index']);


// all routes related to about
Route::get('about/{title}', [PageController::class, 'about'])->name('about');

// end of about page


// all routes for course
Route::get('information',[CoursePageController::class,'information'])->name('course-information');
Route::get('curriculm',[CoursePageController::class,'curriculm'])->name('course-curriculm');
Route::get('developmentprogram',[CoursePageController::class,'developmentprogram'])->name('course-developmentprogram');
Route::get('preprationprogram',[CoursePageController::class,'preprationprogram'])->name('course-preprationprogram');
Route::get('sportsprogram',[CoursePageController::class,'sportsprogram'])->name('course-sportsprogram');
Route::get('enrichmentprogram',[CoursePageController::class,'enrichmentprogram'])->name('course-enrichmentprogram');


//  all routed for school

Route::get('elementary',[SchoolPageController::class,'elementary'])->name('school_elementary');
Route::get('gallery',[SchoolPageController::class,'gallery'])->name('school_gallery');
Route::get('secondary',[SchoolPageController::class,'secondary'])->name('school_secondary');
Route::get('highersecondary',[SchoolPageController::class,'highersecondary'])->name('school_highersecondary');
Route::get('kindergarten',[SchoolPageController::class,'kindergarten'])->name('school_kindergarten');

