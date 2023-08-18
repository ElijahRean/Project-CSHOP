@extends('layouts.app')

@section('header')
    <!-- header section -->
    @include('partials.header')
@endsection

@section('content')

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
@endsection

@section('footer')
    <!-- footer section -->
    @include('partials.footer.footer')
@endsection
