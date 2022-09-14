<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SoonfrontController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SeatController;
use App\Http\Controllers\SeatfrontController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\SoondetailController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SoonController;
use App\Http\Controllers\TheaterController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ShowtimeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\ScheduleController;
use App\Models\Slide;

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

Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::get('/booking', [BookingController::class, 'index']);
Route::get('/comingsoon', [SoonfrontController::class, 'index']);
Route::get('/showtime', [ShowtimeController::class, 'index']);
Route::get('/seat', [SeatfrontController::class, 'index']);
Route::get('/aboutus', function(){
    return view('frontend.aboutus');
});
Route::get('/moviedetail/{id}', [ MovieController::class,'show'])->name('moviedetail');
Route::get('/soondetail/{id}', [ SoondetailController::class,'show'])->name('soondetail');
Route::get('/contact', [ContactUsController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactUsController::class, 'store'])->name('contact.store');

// profile edit 
Route::get('/editprofile', [ProfileController::class, 'edit_profile'])->name('edit_profile');
Route::put('/editprofile', [ProfileController::class, 'update_profile'])->name('update_profile');
Route::get('/editpassword', [ProfileController::class, 'changePassword'])->name('change-password');
Route::post('/editpassword', [ProfileController::class, 'updatePassword'])->name('update-password');

// slider 



Auth::routes();
  
/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::resource('products', ProductController::class);
    Route::resource('soons', SoonController::class);
    Route::resource('seats', SeatController::class);
    Route::resource('theaters', TheaterController::class);
    Route::resource('contacts',ContactController::class); 
    Route::resource('users', UserController::class);
    Route::resource('sliders',SlideController::class);
    Route::resource('schedules',ScheduleController::class);
});

  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {
  
    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});
Route::resource('testing', TestingController::class);