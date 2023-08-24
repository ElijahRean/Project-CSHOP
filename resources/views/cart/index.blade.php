@extends('layouts.app')

@section('content')

<script type="text/javascript" src="{{ asset('js/quantity-cart.js') }}"></script>

<div class="cart-container">
    <div class="cart-header">
        <div class="cart-name"><strong>Shopping Cart</strong></div>
    </div>
    <div class="cart-body">
        @foreach($products as $product)
        @if(isset($cartItems[$product->id]))
        <div class="cart-item">
            <img src="{{ asset($product->image) }}" alt="product image">
            <div class="cart-item-info">{{ $product->name }}</div>

                <form class="cart-item-quantity-container" action="{{ route('cart.updateQuantity', $product->id) }}" method="POST">
                    @csrf

                    <button class="quantity-btn minus-btn" type="button">-</button>
                        <div class="cartQuantityDisplay">{{ $cartItems[$product->id]['quantity'] }}</div>
                        <input class="d-none cartQuantityValue" type="number" name="quantity" value="{{ $cartItems[$product->id]['quantity'] }}" min="1">
                    <button class="quantity-btn plus-btn" type="button">+</button>

                    <button class="cart-update" type="submit">Update</button>
                </form>

            <div class="cart-item-price-container">
                <div class="cart-item-price">${{ $product->price }}</div>
                <form class="cart-item-remove-container" action="{{ route('cart.remove', $product->id) }}" method="POST">
                    @csrf
                    <button class="cart-item-remove" type="submit">Remove</button>
                </form>
            </div>
        </div>
        @endif
        @endforeach
    </div>
    <div class="cart-footer">
        <div class="cart-total"><strong>${{ number_format($total, 2) }}</strong></div>
        <a href="/checkout"><button class="button-nice center" style="width:200px;">Checkout</button></a>
    </div>
</div>
@endsection
