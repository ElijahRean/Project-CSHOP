@extends('layouts.app')

@section('content')
    <h1>Checkout</h1>
    <form action="{{ route('checkout.place-order') }}" method="post">
        @csrf>
<div class="checkout-container">
    <div class="checkout-header">Contact information</div>
    <div class="checkout-input-container">
        <label for="first-name" class="checkout-input-name">First Name *</label>
        <input type="text" id="first-name" class="checkout-input-field">
    </div>
    <div class="checkout-input-container">
        <label for="last-name" class="checkout-input-name">Last Name *</label>
        <input type="text" id="last-name" class="checkout-input-field">
    </div>
    <div class="checkout-input-container">
        <label for="address-1" class="checkout-input-name">Address 1 *</label>
        <input type="text" id="address-1" class="checkout-input-field">
    </div>
    <div class="checkout-input-container">
        <label for="address-2" class="checkout-input-name">Address 2</label>
        <input type="text" id="address-2" class="checkout-input-field">
    </div>
    <div class="checkout-input-container">
        <label for="country" class="checkout-input-name">Country *</label>
        <input type="text" id="country" class="checkout-input-field">
    </div>
    <div class="checkout-input-container">
        <label for="city" class="checkout-input-name">City *</label>
        <input type="text" id="city" class="checkout-input-field">
    </div>
    <div class="checkout-input-container">
        <label for="phone" class="checkout-input-name">Phone *</label>
        <input type="text" id="phone" class="checkout-input-field">
    </div>
    <div class="checkout-input-container">
        <label for="zip" class="checkout-input-name">ZIP Code *</label>
        <input type="text" id="zip" class="checkout-input-field">
    </div>
    <table>
        <thead>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cartItems as $cartItem)
                <tr>
                    <td>{{ $cartItem->product->name }}</td>
                    <td>{{ $cartItem->quantity }}</td>
                    <td>${{ $cartItem->product->price }}</td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th colspan="2">Total:</th>
                <th>${{ $total }}</th>
            </tr>
        </tfoot>
    </table>
    <button type="submit" class="proceed-payment">Proceed Payment</button>

</div>
</form>
    <table>
        <thead>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cartItems as $cartItem)
                <tr>
                    <td>{{ $cartItem->product->name }}</td>
                    <td>{{ $cartItem->quantity }}</td>
                    <td>${{ $cartItem->product->price }}</td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th colspan="2">Total:</th>
                <th>${{ $total }}</th>
            </tr>
        </tfoot>
    </table>
@endsection
