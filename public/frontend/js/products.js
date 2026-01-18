// Format price in Indian Rupees format
function formatIndianRupees(price) {
    return new Intl.NumberFormat('en-IN', {
        style: 'currency',
        currency: 'INR',
        minimumFractionDigits: 0,
        maximumFractionDigits: 0
    }).format(price);
}

// Toast notification with type support
function showToast(message, type = 'success') {
    let toast = document.getElementById('custom-toast');
    
    if (!toast) {
        toast = document.createElement('div');
        toast.id = 'custom-toast';
        toast.className = 'fixed top-4 right-4 z-50 px-6 py-4 rounded-lg shadow-lg text-white transform transition-all duration-300 translate-x-full';
        document.body.appendChild(toast);
    }
    
    toast.textContent = message;
    toast.className = `fixed top-4 right-4 z-50 px-6 py-4 rounded-lg shadow-lg text-white transform transition-all duration-300 translate-x-full ${type}`;
    
    setTimeout(() => {
        toast.classList.remove('translate-x-full');
    }, 10);
    
    setTimeout(() => {
        toast.classList.add('translate-x-full');
        setTimeout(() => {
            if (toast.parentNode) {
                toast.remove();
            }
        }, 300);
    }, 3000);
}

// Update cart count
function updateCartCount(count) {
    const cartCountElements = document.querySelectorAll('.cart-count');
    cartCountElements.forEach(element => {
        element.textContent = count;
    });
}

// Global add to cart function
window.addToCart = function(productId) {
    const btn = event.target.closest('button');
    const originalText = btn.innerHTML;
    btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Adding...';
    btn.disabled = true;
    
    fetch('/cart/add', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || ''
        },
        body: JSON.stringify({ 
            product_id: productId, 
            quantity: 1 
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            showToast('Product added to cart successfully!', 'success');
            if (data.cart_count) {
                updateCartCount(data.cart_count);
            }
        } else {
            showToast(data.message || 'Failed to add to cart', 'error');
        }
        btn.innerHTML = originalText;
        btn.disabled = false;
    })
    .catch(error => {
        console.error('Error:', error);
        showToast('An error occurred. Please try again.', 'error');
        btn.innerHTML = originalText;
        btn.disabled = false;
    });
};

// Setup wishlist functionality for unified product cards
function setupWishlistButtons() {
    const wishlistButtons = document.querySelectorAll('.product-wishlist-btn');
    wishlistButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            const icon = this.querySelector('i');
            if (!icon) return;
            
            if (icon.classList.contains('far')) {
                icon.classList.replace('far', 'fas');
                this.style.backgroundColor = '#dc2626';
                this.style.color = '#ffffff';
                showToast('Added to wishlist!', 'success');
            } else {
                icon.classList.replace('fas', 'far');
                this.style.backgroundColor = '';
                this.style.color = '';
                showToast('Removed from wishlist!', 'info');
            }
        });
    });
}

// Setup trending tabs with horizontal scroll functionality
function setupTrendingTabs() {
    const trendingTabs = document.querySelectorAll('.trending-tab');
    const trendingContents = document.querySelectorAll('.trending-tab-content');
    
    // Set initial state - hide all except active
    trendingContents.forEach(content => {
        if (content.classList.contains('active')) {
            content.style.display = 'block';
            setupHorizontalScroll(content);
        } else {
            content.style.display = 'none';
        }
    });
    
    // Add click event listeners
    trendingTabs.forEach(tab => {
        tab.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            const tabType = this.getAttribute('data-tab');
            
            // Remove active class from all tabs
            trendingTabs.forEach(t => t.classList.remove('active'));
            
            // Add active class to clicked tab
            this.classList.add('active');
            
            // Hide all contents
            trendingContents.forEach(content => {
                content.classList.remove('active');
                content.style.display = 'none';
            });
            
            // Show corresponding content
            const contentToShow = document.querySelector(`#${tabType}-content`);
            if (contentToShow) {
                contentToShow.classList.add('active');
                contentToShow.style.display = 'block';
                setupHorizontalScroll(contentToShow);
                showToast(`Showing ${tabType.replace('-', ' ')} products`, 'info');
            }
        });
    });
}

// Setup horizontal scroll functionality
function setupHorizontalScroll(container) {
    const scrollContainer = container.querySelector('.trending-products-horizontal-scroll');
    const scrollLeftBtn = container.querySelector('.scroll-left-btn');
    const scrollRightBtn = container.querySelector('.scroll-right-btn');
    
    if (!scrollContainer) return;
    
    // Scroll left function
    if (scrollLeftBtn) {
        scrollLeftBtn.addEventListener('click', () => {
            scrollContainer.scrollBy({
                left: -300,
                behavior: 'smooth'
            });
        });
    }
    
    // Scroll right function
    if (scrollRightBtn) {
        scrollRightBtn.addEventListener('click', () => {
            scrollContainer.scrollBy({
                left: 300,
                behavior: 'smooth'
            });
        });
    }
    
    // Show/hide scroll buttons based on scroll position
    const updateScrollButtons = () => {
        if (scrollLeftBtn) {
            scrollLeftBtn.style.display = scrollContainer.scrollLeft > 0 ? 'flex' : 'none';
        }
        if (scrollRightBtn) {
            const maxScroll = scrollContainer.scrollWidth - scrollContainer.clientWidth;
            scrollRightBtn.style.display = scrollContainer.scrollLeft < maxScroll - 10 ? 'flex' : 'none';
        }
    };
    
    // Initial update
    updateScrollButtons();
    
    // Update on scroll
    scrollContainer.addEventListener('scroll', updateScrollButtons);
    
    // Update on resize
    window.addEventListener('resize', updateScrollButtons);
}

