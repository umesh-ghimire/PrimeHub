// Weekly Products Carousel Functionality
document.addEventListener('DOMContentLoaded', function() {
    const carousel = document.getElementById('weeklyProductsCarousel');
    if (!carousel) return; // Exit if carousel doesn't exist
    
    const dots = document.querySelectorAll('.scroll-indicator-dot');
    if (dots.length === 0) return; // Exit if no dots
    
    // Calculate scroll amount based on visible cards
    const calculateScrollAmount = () => {
        const cardElement = carousel.querySelector('.flex-shrink-0');
        if (!cardElement) return 0;
        
        const cardWidth = cardElement.offsetWidth;
        const gap = 24; // gap-6 = 24px
        const containerWidth = carousel.offsetWidth;
        const visibleCards = Math.floor(containerWidth / (cardWidth + gap));
        
        return (cardWidth + gap) * visibleCards;
    };
    
    // Dot navigation - when clicked, scroll to that position
    dots.forEach(dot => {
        dot.addEventListener('click', () => {
            const index = parseInt(dot.dataset.index);
            const scrollAmount = calculateScrollAmount();
            
            carousel.scrollTo({
                left: index * scrollAmount,
                behavior: 'smooth'
            });
        });
    });
    
    // Update active dot based on scroll position
    function updateDots() {
        const scrollPosition = carousel.scrollLeft;
        const scrollAmount = calculateScrollAmount();
        const activeIndex = Math.round(scrollPosition / scrollAmount);
        
        dots.forEach((dot, index) => {
            if (index === activeIndex) {
                dot.classList.add('bg-green-900');
                dot.classList.remove('bg-gray-300');
            } else {
                dot.classList.remove('bg-green-900');
                dot.classList.add('bg-gray-300');
            }
        });
    }
    
    // Update dots on scroll
    carousel.addEventListener('scroll', updateDots);
    
    // Auto-update dots on window resize
    window.addEventListener('resize', () => {
        updateDots();
    });
    
    // Touch/swipe support for mobile
    let startX = 0;
    let scrollLeft = 0;
    let isDragging = false;
    
    carousel.addEventListener('touchstart', (e) => {
        startX = e.touches[0].pageX - carousel.offsetLeft;
        scrollLeft = carousel.scrollLeft;
        isDragging = true;
        carousel.style.cursor = 'grabbing';
    });
    
    carousel.addEventListener('touchmove', (e) => {
        if (!isDragging) return;
        e.preventDefault();
        
        const x = e.touches[0].pageX - carousel.offsetLeft;
        const walk = (x - startX) * 2;
        carousel.scrollLeft = scrollLeft - walk;
    });
    
    carousel.addEventListener('touchend', () => {
        isDragging = false;
        carousel.style.cursor = 'grab';
    });
    
    // Mouse drag support for desktop
    carousel.addEventListener('mousedown', (e) => {
        startX = e.pageX - carousel.offsetLeft;
        scrollLeft = carousel.scrollLeft;
        isDragging = true;
        carousel.style.cursor = 'grabbing';
    });
    
    carousel.addEventListener('mousemove', (e) => {
        if (!isDragging) return;
        e.preventDefault();
        
        const x = e.pageX - carousel.offsetLeft;
        const walk = (x - startX) * 2;
        carousel.scrollLeft = scrollLeft - walk;
    });
    
    carousel.addEventListener('mouseup', () => {
        isDragging = false;
        carousel.style.cursor = 'grab';
    });
    
    carousel.addEventListener('mouseleave', () => {
        isDragging = false;
        carousel.style.cursor = 'grab';
    });
    
    // Initialize cursor style
    carousel.style.cursor = 'grab';
    
    // Initialize dots on page load
    updateDots();
});