@extends('layouts.app')

@include('partials.header');

@include('slider.slider')

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="container">
    <h1>Product List</h1>
    <div class="row">
    @foreach ($products as $product)
        <div class="col-xl-3 col-md-4 col-sm-6 mb-4">
            <div class="card">
                <img src="{{ url($product->image) }}" alt="{{ $product->name }}" class="product-img">
                <div class="card-body text-center">
                    <a href="{{ route('product.show', $product->id) }}" class="text-decoration-none"><h4 class="card-title mb-2 text-danger">{{ $product->name }}</h4></a>
                    <div class="card-text">${{ $product->price }}|
                        <form action{{ route('addproduct.to.cart', $product->id)}} method="POST">
                            {{-- jauztaisa lai caur formu nosuta id un hardcoded quantity 1 --}}
                            <a href="{{ route('addproduct.to.cart', $product->id)}}" class="list__item">
                                <i class="fas fa-shopping-cart" ></i> Add to Cart
                            </a>
                            <button type="submit" class="list__item">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@include('partials.footer.footer');
