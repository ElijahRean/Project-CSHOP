@extends('layouts.app')

@section('content')
    <!-- header section -->
    @include('partials.header')

<link rel="stylesheet" href="css/about.css">

<div>
  <div class="contact-form-wrapper d-flex justify-content-center">
    <form action="#" class="contact-form">
      <h2 class="about__title">Short story about Sweet Delights Candy Warehouse</h2>
      <div class="d-flex justify-content-center">
        <img src="images/candy_warehouse.jpg" alt="" class="about__image mt-3">
      </div>
        <p class="about__description mt-3">Sweet Delights Candy Warehouse is your ultimate destination for all things sugary and delightful. With a wide array of candies that range from traditional classics to modern creations, we're here to satisfy every craving. Our mission is to spread joy and create a haven for candy enthusiasts to indulge in their sweet passions. Explore our candy wonderland and experience the magic of pure delight at Sweet Delights Candy Warehouse.</p>
    </form>
  </div>
</div>

    <!-- footer section -->
    @include('partials.footer.footer')
@endsection
