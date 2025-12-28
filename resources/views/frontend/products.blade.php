<x-frontend-layout>
    <!-- Include CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/products.css') }}">
    
    <!-- Include Font Awesome and Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">

    @php
    // Define all products in PHP array (INR prices)
    $allProducts = [
        [
            'id' => 1,
            'name' => 'iPhone 14 Pro',
            'desc' => 'Latest smartphone with advanced camera',
            'price' => 89999,
            'oldPrice' => 99999,
            'image' => 'iphone.jpg',
            'rating' => 4.9,
            'reviews' => 256,
            'category' => 'electronics',
            'discount' => 10,
            'stock' => 'available',
            'badges' => ['sale', 'popular'],
            'isBestSeller' => true,
            'isTrending' => true,
            'isNew' => false
        ],
        [
            'id' => 2,
            'name' => 'Samsung QLED TV',
            'desc' => '65" 4K Smart TV with Quantum HDR',
            'price' => 119999,
            'oldPrice' => 149999,
            'image' => 'tv.jpg',
            'rating' => 4.7,
            'reviews' => 189,
            'category' => 'electronics',
            'discount' => 20,
            'stock' => 'available',
            'badges' => ['sale'],
            'isBestSeller' => true,
            'isTrending' => false,
            'isNew' => false
        ],
        [
            'id' => 3,
            'name' => 'MacBook Air M2',
            'desc' => 'Lightweight laptop with M2 chip',
            'price' => 109999,
            'oldPrice' => 124999,
            'image' => 'macbook.jpg',
            'rating' => 4.8,
            'reviews' => 312,
            'category' => 'electronics',
            'discount' => 12,
            'stock' => 'low',
            'badges' => ['sale', 'popular'],
            'isBestSeller' => true,
            'isTrending' => true,
            'isNew' => false
        ],
        [
            'id' => 4,
            'name' => 'Sony WH-1000XM4',
            'desc' => 'Noise cancelling wireless headphones',
            'price' => 28999,
            'oldPrice' => 34999,
            'image' => 'sony-headphones.jpg',
            'rating' => 4.9,
            'reviews' => 432,
            'category' => 'electronics',
            'discount' => 17,
            'stock' => 'available',
            'badges' => ['sale'],
            'isBestSeller' => true,
            'isTrending' => true,
            'isNew' => false
        ],
        [
            'id' => 5,
            'name' => 'Nike Air Max',
            'desc' => 'Premium running shoes with air cushion',
            'price' => 12999,
            'oldPrice' => 16999,
            'image' => 'nike-shoes.jpg',
            'rating' => 4.6,
            'reviews' => 89,
            'category' => 'fashion',
            'discount' => 24,
            'stock' => 'available',
            'badges' => ['sale'],
            'isBestSeller' => false,
            'isTrending' => true,
            'isNew' => false
        ],
        [
            'id' => 6,
            'name' => 'Designer Handbag',
            'desc' => 'Genuine leather, waterproof',
            'price' => 24999,
            'oldPrice' => 34999,
            'image' => 'designer-handbag.jpg',
            'rating' => 4.9,
            'reviews' => 98,
            'category' => 'fashion',
            'discount' => 29,
            'stock' => 'available',
            'badges' => ['new'],
            'isBestSeller' => false,
            'isTrending' => true,
            'isNew' => true
        ],
        [
            'id' => 7,
            'name' => 'KitchenAid Mixer',
            'desc' => 'Professional stand mixer, 5-quart',
            'price' => 44999,
            'oldPrice' => 54999,
            'image' => 'kitchenaid.jpg',
            'rating' => 4.8,
            'reviews' => 203,
            'category' => 'home',
            'discount' => 18,
            'stock' => 'available',
            'badges' => ['popular'],
            'isBestSeller' => true,
            'isTrending' => false,
            'isNew' => false
        ],
        [
            'id' => 8,
            'name' => 'Coffee Maker Deluxe',
            'desc' => 'Programmable, 12-cup capacity',
            'price' => 15999,
            'oldPrice' => 19999,
            'image' => 'coffee-maker.jpg',
            'rating' => 4.7,
            'reviews' => 267,
            'category' => 'home',
            'discount' => 20,
            'stock' => 'available',
            'badges' => ['sale'],
            'isBestSeller' => false,
            'isTrending' => true,
            'isNew' => false
        ],
        [
            'id' => 9,
            'name' => 'Modern Leather Sofa',
            'desc' => '3 seater sofa with premium leather',
            'price' => 45999,
            'oldPrice' => 59999,
            'image' => 'sofa.jpg',
            'rating' => 4.4,
            'reviews' => 156,
            'category' => 'furniture',
            'discount' => 23,
            'stock' => 'low',
            'badges' => ['sale'],
            'isBestSeller' => false,
            'isTrending' => true,
            'isNew' => false
        ],
        [
            'id' => 10,
            'name' => 'Atomic Habits Book',
            'desc' => 'Build good habits and break bad ones',
            'price' => 499,
            'oldPrice' => 699,
            'image' => 'atomic-habits.jpg',
            'rating' => 4.8,
            'reviews' => 1256,
            'category' => 'books',
            'discount' => 29,
            'stock' => 'available',
            'badges' => ['popular'],
            'isBestSeller' => true,
            'isTrending' => false,
            'isNew' => false
        ],
        [
            'id' => 11,
            'name' => 'Yoga Mat Premium',
            'desc' => 'Non-slip, eco-friendly material',
            'price' => 2499,
            'oldPrice' => 3499,
            'image' => 'yoga-mat.jpg',
            'rating' => 4.8,
            'reviews' => 156,
            'category' => 'sports',
            'discount' => 29,
            'stock' => 'available',
            'badges' => ['new'],
            'isBestSeller' => false,
            'isTrending' => true,
            'isNew' => true
        ],
        [
            'id' => 12,
            'name' => 'Complete Skincare Set',
            'desc' => '5 piece skincare routine set',
            'price' => 2999,
            'oldPrice' => 4999,
            'image' => 'skincare-set.jpg',
            'rating' => 4.5,
            'reviews' => 89,
            'category' => 'beauty',
            'discount' => 40,
            'stock' => 'available',
            'badges' => ['sale'],
            'isBestSeller' => false,
            'isTrending' => false,
            'isNew' => false
        ]
        // Add more products here as needed
    ];

    // Format price function for Blade
    function formatIndianRupees($price) {
        return '₹' . number_format($price);
    }

    // Filter products for different sections
    $bestSellers = array_filter($allProducts, function($product) {
        return $product['isBestSeller'];
    });

    $trendingProducts = array_filter($allProducts, function($product) {
        return $product['isTrending'];
    });

    $newArrivals = array_filter($allProducts, function($product) {
        return $product['isNew'];
    });
    @endphp

    <div class="product-page">
        <!-- Hero Banner -->
        <div class="container">
            <div class="hero-banner">
                <div class="hero-content">
                    <h1 class="hero-title">Discover Amazing Products</h1>
                    <p class="hero-subtitle">Browse through our collection of {{ count($allProducts) }}+ quality products with great deals and discounts</p>
                    <div class="hero-cta">
                        <a href="#products" class="btn-primary">
                            <i class="fas fa-shopping-bag"></i>
                            Shop Now
                        </a>
                        <a href="#trending" class="btn-secondary">
                            <i class="fas fa-fire"></i>
                            View Trending
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Promotional Banners -->
        <div class="container section">
            <h2 class="section-title">Special Offers</h2>
            <div class="promotional-banners">
                <div class="promo-banner">
                    <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="New Arrivals" 
                         class="promo-image">
                    <div class="promo-content">
                        <span class="promo-tag">New</span>
                        <h2 class="promo-title">New Arrivals</h2>
                        <p class="promo-description">Discover the latest products just added to our collection.</p>
                        <a href="#" class="promo-btn">
                            Explore <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                
                <div class="promo-banner">
                    <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Free Shipping" 
                         class="promo-image">
                    <div class="promo-content">
                        <span class="promo-tag">Free</span>
                        <h2 class="promo-title">Free Shipping</h2>
                        <p class="promo-description">Free shipping on all orders over ₹500. Shop now and save!</p>
                        <a href="#" class="promo-btn">
                            Learn More <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Best Sellers / Trending Products -->
        <div class="trending-section" id="trending">
            <div class="container">
                <div class="trending-header">
                    <h2 class="section-title">Best Sellers & Trending</h2>
                    <div class="trending-tabs">
                        <button class="trending-tab active" data-tab="best-sellers">Best Sellers</button>
                        <button class="trending-tab" data-tab="trending">Trending Now</button>
                        <button class="trending-tab" data-tab="new-arrivals">New Arrivals</button>
                    </div>
                </div>
                
                <div id="trending-products">
                    <!-- Best Sellers Tab -->
                    <div class="trending-tab-content active" id="best-sellers-content">
                        <div class="products-grid">
                            @foreach(array_slice($bestSellers, 0, 4) as $product)
                            <div class="product-card" data-category="{{ $product['category'] }}" data-price="{{ $product['price'] }}" data-rating="{{ $product['rating'] }}">
                                <div class="product-image-container">
                                    <img src="{{ asset('images/home_images/' . $product['image']) }}" 
                                         alt="{{ $product['name'] }}" 
                                         class="product-image">
                                    <button class="wishlist-btn">
                                        <i class="far fa-heart"></i>
                                    </button>
                                    <span class="product-badge">Best Seller</span>
                                </div>
                                <div class="product-content">
                                    <h3 class="product-title">{{ $product['name'] }}</h3>
                                    <p class="product-description">{{ $product['desc'] }}</p>
                                    <div class="product-meta">
                                        <div class="product-rating">
                                            @for($i = 1; $i <= 5; $i++)
                                                @if($i <= floor($product['rating']))
                                                    <i class="fas fa-star"></i>
                                                @elseif($i <= $product['rating'])
                                                    <i class="fas fa-star-half-alt"></i>
                                                @else
                                                    <i class="far fa-star"></i>
                                                @endif
                                            @endfor
                                            <span>({{ $product['reviews'] }})</span>
                                        </div>
                                        <div class="product-stock {{ $product['stock'] === 'available' ? 'stock-available' : 'stock-low' }}">
                                            {{ $product['stock'] === 'available' ? 'In Stock' : 'Low Stock' }}
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <span class="current-price">{{ formatIndianRupees($product['price']) }}</span>
                                        @if($product['oldPrice'])
                                        <span class="original-price">{{ formatIndianRupees($product['oldPrice']) }}</span>
                                        @endif
                                    </div>
                                    <div class="product-actions">
                                        <button class="btn-add-to-cart" data-product-id="{{ $product['id'] }}">
                                            <i class="fas fa-cart-plus"></i>
                                            Add to Cart
                                        </button>
                                        <button class="btn-wishlist" data-product-id="{{ $product['id'] }}">
                                            <i class="far fa-heart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    
                    <!-- Trending Products Tab -->
                    <div class="trending-tab-content" id="trending-content">
                        <div class="products-grid">
                            @foreach(array_slice($trendingProducts, 0, 4) as $product)
                            <div class="product-card" data-category="{{ $product['category'] }}" data-price="{{ $product['price'] }}" data-rating="{{ $product['rating'] }}">
                                <div class="product-image-container">
                                    <img src="{{ asset('images/home_images/' . $product['image']) }}" 
                                         alt="{{ $product['name'] }}" 
                                         class="product-image">
                                    <button class="wishlist-btn">
                                        <i class="far fa-heart"></i>
                                    </button>
                                    <span class="product-badge trending-badge">Trending</span>
                                </div>
                                <div class="product-content">
                                    <h3 class="product-title">{{ $product['name'] }}</h3>
                                    <p class="product-description">{{ $product['desc'] }}</p>
                                    <div class="product-meta">
                                        <div class="product-rating">
                                            @for($i = 1; $i <= 5; $i++)
                                                @if($i <= floor($product['rating']))
                                                    <i class="fas fa-star"></i>
                                                @elseif($i <= $product['rating'])
                                                    <i class="fas fa-star-half-alt"></i>
                                                @else
                                                    <i class="far fa-star"></i>
                                                @endif
                                            @endfor
                                            <span>({{ $product['reviews'] }})</span>
                                        </div>
                                        <div class="product-stock {{ $product['stock'] === 'available' ? 'stock-available' : 'stock-low' }}">
                                            {{ $product['stock'] === 'available' ? 'In Stock' : 'Low Stock' }}
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <span class="current-price">{{ formatIndianRupees($product['price']) }}</span>
                                        @if($product['oldPrice'])
                                        <span class="original-price">{{ formatIndianRupees($product['oldPrice']) }}</span>
                                        @endif
                                    </div>
                                    <div class="product-actions">
                                        <button class="btn-add-to-cart" data-product-id="{{ $product['id'] }}">
                                            <i class="fas fa-cart-plus"></i>
                                            Add to Cart
                                        </button>
                                        <button class="btn-wishlist" data-product-id="{{ $product['id'] }}">
                                            <i class="far fa-heart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    
                    <!-- New Arrivals Tab -->
                    <div class="trending-tab-content" id="new-arrivals-content">
                        <div class="products-grid">
                            @foreach(array_slice($newArrivals, 0, 4) as $product)
                            <div class="product-card" data-category="{{ $product['category'] }}" data-price="{{ $product['price'] }}" data-rating="{{ $product['rating'] }}">
                                <div class="product-image-container">
                                    <img src="{{ asset('images/home_images/' . $product['image']) }}" 
                                         alt="{{ $product['name'] }}" 
                                         class="product-image">
                                    <button class="wishlist-btn">
                                        <i class="far fa-heart"></i>
                                    </button>
                                    <span class="product-badge new-badge">New</span>
                                </div>
                                <div class="product-content">
                                    <h3 class="product-title">{{ $product['name'] }}</h3>
                                    <p class="product-description">{{ $product['desc'] }}</p>
                                    <div class="product-meta">
                                        <div class="product-rating">
                                            @for($i = 1; $i <= 5; $i++)
                                                @if($i <= floor($product['rating']))
                                                    <i class="fas fa-star"></i>
                                                @elseif($i <= $product['rating'])
                                                    <i class="fas fa-star-half-alt"></i>
                                                @else
                                                    <i class="far fa-star"></i>
                                                @endif
                                            @endfor
                                            <span>({{ $product['reviews'] }})</span>
                                        </div>
                                        <div class="product-stock {{ $product['stock'] === 'available' ? 'stock-available' : 'stock-low' }}">
                                            {{ $product['stock'] === 'available' ? 'In Stock' : 'Low Stock' }}
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <span class="current-price">{{ formatIndianRupees($product['price']) }}</span>
                                        @if($product['oldPrice'])
                                        <span class="original-price">{{ formatIndianRupees($product['oldPrice']) }}</span>
                                        @endif
                                    </div>
                                    <div class="product-actions">
                                        <button class="btn-add-to-cart" data-product-id="{{ $product['id'] }}">
                                            <i class="fas fa-cart-plus"></i>
                                            Add to Cart
                                        </button>
                                        <button class="btn-wishlist" data-product-id="{{ $product['id'] }}">
                                            <i class="far fa-heart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Filters -->
        <div class="container section">
            <h2 class="section-title">Filter Products</h2>
            <div class="quick-filters">
                <div class="filter-categories">
                    <button class="filter-category active" data-category="all">
                        <i class="fas fa-border-all"></i>
                        All Products
                    </button>
                    <button class="filter-category" data-category="electronics">
                        <i class="fas fa-laptop"></i>
                        Electronics
                    </button>
                    <button class="filter-category" data-category="furniture">
                        <i class="fas fa-couch"></i>
                        Furniture
                    </button>
                    <button class="filter-category" data-category="fashion">
                        <i class="fas fa-tshirt"></i>
                        Fashion
                    </button>
                    <button class="filter-category" data-category="home">
                        <i class="fas fa-home"></i>
                        Home & Kitchen
                    </button>
                    <button class="filter-category" data-category="books">
                        <i class="fas fa-book"></i>
                        Books
                    </button>
                    <button class="filter-category" data-category="sports">
                        <i class="fas fa-dumbbell"></i>
                        Sports
                    </button>
                    <button class="filter-category" data-category="beauty">
                        <i class="fas fa-spa"></i>
                        Beauty
                    </button>
                </div>
                
                <div class="price-filter">
                    <div class="price-inputs">
                        <div class="price-input-group">
                            <label>Min Price</label>
                            <input type="number" class="price-input" id="min-price" placeholder="₹100" min="0" max="100000">
                        </div>
                        <span style="color: var(--gray);">to</span>
                        <div class="price-input-group">
                            <label>Max Price</label>
                            <input type="number" class="price-input" id="max-price" placeholder="₹10000" min="0" max="100000">
                        </div>
                        <button class="btn-add-to-cart" style="margin-top: 28px;" id="apply-price">
                            Apply Filter
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Products Section -->
        <div class="container section" id="products">
            <div class="products-header">
                <div class="products-title-section">
                    <h2 class="section-title">Featured Products</h2>
                    <p class="products-count">Showing <span id="showing-count">{{ count($allProducts) }}</span> of <span id="total-count">{{ count($allProducts) }}</span> products</p>
                </div>
                
                <div class="sort-options">
                    <select class="sort-select" id="sort-select">
                        <option value="featured">Featured</option>
                        <option value="newest">Newest</option>
                        <option value="price-low">Price: Low to High</option>
                        <option value="price-high">Price: High to Low</option>
                        <option value="rating">Top Rated</option>
                        <option value="popular">Most Popular</option>
                    </select>
                    
                    <div class="view-options">
                        <button class="view-btn active" data-view="grid">
                            <i class="fas fa-th"></i>
                        </button>
                        <button class="view-btn" data-view="list">
                            <i class="fas fa-list"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Products Grid -->
            <div class="products-grid" id="products-grid">
                @foreach($allProducts as $product)
                <div class="product-card" data-category="{{ $product['category'] }}" data-price="{{ $product['price'] }}" data-rating="{{ $product['rating'] }}">
                    <div class="product-image-container">
                        <img src="{{ asset('images/home_images/' . $product['image']) }}" 
                             alt="{{ $product['name'] }}" 
                             class="product-image">
                        <button class="wishlist-btn">
                            <i class="far fa-heart"></i>
                        </button>
                        @if(in_array('sale', $product['badges']))
                        <span class="product-badge discount-badge">-{{ $product['discount'] }}%</span>
                        @endif
                        @if(in_array('new', $product['badges']))
                        <span class="product-badge new-badge">New</span>
                        @endif
                        @if(in_array('popular', $product['badges']))
                        <span class="product-badge popular-badge">Popular</span>
                        @endif
                    </div>
                    
                    <div class="product-content">
                        <h3 class="product-title">{{ $product['name'] }}</h3>
                        
                        <p class="product-description">
                            {{ $product['desc'] }}
                        </p>
                        
                        <div class="product-meta">
                            <div class="product-rating">
                                @for($i = 1; $i <= 5; $i++)
                                    @if($i <= floor($product['rating']))
                                        <i class="fas fa-star"></i>
                                    @elseif($i <= $product['rating'])
                                        <i class="fas fa-star-half-alt"></i>
                                    @else
                                        <i class="far fa-star"></i>
                                    @endif
                                @endfor
                                <span>({{ $product['reviews'] }})</span>
                            </div>
                            <div class="product-stock {{ $product['stock'] === 'available' ? 'stock-available' : 'stock-low' }}">
                                {{ $product['stock'] === 'available' ? 'In Stock' : 'Low Stock' }}
                            </div>
                        </div>
                        
                        <div class="product-price">
                            <span class="current-price">{{ formatIndianRupees($product['price']) }}</span>
                            @if($product['oldPrice'])
                            <span class="original-price">{{ formatIndianRupees($product['oldPrice']) }}</span>
                            @endif
                        </div>
                        
                        <div class="product-actions">
                            <button class="btn-add-to-cart" data-product-id="{{ $product['id'] }}">
                                <i class="fas fa-cart-plus"></i>
                                Add to Cart
                            </button>
                            <button class="btn-wishlist" data-product-id="{{ $product['id'] }}">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            <!-- Pagination -->
            <div class="pagination" id="pagination">
                <button class="page-btn disabled">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="page-btn active">1</button>
                <button class="page-btn">2</button>
                <button class="page-btn">3</button>
                <button class="page-btn">4</button>
                <button class="page-btn">5</button>
                <span style="padding: 0 12px; color: var(--gray);">...</span>
                <button class="page-btn">24</button>
                <button class="page-btn">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>

        <!-- Featured Categories -->
        <div class="container section">
            <h2 class="section-title">Shop by Category</h2>
            <p style="font-size: 18px; color: var(--gray); margin-bottom: 40px;">Browse products by your favorite categories</p>
            
            <div class="categories-grid">
                <div class="category-card" data-category="electronics">
                    <div class="category-icon">
                        <i class="fas fa-laptop"></i>
                    </div>
                    <h3 class="category-title">Electronics</h3>
                    <div class="category-count">
                        @php
                            $electronicsCount = count(array_filter($allProducts, function($p) {
                                return $p['category'] === 'electronics';
                            }));
                        @endphp
                        {{ $electronicsCount }} products
                    </div>
                </div>
                
                <div class="category-card" data-category="furniture">
                    <div class="category-icon">
                        <i class="fas fa-couch"></i>
                    </div>
                    <h3 class="category-title">Furniture</h3>
                    <div class="category-count">
                        @php
                            $furnitureCount = count(array_filter($allProducts, function($p) {
                                return $p['category'] === 'furniture';
                            }));
                        @endphp
                        {{ $furnitureCount }} products
                    </div>
                </div>
                
                <div class="category-card" data-category="books">
                    <div class="category-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <h3 class="category-title">Books</h3>
                    <div class="category-count">
                        @php
                            $booksCount = count(array_filter($allProducts, function($p) {
                                return $p['category'] === 'books';
                            }));
                        @endphp
                        {{ $booksCount }} products
                    </div>
                </div>
                
                <div class="category-card" data-category="fashion">
                    <div class="category-icon">
                        <i class="fas fa-tshirt"></i>
                    </div>
                    <h3 class="category-title">Fashion</h3>
                    <div class="category-count">
                        @php
                            $fashionCount = count(array_filter($allProducts, function($p) {
                                return $p['category'] === 'fashion';
                            }));
                        @endphp
                        {{ $fashionCount }} products
                    </div>
                </div>
                
                <div class="category-card" data-category="home">
                    <div class="category-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <h3 class="category-title">Home & Kitchen</h3>
                    <div class="category-count">
                        @php
                            $homeCount = count(array_filter($allProducts, function($p) {
                                return $p['category'] === 'home';
                            }));
                        @endphp
                        {{ $homeCount }} products
                    </div>
                </div>
                
                <div class="category-card" data-category="sports">
                    <div class="category-icon">
                        <i class="fas fa-dumbbell"></i>
                    </div>
                    <h3 class="category-title">Sports & Outdoors</h3>
                    <div class="category-count">
                        @php
                            $sportsCount = count(array_filter($allProducts, function($p) {
                                return $p['category'] === 'sports';
                            }));
                        @endphp
                        {{ $sportsCount }} products
                    </div>
                </div>
            </div>
        </div>

        <!-- Newsletter -->
        <div class="newsletter">
            <div class="container">
                <h2 class="newsletter-title">Never Miss a Deal</h2>
                <p class="newsletter-subtitle">Subscribe to get daily deals and new arrivals</p>
                <form class="newsletter-form">
                    <input type="email" class="newsletter-input" placeholder="Enter your email address" required>
                    <button type="submit" class="newsletter-btn">Subscribe Now</button>
                </form>
            </div>
        </div>

        <!-- Toast Notification -->
        <div class="toast toast-success" id="toast">
            <div class="toast-icon">
                <i class="fas fa-check-circle"></i>
            </div>
            <div class="toast-message" id="toast-message">Product added to cart!</div>
            <button class="toast-close" id="toast-close">&times;</button>
        </div>
    </div>

    <!-- Pass PHP products to JavaScript -->
    <script>
        // Convert PHP products array to JavaScript
        const allProducts = @json($allProducts);
    </script>

    <!-- Include JavaScript -->
    <script src="{{ asset('frontend/js/products.js') }}"></script>
</x-frontend-layout>