<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candy;

class CandyController extends Controller
{
    public function frontPage()
    {
        $products = Candy::all(); // Fetch all products from the database

        // return view('products.productListPage', compact('products'));

        return view('home', compact('products')); // Pass data to the view
    }
    public function separateProduct($id)
    {
    $product = Candy::find($id);

    return view('products.productDetailsPage', compact('product'));
    }
}
