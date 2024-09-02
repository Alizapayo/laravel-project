<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BarberController;
use App\Http\Controllers\ServicePricesController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\FrontendController;

Route::get('/', function () {
    return view('welcome');
}); 

Route::get('/home', function () {
    return view('home');
});


Route::get('/allwork', function () {
    return view('allwork');
});



Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');



//barber
Route::get('/barber', [BarberController::class, 'index'])->name('barber');
Route::post('/barber/store', [BarberController::class, 'store'])->name('barber.store');
Route::post('/barber', [BarberController::class, 'store']);
Route::put('/barber/{id}', [BarberController::class, 'update'])->name('barber.update');
Route::delete('/barber/{id}', [BarberController::class, 'delete']);




//services
Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/services/create', [ServiceController::class, 'create'])->name('services.create');
Route::post('/services/store', [ServiceController::class, 'store'])->name('services.store');
Route::put('/services/{id}', [ServiceController::class, 'update'])->name('services.update');  // แก้ไขข้อมูล
Route::delete('/services/{id}', [ServiceController::class, 'delete'])->name('services.delete');  // ลบข้อมูล
//serviceprice
Route::get('/serviceprice', [ServicePricesController::class, 'index'])->name('serviceprice');
Route::post('/serviceprice/store', [ServicePricesController::class, 'store'])->name('serviceprice.store');
Route::put('/serviceprice/{id}', [ServicePricesController::class, 'update'])->name('serviceprice.update');
Route::delete('/serviceprice/{id}', [ServicePricesController::class, 'delete'])->name('serviceprice.delete');

Route::get('/', [FrontendController::class, 'index']);
Route::get('/booking', [BookingController::class, 'index'])->name('booking');
Route::post('/booking/store', [BookingController::class, 'store'])->name('booking.store');
Route::get('/fetch-price', [BookingController::class, 'fetchPrice'])->name('fetch.price');

// web.php (ไฟล์ Routes)








//Route::get('/barber', function () {
  //  return view('barber');
//});


