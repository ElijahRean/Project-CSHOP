@extends('layouts.app')

@include('partials.header');

<div class="container">
  <div class="row">
    @foreach ($candies as $item)
    <div class="col-xl-3 col-md-4 col-sm-6 mb-4">
      <div class="card">
      <img src="{{url('/images/1.webp')}}"  alt="Product 1" class="product-img">
        <div class="card-body text-center">
          <h4 class="card-title mb-2">Ginger Candy</h4>
          <div class="card-text">$9.99 | <a href="#" class="list__item"><i class="fas fa-shopping-cart" ></i> Add to Cart</a></div>
        </div>
      </div>
    @endforeach
    </div>
    </div>
</div>
@include('partials.footer.footer');
