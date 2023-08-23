<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\CandiesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\CandyController;


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

// Route::get('/', function () {
//     return view('home');
// });


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

Route::get('/checkout', function () {
    return view('checkout/checkout');
});

Route::get('/', [\App\Http\Controllers\CandyController::class, 'frontPage'])->name('products');
Route::get('/product/{id}', [CandyController::class, 'separateProduct'])->name('product.show');

Auth::routes();

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/adminpanel', function () {
        return view('adminpanel/admin_page');
    });
});

//////////////// Products
    Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {

    // Dashboard
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    // Show a list of products
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');

    Route::get('/admin/products', [ProductController::class, 'index'])->name('admin.products.list');

    // Show form for creating a new product
    Route::get('/products/create', function () {
        return view('admin.products.add');
    })->name('products.create');

    // Store a new product
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');

    // Edit a product
    Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');

    // Update a product
    Route::put('/products/{products}', [ProductController::class, 'update'])->name('products.update');

    // Remove a product
    Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');

    /////////// Users management /////////////////
    Route::get('/users', [UserController::class, 'index'])->name('users.index');

    // Route::get('users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');

            // Show form for creating a new user
            Route::get('/users/create', function () {
                return view('admin.users.add');
            })->name('users.create');

    // Route::post('/users', [ProductController::class, 'store'])->name('users.store');

    Route::delete('users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

    // Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');

});




// Route::post('/register', 'RegisterController@create')->name('register');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::post('/contact', [ContactFormController::class, 'sendContactForm'])->name('contact.send');


Route::get('/candies', [CandiesController::class, 'index'])->name('candies.index');
Route::get('/candies/{id}', [CandiesController::class, 'show'])->name('candies.show');
