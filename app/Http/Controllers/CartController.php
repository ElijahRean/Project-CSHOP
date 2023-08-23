<?php

namespace App\Http\Controllers;

use App\Helpers\Cart;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Cookie;


class CartController extends Controller
{
    public function index()
    {
        list($products, $cartItems) = Cart::getProductsAndCartItems();
        $total = 0;
        foreach ($products as $product) {
            $total += $product->price * $cartItems[$product->id]['quantity'];
        }

        return view('cart.index', compact('cartItems', 'products', 'total'));
    }

    public function add(Request $request, Product $product)
    {
        $quantity = $request->post('quantity', 1);
        $user = $request->user();
        $cartItem = CartItem::where(['user_id' => $user->id, 'product_id' => $product->id])->first();
        if ($cartItem) {
            $cartItem->quantity += $quantity;
            $cartItem->update();
        } else {
            $data = [
                'user_id' => $request->user()->id,
                'product_id' => $product->id,
                'quantity' => $quantity
            ];
            CartItem::create($data);
        }

        return redirect()->back();
    }

    public function remove(Request $request, Product $product)
    {
        $user = $request->user();
        $cartItem = CartItem::query()->where(['user_id' => $user->id, 'product_id' => $product->id])->first();
        if ($cartItem) {
            $cartItem->delete();
        }

        return redirect()->back();
    }

    public function updateQuantity(Request $request, Product $product)
    {
        $quantity = (int)$request->post('quantity');
        $user = $request->user();
        CartItem::where(['user_id' => $request->user()->id, 'product_id' => $product->id])->update(['quantity' => $quantity]);
        return redirect()->back();
    }
}