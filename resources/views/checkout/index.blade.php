@extends('layouts.app')

@section('content')
    <h1>Checkout</h1>
    <form action="{{ route('checkout.place-order') }}" method="post">
        @csrf
<div class="checkout-container">
    <div class="checkout-header">Contact information</div>
    <div class="checkout-input-container">
        <label for="first-name" class="checkout-input-name">First Name *</label>
        <input type="text" name="name" id="first-name" class="checkout-input-field">
    </div>
    <div class="checkout-input-container">
        <label for="last-name" class="checkout-input-name">Last Name *</label>
        <input type="text" name="last_name" id="last-name" class="checkout-input-field">
    </div>
    <div class="checkout-input-container">
        <label for="address-1" class="checkout-input-name">Address 1 *</label>
        <input type="text" name="addressone" id="address-1" class="checkout-input-field">
    </div>
    <div class="checkout-input-container">
        <label for="address-2" class="checkout-input-name">Address 2</label>
        <input type="text" name="addresstwo" id="address-2" class="checkout-input-field">
    </div>
    <div class="checkout-input-container">
        <label for="country" class="checkout-input-name">Country *</label>
        <input type="text" name="country" id="country" class="checkout-input-field">
    </div>
    <div class="checkout-input-container">
        <label for="city" class="checkout-input-name">City *</label>
        <input type="text" name="city" id="city" class="checkout-input-field">
    </div>
    <div class="checkout-input-container">
        <label for="phone" class="checkout-input-name">Phone *</label>
        <input type="number" name="phone" id="phone" class="checkout-input-field">
    </div>
    <div class="checkout-input-container">
        <label for="zip" class="checkout-input-name">ZIP Code *</label>
        <input type="text" name="zip" id="zip" class="checkout-input-field">
    </div>
    <div class="checkout-table ml-3 mt-4 mr-4 checkout-summary">
    <table class="table">
        <thead>
            <tr>
                <th scope="col" class="px-0 py-1">Product</th>
                <th scope="col" class="px-0 py-1">Quantity</th>
                <th scope="col" class="px-0 py-1">Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cartItems as $cartItem)
                <tr>
                    <td scope="row" class="px-0 py-1">{{ $cartItem->product->name }}</td>
                    <td scope="row" class="px-0 py-1">{{ $cartItem->quantity }}</td>
                    <td scope="row" class="px-0 py-1">${{ $cartItem->product->price }}</td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th scope="row" class="px-0 py-1" colspan="2">Total:</th>
                <th scope="row" class="px-0 py-1" >${{ $total }}</th>
            </tr>
        </tfoot>
    </table>

    </div>
    <div class="checkout-button">
        <button type="submit" class="proceed-payment btn-block" >Proceed Payment</button>
    </div>


</div>

</form>
@endsection
