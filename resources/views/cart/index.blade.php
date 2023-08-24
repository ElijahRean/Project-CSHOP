@extends('layouts.app')

@section('content')
<div class="cart-container">
    <div class="cart-header">
        <div class="cart-name">Shopping Cart</div>
        <div class="cart-remove-all">Remove all</div>
    </div>
    <div class="cart-body">
        @foreach($products as $product)
        @if(isset($cartItems[$product->id]))
        <div class="cart-item">
            <img src="{{ asset('images/bottle.jpg') }}" alt="bottle">
            <div class="cart-item-info">{{ $product->name }}<br>{{ $product->description }}</div>
            <div class="cart-item-quantity-container">
                <form action="{{ route('cart.updateQuantity', $product->id) }}" method="POST">
                    @csrf
                    <button class="cart-item-quantity-decrease" type="button">-</button>
                    <input type="number" name="quantity" value="{{ $cartItems[$product->id]['quantity'] }}" min="1">
                    <button class="cart-item-quantity-increase" type="button">+</button>
                    <button type="submit">Update</button>
                </form>
            </div>
            <div class="cart-item-price-container">
                <div class="cart-item-price">${{ $product->price }}</div>
                <form action="{{ route('cart.remove', $product->id) }}" method="POST">
                    @csrf
                    <button class="cart-item-remove" type="submit">Remove</button>
                </form>
            </div>
        </div>
        @endif
        @endforeach
    </div>
    <div class="cart-footer">
        <div class="cart-total">${{ number_format($total, 2) }}</div>
        <form action="{{ route('checkout.index') }}" method="get">
        @csrf
        <button type="submit" class="button-nice" style="width:200px;">Checkout</button>
        </form>
    </div>
</div>
@endsection
