<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candy;

class CandyController extends Controller
{
    public function index()
    {
        $products = Candy::all(); // Fetch all products from the database

        return view('test.products-test', compact('products')); // Pass data to the view
    }
}