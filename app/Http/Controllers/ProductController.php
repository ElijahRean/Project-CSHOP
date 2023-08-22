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

        return redirect()->route('admin.products');
    }

    // Remove a product
    public function destroy(Product $product) {
        $product->delete();

        return back()->with('success', 'Product deleted successfully');
    }
}


