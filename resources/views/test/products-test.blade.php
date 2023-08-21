@extends('layouts.app')

@include('partials.header');
<div class="container">
    <h1>Product List</h1>
    <div class="row">
        @foreach ($products as $product)
        <div class="col-md-4">
            <div class="card">
                <img src="{{ url($product->image) }}" alt="{{ $product->name }}" class="product-img">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ $product->description }}</p>
                    <p class="card-text">${{ $product->price }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@include('partials.footer.footer');