// Setup filter dropdowns for mobile
function setupFilterDropdowns() {
    const dropdownGroups = document.querySelectorAll('.relative.group');
    
    function closeAllDropdowns() {
        dropdownGroups.forEach(group => {
            const menu = group.querySelector('.filter-dropdown-menu');
            if (menu) {
                menu.style.display = 'none';
            }
        });
    }
    
    dropdownGroups.forEach(group => {
        const btn = group.querySelector('.filter-dropdown-btn');
        const menu = group.querySelector('.filter-dropdown-menu');
        
        if (!menu || !btn) return;
        
        menu.style.display = 'none';
        
        // Desktop hover behavior
        group.addEventListener('mouseenter', () => {
            if (window.innerWidth > 768) {
                closeAllDropdowns();
                menu.style.display = 'block';
            }
        });
        
        group.addEventListener('mouseleave', () => {
            if (window.innerWidth > 768) {
                setTimeout(() => {
                    if (!menu.matches(':hover') && !btn.matches(':hover')) {
                        menu.style.display = 'none';
                    }
                }, 300);
            }
        });
        
        // Mobile click behavior
        btn.addEventListener('click', (e) => {
            if (window.innerWidth <= 768) {
                e.preventDefault();
                e.stopPropagation();
                const isVisible = menu.style.display === 'block';
                closeAllDropdowns();
                if (!isVisible) {
                    menu.style.display = 'block';
                }
            }
        });
    });
    
    // Close dropdowns when clicking outside
    document.addEventListener('click', (e) => {
        if (!e.target.closest('.relative.group') && !e.target.closest('.filter-dropdown-menu')) {
            dropdownGroups.forEach(group => {
                const menu = group.querySelector('.filter-dropdown-menu');
                if (menu) {
                    menu.style.display = 'none';
                }
            });
        }
    });
}

// Setup newsletter form
function setupNewsletterForm() {
    const newsletterForm = document.querySelector('.newsletter-form');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const emailInput = newsletterForm.querySelector('.newsletter-input');
            if (emailInput && emailInput.value.trim()) {
                showToast('Thank you for subscribing to our newsletter!', 'success');
                newsletterForm.reset();
            }
        });
    }
}

// Setup add to cart buttons for unified product cards
function setupAddToCartButtons() {
    document.addEventListener('click', function(e) {
        const addToCartBtn = e.target.closest('.product-card-add-to-cart');
        if (addToCartBtn && !addToCartBtn.hasAttribute('onclick')) {
            e.preventDefault();
            const productCard = addToCartBtn.closest('.product-card');
            if (productCard) {
                const productName = productCard.querySelector('.product-card-title')?.textContent || 'Product';
                const originalText = addToCartBtn.innerHTML;
                
                // Visual feedback
                addToCartBtn.innerHTML = '<i class="fas fa-check"></i> Added';
                addToCartBtn.style.background = 'linear-gradient(135deg, #10b981 0%, #059669 100%)';
                addToCartBtn.disabled = true;
                
                showToast(`${productName} added to cart!`, 'success');
                
                // Reset button after 2 seconds
                setTimeout(() => {
                    addToCartBtn.innerHTML = originalText;
                    addToCartBtn.style.background = '';
                    addToCartBtn.disabled = false;
                }, 2000);
            }
        }
    });
}

// Initialize everything
function setupEventListeners() {
    setupTrendingTabs();
    setupWishlistButtons();
    setupNewsletterForm();
    setupFilterDropdowns();
    setupAddToCartButtons();
    
    // Make functions available globally
    window.showToast = showToast;
    window.updateCartCount = updateCartCount;
    window.formatIndianRupees = formatIndianRupees;
}

// Initialize when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    setupEventListeners();
    
    // Handle price filter form submission
    const priceForm = document.getElementById('priceFilterForm');
    if (priceForm) {
        priceForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(this);
            const params = new URLSearchParams(formData);
            let url = this.action;
            
            if (params.toString()) {
                url += '?' + params.toString();
            }
            
            // Add #products to URL
            url += '#products';
            
            // Navigate to filtered URL
            window.location.href = url;
        });
    }
    
    // Handle pagination links
    document.addEventListener('click', function(e) {
        if (e.target.closest('.page-btn')) {
            const pageLink = e.target.closest('.page-btn');
            if (pageLink.href && !pageLink.classList.contains('disabled') && !pageLink.classList.contains('active')) {
                e.preventDefault();
                
                let url = pageLink.href;
                if (!url.includes('#products')) {
                    url += '#products';
                }
                
                window.location.href = url;
            }
        }
    });
});