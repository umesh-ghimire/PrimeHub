// Format price in Indian Rupees format
function formatIndianRupees(price) {
    return new Intl.NumberFormat('en-IN', {
        style: 'currency',
        currency: 'INR',
        minimumFractionDigits: 0,
        maximumFractionDigits: 0
    }).format(price);
}

// Initialize
document.addEventListener('DOMContentLoaded', function() {
    setupEventListeners();
});

function setupEventListeners() {
    // Trending Tabs - Show/hide content
    const trendingTabs = document.querySelectorAll('.trending-tab');
    const trendingContents = document.querySelectorAll('.trending-tab-content');
    
    trendingTabs.forEach(tab => {
        tab.addEventListener('click', function() {
            const tabType = this.dataset.tab;
            
            // Remove active class from all tabs and contents
            trendingTabs.forEach(t => t.classList.remove('active'));
            trendingContents.forEach(c => c.classList.remove('active'));
            
            // Add active class to clicked tab and corresponding content
            this.classList.add('active');
            document.getElementById(`${tabType}-content`).classList.add('active');
            
            showToast(`Showing ${tabType.replace('-', ' ')}`);
        });
    });
    
    // Category Filters
    const categoryFilters = document.querySelectorAll('.filter-category');
    const productCards = document.querySelectorAll('.product-card');
    
    categoryFilters.forEach(filter => {
        filter.addEventListener('click', function() {
            const category = this.dataset.category;
            
            // Remove active class from all category buttons
            categoryFilters.forEach(btn => btn.classList.remove('active'));
            
            // Add active class to clicked button
            this.classList.add('active');
            
            // Filter products
            let visibleCount = 0;
            productCards.forEach(card => {
                if (category === 'all' || card.dataset.category === category) {
                    card.style.display = 'block';
                    visibleCount++;
                } else {
                    card.style.display = 'none';
                }
            });
            
            // Update showing count
            document.getElementById('showing-count').textContent = visibleCount;
            showToast(`Showing ${visibleCount} ${category === 'all' ? 'products' : category + ' products'}`);
        });
    });
    
    // Category Cards
    const categoryCards = document.querySelectorAll('.category-card');
    categoryCards.forEach(card => {
        card.addEventListener('click', () => {
            const category = card.dataset.category;
            const filterBtn = document.querySelector(`.filter-category[data-category="${category}"]`);
            
            if (filterBtn) {
                categoryFilters.forEach(f => f.classList.remove('active'));
                filterBtn.classList.add('active');
                filterBtn.click(); // Trigger the filter
            }
        });
    });
    
    // Price Filter
    const applyPriceBtn = document.getElementById('apply-price');
    if (applyPriceBtn) {
        applyPriceBtn.addEventListener('click', () => {
            const minPrice = parseFloat(document.getElementById('min-price').value) || 0;
            const maxPrice = parseFloat(document.getElementById('max-price').value) || Infinity;
            
            // Filter products based on prices
            let visibleCount = 0;
            productCards.forEach(card => {
                const price = parseFloat(card.dataset.price) || 0;
                
                if (price >= minPrice && price <= maxPrice) {
                    card.style.display = 'block';
                    visibleCount++;
                } else {
                    card.style.display = 'none';
                }
            });
            
            // Update showing count
            document.getElementById('showing-count').textContent = visibleCount;
            showToast(`Filtered ${visibleCount} products by price`);
        });
    }
    
    // Sort Select
    const sortSelect = document.getElementById('sort-select');
    sortSelect.addEventListener('change', function() {
        const sortBy = this.value;
        const productsGrid = document.getElementById('products-grid');
        const products = Array.from(productsGrid.querySelectorAll('.product-card'));
        
        products.sort((a, b) => {
            const aPrice = parseFloat(a.dataset.price) || 0;
            const bPrice = parseFloat(b.dataset.price) || 0;
            const aRating = parseFloat(a.dataset.rating) || 0;
            const bRating = parseFloat(b.dataset.rating) || 0;
            
            switch(sortBy) {
                case 'price-low':
                    return aPrice - bPrice;
                case 'price-high':
                    return bPrice - aPrice;
                case 'rating':
                    return bRating - aRating;
                case 'newest':
                    return Math.random() - 0.5; // Simulate newest sort
                case 'popular':
                    return Math.random() - 0.5; // Simulate popular sort
                default:
                    return 0;
            }
        });
        
        // Reappend sorted products
        products.forEach(product => {
            productsGrid.appendChild(product);
        });
        
        showToast(`Sorted by ${this.options[this.selectedIndex].text}`);
    });
    
    // View Toggle
    const viewBtns = document.querySelectorAll('.view-btn');
    viewBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const view = this.dataset.view;
            const productsGrid = document.getElementById('products-grid');
            
            // Remove active class from all buttons
            viewBtns.forEach(b => b.classList.remove('active'));
            
            // Add active class to clicked button
            this.classList.add('active');
            
            // Change view
            if (view === 'list') {
                productsGrid.classList.add('list-view');
            } else {
                productsGrid.classList.remove('list-view');
            }
        });
    });
    
    // Add to Cart functionality
    document.addEventListener('click', function(e) {
        if (e.target.closest('.btn-add-to-cart')) {
            const button = e.target.closest('.btn-add-to-cart');
            const productCard = button.closest('.product-card');
            const productName = productCard.querySelector('.product-title').textContent;
            
            // Add animation
            const originalText = button.innerHTML;
            button.innerHTML = '<i class="fas fa-check"></i> Added';
            button.style.backgroundColor = '#10B981';
            
            setTimeout(() => {
                button.innerHTML = originalText;
                button.style.backgroundColor = '';
            }, 2000);
            
            showToast(`${productName} added to cart!`);
        }
        
        // Wishlist functionality
        if (e.target.closest('.wishlist-btn') || e.target.closest('.btn-wishlist')) {
            const button = e.target.closest('.wishlist-btn') || e.target.closest('.btn-wishlist');
            const icon = button.querySelector('i');
            
            if (icon.classList.contains('far')) {
                icon.classList.remove('far');
                icon.classList.add('fas');
                icon.style.color = '#ff6b6b';
                showToast('Added to wishlist');
            } else {
                icon.classList.remove('fas');
                icon.classList.add('far');
                icon.style.color = '';
                showToast('Removed from wishlist');
            }
        }
    });
    
    // Promo Banners
    const promoButtons = document.querySelectorAll('.promo-btn');
    promoButtons.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            showToast('Opening promotion...');
        });
    });
    
    // Newsletter Form
    const newsletterForm = document.querySelector('.newsletter-form');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const email = newsletterForm.querySelector('.newsletter-input').value;
            if (email) {
                showToast('Thank you for subscribing to our newsletter!');
                newsletterForm.reset();
            }
        });
    }
    
    // Toast Close
    const toastClose = document.getElementById('toast-close');
    if (toastClose) {
        toastClose.addEventListener('click', () => {
            document.getElementById('toast').classList.remove('show');
        });
    }
    
    // Pagination
    const pageButtons = document.querySelectorAll('.page-btn:not(.disabled)');
    pageButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            if (!this.classList.contains('disabled') && !this.querySelector('i')) {
                pageButtons.forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                showToast(`Loading page ${this.textContent}...`);
            }
        });
    });
}

function showToast(message) {
    const toast = document.getElementById('toast');
    const toastMessage = document.getElementById('toast-message');
    
    if (!toast || !toastMessage) return;
    
    toastMessage.textContent = message;
    toast.classList.add('show');
    
    setTimeout(() => {
        toast.classList.remove('show');
    }, 3000);
}

// Keep the CSS file the same as before