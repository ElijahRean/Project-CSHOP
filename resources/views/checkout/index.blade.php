@extends('layouts.app')

@section('content')
<div class="cart-container">
<div class="cart-header">
        <h2><strong>Checkout</strong><h2>
</div>
    <form action="{{ route('checkout.place-order') }}" method="post" class="contact-form">
        @csrf
        
        <p class="description">Please provide your contact information and review your order:</p>

        <div class="row">
            <div class="col-md-6">
                <input type="text" name="name" id="first-name" class="form-control rounded border-white mb-3 form-input"
                    placeholder="First Name *" required>
            </div>
            <div class="col-md-6">
                <input type="text" name="last_name" id="last-name" class="form-control rounded border-white mb-3 form-input"
                    placeholder="Last Name *" required>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <input type="text" name="addressone" id="address-1" class="form-control rounded border-white mb-3 form-input"
                    placeholder="Address 1 *" required>
            </div>
            <div class="col-md-6">
                <input type="text" name="addresstwo" id="address-2" class="form-control rounded border-white mb-3 form-input"
                    placeholder="Address 2">
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <input type="text" name="country" id="country" class="form-control rounded border-white mb-3 form-input"
                    placeholder="Country *" required>
            </div>
            <div class="col-md-6">
                <input type="text" name="city" id="city" class="form-control rounded border-white mb-3 form-input"
                    placeholder="City *" required>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <input type="number" name="phone" id="phone" class="form-control rounded border-white mb-3 form-input"
                    placeholder="Phone *" required>
            </div>
            <div class="col-md-6">
                <input type="text" name="zip" id="zip" class="form-control rounded border-white mb-3 form-input"
                    placeholder="ZIP Code *" required>
            </div>
        </div>
        <hr class>

<div class="checkout-summary">
    <div class="row">
        <div class="col-md-12 py-1">
            <h4 class="mb-0 py-1">Order Summary</h4>
        </div>
    </div>

    @foreach ($cartItems as $cartItem)
    <div class="row border-bottom py-1 border-danger">
        <div class="col-md-4 py-1">{{ $cartItem->product->name }}</div>
        <div class="col-md-4 py-1">{{ $cartItem->quantity }}</div>
        <div class="col-md-4 text-right py-1">${{ $cartItem->product->price }}</div>
    </div>
    @endforeach

    <div class="row border-top pt-1">
        <div class="col-md-8 py-1"><strong>Total:</strong></div>
        <div class="col-md-4 text-right py-1"><strong>${{ $total }}</strong></div>
    </div>
</div>

        <div class="submit-button-wrapper py-5">
            <button type="submit" class="button-nice" style="width:100%;">Proceed Payment</button>
        </div>
    </form>
</div>
@endsection