<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    {{-- Bootstrap + Font Awesome Kit--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4c7fd93af7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('css/header.css')}}"> -->
    <title>Candy</title>
</head>

<body>


    <!-- header section -->
    @include('partials.header')

    <!-- slider section -->
    @include('slider.slider')

    <!-- item list section -->
    @include('partials.products')

    <!-- sidebarsection -->
    @include('sidebar.sidebar')

    <!-- footer section -->
    @include('partials.footer.footer')

    <!-- Include your JavaScript files if needed -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>

<script>

</script>

</html>

<?php

?>
