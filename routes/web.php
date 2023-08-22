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

Route::get('/test', [\App\Http\Controllers\CandyController::class, 'index'])->name('test/products-test');

Auth::routes();

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/adminpanel', function () {
        return view('adminpanel/admin_page');
    });
});

//////////////// Products

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('products');

    Route::name('admin')->group(function () {
        Route::get('/', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        // Show a list of products
        Route::get('/products', [ProductController::class, 'index'])->name('products');

        // Show form for creating a new product
        Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');

        // Store a new product
        Route::post('/products', [ProductController::class,'store'])->name('products.store');

        // Edit a product
        Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
        });

    });




// Route::post('/register', 'RegisterController@create')->name('register');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::post('/contact', [ContactFormController::class, 'sendContactForm'])->name('contact.send');

