<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    @include('partials.footer.footer')

    <div class="cart-container">
        <div class="cart-header"></div>
        <div class="cart-body">
            <div class="cart-item-container">
                <div class="cart-item"></div>
                {{-- Script to generate items from cart DB --}}
            </div>
        </div>
        <div class="cart-footer"></div>
    </div>
</body>
</html>
