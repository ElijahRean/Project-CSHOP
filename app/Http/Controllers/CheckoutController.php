<?php
namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\CartItem;
use App\Models\OrderItems;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();
        $cartItems = CartItem::where('user_id', $user->id)->with('product')->get();
        $total = 0;

        foreach ($cartItems as $cartItem) {
            $total += $cartItem->product->price * $cartItem->quantity;
        }

        return view('checkout.index', compact('cartItems', 'total'));
    }
    public function placeOrder(Request $request)
    {
        $user = $request->user();
        $cartItems = CartItem::where('user_id', $user->id)->with('product')->get();
        $total = 0;

        foreach ($cartItems as $cartItem) {
            $total += $cartItem->product->price * $cartItem->quantity;
        }

        // Create an order
        $order = Order::create([
            'user_id' => $user->id,
            'total' => $total,
            'name' => $request->post('name'),
            'last_name' => $request->input('last_name'),
            'phone' => $request->input('phone'),
            'addressone' => $request->input('addressone'),
            'addresstwo' => $request->input('addresstwo'),
            'city' => $request->input('city'),
            'country' => $request->input('country'),
            'zip' => $request->input('zip'),
        ]);
        // Attach cart items to the order (many-to-many relationship)
        foreach ($cartItems as $cartItem) {
            OrderItems::create([
                'product_id' => $cartItem->product_id,
                'quantity' => $cartItem->quantity,
                'order_id' => $order->id,

            ]);
        };
        // Clear the cart after checkout
        CartItem::where('user_id', $user->id)->delete();

        return view('checkout.confirmation', compact('order'));
    }
}
