<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{

    // Fetch all products and display
    public function index() {
        $products = Product::all();
        return view('admin.products.list', compact('products'));
    }

    // Add a new product
    public function store(Request $request) {

        // Validate the data before insert to DB
        $validateData = $request->validate([
            'name' =>'required',
            'brand' =>'required',
            'flavor' =>'required',
            'color' =>'required',
            'description' =>'required',
            'price' =>'required|numeric',
            'image' =>'required|image',
        ]);

        // Image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('product_images', 'public');
            $validatedData['image'] = $imagePath;
        }

        // Create a new product
        Product::create($validateData);

        return redirect()->route('admin.products.list');
    }

    // Remove a product
    public function destroy(Product $product) {
        $product->delete();

        return redirect()->route('products.index');
    }
}


// public function show($productName) {
//     $products = [
//         [
//             'name' => 'Product 1',
//             'price' => 19.99,
//             'description' => 'This is the description for Product 1.',
//         ],
//         [
//             'name' => 'Product 2',
//             'price' => 29.99,
//             'description' => 'This is the description for Product 2.',
//         ],
//         [
//             'name' => 'Product 3',
//             'price' => 39.99,
//             'description' => 'This is the description for Product 3.',
//         ],];
//         $product = $products[$productName] ?? null;

//         return view('products.show', ['product' => $product]);
// }

