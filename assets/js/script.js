// Custom scripts will go here 

// DelphianLogic Interactive Functionality

document.addEventListener('DOMContentLoaded', function() {
    // Image mapping for each section and slide
    const imageMap = {
        'learning': [
            'files/images/DL-Learning-1.jpg',
            'files/images/DL-Learning-2.jpg',
            'files/images/DL-Learning-3.jpg'
        ],
        'technology': [
            'files/images/DL-Technology.jpg',
            'files/images/DL-Technology-2.jpg',
            'files/images/DL-Technology-3.jpg'
        ],
        'communication': [
            'files/images/DL-Communication.jpg',
            'files/images/DL-Communication-2.jpg',
            'files/images/DL-Communication-3.jpg'
        ]
    };

    const mainImage = document.getElementById('dlWebMainImage');
    let currentTab = 'learning';
    let currentSlideIndex = 0;

    // Function to update the main image
    function updateMainImage(section, slideIndex) {
        if (mainImage && imageMap[section] && imageMap[section][slideIndex]) {
            mainImage.src = imageMap[section][slideIndex];
            mainImage.alt = `${section.charAt(0).toUpperCase() + section.slice(1)} Image ${slideIndex + 1}`;
        }
    }

    // Handle tab switching
    const tabButtons = document.querySelectorAll('[data-bs-toggle="pill"]');
    tabButtons.forEach(button => {
        button.addEventListener('click', function() {
            const target = this.getAttribute('data-bs-target');
            const section = target.replace('#tabContent-', '');
            currentTab = section;
            currentSlideIndex = 0; // Reset to first slide when switching tabs
            
            // Update main image immediately
            updateMainImage(section, 0);
            
            // Update active states
            tabButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
        });
    });

    // Handle carousel slide changes for web view
    const carousels = ['learning', 'technology', 'communication'];
    
    carousels.forEach(section => {
        const carouselElement = document.getElementById(`carousel${section.charAt(0).toUpperCase() + section.slice(1)}Web`);
        
        if (carouselElement) {
            carouselElement.addEventListener('slide.bs.carousel', function(e) {
                if (currentTab === section) {
                    currentSlideIndex = e.to;
                    updateMainImage(section, e.to);
                }
            });
        }
    });

    // Handle carousel indicator clicks
    const indicators = document.querySelectorAll('.carousel-indicators button');
    indicators.forEach(indicator => {
        indicator.addEventListener('click', function() {
            const carouselId = this.getAttribute('data-bs-target');
            const slideIndex = parseInt(this.getAttribute('data-bs-slide-to'));
            
            // Determine which section this belongs to
            if (carouselId.includes('Learning')) {
                if (currentTab === 'learning') {
                    currentSlideIndex = slideIndex;
                    updateMainImage('learning', slideIndex);
                }
            } else if (carouselId.includes('Technology')) {
                if (currentTab === 'technology') {
                    currentSlideIndex = slideIndex;
                    updateMainImage('technology', slideIndex);
                }
            } else if (carouselId.includes('Communication')) {
                if (currentTab === 'communication') {
                    currentSlideIndex = slideIndex;
                    updateMainImage('communication', slideIndex);
                }
            }
        });
    });

    // Auto-rotate carousel functionality (optional)
    function startAutoRotation() {
        setInterval(() => {
            const activeCarousel = document.querySelector(`#carousel${currentTab.charAt(0).toUpperCase() + currentTab.slice(1)}Web`);
            if (activeCarousel) {
                const bootstrap = window.bootstrap;
                if (bootstrap) {
                    const carousel = bootstrap.Carousel.getInstance(activeCarousel);
                    if (carousel) {
                        carousel.next();
                    }
                }
            }
        }, 5000); // Change slide every 5 seconds
    }

    // Initialize with first tab active
    updateMainImage('learning', 0);
    
    // Uncomment the line below if you want auto-rotation
    // startAutoRotation();

    // Smooth transitions for better UX
    if (mainImage) {
        mainImage.style.transition = 'opacity 0.3s ease-in-out';
        
        // Add fade effect when changing images
        const originalUpdateFunction = updateMainImage;
        updateMainImage = function(section, slideIndex) {
            mainImage.style.opacity = '0.7';
            setTimeout(() => {
                originalUpdateFunction(section, slideIndex);
                mainImage.style.opacity = '1';
            }, 150);
        };
    }

    // Handle mobile accordion interactions
    const accordionButtons = document.querySelectorAll('.accordion-button');
    accordionButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Add any mobile-specific functionality here if needed
        });
    });

    // Responsive behavior
    function handleResize() {
        // Add any responsive adjustments here if needed
        const isMobile = window.innerWidth < 768;
        
        if (isMobile) {
            // Mobile-specific adjustments
        } else {
            // Desktop-specific adjustments
        }
    }

    window.addEventListener('resize', handleResize);
    handleResize(); // Run on load
}); 