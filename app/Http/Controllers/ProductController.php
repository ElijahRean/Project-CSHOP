<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
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
=======
class ProductController extends Controller
{
    //
    public function show($productName) {

        $products = array(
            "Laptop" => array(
                "name" => "Laptop",
                "description" => "Powerful computing device for various tasks."
            ),
            "Smartphone" => array(
                "name" => "Smartphone",
                "description" => "Mobile communication and computing device."
            ),
            "Headphones" => array(
                "name" => "Headphones",
                "description" => "Audio output device for immersive listening."
            ),
            "Tablet" => array(
                "name" => "Tablet",
                "description" => "Portable touch-screen computing device."
            ),
            "Camera" => array(
                "name" => "Camera",
                "description" => "Capture moments with high-quality photos and videos."
            )
        );

        $product = $products[$productName] ?? null;

        return view('products.show', ['product' => $product]);
    //
}
>>>>>>> 59bf35c6cf6b4ffe5d0286de00d8cfaedc1902ab
}
