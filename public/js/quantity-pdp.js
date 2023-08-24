//buttons for productpage productDetailsPage.blade
(function () {
    document.addEventListener("DOMContentLoaded", function() {
        // Initialize quantity

        let quantity = document.getElementById("quantityValue").value;
        // Get the plus and minus buttons
        const plusButton = document.querySelector(".plus-btn");
        const minusButton = document.querySelector(".minus-btn");
        const quantityDisplay = document.getElementById("quantityDisplay"); // Get the quantity display element
        // const addToCartButton = document.querySelector(".btn-cart"); // Add this line
        const quantityValue = document.getElementById("quantityValue"); // Get the quantity value element


        // Update the quantity display function
        function updateQuantityDisplay() {
            quantityDisplay.textContent = quantity;
            quantityValue.value = quantity;
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
        // addToCartButton.addEventListener("click", function() {
        //     console.log("Added " + quantity + " items to cart");
        // });
    });
    })();
