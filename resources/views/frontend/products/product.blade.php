<x-frontend-layout>
    <!-- Hero Banner -->
    <section class="py-16 bg-linear-to-br from-green-50 to-white">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                    Discover Amazing Products
                </h1>
                <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto">
                    Browse through our collection of {{ $allProducts->count() }}+ quality products with great deals and discounts
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#products" class="hero-btn-unified inline-flex items-center justify-center gap-2">
                        <i class="fas fa-shopping-bag"></i>
                        Shop Now
                    </a>
                    <a href="#trending" class="hero-btn-secondary inline-flex items-center justify-center gap-2">
                        <i class="fas fa-fire"></i>
                        View Trending
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Promotional Banners -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Special Offers</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- New Arrivals Banner -->
                <div class="relative rounded-2xl overflow-hidden shadow-lg group">
                    @php $newArrival = $newArrivals->first(); @endphp
                    @if($newArrival)
                    <a href="{{ route('frontend.products.show', $newArrival->slug) }}">
                        <img src="{{ $newArrival->image ? asset('storage/products/' . $newArrival->image) : asset('images/products/default.jpg') }}"
                             alt="New Arrivals"
                             class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-500">
                    </a>
                    @endif
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-6">
                        <span class="inline-block px-3 py-1 bg-green-500 text-white text-sm font-semibold rounded-full mb-2">
                            New
                        </span>
                        <h3 class="text-2xl font-bold text-white mb-2">New Arrivals</h3>
                        <p class="text-gray-200 mb-4">Discover the latest products just added to our collection.</p>
                        <a href="{{ route('frontend.products.index') }}?sort=newest#products" class="hero-btn-unified">
                            Explore <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Free Shipping Banner -->
                <div class="relative rounded-2xl overflow-hidden shadow-lg group">
                    <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                         alt="Free Shipping"
                         class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-6">
                        <span class="inline-block px-3 py-1 bg-blue-500 text-white text-sm font-semibold rounded-full mb-2">
                            Free
                        </span>
                        <h3 class="text-2xl font-bold text-white mb-2">Free Shipping</h3>
                        <p class="text-gray-200 mb-4">Free shipping on all orders over ₹500. Shop now and save!</p>
                        <a href="#" class="hero-btn-unified">
                            Learn More <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Best Sellers / Trending Products with Horizontal Scroll -->
    <section class="py-16 bg-gray-50" id="trending">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Best Sellers & Trending</h2>
                <div class="flex justify-center space-x-4 mb-8" id="trending-tabs-container">
                    <button class="trending-tab active px-6 py-2 rounded-full font-semibold transition-colors duration-300"
                            data-tab="best-sellers">
                        Best Sellers
                    </button>
                    <button class="trending-tab px-6 py-2 rounded-full font-semibold transition-colors duration-300"
                            data-tab="trending">
                        Trending Now
                    </button>
                    <button class="trending-tab px-6 py-2 rounded-full font-semibold transition-colors duration-300"
                            data-tab="new-arrivals">
                        New Arrivals
                    </button>
                </div>
            </div>
            
            <div id="trending-products">
                <!-- Best Sellers Tab -->
                <div class="trending-tab-content active" id="best-sellers-content">
                    <div class="relative">
                        <div class="trending-products-horizontal-scroll flex space-x-6 pb-4 overflow-x-auto scrollbar-hide snap-x snap-mandatory">
                            @foreach($bestSellers as $product)
                            <div class="flex-shrink-0 w-72 snap-start">
                                <!-- Product Card Component -->
                                <div class="product-card group">
                                    <div class="product-card-image-container">
                                        <a href="{{ route('frontend.products.show', $product->slug) }}">
                                            <img src="{{ $product->image ? asset('storage/products/' . $product->image) : asset('images/products/default.jpg') }}"
                                                 alt="{{ $product->name }}"
                                                 class="product-card-image">
                                        </a>
                                        <!-- Badges -->
                                        <div class="product-card-badges">
                                            @if($product->is_best_seller)
                                            <span class="product-badge product-badge-best-seller">Best Seller</span>
                                            @endif
                                            @if($product->discount > 0)
                                            <span class="product-badge product-badge-discount">-{{ $product->discount }}%</span>
                                            @endif
                                        </div>
                                        <button class="product-wishlist-btn">
                                            <i class="far fa-heart"></i>
                                        </button>
                                    </div>
                                    <div class="product-card-content">
                                        <h3 class="product-card-title">
                                            <a href="{{ route('frontend.products.show', $product->slug) }}">
                                                {{ $product->name }}
                                            </a>
                                        </h3>
                                        
                                        <!-- Product Meta -->
                                        <div class="product-card-meta">
                                            @if(isset($product->brand) && $product->brand)
                                            <a href="{{ route('frontend.products.index') }}?brand={{ urlencode($product->brand) }}#products" 
                                               class="product-card-brand">
                                                <i class="fas fa-tag"></i>
                                                {{ $product->brand }}
                                            </a>
                                            @endif
                                            @if($product->category)
                                            <a href="{{ route('frontend.products.index') }}?category={{ $product->category->slug }}#products" 
                                               class="product-card-category">
                                                <i class="fas fa-folder"></i>
                                                {{ $product->category->name }}
                                            </a>
                                            @endif
                                        </div>
                                        
                                        <p class="product-card-description">{{ Str::limit($product->description, 70) }}</p>
                                        
                                        <!-- Rating and Stock -->
                                        <div class="product-card-rating-stock">
                                            <div class="product-card-rating">
                                                <div class="product-stars">
                                                    @for($i = 1; $i <= 5; $i++)
                                                        @if($i <= floor($product->rating))
                                                            <i class="fas fa-star"></i>
                                                        @elseif($i <= $product->rating)
                                                            <i class="fas fa-star-half-alt"></i>
                                                        @else
                                                            <i class="far fa-star"></i>
                                                        @endif
                                                    @endfor
                                                </div>
                                                <span class="product-rating-count">({{ $product->reviews }})</span>
                                            </div>
                                            <span class="product-stock-badge product-stock-{{ $product->stock }}">
                                                {{ $product->stock === 'available' ? 'In Stock' : ($product->stock === 'low' ? 'Low Stock' : 'Out of Stock') }}
                                            </span>
                                        </div>
                                        
                                        <!-- Price and Action -->
                                        <div class="product-card-price-action">
                                            <div class="product-card-prices">
                                                <span class="product-card-current-price">₹{{ number_format($product->price, 0) }}</span>
                                                @if($product->old_price)
                                                <span class="product-card-old-price">₹{{ number_format($product->old_price, 0) }}</span>
                                                @endif
                                            </div>
                                            @if($product->stock !== 'out_of_stock')
                                            <button class="product-card-add-to-cart" onclick="addToCart({{ $product->id }})">
                                                <i class="fas fa-shopping-cart"></i>
                                                Add to Cart
                                            </button>
                                            @else
                                            <span class="product-out-of-stock">Out of Stock</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product Card Component -->
                            </div>
                            @endforeach
                        </div>
                        
                        <!-- Scroll indicators -->
                        <div class="flex justify-center mt-4 space-x-2">
                            <button class="scroll-left-btn w-10 h-10 bg-white rounded-full shadow-md flex items-center justify-center hover:bg-gray-50 transition-colors">
                                <i class="fas fa-chevron-left text-gray-600"></i>
                            </button>
                            <button class="scroll-right-btn w-10 h-10 bg-white rounded-full shadow-md flex items-center justify-center hover:bg-gray-50 transition-colors">
                                <i class="fas fa-chevron-right text-gray-600"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Trending Products Tab -->
                <div class="trending-tab-content hidden" id="trending-content">
                    <div class="relative">
                        <div class="trending-products-horizontal-scroll flex space-x-6 pb-4 overflow-x-auto scrollbar-hide snap-x snap-mandatory">
                            @foreach($trendingProducts as $product)
                            <div class="flex-shrink-0 w-72 snap-start">
                                <!-- Product Card Component -->
                                <div class="product-card group">
                                    <div class="product-card-image-container">
                                        <a href="{{ route('frontend.products.show', $product->slug) }}">
                                            <img src="{{ $product->image ? asset('storage/products/' . $product->image) : asset('images/products/default.jpg') }}"
                                                 alt="{{ $product->name }}"
                                                 class="product-card-image">
                                        </a>
                                        <!-- Badges -->
                                        <div class="product-card-badges">
                                            @if($product->is_trending)
                                            <span class="product-badge product-badge-trending">Trending</span>
                                            @endif
                                            @if($product->discount > 0)
                                            <span class="product-badge product-badge-discount">-{{ $product->discount }}%</span>
                                            @endif
                                        </div>
                                        <button class="product-wishlist-btn">
                                            <i class="far fa-heart"></i>
                                        </button>
                                    </div>
                                    <div class="product-card-content">
                                        <h3 class="product-card-title">
                                            <a href="{{ route('frontend.products.show', $product->slug) }}">
                                                {{ $product->name }}
                                            </a>
                                        </h3>
                                        
                                        <!-- Product Meta -->
                                        <div class="product-card-meta">
                                            @if(isset($product->brand) && $product->brand)
                                            <a href="{{ route('frontend.products.index') }}?brand={{ urlencode($product->brand) }}#products" 
                                               class="product-card-brand">
                                                <i class="fas fa-tag"></i>
                                                {{ $product->brand }}
                                            </a>
                                            @endif
                                            @if($product->category)
                                            <a href="{{ route('frontend.products.index') }}?category={{ $product->category->slug }}#products" 
                                               class="product-card-category">
                                                <i class="fas fa-folder"></i>
                                                {{ $product->category->name }}
                                            </a>
                                            @endif
                                        </div>
                                        
                                        <p class="product-card-description">{{ Str::limit($product->description, 70) }}</p>
                                        
                                        <!-- Rating and Stock -->
                                        <div class="product-card-rating-stock">
                                            <div class="product-card-rating">
                                                <div class="product-stars">
                                                    @for($i = 1; $i <= 5; $i++)
                                                        @if($i <= floor($product->rating))
                                                            <i class="fas fa-star"></i>
                                                        @elseif($i <= $product->rating)
                                                            <i class="fas fa-star-half-alt"></i>
                                                        @else
                                                            <i class="far fa-star"></i>
                                                        @endif
                                                    @endfor
                                                </div>
                                                <span class="product-rating-count">({{ $product->reviews }})</span>
                                            </div>
                                            <span class="product-stock-badge product-stock-{{ $product->stock }}">
                                                {{ $product->stock === 'available' ? 'In Stock' : ($product->stock === 'low' ? 'Low Stock' : 'Out of Stock') }}
                                            </span>
                                        </div>
                                        
                                        <!-- Price and Action -->
                                        <div class="product-card-price-action">
                                            <div class="product-card-prices">
                                                <span class="product-card-current-price">₹{{ number_format($product->price, 0) }}</span>
                                                @if($product->old_price)
                                                <span class="product-card-old-price">₹{{ number_format($product->old_price, 0) }}</span>
                                                @endif
                                            </div>
                                            @if($product->stock !== 'out_of_stock')
                                            <button class="product-card-add-to-cart" onclick="addToCart({{ $product->id }})">
                                                <i class="fas fa-shopping-cart"></i>
                                                Add to Cart
                                            </button>
                                            @else
                                            <span class="product-out-of-stock">Out of Stock</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product Card Component -->
                            </div>
                            @endforeach
                        </div>
                        
                        <!-- Scroll indicators -->
                        <div class="flex justify-center mt-4 space-x-2">
                            <button class="scroll-left-btn w-10 h-10 bg-white rounded-full shadow-md flex items-center justify-center hover:bg-gray-50 transition-colors">
                                <i class="fas fa-chevron-left text-gray-600"></i>
                            </button>
                            <button class="scroll-right-btn w-10 h-10 bg-white rounded-full shadow-md flex items-center justify-center hover:bg-gray-50 transition-colors">
                                <i class="fas fa-chevron-right text-gray-600"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- New Arrivals Tab -->
                <div class="trending-tab-content hidden" id="new-arrivals-content">
                    <div class="relative">
                        <div class="trending-products-horizontal-scroll flex space-x-6 pb-4 overflow-x-auto scrollbar-hide snap-x snap-mandatory">
                            @foreach($newArrivals as $product)
                            <div class="flex-shrink-0 w-72 snap-start">
                                <!-- Product Card Component -->
                                <div class="product-card group">
                                    <div class="product-card-image-container">
                                        <a href="{{ route('frontend.products.show', $product->slug) }}">
                                            <img src="{{ $product->image ? asset('storage/products/' . $product->image) : asset('images/products/default.jpg') }}"
                                                 alt="{{ $product->name }}"
                                                 class="product-card-image">
                                        </a>
                                        <!-- Badges -->
                                        <div class="product-card-badges">
                                            @if($product->is_new)
                                            <span class="product-badge product-badge-new">New</span>
                                            @endif
                                            @if($product->discount > 0)
                                            <span class="product-badge product-badge-discount">-{{ $product->discount }}%</span>
                                            @endif
                                        </div>
                                        <button class="product-wishlist-btn">
                                            <i class="far fa-heart"></i>
                                        </button>
                                    </div>
                                    <div class="product-card-content">
                                        <h3 class="product-card-title">
                                            <a href="{{ route('frontend.products.show', $product->slug) }}">
                                                {{ $product->name }}
                                            </a>
                                        </h3>
                                        
                                        <!-- Product Meta -->
                                        <div class="product-card-meta">
                                            @if(isset($product->brand) && $product->brand)
                                            <a href="{{ route('frontend.products.index') }}?brand={{ urlencode($product->brand) }}#products" 
                                               class="product-card-brand">
                                                <i class="fas fa-tag"></i>
                                                {{ $product->brand }}
                                            </a>
                                            @endif
                                            @if($product->category)
                                            <a href="{{ route('frontend.products.index') }}?category={{ $product->category->slug }}#products" 
                                               class="product-card-category">
                                                <i class="fas fa-folder"></i>
                                                {{ $product->category->name }}
                                            </a>
                                            @endif
                                        </div>
                                        
                                        <p class="product-card-description">{{ Str::limit($product->description, 70) }}</p>
                                        
                                        <!-- Rating and Stock -->
                                        <div class="product-card-rating-stock">
                                            <div class="product-card-rating">
                                                <div class="product-stars">
                                                    @for($i = 1; $i <= 5; $i++)
                                                        @if($i <= floor($product->rating))
                                                            <i class="fas fa-star"></i>
                                                        @elseif($i <= $product->rating)
                                                            <i class="fas fa-star-half-alt"></i>
                                                        @else
                                                            <i class="far fa-star"></i>
                                                        @endif
                                                    @endfor
                                                </div>
                                                <span class="product-rating-count">({{ $product->reviews }})</span>
                                            </div>
                                            <span class="product-stock-badge product-stock-{{ $product->stock }}">
                                                {{ $product->stock === 'available' ? 'In Stock' : ($product->stock === 'low' ? 'Low Stock' : 'Out of Stock') }}
                                            </span>
                                        </div>
                                        
                                        <!-- Price and Action -->
                                        <div class="product-card-price-action">
                                            <div class="product-card-prices">
                                                <span class="product-card-current-price">₹{{ number_format($product->price, 0) }}</span>
                                                @if($product->old_price)
                                                <span class="product-card-old-price">₹{{ number_format($product->old_price, 0) }}</span>
                                                @endif
                                            </div>
                                            @if($product->stock !== 'out_of_stock')
                                            <button class="product-card-add-to-cart" onclick="addToCart({{ $product->id }})">
                                                <i class="fas fa-shopping-cart"></i>
                                                Add to Cart
                                            </button>
                                            @else
                                            <span class="product-out-of-stock">Out of Stock</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product Card Component -->
                            </div>
                            @endforeach
                        </div>
                        
                        <!-- Scroll indicators -->
                        <div class="flex justify-center mt-4 space-x-2">
                            <button class="scroll-left-btn w-10 h-10 bg-white rounded-full shadow-md flex items-center justify-center hover:bg-gray-50 transition-colors">
                                <i class="fas fa-chevron-left text-gray-600"></i>
                            </button>
                            <button class="scroll-right-btn w-10 h-10 bg-white rounded-full shadow-md flex items-center justify-center hover:bg-gray-50 transition-colors">
                                <i class="fas fa-chevron-right text-gray-600"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- All Products Filters Section -->
    <section class="py-16" id="products">
        <div class="container mx-auto px-4">
            <div class="mb-8">
                <h2 class="text-3xl font-bold text-gray-900">
                    @if(request()->has('brand'))
                        {{ request('brand') }} Products
                    @elseif(request()->has('search'))
                        Search Results for "{{ request('search') }}"
                    @else
                        All Products
                    @endif
                </h2>
                <p class="text-gray-600 mt-2">
                    @if(request()->has('brand') && request()->has('search'))
                        Showing {{ $products->count() }} {{ request('brand') }} products matching "{{ request('search') }}"
                    @elseif(request()->has('brand'))
                        Showing {{ $products->count() }} of {{ $allProducts->where('brand', request('brand'))->count() }} {{ request('brand') }} products
                    @elseif(request()->has('search'))
                        Showing {{ $products->count() }} results for "{{ request('search') }}"
                    @else
                        Showing {{ $products->count() }} of {{ $allProducts->count() }} products
                    @endif
                </p>
            </div>

            <!-- Active Filters -->
            @if(request()->anyFilled(['brand', 'search', 'category', 'min_price', 'max_price', 'sort']))
            <div class="mb-6">
                <div class="flex flex-wrap gap-2">
                    <!-- Brand filter badge -->
                    @if(request()->has('brand'))
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm bg-green-100 text-green-800">
                        <i class="fas fa-tag mr-2"></i>
                        Brand: {{ request('brand') }}
                        <a href="{{ route('frontend.products.index', request()->except('brand')) }}#products" class="ml-2 text-green-600 hover:text-green-800">
                            <i class="fas fa-times"></i>
                        </a>
                    </span>
                    @endif
                    
                    <!-- Search filter badge -->
                    @if(request()->has('search'))
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm bg-blue-100 text-blue-800">
                        <i class="fas fa-search mr-2"></i>
                        Search: "{{ request('search') }}"
                        <a href="{{ route('frontend.products.index', request()->except('search')) }}#products" class="ml-2 text-blue-600 hover:text-blue-800">
                            <i class="fas fa-times"></i>
                        </a>
                    </span>
                    @endif
                    
                    <!-- Category filter badge -->
                    @if(request()->has('category'))
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm bg-purple-100 text-purple-800">
                        <i class="fas fa-folder mr-2"></i>
                        Category: {{ request('category') }}
                        <a href="{{ route('frontend.products.index', request()->except('category')) }}#products" class="ml-2 text-purple-600 hover:text-purple-800">
                            <i class="fas fa-times"></i>
                        </a>
                    </span>
                    @endif
                    
                    <!-- Price filter badge -->
                    @if(request()->has('min_price') || request()->has('max_price'))
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm bg-yellow-100 text-yellow-800">
                        <i class="fas fa-indian-rupee-sign mr-2"></i>
                        Price: 
                        @if(request()->has('min_price')){{ request('min_price') }} @endif
                        @if(request()->has('min_price') && request()->has('max_price'))-@endif
                        @if(request()->has('max_price')){{ request('max_price') }} @endif
                        <a href="{{ route('frontend.products.index', request()->except(['min_price', 'max_price'])) }}#products" class="ml-2 text-yellow-600 hover:text-yellow-800">
                            <i class="fas fa-times"></i>
                        </a>
                    </span>
                    @endif
                    
                    <!-- Sort filter badge -->
                    @if(request()->has('sort') && request('sort') != 'featured')
                    @php
                        $sortLabels = [
                            'newest' => 'Newest',
                            'price-low' => 'Price: Low to High',
                            'price-high' => 'Price: High to Low',
                            'rating' => 'Top Rated',
                            'popular' => 'Most Popular'
                        ];
                    @endphp
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm bg-red-100 text-red-800">
                        <i class="fas fa-sort mr-2"></i>
                        {{ $sortLabels[request('sort')] ?? 'Sorted' }}
                        <a href="{{ route('frontend.products.index', request()->except('sort')) }}#products" class="ml-2 text-red-600 hover:text-red-800">
                            <i class="fas fa-times"></i>
                        </a>
                    </span>
                    @endif
                    
                    <!-- Clear All Filters -->
                    @if(request()->anyFilled(['brand', 'search', 'category', 'min_price', 'max_price', 'sort']))
                    <a href="{{ route('frontend.products.index') }}#products" 
                       class="inline-flex items-center px-3 py-1 rounded-full text-sm bg-gray-100 text-gray-800 hover:bg-gray-200">
                        <i class="fas fa-times mr-1"></i>
                        Clear all
                    </a>
                    @endif
                </div>
            </div>
            @endif

            <!-- Horizontal Filters Bar -->
            <div class="mb-8 bg-white rounded-xl shadow-sm p-6">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                    <!-- Category Dropdown -->
                    @if(isset($categories) && count($categories) > 0)
                    <div class="relative group">
                        <button class="filter-dropdown-btn">
                            <i class="fas fa-folder mr-2"></i>
                            @if(request()->has('category'))
                                Category: {{ request('category') }}
                            @else
                                Category
                            @endif
                            <i class="fas fa-chevron-down ml-2 text-xs"></i>
                        </button>
                        <div class="filter-dropdown-menu">
                            <a href="{{ route('frontend.products.index', request()->except('category')) }}#products" 
                               class="filter-dropdown-item {{ !request()->has('category') ? 'active' : '' }}">
                                All Categories
                                <span class="text-gray-500 text-sm ml-auto">{{ $allProducts->count() }}</span>
                            </a>
                            @foreach($categories as $category)
                            <a href="{{ route('frontend.products.index', array_merge(request()->except('page'), ['category' => $category->slug])) }}#products" 
                               class="filter-dropdown-item {{ request('category') == $category->slug ? 'active' : '' }}">
                                {{ $category->name }}
                                <span class="text-gray-500 text-sm ml-auto">{{ $category->products_count }}</span>
                            </a>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    <!-- Brand Dropdown -->
                    @if(isset($brands) && count($brands) > 0)
                    <div class="relative group">
                        <button class="filter-dropdown-btn">
                            <i class="fas fa-tag mr-2"></i>
                            @if(request()->has('brand'))
                                Brand: {{ request('brand') }}
                            @else
                                Brand
                            @endif
                            <i class="fas fa-chevron-down ml-2 text-xs"></i>
                        </button>
                        <div class="filter-dropdown-menu max-h-80 overflow-y-auto">
                            <a href="{{ route('frontend.products.index', request()->except('brand')) }}#products" 
                               class="filter-dropdown-item {{ !request()->has('brand') ? 'active' : '' }}">
                                All Brands
                                <span class="text-gray-500 text-sm ml-auto">{{ $allProducts->count() }}</span>
                            </a>
                            @foreach($brands as $brand)
                            <a href="{{ route('frontend.products.index', array_merge(request()->except('page'), ['brand' => $brand['name']])) }}#products" 
                               class="filter-dropdown-item {{ request('brand') == $brand['name'] ? 'active' : '' }}">
                                {{ $brand['name'] }}
                                <span class="text-gray-500 text-sm ml-auto">{{ $brand['count'] }}</span>
                            </a>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    <!-- Price Range Dropdown -->
                    <div class="relative group">
                        <button class="filter-dropdown-btn">
                            <i class="fas fa-indian-rupee-sign mr-2"></i>
                            @if(request()->has('min_price') || request()->has('max_price'))
                                Price: 
                                @if(request()->has('min_price')){{ request('min_price') }} @endif
                                @if(request()->has('min_price') && request()->has('max_price'))-@endif
                                @if(request()->has('max_price')){{ request('max_price') }} @endif
                            @else
                                Price
                            @endif
                            <i class="fas fa-chevron-down ml-2 text-xs"></i>
                        </button>
                        <div class="filter-dropdown-menu p-4 w-72">
                            <form action="{{ route('frontend.products.index') }}" method="GET" id="priceFilterForm" class="space-y-4">
                                <!-- Preserve existing filters -->
                                @if(request()->has('brand'))
                                <input type="hidden" name="brand" value="{{ request('brand') }}">
                                @endif
                                @if(request()->has('search'))
                                <input type="hidden" name="search" value="{{ request('search') }}">
                                @endif
                                @if(request()->has('category'))
                                <input type="hidden" name="category" value="{{ request('category') }}">
                                @endif
                                @if(request()->has('sort'))
                                <input type="hidden" name="sort" value="{{ request('sort') }}">
                                @endif
                                
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Price Range</label>
                                    <div class="grid grid-cols-2 gap-3">
                                        <div>
                                            <label class="block text-xs text-gray-600 mb-1">Min</label>
                                            <input type="number" 
                                                   name="min_price" 
                                                   value="{{ request('min_price') }}"
                                                   placeholder="0" 
                                                   min="0"
                                                   class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-green-500 focus:border-transparent">
                                        </div>
                                        <div>
                                            <label class="block text-xs text-gray-600 mb-1">Max</label>
                                            <input type="number" 
                                                   name="max_price" 
                                                   value="{{ request('max_price') }}"
                                                   placeholder="10000" 
                                                   min="0"
                                                   class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-green-500 focus:border-transparent">
                                        </div>
                                    </div>
                                </div>
                                <div class="flex gap-2 pt-2">
                                    <button type="submit" class="flex-1 hero-btn-unified text-sm py-2">
                                        Apply
                                    </button>
                                    @if(request()->has('min_price') || request()->has('max_price'))
                                    <a href="{{ route('frontend.products.index', request()->except(['min_price', 'max_price'])) }}#products" 
                                       class="flex-1 py-2 px-4 bg-gray-100 text-gray-700 hover:bg-gray-200 rounded-lg font-medium text-sm text-center">
                                        Clear
                                    </a>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Sort Dropdown -->
                    <div class="relative group">
                        <button class="filter-dropdown-btn">
                            <i class="fas fa-sort mr-2"></i>
                            @php
                                $sortLabels = [
                                    'featured' => 'Featured',
                                    'newest' => 'Newest',
                                    'price-low' => 'Price: Low to High',
                                    'price-high' => 'Price: High to Low',
                                    'rating' => 'Top Rated',
                                    'popular' => 'Most Popular'
                                ];
                            @endphp
                            {{ $sortLabels[request('sort', 'featured')] ?? 'Sort By' }}
                            <i class="fas fa-chevron-down ml-2 text-xs"></i>
                        </button>
                        <div class="filter-dropdown-menu">
                            @foreach($sortLabels as $key => $label)
                            <a href="{{ route('frontend.products.index', array_merge(request()->except(['page', 'sort']), ['sort' => $key])) }}#products" 
                               class="filter-dropdown-item {{ request('sort', 'featured') == $key ? 'active' : '' }}">
                                @php
                                    $icons = [
                                        'featured' => 'fas fa-star',
                                        'newest' => 'fas fa-clock',
                                        'price-low' => 'fas fa-arrow-down',
                                        'price-high' => 'fas fa-arrow-up',
                                        'rating' => 'fas fa-star-half-alt',
                                        'popular' => 'fas fa-fire'
                                    ];
                                @endphp
                                <i class="{{ $icons[$key] ?? 'fas fa-sort' }} mr-2 text-sm"></i>
                                {{ $label }}
                            </a>
                            @endforeach
                        </div>
                    </div>

                    <!-- Clear Filters Button (visible only when filters are active) -->
                    @if(request()->anyFilled(['brand', 'search', 'category', 'min_price', 'max_price', 'sort']))
                    <div>
                        <a href="{{ route('frontend.products.index') }}#products" 
                           class="inline-flex items-center gap-2 px-4 py-2 bg-red-50 text-red-700 hover:bg-red-100 rounded-lg font-medium text-sm transition-colors">
                            <i class="fas fa-times"></i>
                            Clear Filters
                        </a>
                    </div>
                    @endif
                </div>
            </div>

            <!-- Products Grid -->
            <div id="products-grid">
                @if($products->count() > 0)
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    @foreach($products as $product)
                    <!-- Product Card Component -->
                    <div class="product-card group">
                        <div class="product-card-image-container">
                            <a href="{{ route('frontend.products.show', $product->slug) }}">
                                <img src="{{ $product->image ? asset('storage/products/' . $product->image) : asset('images/products/default.jpg') }}"
                                     alt="{{ $product->name }}"
                                     class="product-card-image">
                            </a>
                            <!-- Badges -->
                            <div class="product-card-badges">
                                @if($product->is_new)
                                <span class="product-badge product-badge-new">New</span>
                                @endif
                                @if($product->is_best_seller)
                                <span class="product-badge product-badge-best-seller">Best Seller</span>
                                @endif
                                @if($product->is_trending)
                                <span class="product-badge product-badge-trending">Trending</span>
                                @endif
                                @if($product->discount > 0)
                                <span class="product-badge product-badge-discount">-{{ $product->discount }}%</span>
                                @endif
                            </div>
                            <button class="product-wishlist-btn">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                        <div class="product-card-content">
                            <h3 class="product-card-title">
                                <a href="{{ route('frontend.products.show', $product->slug) }}">
                                    {{ $product->name }}
                                </a>
                            </h3>
                            
                            <!-- Product Meta -->
                            <div class="product-card-meta">
                                @if(isset($product->brand) && $product->brand)
                                <a href="{{ route('frontend.products.index') }}?brand={{ urlencode($product->brand) }}#products" 
                                   class="product-card-brand">
                                    <i class="fas fa-tag"></i>
                                    {{ $product->brand }}
                                </a>
                                @endif
                                @if($product->category)
                                <a href="{{ route('frontend.products.index') }}?category={{ $product->category->slug }}#products" 
                                   class="product-card-category">
                                    <i class="fas fa-folder"></i>
                                    {{ $product->category->name }}
                                </a>
                                @endif
                            </div>
                            
                            <p class="product-card-description">{{ Str::limit($product->description, 70) }}</p>
                            
                            <!-- Rating and Stock -->
                            <div class="product-card-rating-stock">
                                <div class="product-card-rating">
                                    <div class="product-stars">
                                        @for($i = 1; $i <= 5; $i++)
                                            @if($i <= floor($product->rating))
                                                <i class="fas fa-star"></i>
                                            @elseif($i <= $product->rating)
                                                <i class="fas fa-star-half-alt"></i>
                                            @else
                                                <i class="far fa-star"></i>
                                            @endif
                                        @endfor
                                    </div>
                                    <span class="product-rating-count">({{ $product->reviews }})</span>
                                </div>
                                <span class="product-stock-badge product-stock-{{ $product->stock }}">
                                    {{ $product->stock === 'available' ? 'In Stock' : ($product->stock === 'low' ? 'Low Stock' : 'Out of Stock') }}
                                </span>
                            </div>
                            
                            <!-- Price and Action -->
                            <div class="product-card-price-action">
                                <div class="product-card-prices">
                                    <span class="product-card-current-price">₹{{ number_format($product->price, 0) }}</span>
                                    @if($product->old_price)
                                    <span class="product-card-old-price">₹{{ number_format($product->old_price, 0) }}</span>
                                    @endif
                                </div>
                                @if($product->stock !== 'out_of_stock')
                                <button class="product-card-add-to-cart" onclick="addToCart({{ $product->id }})">
                                    <i class="fas fa-shopping-cart"></i>
                                    Add to Cart
                                </button>
                                @else
                                <span class="product-out-of-stock">Out of Stock</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- End Product Card Component -->
                    @endforeach
                </div>
                
                <!-- Pagination -->
                @if($products->hasPages())
                <div class="mt-12 flex justify-center">
                    {{ $products->links() }}
                </div>
                @endif
                @else
                <div class="text-center py-12">
                    <div class="inline-block p-4 bg-gray-100 rounded-full mb-4">
                        <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">No products found</h3>
                    <p class="text-gray-600">Try adjusting your filters to find what you're looking for.</p>
                    <a href="{{ route('frontend.products.index') }}#products" class="hero-btn-unified">
                        <i class="fas fa-shopping-bag mr-2"></i>
                        Browse All Products
                    </a>
                </div>
                @endif
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="py-16 bg-gradient-to-r from-green-900 to-gray-800">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold text-white mb-4">Never Miss a Deal</h2>
            <p class="text-gray-200 text-lg mb-8 max-w-2xl mx-auto">
                Subscribe to get daily deals and new arrivals
            </p>
            <form class="newsletter-form max-w-md mx-auto flex gap-2">
                <input type="email" placeholder="Enter your email address" 
                       class="newsletter-input flex-1 px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                <button type="submit" class="hero-btn-unified">
                    Subscribe Now
                </button>
            </form>
        </div>
    </section>

    <!-- Include external CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/products.css') }}">
    
    <!-- Include external JavaScript -->
    <script src="{{ asset('frontend/js/products.js') }}"></script>
    
    <!-- SIMPLE FIX: Handle price filter form -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
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
    </script>
</x-frontend-layout>