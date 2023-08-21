document.addEventListener("DOMContentLoaded", function() {
    const toggleButton = document.getElementById('theme-toggle');
    const root = document.documentElement;
    let isLightTheme = true;

    toggleButton.addEventListener('click', function() {
        isLightTheme = !isLightTheme;
        if (isLightTheme) {
            root.style.setProperty('--white', '#ffffff');
            root.style.setProperty('--grey', '#333333');
        } else {
            root.style.setProperty('--white', '#333333');
            root.style.setProperty('--grey', '#ffffff');
        }
    });
});


//buttons for productpage productDetailsPage.blade
(function () {
document.addEventListener("DOMContentLoaded", function() {
    // Initialize quantity
    let quantity = 0;

    // Get the plus and minus buttons
    const plusButton = document.querySelector(".plus-btn");
    const minusButton = document.querySelector(".minus-btn");
    const quantityDisplay = document.getElementById("quantityDisplay"); // Get the quantity display element
    const addToCartButton = document.querySelector(".btn-cart"); // Add this line


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

    //add quantity to the cart
    addToCartButton.addEventListener("click", function() {
        console.log("Added " + quantity + " items to cart");
    });
});
})();

//replace the thumbnail-img with main-img
function changeMainImage(thumbnail) {
    const mainImage = document.querySelector('.main-image');
    mainImage.src = thumbnail.src;
}
