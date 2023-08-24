<?php
namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Order;
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
            'total' => $total
        ]);

        // Attach cart items to the order (many-to-many relationship)
        $order->cartItems()->attach($cartItems);

        // Clear the cart after checkout
        CartItem::where('user_id', $user->id)->delete();

        return view('checkout.confirmation', compact('order'));
    }
}
