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


//replace the thumbnail-img with main-img
function changeMainImage(thumbnail) {
    const mainImage = document.querySelector('.main-image');
    mainImage.src = thumbnail.src;
}
