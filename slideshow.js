// Array of image paths (auto-generated or manually updated)
const imageFolder = 'pictures/iphone_pictures/';
const imageFiles = [
  'iphone11pics.JPEG',
  'iphone13promaxpics.JPEG',
  'iphone15.JPEG',
  'iphone15promax.JPEG',
  'iphone16promax.JPEG',

];

// Generate slides dynamically
const slideshow = document.getElementById('iphone-slideshow');
slideshow.innerHTML = ''; // Clear old content

// Create slides
imageFiles.forEach((filename, idx) => {
  const slide = document.createElement('div');
  slide.className = 'slide';
  if (idx === 0) slide.classList.add('active');
  const img = document.createElement('img');
  img.src = imageFolder + filename;
  img.className = 'slideimg';
  img.alt = 'iPhone'+(idx+11); // Better alt text
  slide.appendChild(img);
  slideshow.appendChild(slide);
});

let currentSlide = 0;
const slides = slideshow.querySelectorAll('.slide');

function showSlide(index) {
  slides.forEach((slide, i) => {
    slide.classList.toggle('active', i === index);
  });
}

// Auto-advance every 3 seconds
setInterval(() => {
  currentSlide = (currentSlide + 1) % slides.length;
  showSlide(currentSlide);
}, 3000);

// -- Add navigation, dots, and auto-play logic here (see previous code) --

// Cart dropdown functionality
document.addEventListener("DOMContentLoaded", function () {
    const cartIcon = document.getElementById("cart-icon");
    const dropdownMenu = document.querySelector(".dropdown-menu");
            
        cartIcon.addEventListener("mouseenter", function () {
            dropdownMenu.style.display = "block";
        });

        cartIcon.addEventListener("mouseleave", function () {
            dropdownMenu.style.display = "none";
        });
});