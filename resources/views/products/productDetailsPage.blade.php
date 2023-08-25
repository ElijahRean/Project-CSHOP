
@extends('layouts.app')

@section('content')
    <script type="text/javascript" src="{{ asset('js/toggleTheme.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/quantity-pdp.js') }}"></script>

    <div class="container">
            <div class="product-content">
                <div class="product-images">
                    <img class="main-image" src="{{ url($product->image) }}" alt="Product Image">

                </div>
                <div class="product-info">
                <h1 class="product-heading text-left">{{ $product->name }}</h1>
                    <div class="description">
                    <p>{{ $product->description }}</p>
                    </div>
                    <div class="parameters">
                        <p class="parameter"><strong>Color:</strong> {{ $product->color }}</p>
                        <p class="parameter"><strong>Price:</strong> <span class="price">{{ $product->price }}</span></p>
                    </div>
                    @auth
                    <form action="{{ route('cart.add', $product->id) }}" method="POST">
                        @csrf
                        <div id="quantityContainer"><strong>Quantity:</strong>
                            <button type="button" class="quantity-btn minus-btn">-</button>
                                <div class="quantityContainer" id="quantityDisplay">1</div>
                                <input class="d-none" id="quantityValue" type="number" value="1" name="quantity">
                            <button type="button" class="quantity-btn plus-btn">+</button>
                        </div>
                        <div class="gradient-buttons">
                            <button type="submit" class="button-nice mt-3">Add to Cart</button>
                        </div>
                    </form>
                    @else
                    <form action="{{ route('login') }}" method="GET">
                        @csrf
                        <input type="hidden" name="product" value="{{ $product->id }}">
                        <div class="gradient-buttons">
                            <button type="submit" title="Login" class="button-nice mt-3">Please login to purchase</button>
                        </div>
                    </form>
                    @endauth

                </div>
            </div>

    </div>
@endsection
