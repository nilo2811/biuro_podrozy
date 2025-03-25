var images = ["img/1.png", "img/3.png"];
var currentImageIndex = 0;

// Funkcja zmieniająca obraz po kliknięciu przycisku "Poprzedni"
function showPreviousImage() {
  currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
  document.getElementById("sliderImage").src = images[currentImageIndex];
}

// Funkcja zmieniająca obraz po kliknięciu przycisku "Następny"
function showNextImage() {
  currentImageIndex = (currentImageIndex + 1) % images.length;
  document.getElementById("sliderImage").src = images[currentImageIndex];
}