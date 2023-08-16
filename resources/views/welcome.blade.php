<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Candy</title>
  </head>

  <body>


    <!-- header section -->
    {{-- @yield('content') --}}

    <!-- slider section -->
    {{-- @yield('contactform') --}}

    <!-- item list section -->
    {{-- @include('partials.footer.footer') --}}

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
