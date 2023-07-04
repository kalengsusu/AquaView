<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Route::get('home', [HomeController::class, 'index'])->name('home');

Route::get('profile', ProfileController::class)->name('profile');

Route::resource('employees', EmployeeController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/calculate', 'OrderController@calculateTotalAndLocation');

Route::get('/checkout', [OrderController::class, 'showCheckoutForm'])->name('checkout.form');

Route::post('/checkout', [OrderController::class, 'checkout'])->name('checkout.process');

Route::get('/checkout/confirmation/{totalPrice}', [OrderController::class, 'showConfirmation'])->name('checkout.confirmation');

Route::post('/checkout/confirm', [OrderController::class, 'confirmPayment'])->name('checkout.confirm');
