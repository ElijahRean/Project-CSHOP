<?php

use App\Http\Controllers\ProductController;
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
    return view('welcome');
});

<<<<<<< HEAD
Route::get('/product/{productName}', [ProductController::class, 'show']);

=======
Route::get('/cart', function () {
    return view('cart/cart');
});

Route::get('/products/{productName}', [ProductController::class, 'show']);
>>>>>>> 59bf35c6cf6b4ffe5d0286de00d8cfaedc1902ab
