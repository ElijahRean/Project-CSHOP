//buttons for productpage productDetailsPage.blade
(function () {
    document.addEventListener("DOMContentLoaded", function() {

        // Get the plus and minus buttons
        const plusButton = document.querySelectorAll(".plus-btn");
        const minusButton = document.querySelectorAll(".minus-btn");

        plusButton.forEach(plusButton => {
            plusButton.addEventListener("click", function() {
                const cartItemDiv = plusButton.closest('.cart-item');
                const quantityContainer = cartItemDiv.querySelector('.cartQuantityDisplay');
                const quantityInput = cartItemDiv.querySelector('.cartQuantityValue');
                let quantity = parseInt(quantityInput.value);

                quantity++;

                quantityContainer.textContent = quantity;
                quantityInput.value = quantity;

            });
        });

        minusButton.forEach(minusButton => {
            minusButton.addEventListener("click", function() {
                const cartItemDiv = minusButton.closest('.cart-item');
                const quantityContainer = cartItemDiv.querySelector('.cartQuantityDisplay');
                const quantityInput = cartItemDiv.querySelector('.cartQuantityValue');
                let quantity = parseInt(quantityInput.value);

                if (quantity > 1) {
                    quantity--;

                    quantityContainer.textContent = quantity;
                    quantityInput.value = quantity;
                }
            });
        });

    });
    })();
