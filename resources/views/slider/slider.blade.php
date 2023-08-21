<div>
    <div class="slider-wrapper">
        {{-- IMAGES --}}
        <div class="slider">
            <div class="img-container fade">
                <img id="slide-1" src="{{ asset('images/candy1.jpg') }}" alt="Image 1">
            </div>
            <div class="img-container fade">
                <img id="slide-2" src="{{ asset('images/candy2.jpg') }}" alt="Image 2">
            </div>
            <div class="img-container fade">
                <img id="slide-3" src="{{ asset('images/candy3.jpg') }}" alt="Image 3">
            </div>
            <!-- Add more images here -->
        </div>
    </div>
</div>

<script>

    // Script for slideshow of the images
    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let i;
        let slides = document.getElementsByClassName("img-container");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        slides[slideIndex-1].style.display = "block";
        setTimeout(showSlides, 5000); // Change image every 5 seconds
    }
    </script>
