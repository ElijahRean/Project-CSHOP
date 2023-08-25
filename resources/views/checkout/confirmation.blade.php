@extends('layouts.app')

@section('content')

<div class="center">
    <h1>Order Confirmation</h1>
    <p>Your order (Order ID: {{ $order->id }}) has been placed successfully.</p>
    <p>Total Amount: ${{ $order->total }}</p>
</div>

@endsection
