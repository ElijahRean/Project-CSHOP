<?php

namespace App\Http\Controllers;

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
}
