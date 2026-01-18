// public/frontend/js/pagination.js

export function initPagination() {
    // Smooth scroll to top when paginating
    const paginationLinks = document.querySelectorAll('.pagination a');
    
    paginationLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            // Smooth scroll to products section
            const productsSection = document.getElementById('products');
            if (productsSection) {
                e.preventDefault();
                const url = this.href;
                
                // Smooth scroll
                productsSection.scrollIntoView({ 
                    behavior: 'smooth',
                    block: 'start'
                });
                
                // Load page after scroll
                setTimeout(() => {
                    window.location.href = url;
                }, 300);
            }
        });
    });
    
    // Add loading state
    const paginationContainer = document.querySelector('.pagination');
    if (paginationContainer) {
        paginationContainer.addEventListener('click', function(e) {
            if (e.target.tagName === 'A' || e.target.closest('a')) {
                showLoadingOverlay();
            }
        });
    }
}

function showLoadingOverlay() {
    // Check if overlay already exists
    if (document.querySelector('.page-loading')) {
        return;
    }
    
    // Create loading overlay
    const loadingOverlay = document.createElement('div');
    loadingOverlay.className = 'page-loading';
    loadingOverlay.innerHTML = `
        <div class="loading-spinner">
            <div class="spinner"></div>
            <p>Loading products...</p>
        </div>
    `;
    document.body.appendChild(loadingOverlay);
    
    // Remove overlay when page loads
    window.addEventListener('load', function() {
        const overlay = document.querySelector('.page-loading');
        if (overlay) {
            overlay.style.opacity = '0';
            setTimeout(() => overlay.remove(), 300);
        }
    });
}

// Initialize when DOM is loaded
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initPagination);
} else {
    initPagination();
}