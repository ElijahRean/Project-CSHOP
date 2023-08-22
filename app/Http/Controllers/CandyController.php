<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candy;

class CandyController extends Controller
{
    // public function index()
    // {
    //     $products = Candy::all(); // Fetch all products from the database

    //     return view('test.products-test', compact('products')); // Pass data to the view
    // }
    public function frontPage()
    {
        $products = Candy::all(); // Fetch all products from the database

        return view('products.productListPage', compact('products')); // Pass data to the view
    }

//     public function show(Product $user): RedirectResponse //product id ,find by model
//     {
//         $user->delete(); //product model

//         return redirect()->route('admin.user.index')
//             ->with('success','Company has been deleted successfully');
//     }
//
}
