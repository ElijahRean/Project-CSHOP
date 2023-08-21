<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/productpage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Product Details</title>
</head>

<body>
    @include('partials.header')
    @include('sidebar.sidebar')
    {{-- <h1>Product details</h1>
    @if ($product)
    <h2>{{ $product['name']}}</h2>
    <h2>{{ $product['description']}}</h2>

    @else
    <p>Product not found</p>

    @endif --}}

    <div class="products">
        <div class="sections">
            <div class="main_img">
                <div class="product__img">
                    <img src="{{ asset('images/img-1.jpeg')}}" alt="">
                </div>
            </div>
            <div class="others_img">
                <div class="product__img_small">
                    <img class="img_sm1" src="{{ asset('images/img-1.jpeg')}}" alt="">
                    <img class="img_sm2" src="{{ asset('images/img-1.jpeg')}}" alt="">
                    <img class="img_sm3" src="{{ asset('images/img-1.jpeg')}}" alt="">
                    <img class="img_sm4" src="{{ asset('images/img-1.jpeg')}}" alt="">
                </div>
            </diV>
        </div>
            <div class = "right-section">
                <h1 class="lg-title ">Candy for Sandy</h1>
                    <p class="text__light">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere corrupti eos, quo est officiis id, illo accusamus impedit ratione quia voluptate labore praesentium sunt earum nam fugit? Nisi, ratione nemo!</p>
                        <div class="product-item">
                            <div class="product">
                                    <div class="product-info">
                                        <div class="product-info-top">
                                            <a href="" class="product-name">Candy for Sandy</a>
                                            <h2 class="sm-title">sweet</h2>
                                        </div>
                                                <div class="rating">
                                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                    </svg></span>
                                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                    </svg></span>
                                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                    </svg></span>
                                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                    </svg></span>
                                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                    </svg></span>
                                                    <div class="price">
                                                        <p class="product-price">$15.00</p>
                                                        <p class="product-price">$12.00</p>
                                                    </div>
                                                </div>
                                        </div>
                                        <div id="quantityContainer">
                                            <button class="quantity-btn minus-btn">-</button>
                                                <div class="quantityContainer" id="quantityDisplay">0</div>
                                            <button class="quantity-btn plus-btn">+</button>
                                        </div>
                                        <div class="product__btns">
                                        <button type="button" class="btn-cart">Add to cart
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket" viewBox="0 0 16 16">
                                            <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z"/>
                                            </svg></span>
                                        </button>

                                        <button type="button" class="btn-buy">Buy now
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
                                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z"/>
                                            <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z"/>
                                            </svg></span>
                                        </button>
                                        </div>
                            </div>
                        </div>
            </div>
</div>
    @include('partials.footer.footer')
</body>
<script>
document.addEventListener("DOMContentLoaded", function() {
    // Initialize quantity
    let quantity = 0;

    // Get the plus and minus buttons
    const plusButton = document.querySelector(".plus-btn");
    const minusButton = document.querySelector(".minus-btn");

    // Get the quantity display element
    const quantityDisplay = document.getElementById("quantityDisplay");

    // Update the quantity display function
    function updateQuantityDisplay() {
        quantityDisplay.textContent = quantity;
    }

    // Add event listener to the plus button
    plusButton.addEventListener("click", function() {
        quantity++;
        updateQuantityDisplay();
    });

    // Add event listener to the minus button
    minusButton.addEventListener("click", function() {
        if (quantity > 0) {
            quantity--;
            updateQuantityDisplay();
        }
    });
});</script>
</html>
