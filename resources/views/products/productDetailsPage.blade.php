@extends('layouts.app')

    @include('partials.header');
    @include('sidebar.sidebar');

    <div class="container">
    <h1 class="product-heading">Product Name</h1>
    <div class="product-content">
      <div class="product-images">
        <img class="main-image" src="{{url('/images/3.webp')}}" alt="Product Image">
        <div class="thumbnail-images">
          <img class="thumbnail" src="{{url('/images/4.webp')}}" alt="Thumbnail 1">
          <img class="thumbnail" src="{{url('/images/4.webp')}}" alt="Thumbnail 2">
          <img class="thumbnail" src="{{url('/images/4.webp')}}" alt="Thumbnail 3">
        </div>
      </div>
      <div class="product-info">
        <div class="price">$99.99</div>
        <button class="add-to-cart">Add to Cart</button>
        <div class="parameters">
          <p class="parameter"><strong>Brand:</strong> XYZ Brand</p>
          <p class="parameter"><strong>Flavour:</strong> Vanilla</p>
          <p class="parameter"><strong>Type:</strong> Product Type</p>
          <p class="parameter"><strong>Color:</strong> Blue</p>
        </div>
        <div class="description">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique neque et purus ullamcorper, et dignissim ligula bibendum.</p>
      <p>Ut ac leo vitae dolor facilisis consectetur. Suspendisse consectetur purus nec augue malesuada, ut varius dui faucibus.</p>
    </div>
      </div>
    </div>
    
  </div>
  @include('partials.footer.footer');