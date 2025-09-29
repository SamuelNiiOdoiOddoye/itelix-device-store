// Create a Slideshow class to manage each slideshow independently
class Slideshow {
    constructor(container) {
        this.container = container;
        this.slides = container.querySelectorAll('.slide');
        this.dots = container.querySelectorAll('.dot');
        this.currentIndex = 0;
        this.interval = null;
        this.init();
    }

    init() {
        // Show first slide
        this.showSlide(this.currentIndex);
        
        // Start auto-advance
        this.start();
        
        // Add hover events to pause on hover
        this.container.addEventListener('mouseenter', () => this.stop());
        this.container.addEventListener('mouseleave', () => this.start());
        
        // Add click events to dots
        this.dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                this.showSlide(index);
            });
        });
    }

    showSlide(index) {
        // Hide all slides in THIS slideshow only
        this.slides.forEach(slide => {
            slide.classList.remove('active');
        });
        
        // Remove active class from all dots in THIS slideshow only
        this.dots.forEach(dot => {
            dot.classList.remove('active');
        });
        
        // Show current slide and dot in THIS slideshow only
        this.slides[index].classList.add('active');
        this.dots[index].classList.add('active');
        this.currentIndex = index;
    }

    nextSlide() {
        const nextIndex = (this.currentIndex + 1) % this.slides.length;
        this.showSlide(nextIndex);
    }

    start() {
        this.stop(); // Clear any existing interval
        this.interval = setInterval(() => {
            this.nextSlide();
        }, 3000);
    }

    stop() {
        if (this.interval) {
            clearInterval(this.interval);
            this.interval = null;
        }
    }
}

// Initialize all slideshows when the page loads
document.addEventListener('DOMContentLoaded', function() {
    const slideshowContainers = document.querySelectorAll('.slideshow-container');
    
    slideshowContainers.forEach(container => {
        new Slideshow(container);
    });
});