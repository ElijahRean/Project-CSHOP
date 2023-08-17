<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function show($productName) {
        $products = [
            [
                'name' => 'Product 1',
                'price' => 19.99,
                'description' => 'This is the description for Product 1.',
            ],
            [
                'name' => 'Product 2',
                'price' => 29.99,
                'description' => 'This is the description for Product 2.',
            ],
            [
                'name' => 'Product 3',
                'price' => 39.99,
                'description' => 'This is the description for Product 3.',
            ],];
            $product = $products[$productName] ?? null;

            return view('products.show', ['product' => $product]);
    }
}

