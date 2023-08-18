@extends('layouts.app')

@section('content')


    <!-- header section -->
    @include('partials.header')

    <!-- slider section -->
    @include('slider.slider')

    <!-- item list section -->
    @include('partials.products')

    <!-- sidebarsection -->
    @include('sidebar.sidebar')

    <!-- testimonials -->
    @include('partials.testimonials.testimonials')


    <!-- contactform -->
    @include('partials.contactform.contactform')

    <!-- footer section -->
    @include('partials.footer.footer')

    <!-- Include your JavaScript files if needed -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
@endsection
