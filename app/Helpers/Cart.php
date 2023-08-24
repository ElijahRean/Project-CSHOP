<?php

namespace App\Helpers;

use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;

class Cart
{
    public static function getCartItemsCount(): int
    {
        $user=\request()->user();
        return CartItem::where('user_id', $user->id)->sum('quantity');
    }

    public static function getCartItems()
    {
        $request =\request();
        $user = $request->user();
        if($user)
        return CartItem::where('user_id', $user->id)->get()->map(
            fn($item) => ['product_id' => $item->product_id, 'quantity' => $item->quantity]
        );
    }

    public static function getCountFromItems($cartItems) {
        return array_reduce($cartItems, fn($carry, $item) => $carry + $item['quantity'], 0);
    }

    public static function getProductsAndCartItems(): array
    {
        $cartItems = self::getCartItems();
        $ids = Arr::pluck($cartItems, 'product_id');
        $products = Product::query()->whereIn('id', $ids)->get();
        $cartItems = Arr::keyBy($cartItems, 'product_id');

        return [$products, $cartItems];
    }


}