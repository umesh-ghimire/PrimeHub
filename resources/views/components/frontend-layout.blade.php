<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PrimeHub</title>
    
    <!-- Styles -->
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('frontend/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/home_styles.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/products.css') }}">
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <style>
        /* Common styles that apply across all pages */
        .cart-btn-unified {
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            gap: 0.5rem !important;
            background-color: #1a5d1a !important;
            color: white !important;
            padding: 0.625rem 1rem !important;
            border-radius: 0.5rem !important;
            font-weight: 600 !important;
            transition: all 300ms !important;
            transform: scale(1) !important;
            border: none !important;
            cursor: pointer !important;
            white-space: nowrap !important;
            font-size: 0.875rem !important;
            line-height: 1.25rem !important;
        }
        
        .cart-btn-unified:hover {
            background-color: #1f2937 !important;
            transform: scale(1.05) !important;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05) !important;
        }
        
        .cart-btn-unified svg {
            width: 1rem !important;
            height: 1rem !important;
            flex-shrink: 0 !important;
        }
        
        .hero-btn-unified {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            padding: 0.75rem 1.5rem;
            background-color: #065f46;
            color: white;
            border-radius: 0.5rem;
            font-weight: 500;
            font-size: 0.875rem;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            text-decoration: none;
        }
        
        .hero-btn-unified:hover {
            background-color: #064e3b;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(6, 95, 70, 0.2);
        }
        
        .line-clamp-1 {
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        
        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
</head>
<body>
    <header>
        <x-frontend-navbar/>
    </header>

    <main>
        {{ $slot }}
    </main>

    <footer>
        <x-frontend-footer/>
    </footer>

    <!-- JavaScript -->
    <script src="{{ asset('frontend/js/products.js') }}"></script>
    <script src="{{ asset('frontend/js/home_carousel.js') }}"></script>
    
    <script>
        // Common JavaScript functions for all pages
        function showToast(message, type = 'success') {
            const toast = document.createElement('div');
            toast.className = `fixed top-4 right-4 z-50 px-6 py-4 rounded-lg shadow-lg text-white transform transition-all duration-300 translate-x-full ${type === 'success' ? 'bg-green-900' : 'bg-red-900'}`;
            toast.innerHTML = `
                <div class="flex items-center gap-3">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span>${message}</span>
                </div>
            `;
            
            document.body.appendChild(toast);
            
            setTimeout(() => {
                toast.classList.remove('translate-x-full');
            }, 10);
            
            setTimeout(() => {
                toast.classList.add('translate-x-full');
                setTimeout(() => {
                    document.body.removeChild(toast);
                }, 300);
            }, 3000);
        }
        
        function addToCart(productId) {
            const btn = event.target;
            const originalText = btn.innerHTML;
            btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Adding...';
            btn.disabled = true;
            
            fetch('/cart/add', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
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
                    updateCartCount(data.cart_count);
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
        }
        
        function updateCartCount(count) {
            const cartCountElements = document.querySelectorAll('.cart-count');
            cartCountElements.forEach(element => {
                element.textContent = count;
            });
        }
    </script>
</body>
</html>