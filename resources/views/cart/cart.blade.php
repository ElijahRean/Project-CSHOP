@extends('layouts.app')

    @include('partials.header');

    <div class="cart-container">
        <div class="cart-header">
            <div class="cart-name">Shopping Cart</div>
            <div class="cart-remove-all">Remove all</div>
        </div>
        <div class="cart-body">
            <div class="cart-item">
                <img src="{{ asset('images/bottle.jpg') }}" alt="bottle">
                <div class="cart-item-info">Watter bottle<br>500ml</div>
                <div class="cart-item-quantity-container">
                    <button class="cart-item-quantity-increase" type="button">+</button>
                    <div>1</div>
                    <button class="cart-item-quantity-decrease" type="button">-</button>
                </div>
                <div class="cart-item-price-container">
                    <div class="cart-item-price">$4.20</div>
                    <div class="cart-item-remove">Remove</div>
                </div>
            </div>
            <div class="cart-item">
                <img src="{{ asset('images/bottle.jpg') }}" alt="bottle">
                <div class="cart-item-info">Watter bottle<br>500ml</div>
                <div class="cart-item-quantity-container">
                    <button class="cart-item-quantity-increase" type="button">+</button>
                    <div>1</div>
                    <button class="cart-item-quantity-decrease" type="button">-</button>
                </div>
                <div class="cart-item-price-container">
                    <div class="cart-item-price">$4.20</div>
                    <div class="cart-item-remove">Remove</div>
                </div>
            </div>
            <div class="cart-item">
                <img src="{{ asset('images/bottle.jpg') }}" alt="bottle">
                <div class="cart-item-info">Watter bottle<br>500ml</div>
                <div class="cart-item-quantity-container">
                    <button class="cart-item-quantity-increase" type="button">+</button>
                    <div>1</div>
                    <button class="cart-item-quantity-decrease" type="button">-</button>
                </div>
                <div class="cart-item-price-container">
                    <div class="cart-item-price">$4.20</div>
                    <div class="cart-item-remove">Remove</div>
                </div>
            </div>
            {{-- Script to generate items from cart DB --}}
        </div>
        <div class="cart-footer">
            <div class="cart-total">$0.00</div>
            <form action="{{ route('checkout.index') }}" method="get">
    @csrf
    <button type="submit">Checkout</button>
</form>
        </div>
    </div>


    @include('partials.footer.footer');

