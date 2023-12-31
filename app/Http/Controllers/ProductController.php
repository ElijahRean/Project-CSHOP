<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{

    // Fetch all products and display
    public function index(Request $request) {

        $sortColumn = $request->query('sort', 'id');
        $sortOrder = $request->query('order', 'asc');

        $products = Product::orderBy($sortColumn, $sortOrder)->paginate(6);

        return view('admin.products.list', compact('products', 'sortColumn', 'sortOrder'));
    }

    // Add a new product
    public function store(Request $request, Product $product) {

        $data = $request->validate([
            'name' =>'required|max:255',
            'color' =>'required|max:255',
            'description' =>'required|max:1055',
            'price' =>'required|numeric',
            'image' =>'required|image|mimes:jpg,png,jpeg,gif,svg,webp|max:2048',
        ]);

        // Image upload
        $name = $request->file('image')->store('public/images');
        $name = str_replace('public', 'storage', $name);
        $data['image'] = $name;

        Product::create($data);
        $data['image'] = $product->image;



        // Product::create($validatedData);
        return redirect()->route('admin.products.index')->with('success', 'Product added successfully');
    }

    public function edit(Product $product) {
        return view('admin.products.edit', compact('product'));
    }

    // Update
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' =>'required|max:255',
            'color' =>'required|max:255',
            'description' =>'required|max:1055',
            'price' =>'required|numeric',
            'image' =>'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $name = $request->file('image')->store('public/images');
            $name = str_replace('public', 'storage', $name);
            $data['image'] = $name;
        }

        $product = Product::find($id);
        $product->update($data);

        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully');
    }


    // Remove a product
    public function destroy(Product $product) {
        $product->delete();

        return back()->with('success', 'Product deleted successfully');
    }
}


