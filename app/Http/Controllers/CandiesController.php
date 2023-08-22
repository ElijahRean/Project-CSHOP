<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candy;

class CandiesController extends Controller
{
    public function index()
    {
        $products = Candy::all(); // Retrieve all candies from the database
        return view('products.index', compact('products'));
    }

    public function show($id)
    {
        $product = Candy::findOrFail($id); // Find the candy with the given ID
        return view('productDetailsPage', compact('product'));
    }

}
