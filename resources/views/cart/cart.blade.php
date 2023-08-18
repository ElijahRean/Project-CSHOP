<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

    @include('partials.header');
    @include('sidebar.sidebar');
    {{-- @include('partials.footer.footer'); --}}

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
            <button class="cart-checkout">Checkout</button>
        </div>
    </div>
</body>
</html>
