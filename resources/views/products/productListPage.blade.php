@extends('layouts.app')

@section('content')

@include('slider.slider')

<div class="container">
    <h1 class="text-center"></h1>
    <div class="row">
    @foreach ($products as $product)
        <div class="col-xl-3 col-md-4 col-sm-6 mb-4">
            <div class="card">
                <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="product-img">
                <div class="card-body text-center">
                    <a href="{{ route('product.show', $product->id) }}" class="text-decoration-none"><h4 class="card-title mb-2 text-danger">{{ $product->name }}</h4></a>
                    <div class="card-text">${{ $product->price }}</div>
                    <div class="card-text-add">
                    <form action="{{ route('cart.add', $product->id) }}" method="POST">
                            @csrf
                            <input class="d-none" type="number" name="quantity" value="1">
                            <button type="submit" class="list__item button-blank"><i class="fas fa-shopping-cart" ></i> Add to Cart</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@include('partials.contactform.contactform')

@endsection


