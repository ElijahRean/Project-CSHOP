<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\UserController2;

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
    return view('home');
});


// Route::get('/product/{productName}', [ProductController::class, 'show']);
Route::get('/product', function () {
    return view('products/productDetailsPage');
});

Route::get('/cart', function () {
    return view('cart/cart');
});

Route::get('/about', function () {
    return view('about/about');
});

Route::get('/test', function () {
    return view('test/products-test');
});

Auth::routes();

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/adminpanel', function () {
        return view('adminpanel/admin_page');
    });
});

// Route::post('/register', 'RegisterController@create')->name('register');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::post('/contact', [ContactFormController::class, 'sendContactForm'])->name('contact.send');

