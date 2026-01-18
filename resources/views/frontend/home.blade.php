{{-- <x-frontend-layout>
    <!-- Hero Banner with Products -->
    <section class="hero-section w-full bg-gradient-to-br from-[#cfe9f3] via-[#e1f0f8] to-[#bde0eb] py-20 md:py-32 min-h-[700px] flex items-center overflow-hidden relative">
        <!-- Background decorative elements -->
        <div class="hero-bg-elements absolute inset-0 overflow-hidden">
            <div class="hero-blob-1 absolute top-10 left-10 w-72 h-72 bg-blue-100 rounded-full mix-blend-multiply filter blur-xl opacity-70"></div>
            <div class="hero-blob-2 absolute top-40 right-20 w-80 h-80 bg-green-100 rounded-full mix-blend-multiply filter blur-xl opacity-70"></div>
            <div class="hero-blob-3 absolute -bottom-8 left-1/4 w-64 h-64 bg-cyan-100 rounded-full mix-blend-multiply filter blur-xl opacity-70"></div>
        </div>

        <div class="hero-container max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center relative z-10">
            <!-- Left Text -->
            <div class="hero-text space-y-8">
                <h1 class="hero-title text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight">
                    Discover Amazing 
                    <span class="hero-gradient-text text-transparent bg-clip-text bg-gradient-to-r from-green-700 to-emerald-600">
                        Products & Deals
                    </span>
                </h1>
                
                <p class="hero-description text-lg md:text-xl text-gray-700 leading-relaxed max-w-2xl">
                    Shop the latest electronics, fashion, home essentials and more. 
                    <span class="font-semibold text-gray-900">Premium quality</span> at 
                    <span class="font-bold text-green-700">unbeatable prices.</span>
                </p>

                <!-- CTA Button -->
                <div class="hero-cta pt-4">
                    <a href="/products"
                       class="hero-btn group inline-flex items-center justify-center gap-3 px-10 py-4 text-lg font-semibold rounded-xl bg-gradient-to-r from-green-800 to-emerald-700 text-white hover:from-green-900 hover:to-emerald-800 transition-all duration-300 transform hover:scale-[1.02] shadow-lg hover:shadow-xl active:scale-95 w-full sm:w-auto">
                        <!-- Shopping Cart Icon -->
                        <svg class="hero-btn-icon w-6 h-6 group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                        Start Shopping
                    </a>
                </div>
            </div>

            <!-- Right Product Images with Floating Effect -->
            <div class="hero-images relative flex justify-center lg:justify-end">
                <!-- Floating Product Images -->
                <div class="hero-image-container relative w-[320px] md:w-[450px] h-[320px] md:h-[450px]">
                    @php
                        // Get a featured product for the main image
                        $featuredProduct = $featuredProducts->first();
                        $secondaryProducts = $featuredProducts->skip(1)->take(2);
                    @endphp
                    
                    <!-- Main Product Image with Floating Effect -->
                    <div class="hero-main-image absolute inset-0 z-20">
                        @if($featuredProduct)
                        <a href="{{ route('frontend.products.show', $featuredProduct->slug) }}">
                            <img src="{{ $featuredProduct->image ? asset('storage/products/' . $featuredProduct->image) : asset('images/products/default.jpg') }}"
                                 alt="{{ $featuredProduct->name }}"
                                 class="hero-product-img w-full h-full rounded-3xl shadow-2xl object-cover border-8 border-white hover:scale-105 transition-transform duration-700">
                            <!-- Badge on Main Image -->
                            @if($featuredProduct->discount > 0)
                            <div class="hero-badge absolute -top-4 -right-4 bg-gradient-to-r from-red-500 to-orange-500 text-white px-4 py-2 rounded-xl shadow-lg">
                                <span class="font-bold text-sm">🔥 {{ $featuredProduct->discount }}% OFF</span>
                            </div>
                            @endif
                        </a>
                        @endif
                    </div>
                    
                    <!-- Floating Card 1 -->
                    @if($secondaryProducts->first())
                    <div class="hero-floating-card-1 absolute -bottom-6 -left-6 md:-bottom-10 md:-left-10 z-10">
                        <a href="{{ route('frontend.products.show', $secondaryProducts->first()->slug) }}">
                            <div class="hero-card bg-white rounded-2xl shadow-xl p-3 transform rotate-6 hover:rotate-0 transition-transform duration-500">
                                <img src="{{ $secondaryProducts->first()->image ? asset('storage/products/' . $secondaryProducts->first()->image) : asset('images/products/default.jpg') }}"
                                     alt="{{ $secondaryProducts->first()->name }}"
                                     class="w-full h-full rounded-xl object-cover">
                            </div>
                        </a>
                    </div>
                    @endif
                    
                    <!-- Floating Card 2 -->
                    @if($secondaryProducts->last())
                    <div class="hero-floating-card-2 absolute -top-6 -right-6 md:-top-10 md:-right-10 z-10">
                        <a href="{{ route('frontend.products.show', $secondaryProducts->last()->slug) }}">
                            <div class="hero-card bg-white rounded-2xl shadow-xl p-3 transform -rotate-6 hover:rotate-0 transition-transform duration-500">
                                <img src="{{ $secondaryProducts->last()->image ? asset('storage/products/' . $secondaryProducts->last()->image) : asset('images/products/default.jpg') }}"
                                     alt="{{ $secondaryProducts->last()->name }}"
                                     class="w-full h-full rounded-xl object-cover">
                            </div>
                        </a>
                    </div>
                    @endif
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="hero-scroll-indicator absolute bottom-8 left-1/2 transform -translate-x-1/2">
            <a href="#categories" class="text-gray-400 hover:text-green-700 transition-colors">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
                </svg>
            </a>
        </div>
    </section>

   <!-- Section 2: Shop by Categories -->
<section id="categories" class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center mb-10">
            <div>
                <h2 class="text-3xl font-bold text-gray-900">Shop Our Top Categories</h2>
                <p class="text-gray-600 mt-2">Browse products by popular categories</p>
            </div>
            <a href="{{ route('frontend.category.index') }}" 
               class="text-green-900 font-semibold hover:underline hover:text-gray-800 transition-colors duration-300 flex items-center gap-2">
                <span>View All Categories</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
            </a>
        </div>
        
        @if($categories->count() > 0)
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach($categories as $category)
                <a href="{{ route('frontend.category.show', $category->slug) }}" 
                   class="group cursor-pointer">
                    <!-- Category card content remains the same -->
                    <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group-hover:-translate-y-2 border border-gray-100">
                        <!-- Category Image/Icon -->
                        <div class="relative h-48 overflow-hidden {{ $category->color ?? 'bg-gray-50' }}">
                            @if($category->image)
                                <img src="{{ $category->image }}" 
                                     alt="{{ $category->name }}" 
                                     class="w-full h-full object-cover opacity-90 group-hover:opacity-100 group-hover:scale-105 transition-all duration-500">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/10 to-transparent"></div>
                            @else
                                <div class="w-full h-full flex items-center justify-center">
                                    @if($category->icon)
                                        <div class="text-5xl text-gray-600 opacity-80 group-hover:opacity-100 group-hover:scale-110 transition-all duration-300">
                                            {!! $category->icon !!}
                                        </div>
                                    @else
                                        <svg class="w-20 h-20 text-gray-400 opacity-80 group-hover:opacity-100 group-hover:scale-110 transition-all duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                        </svg>
                                    @endif
                                </div>
                            @endif
                            
                            <!-- Product Count Badge -->
                            <div class="absolute top-4 right-4">
                                <span class="px-3 py-1 text-xs font-medium rounded-full bg-white/90 text-gray-700 backdrop-blur-sm">
                                    {{ $category->product_count ?? 0 }} items
                                </span>
                            </div>
                        </div>
                        
                        <!-- Category Info -->
                        <div class="p-6">
                            <h3 class="text-lg font-semibold text-gray-900 mb-2 group-hover:text-green-900 transition-colors">
                                {{ $category->name }}
                            </h3>
                            <p class="text-sm text-gray-500 line-clamp-2 mb-3">
                                {{ $category->description ?? 'Explore amazing products' }}
                            </p>
                            <div class="flex items-center text-green-900 text-sm font-medium">
                                <span>Shop Now</span>
                                <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        @else
            <!-- Fallback if no categories -->
            <div class="text-center py-12">
                <div class="inline-block p-4 bg-gray-100 rounded-full mb-4">
                    <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-medium text-gray-900 mb-2">No Categories Available</h3>
                <p class="text-gray-600">Categories will be added soon</p>
            </div>
        @endif
        
        <!-- View All Button for Mobile -->
        <div class="mt-10 text-center block md:hidden">
            <a href="{{ route('frontend.category.index') }}"  <!-- CHANGED TO CORRECT ROUTE -->
               class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-green-800 to-emerald-700 text-white font-semibold rounded-lg hover:from-green-900 hover:to-emerald-800 transition-all duration-300 transform hover:scale-105 shadow-md hover:shadow-lg">
                <span>View All Categories</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
            </a>
        </div>
    </div>
</section>

    <!-- Section 3: Today's Best Deals -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center mb-10">
                <h2 class="text-3xl font-bold text-gray-900">Today's Best Deals For You!</h2>
                <a href="/products" class="text-green-900 font-semibold hover:underline hover:text-gray-800 transition-colors duration-300">View All →</a>
            </div>
            
            @if($bestSellers->count() > 0)
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach($bestSellers as $product)
                    <div class="bg-white rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden group hover:-translate-y-2 border border-gray-100 hover:border-green-200">
                        <div class="relative overflow-hidden">
                            <!-- Wishlist Button -->
                            <div class="absolute top-4 right-4 z-10">
                                <button class="text-gray-400 hover:text-red-500 bg-white p-2 rounded-full shadow-md hover:shadow-lg transition-all duration-300 transform hover:scale-110">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                    </svg>
                                </button>
                            </div>
                            
                            <!-- Discount Badge -->
                            @if($product->discount > 0)
                            <div class="absolute top-4 left-4 z-10">
                                <span class="px-3 py-1 text-xs font-semibold rounded-full bg-red-500 text-white">
                                    -{{ $product->discount }}% OFF
                                </span>
                            </div>
                            @endif
                            
                            <!-- Product Link -->
                            <a href="{{ route('frontend.products.show', $product->slug) }}">
                                <div class="p-4">
                                    <!-- Product Image -->
                                    <img src="{{ $product->image ? asset('storage/products/' . $product->image) : asset('images/products/default.jpg') }}" 
                                         alt="{{ $product->name }}" 
                                         class="w-full h-48 object-contain mb-4 group-hover:scale-105 transition-transform duration-500">
                                    
                                    <!-- Product Info -->
                                    <div class="flex justify-between items-start mb-2">
                                        <h3 class="font-semibold text-gray-800 group-hover:text-green-900 transition-colors duration-300 line-clamp-1">{{ $product->name }}</h3>
                                    </div>
                                    
                                    <!-- Description -->
                                    <p class="text-gray-600 text-sm mb-3 line-clamp-2">{{ $product->description }}</p>
                                    
                                    <!-- Rating -->
                                    <div class="flex items-center mb-4">
                                        <div class="flex text-yellow-400">
                                            @php
                                                $rating = $product->rating;
                                                $fullStars = floor($rating);
                                                $hasHalfStar = ($rating - $fullStars) >= 0.5;
                                            @endphp
                                            @for($j = 0; $j < 5; $j++)
                                                @if($j < $fullStars)
                                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                    </svg>
                                                @else
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                                    </svg>
                                                @endif
                                            @endfor
                                        </div>
                                        <span class="ml-2 text-gray-600 text-sm">({{ $product->rating }} • {{ $product->reviews }} reviews)</span>
                                    </div>
                                    
                                    <!-- Price and Add to Cart -->
                                    <div class="flex justify-between items-center">
                                        <div>
                                            <span class="text-xl font-bold text-gray-900 group-hover:text-green-900 transition-colors duration-300">₹{{ number_format($product->price, 0) }}</span>
                                            @if($product->old_price)
                                            <span class="text-gray-400 line-through text-sm ml-2">₹{{ number_format($product->old_price, 0) }}</span>
                                            @endif
                                        </div>
                                        <button class="cart-btn-unified add-to-cart" data-product-id="{{ $product->id }}">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                            </svg>
                                            Add to Cart
                                        </button>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            @else
                <!-- Fallback if no products -->
                <div class="text-center py-12">
                    <div class="inline-block p-4 bg-gray-100 rounded-full mb-4">
                        <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">No Best Deals Available</h3>
                    <p class="text-gray-600">Check back soon for amazing deals</p>
                </div>
            @endif
        </div>
    </section>

    <!-- Section 5: Choose by Brand -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-900 mb-10 text-center">Choose by Brand</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                @php
                $brands = [
                    ['name' => 'Apple', 'image' => 'apple.png', 'slug' => 'apple'],
                    ['name' => 'Adidas', 'image' => 'adidas.png', 'slug' => 'adidas'],
                    ['name' => 'Boat', 'image' => 'boat.png', 'slug' => 'boat'],
                    ['name' => 'Gucci', 'image' => 'gucci.png', 'slug' => 'gucci'],
                    ['name' => 'LG', 'image' => 'lg.png', 'slug' => 'lg'],
                    ['name' => 'Skechers', 'image' => 'skechers.png', 'slug' => 'skechers'],
                    ['name' => 'Samsung', 'image' => 'samsung.png', 'slug' => 'samsung'],
                    ['name' => 'Nike', 'image' => 'nike.png', 'slug' => 'nike']
                ];
                @endphp
                
                @foreach($brands as $brand)
                <div class="bg-white rounded-xl p-6 text-center hover:shadow-xl transition-all duration-300 group hover:-translate-y-2 border border-gray-100 hover:border-green-200">
                    <div class="w-16 h-16 mx-auto mb-4 bg-gray-50 rounded-full p-3 group-hover:bg-green-50 transition-colors duration-300">
                        @if(file_exists(storage_path('app/public/products/' . $brand['image'])))
                            <img src="{{ asset('storage/products/' . $brand['image']) }}" 
                                 alt="{{ $brand['name'] }}" class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-300">
                        @elseif(file_exists(public_path('images/products/' . $brand['image'])))
                            <!-- Fallback to public if exists -->
                            <img src="{{ asset('images/products/' . $brand['image']) }}" 
                                 alt="{{ $brand['name'] }}" class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-300">
                        @else
                            <div class="w-full h-full flex items-center justify-center text-gray-400">
                                {{ substr($brand['name'], 0, 2) }}
                            </div>
                        @endif
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2 group-hover:text-green-900 transition-colors duration-300">{{ $brand['name'] }}</h3>
                    <p class="text-green-900 text-sm font-medium group-hover:text-gray-800 transition-colors duration-300">Delivery within 24 hours</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Section 6: Get Discount -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-900 mb-10 text-center">Get Up to 70% off</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @php
                // Get 4 random products with discounts for this section
                $discountedProducts = $trendingProducts->where('discount', '>', 0)->take(4);
                $colors = ['bg-blue-50', 'bg-pink-50', 'bg-yellow-50', 'bg-green-50'];
                @endphp
                
                @foreach($discountedProducts as $index => $product)
                <a href="{{ route('frontend.products.show', $product->slug) }}" class="block">
                    <div class="{{ $colors[$index] ?? 'bg-blue-50' }} rounded-2xl p-6 flex flex-col hover:shadow-xl transition-all duration-300 group hover:-translate-y-2 border border-transparent hover:border-green-200 h-full">
                        <div class="mb-4">
                            <h3 class="text-lg font-semibold text-gray-800 group-hover:text-green-900 transition-colors duration-300">Save</h3>
                            <div class="text-3xl font-bold text-gray-900 mt-2 group-hover:scale-110 transition-transform duration-300 inline-block">
                                ₹{{ number_format($product->old_price - $product->price, 0) }}
                            </div>
                            @if($product->discount > 0)
                            <div class="text-sm text-green-900 font-medium mt-1">{{ $product->discount }}% OFF</div>
                            @endif
                        </div>
                        <p class="text-gray-600 text-sm mb-6 line-clamp-2">{{ $product->name }}</p>
                        <div class="mt-auto">
                            <img src="{{ $product->image ? asset('storage/products/' . $product->image) : asset('images/products/default.jpg') }}" 
                                 alt="{{ $product->name }}" 
                                 class="w-full h-40 object-contain group-hover:scale-105 transition-transform duration-500">
                        </div>
                    </div>
                </a>
                @endforeach
                
                <!-- Fallback if not enough discounted products -->
                @if($discountedProducts->count() < 4)
                    @for($i = $discountedProducts->count(); $i < 4; $i++)
                    <div class="{{ $colors[$i] }} rounded-2xl p-6 flex flex-col hover:shadow-xl transition-all duration-300 group hover:-translate-y-2 border border-transparent hover:border-green-200">
                        <div class="mb-4">
                            <h3 class="text-lg font-semibold text-gray-800 group-hover:text-green-900 transition-colors duration-300">Coming Soon</h3>
                            <div class="text-3xl font-bold text-gray-900 mt-2 group-hover:scale-110 transition-transform duration-300 inline-block">
                                Up to 70% OFF
                            </div>
                        </div>
                        <p class="text-gray-600 text-sm mb-6">Amazing deals coming your way!</p>
                        <div class="mt-auto flex items-center justify-center h-40">
                            <svg class="w-20 h-20 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                    @endfor
                @endif
            </div>
        </div>
    </section>

    <!-- Section 7: Weekly Popular Products -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center mb-10">
                <h2 class="text-3xl font-bold text-gray-900">Weekly Popular Products</h2>
                <a href="/products" class="text-green-900 font-semibold hover:underline hover:text-gray-800 transition-colors duration-300">View All →</a>
            </div>
            
            @if($weeklyPopular->count() > 0)
                <!-- Horizontal Scrolling Container -->
                <div class="relative">
                    <!-- Products Carousel -->
                    <div class="flex gap-6 overflow-x-auto pb-6 scrollbar-hide snap-x snap-mandatory scroll-smooth" id="weeklyProductsCarousel">
                        @foreach($weeklyPopular as $product)
                        <div class="flex-shrink-0 w-72 snap-start">
                            <div class="bg-white rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden group hover:-translate-y-2 border border-gray-100 hover:border-green-200 h-full">
                                <div class="relative overflow-hidden">
                                    <!-- Category Badge -->
                                    @if($product->category)
                                    <div class="absolute top-4 left-4 z-10">
                                        <span class="px-3 py-1 text-xs font-semibold rounded-full bg-green-900 text-white">
                                            {{ $product->category->name }}
                                        </span>
                                    </div>
                                    @endif
                                    
                                    <!-- Wishlist Button -->
                                    <div class="absolute top-4 right-4 z-10">
                                        <button class="text-gray-400 hover:text-red-500 bg-white p-2 rounded-full shadow-md hover:shadow-lg transition-all duration-300 transform hover:scale-110">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    
                                    <!-- Product Link -->
                                    <a href="{{ route('frontend.products.show', $product->slug) }}">
                                        <div class="p-4">
                                            <!-- Product Image -->
                                            <img src="{{ $product->image ? asset('storage/products/' . $product->image) : asset('images/products/default.jpg') }}" 
                                                 alt="{{ $product->name }}" 
                                                 class="w-full h-48 object-contain mb-4 group-hover:scale-105 transition-transform duration-500">
                                            
                                            <!-- Product Info -->
                                            <div class="flex justify-between items-start mb-2">
                                                <h3 class="font-semibold text-gray-800 group-hover:text-green-900 transition-colors duration-300 line-clamp-1">{{ $product->name }}</h3>
                                            </div>
                                            
                                            <!-- Description -->
                                            <p class="text-gray-600 text-sm mb-3 line-clamp-2">{{ $product->description }}</p>
                                            
                                            <!-- Rating -->
                                            <div class="flex items-center mb-4">
                                                <div class="flex text-yellow-400">
                                                    @php
                                                        $rating = $product->rating;
                                                        $fullStars = floor($rating);
                                                    @endphp
                                                    @for($j = 0; $j < 5; $j++)
                                                        @if($j < $fullStars)
                                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                            </svg>
                                                        @else
                                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                                            </svg>
                                                        @endif
                                                    @endfor
                                                </div>
                                                <span class="ml-2 text-gray-600 text-sm">{{ $product->rating }} • {{ $product->reviews }} reviews</span>
                                            </div>
                                            
                                            <!-- Price and Add to Cart -->
                                            <div class="flex justify-between items-center">
                                                <div>
                                                    <span class="text-xl font-bold text-gray-900 group-hover:text-green-900 transition-colors duration-300">₹{{ number_format($product->price, 0) }}</span>
                                                    @if($product->old_price)
                                                    <span class="text-gray-400 line-through text-sm ml-2">₹{{ number_format($product->old_price, 0) }}</span>
                                                    @endif
                                                </div>
                                                <button class="cart-btn-unified add-to-cart" data-product-id="{{ $product->id }}">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                                    </svg>
                                                    Add to Cart
                                                </button>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    
                    <!-- Scroll Indicator Dots -->
                    @if($weeklyPopular->count() > 4)
                    <div class="flex justify-center gap-2 mt-6">
                        @for($i = 0; $i < ceil($weeklyPopular->count() / 4); $i++)
                        <button class="w-3 h-3 rounded-full bg-gray-300 hover:bg-green-900 transition-colors duration-300 scroll-indicator-dot {{ $i === 0 ? 'bg-green-900' : '' }}" data-index="{{ $i }}" aria-label="Go to slide {{ $i + 1 }}"></button>
                        @endfor
                    </div>
                    @endif
                </div>
            @else
                <!-- Fallback if no products -->
                <div class="text-center py-12">
                    <div class="inline-block p-4 bg-gray-100 rounded-full mb-4">
                        <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">No Popular Products</h3>
                    <p class="text-gray-600">Popular products will be added soon</p>
                </div>
            @endif
        </div>
    </section>

    <!-- Section 8: Discount Banner -->
    <section class="py-20 bg-gradient-to-r from-green-900 to-gray-800 hover:shadow-2xl transition-shadow duration-500">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl font-bold text-white mb-4 hover:scale-105 transition-transform duration-300 inline-block">Get 5% Cash back on ₹200</h2>
            <p class="text-gray-200 text-lg mb-8 max-w-2xl mx-auto">
                Shopping is a bit of a relaxing hobby for me, which is sometimes troubling for the bank balance.
            </p>
            <a href="/products" class="inline-flex items-center gap-2 bg-white text-green-900 font-semibold py-3 px-8 rounded-lg hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 hover:shadow-lg">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                </svg>
                Shop Now
            </a>
        </div>
    </section>

    <!-- Section 9: Product Tabs -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-900 mb-10">Today's Best Deals for you!</h2>
            
            <!-- Tabs Navigation -->
            <div class="border-b border-gray-200 mb-8">
                <div class="flex flex-wrap gap-4">
                    @php
                    $tabs = ['Featured', 'New Arrivals', 'Trending', 'Best Sellers'];
                    @endphp
                    
                    @foreach($tabs as $index => $tab)
                    <button class="tab-button px-4 py-2 font-medium text-gray-600 hover:text-green-900 border-b-2 border-transparent hover:border-green-900 transition-all duration-300 hover:bg-green-50 rounded-t-lg {{ $index === 0 ? 'text-green-900 border-green-900' : '' }}" data-tab="{{ strtolower(str_replace(' ', '-', $tab)) }}">
                        {{ $tab }}
                    </button>
                    @endforeach
                </div>
            </div>

            <!-- Tab Content -->
            <div id="tab-content">
                <!-- Featured Products Tab (Default) -->
                <div class="tab-pane active" id="tab-featured">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        @foreach($featuredProducts->take(4) as $product)
                        @include('frontend.partials.product-card', ['product' => $product])
                        @endforeach
                    </div>
                </div>
                
                <!-- New Arrivals Tab -->
                <div class="tab-pane hidden" id="tab-new-arrivals">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        @foreach($newArrivals->take(4) as $product)
                        @include('frontend.partials.product-card', ['product' => $product])
                        @endforeach
                    </div>
                </div>
                
                <!-- Trending Tab -->
                <div class="tab-pane hidden" id="tab-trending">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        @foreach($trendingProducts->take(4) as $product)
                        @include('frontend.partials.product-card', ['product' => $product])
                        @endforeach
                    </div>
                </div>
                
                <!-- Best Sellers Tab -->
                <div class="tab-pane hidden" id="tab-best-sellers">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        @foreach($bestSellers->take(4) as $product)
                        @include('frontend.partials.product-card', ['product' => $product])
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Most Selling Products -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center mb-10">
                <h2 class="text-3xl font-bold text-gray-900">Most Selling Products</h2>
                <a href="/products" class="text-green-900 font-semibold hover:underline hover:text-gray-800 transition-colors duration-300">View All →</a>
            </div>
            
            @if($bestSellers->count() > 0)
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach($bestSellers->take(4) as $product)
                    <div class="bg-white rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden group hover:-translate-y-2 border border-gray-100 hover:border-green-200">
                        <div class="relative overflow-hidden">
                            <!-- Wishlist Button -->
                            <div class="absolute top-4 right-4 z-10">
                                <button class="text-gray-400 hover:text-red-500 bg-white p-2 rounded-full shadow-md hover:shadow-lg transition-all duration-300 transform hover:scale-110">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                    </svg>
                                </button>
                            </div>
                            
                            <!-- Product Link -->
                            <a href="{{ route('frontend.products.show', $product->slug) }}">
                                <div class="p-4">
                                    <!-- Product Image -->
                                    <img src="{{ $product->image ? asset('storage/products/' . $product->image) : asset('images/products/default.jpg') }}" 
                                         alt="{{ $product->name }}" 
                                         class="w-full h-48 object-contain mb-4 group-hover:scale-105 transition-transform duration-500">
                                    
                                    <!-- Product Info -->
                                    <div class="flex justify-between items-start mb-2">
                                        <h3 class="font-semibold text-gray-800 group-hover:text-green-900 transition-colors duration-300 line-clamp-1">{{ $product->name }}</h3>
                                        <span class="text-lg font-bold text-gray-900 group-hover:text-green-900 transition-colors duration-300">₹{{ number_format($product->price, 0) }}</span>
                                    </div>
                                    
                                    <!-- Description -->
                                    <p class="text-gray-600 text-sm mb-3 line-clamp-2">{{ $product->description }}</p>
                                    
                                    <!-- Rating -->
                                    <div class="flex items-center mb-4">
                                        <div class="flex text-yellow-400">
                                            @for($j = 0; $j < 5; $j++)
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                            </svg>
                                            @endfor
                                        </div>
                                        <span class="ml-2 text-gray-600 text-sm">({{ $product->reviews }} reviews)</span>
                                    </div>
                                    
                                    <!-- Add to Cart Button -->
                                    <button class="cart-btn-unified w-full add-to-cart" data-product-id="{{ $product->id }}">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                        </svg>
                                        Add to Cart
                                    </button>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            @else
                <!-- Fallback if no products -->
                <div class="text-center py-12">
                    <div class="inline-block p-4 bg-gray-100 rounded-full mb-4">
                        <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">No Products Available</h3>
                    <p class="text-gray-600">Products will be added soon</p>
                </div>
            @endif
        </div>
    </section>

    <!-- Section: Trending Products (Large Featured) -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-900 mb-10 text-center">Trending Products for you!</h2>
            
            @if($trendingProducts->count() >= 2)
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    @foreach($trendingProducts->take(2) as $product)
                    <div class="bg-gradient-to-br from-gray-50 to-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 group hover:-translate-y-2">
                        <div class="flex flex-col md:flex-row">
                            <!-- Product Image -->
                            <div class="md:w-2/5 p-8">
                                <a href="{{ route('frontend.products.show', $product->slug) }}">
                                    <img src="{{ $product->image ? asset('storage/products/' . $product->image) : asset('images/products/default.jpg') }}" 
                                         alt="{{ $product->name }}" 
                                         class="w-full h-64 object-contain group-hover:scale-110 transition-transform duration-700">
                                </a>
                            </div>
                            
                            <!-- Product Content -->
                            <div class="md:w-3/5 p-8 flex flex-col justify-center">
                                <a href="{{ route('frontend.products.show', $product->slug) }}">
                                    <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-green-900 transition-colors duration-300">{{ $product->name }}</h3>
                                </a>
                                <p class="text-gray-600 mb-6 line-clamp-3">{{ $product->description }}</p>
                                
                                <!-- Features -->
                                <div class="flex items-center gap-4 mb-8 flex-wrap">
                                    <div class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-green-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span class="text-sm text-gray-700">Free Shipping</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-green-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span class="text-sm text-gray-700">Delivery within 24 hours</span>
                                    </div>
                                </div>
                                
                                <!-- Price and Add to Cart -->
                                <div class="flex items-center justify-between">
                                    <div>
                                        <span class="text-2xl font-bold text-gray-900">₹{{ number_format($product->price, 0) }}</span>
                                        @if($product->old_price)
                                        <span class="text-lg text-gray-400 line-through ml-2">₹{{ number_format($product->old_price, 0) }}</span>
                                        @endif
                                    </div>
                                    <button class="cart-btn-unified add-to-cart" data-product-id="{{ $product->id }}">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                        </svg>
                                        Shop Now
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            @else
                <!-- Fallback if not enough trending products -->
                <div class="text-center py-12">
                    <div class="inline-block p-4 bg-gray-100 rounded-full mb-4">
                        <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">More Trending Products Coming Soon</h3>
                    <p class="text-gray-600">Stay tuned for amazing trending products!</p>
                </div>
            @endif
        </div>
    </section>

    <!-- Section: Services Help -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-900 mb-10 text-center">Services to help you shop</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @php
                $services = [
                    [
                        'title' => 'Frequently asked questions',
                        'desc' => 'Get answers to all your shopping questions',
                        'icon' => '<svg class="w-12 h-12 text-green-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>',
                        'bgColor' => 'bg-blue-50',
                        'textColor' => 'text-blue-900'
                    ],
                    [
                        'title' => 'Online Payment Process',
                        'desc' => 'Secure and easy payment options',
                        'icon' => '<svg class="w-12 h-12 text-green-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>',
                        'bgColor' => 'bg-green-50',
                        'textColor' => 'text-green-900'
                    ],
                    [
                        'title' => 'Home Delivery Options',
                        'desc' => 'Fast and reliable delivery services',
                        'icon' => '<svg class="w-12 h-12 text-green-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>',
                        'bgColor' => 'bg-purple-50',
                        'textColor' => 'text-purple-900'
                    ]
                ];
                @endphp

                @foreach($services as $service)
                <div class="{{ $service['bgColor'] }} rounded-2xl overflow-hidden hover:shadow-2xl transition-all duration-500 group hover:-translate-y-2">
                    <div class="p-8">
                        <div class="mb-6">
                            {!! $service['icon'] !!}
                        </div>
                        <h3 class="text-xl font-bold {{ $service['textColor'] }} mb-4">{{ $service['title'] }}</h3>
                        <p class="text-gray-600 mb-8">{{ $service['desc'] }}</p>
                        
                        <!-- Learn More Button -->
                        <a href="/products" class="cart-btn-unified w-full inline-block text-center">
                            <svg class="w-4 h-4 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Learn More
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <style>
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
        
        .cart-btn-unified {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.625rem 1.25rem;
            background-color: #065f46;
            color: white;
            border-radius: 0.5rem;
            font-weight: 500;
            font-size: 0.875rem;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }
        
        .cart-btn-unified:hover {
            background-color: #064e3b;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(6, 95, 70, 0.2);
        }
        
        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }
        
        .tab-pane {
            display: none;
        }
        
        .tab-pane.active {
            display: block;
        }
    </style>

    <script>
        // Tab functionality
        document.addEventListener('DOMContentLoaded', function() {
            // Tab switching
            const tabButtons = document.querySelectorAll('.tab-button');
            const tabPanes = document.querySelectorAll('.tab-pane');
            
            tabButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const tabId = this.getAttribute('data-tab');
                    
                    // Remove active class from all buttons and panes
                    tabButtons.forEach(btn => {
                        btn.classList.remove('text-green-900', 'border-green-900');
                        btn.classList.add('text-gray-600', 'border-transparent');
                    });
                    
                    tabPanes.forEach(pane => {
                        pane.classList.remove('active');
                        pane.classList.add('hidden');
                    });
                    
                    // Add active class to clicked button and corresponding pane
                    this.classList.remove('text-gray-600', 'border-transparent');
                    this.classList.add('text-green-900', 'border-green-900');
                    
                    const activePane = document.getElementById(`tab-${tabId}`);
                    if (activePane) {
                        activePane.classList.remove('hidden');
                        activePane.classList.add('active');
                    }
                });
            });
            
            // Carousel functionality for weekly products
            const carousel = document.getElementById('weeklyProductsCarousel');
            const dots = document.querySelectorAll('.scroll-indicator-dot');
            
            if (carousel && dots.length > 0) {
                carousel.addEventListener('scroll', function() {
                    const scrollLeft = carousel.scrollLeft;
                    const itemWidth = carousel.querySelector('.flex-shrink-0').offsetWidth + 24; // width + gap
                    const activeIndex = Math.round(scrollLeft / itemWidth);
                    
                    dots.forEach((dot, index) => {
                        if (index === activeIndex) {
                            dot.classList.add('bg-green-900');
                            dot.classList.remove('bg-gray-300');
                        } else {
                            dot.classList.remove('bg-green-900');
                            dot.classList.add('bg-gray-300');
                        }
                    });
                });
                
                dots.forEach((dot, index) => {
                    dot.addEventListener('click', function() {
                        const itemWidth = carousel.querySelector('.flex-shrink-0').offsetWidth + 24;
                        carousel.scrollTo({
                            left: index * itemWidth * 4, // Show 4 items at a time
                            behavior: 'smooth'
                        });
                    });
                });
            }
            
            // Add to cart functionality
            const addToCartButtons = document.querySelectorAll('.add-to-cart');
            addToCartButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    
                    const productId = this.getAttribute('data-product-id');
                    const buttonText = this.innerHTML;
                    
                    // Show loading state
                    this.innerHTML = '<svg class="w-4 h-4 animate-spin" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg> Adding...';
                    this.disabled = true;
                    
                    // Simulate API call
                    setTimeout(() => {
                        // Show success message
                        showToast('Product added to cart successfully!');
                        
                        // Reset button
                        this.innerHTML = buttonText;
                        this.disabled = false;
                        
                        // Update cart count
                        updateCartCount();
                    }, 1000);
                });
            });
            
            // Toast notification function
            function showToast(message) {
                // Create toast element
                const toast = document.createElement('div');
                toast.className = 'fixed top-4 right-4 z-50 px-6 py-4 rounded-lg shadow-lg bg-green-900 text-white transform transition-all duration-300 translate-x-full';
                toast.innerHTML = `
                    <div class="flex items-center gap-3">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>${message}</span>
                    </div>
                `;
                
                // Add to body
                document.body.appendChild(toast);
                
                // Show toast
                setTimeout(() => {
                    toast.classList.remove('translate-x-full');
                }, 10);
                
                // Remove after 3 seconds
                setTimeout(() => {
                    toast.classList.add('translate-x-full');
                    setTimeout(() => {
                        document.body.removeChild(toast);
                    }, 300);
                }, 3000);
            }
            
            // Update cart count
            function updateCartCount() {
                const cartCount = document.querySelector('.cart-count');
                if (cartCount) {
                    const currentCount = parseInt(cartCount.textContent) || 0;
                    cartCount.textContent = currentCount + 1;
                }
            }
        });
    </script>
</x-frontend-layout> --}}



<x-frontend-layout>
    <!-- Hero Banner with Products -->
    <section class="hero-section w-full bg-gradient-to-br from-[#cfe9f3] via-[#e1f0f8] to-[#bde0eb] py-20 md:py-32 min-h-[700px] flex items-center overflow-hidden relative">
        <!-- Background decorative elements -->
        <div class="hero-bg-elements absolute inset-0 overflow-hidden">
            <div class="hero-blob-1 absolute top-10 left-10 w-72 h-72 bg-blue-100 rounded-full mix-blend-multiply filter blur-xl opacity-70"></div>
            <div class="hero-blob-2 absolute top-40 right-20 w-80 h-80 bg-green-100 rounded-full mix-blend-multiply filter blur-xl opacity-70"></div>
            <div class="hero-blob-3 absolute -bottom-8 left-1/4 w-64 h-64 bg-cyan-100 rounded-full mix-blend-multiply filter blur-xl opacity-70"></div>
        </div>

        <div class="hero-container max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center relative z-10">
            <!-- Left Text -->
            <div class="hero-text space-y-8">
                <h1 class="hero-title text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight">
                    Discover Amazing 
                    <span class="hero-gradient-text text-transparent bg-clip-text bg-gradient-to-r from-green-700 to-emerald-600">
                        Products & Deals
                    </span>
                </h1>
                
                <p class="hero-description text-lg md:text-xl text-gray-700 leading-relaxed max-w-2xl">
                    Shop the latest electronics, fashion, home essentials and more. 
                    <span class="font-semibold text-gray-900">Premium quality</span> at 
                    <span class="font-bold text-green-700">unbeatable prices.</span>
                </p>

                <!-- CTA Button -->
                <div class="hero-cta pt-4">
                    <a href="/products"
                       class="hero-btn group inline-flex items-center justify-center gap-3 px-10 py-4 text-lg font-semibold rounded-xl bg-gradient-to-r from-green-800 to-emerald-700 text-white hover:from-green-900 hover:to-emerald-800 transition-all duration-300 transform hover:scale-[1.02] shadow-lg hover:shadow-xl active:scale-95 w-full sm:w-auto">
                        <!-- Shopping Cart Icon -->
                        <svg class="hero-btn-icon w-6 h-6 group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                        Start Shopping
                    </a>
                </div>
            </div>

            <!-- Right Product Images with Floating Effect -->
            <div class="hero-images relative flex justify-center lg:justify-end">
                <!-- Floating Product Images -->
                <div class="hero-image-container relative w-[320px] md:w-[450px] h-[320px] md:h-[450px]">
                    @php
                        // Get a featured product for the main image
                        $featuredProduct = $featuredProducts->first();
                        $secondaryProducts = $featuredProducts->skip(1)->take(2);
                    @endphp
                    
                    <!-- Main Product Image with Floating Effect -->
                    <div class="hero-main-image absolute inset-0 z-20">
                        @if($featuredProduct)
                        <a href="{{ route('frontend.products.show', $featuredProduct->slug) }}">
                            <img src="{{ $featuredProduct->image ? asset('storage/products/' . $featuredProduct->image) : asset('images/products/default.jpg') }}"
                                 alt="{{ $featuredProduct->name }}"
                                 class="hero-product-img w-full h-full rounded-3xl shadow-2xl object-cover border-8 border-white hover:scale-105 transition-transform duration-700">
                            <!-- Badge on Main Image -->
                            @if($featuredProduct->discount > 0)
                            <div class="hero-badge absolute -top-4 -right-4 bg-gradient-to-r from-red-500 to-orange-500 text-white px-4 py-2 rounded-xl shadow-lg">
                                <span class="font-bold text-sm">🔥 {{ $featuredProduct->discount }}% OFF</span>
                            </div>
                            @endif
                        </a>
                        @endif
                    </div>
                    
                    <!-- Floating Card 1 -->
                    @if($secondaryProducts->first())
                    <div class="hero-floating-card-1 absolute -bottom-6 -left-6 md:-bottom-10 md:-left-10 z-10">
                        <a href="{{ route('frontend.products.show', $secondaryProducts->first()->slug) }}">
                            <div class="hero-card bg-white rounded-2xl shadow-xl p-3 transform rotate-6 hover:rotate-0 transition-transform duration-500">
                                <img src="{{ $secondaryProducts->first()->image ? asset('storage/products/' . $secondaryProducts->first()->image) : asset('images/products/default.jpg') }}"
                                     alt="{{ $secondaryProducts->first()->name }}"
                                     class="w-full h-full rounded-xl object-cover">
                            </div>
                        </a>
                    </div>
                    @endif
                    
                    <!-- Floating Card 2 -->
                    @if($secondaryProducts->last())
                    <div class="hero-floating-card-2 absolute -top-6 -right-6 md:-top-10 md:-right-10 z-10">
                        <a href="{{ route('frontend.products.show', $secondaryProducts->last()->slug) }}">
                            <div class="hero-card bg-white rounded-2xl shadow-xl p-3 transform -rotate-6 hover:rotate-0 transition-transform duration-500">
                                <img src="{{ $secondaryProducts->last()->image ? asset('storage/products/' . $secondaryProducts->last()->image) : asset('images/products/default.jpg') }}"
                                     alt="{{ $secondaryProducts->last()->name }}"
                                     class="w-full h-full rounded-xl object-cover">
                            </div>
                        </a>
                    </div>
                    @endif
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="hero-scroll-indicator absolute bottom-8 left-1/2 transform -translate-x-1/2">
            <a href="#categories" class="text-gray-400 hover:text-green-700 transition-colors">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
                </svg>
            </a>
        </div>
    </section>

   <!-- Section 2: Shop by Categories -->
<section id="categories" class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center mb-10">
            <div>
                <h2 class="text-3xl font-bold text-gray-900">Shop Our Top Categories</h2>
                <p class="text-gray-600 mt-2">Browse products by popular categories</p>
            </div>
            <a href="{{ route('frontend.category.index') }}" 
               class="text-green-900 font-semibold hover:underline hover:text-gray-800 transition-colors duration-300 flex items-center gap-2">
                <span>View All Categories</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
            </a>
        </div>
        
        @if($categories->count() > 0)
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach($categories as $category)
                <a href="{{ route('frontend.category.show', $category->slug) }}" 
                   class="group cursor-pointer">
                    <!-- Category card content remains the same -->
                    <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group-hover:-translate-y-2 border border-gray-100">
                        <!-- Category Image/Icon -->
                        <div class="relative h-48 overflow-hidden {{ $category->color ?? 'bg-gray-50' }}">
                            @if($category->image)
                                <img src="{{ $category->image }}" 
                                     alt="{{ $category->name }}" 
                                     class="w-full h-full object-cover opacity-90 group-hover:opacity-100 group-hover:scale-105 transition-all duration-500">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/10 to-transparent"></div>
                            @else
                                <div class="w-full h-full flex items-center justify-center">
                                    @if($category->icon)
                                        <div class="text-5xl text-gray-600 opacity-80 group-hover:opacity-100 group-hover:scale-110 transition-all duration-300">
                                            {!! $category->icon !!}
                                        </div>
                                    @else
                                        <svg class="w-20 h-20 text-gray-400 opacity-80 group-hover:opacity-100 group-hover:scale-110 transition-all duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                        </svg>
                                    @endif
                                </div>
                            @endif
                            
                            <!-- Product Count Badge -->
                            <div class="absolute top-4 right-4">
                                <span class="px-3 py-1 text-xs font-medium rounded-full bg-white/90 text-gray-700 backdrop-blur-sm">
                                    {{ $category->product_count ?? 0 }} items
                                </span>
                            </div>
                        </div>
                        
                        <!-- Category Info -->
                        <div class="p-6">
                            <h3 class="text-lg font-semibold text-gray-900 mb-2 group-hover:text-green-900 transition-colors">
                                {{ $category->name }}
                            </h3>
                            <p class="text-sm text-gray-500 line-clamp-2 mb-3">
                                {{ $category->description ?? 'Explore amazing products' }}
                            </p>
                            <div class="flex items-center text-green-900 text-sm font-medium">
                                <span>Shop Now</span>
                                <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        @else
            <!-- Fallback if no categories -->
            <div class="text-center py-12">
                <div class="inline-block p-4 bg-gray-100 rounded-full mb-4">
                    <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-medium text-gray-900 mb-2">No Categories Available</h3>
                <p class="text-gray-600">Categories will be added soon</p>
            </div>
        @endif
        
        <!-- View All Button for Mobile -->
        <div class="mt-10 text-center block md:hidden">
            <a href="{{ route('frontend.category.index') }}"  <!-- CHANGED TO CORRECT ROUTE -->
               class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-green-800 to-emerald-700 text-white font-semibold rounded-lg hover:from-green-900 hover:to-emerald-800 transition-all duration-300 transform hover:scale-105 shadow-md hover:shadow-lg">
                <span>View All Categories</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
            </a>
        </div>
    </div>
</section>

    <!-- Section 3: Today's Best Deals -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center mb-10">
                <h2 class="text-3xl font-bold text-gray-900">Today's Best Deals For You!</h2>
                <a href="/products" class="text-green-900 font-semibold hover:underline hover:text-gray-800 transition-colors duration-300">View All →</a>
            </div>
            
            @if($bestSellers->count() > 0)
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach($bestSellers as $product)
                        @include('frontend.partials.product-card', ['product' => $product])
                    @endforeach
                </div>
            @else
                <!-- Fallback if no products -->
                <div class="text-center py-12">
                    <div class="inline-block p-4 bg-gray-100 rounded-full mb-4">
                        <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">No Best Deals Available</h3>
                    <p class="text-gray-600">Check back soon for amazing deals</p>
                </div>
            @endif
        </div>
    </section>

   <!-- Section 5: Choose by Brand -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-10 text-center">Choose by Brand</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            @php
                // Get brands from database with product counts
                $dbBrands = \App\Models\Product::whereNotNull('brand')
                    ->where('brand', '!=', '')
                    ->select('brand', \DB::raw('count(*) as product_count'))
                    ->groupBy('brand')
                    ->orderBy('product_count', 'DESC')
                    ->limit(8) // Get up to 8 brands
                    ->get();
                
                // If no brands in database, use static fallback
                if ($dbBrands->count() === 0) {
                    $dbBrands = collect([
                        (object)['brand' => 'Apple', 'product_count' => 45],
                        (object)['brand' => 'Adidas', 'product_count' => 52],
                        (object)['brand' => 'Boat', 'product_count' => 29],
                        (object)['brand' => 'Gucci', 'product_count' => 18],
                        (object)['brand' => 'LG', 'product_count' => 22],
                        (object)['brand' => 'Skechers', 'product_count' => 15],
                        (object)['brand' => 'Samsung', 'product_count' => 38],
                        (object)['brand' => 'Nike', 'product_count' => 67],
                    ]);
                }
            @endphp
            
            @foreach($dbBrands as $brandItem)
            <div class="bg-white rounded-xl p-6 text-center hover:shadow-xl transition-all duration-300 group hover:-translate-y-2 border border-gray-100 hover:border-green-200">
                <div class="w-16 h-16 mx-auto mb-4 bg-gray-50 rounded-full p-3 group-hover:bg-green-50 transition-colors duration-300">
                    @php
                        $brandName = $brandItem->brand;
                        $brandSlug = \Str::slug($brandName);
                        $brandLogo = null;
                        $logoExtensions = ['.png', '.jpg', '.jpeg', '.svg'];
                        
                        foreach ($logoExtensions as $ext) {
                            $path1 = 'images/brands/' . strtolower($brandSlug) . $ext;
                            $path2 = 'storage/brands/' . strtolower($brandSlug) . $ext;
                            $path3 = 'images/products/' . strtolower($brandSlug) . $ext;
                            $path4 = 'storage/products/' . strtolower($brandSlug) . $ext;
                            
                            if (file_exists(public_path($path1))) {
                                $brandLogo = asset($path1);
                                break;
                            }
                            
                            if (file_exists(public_path($path2))) {
                                $brandLogo = asset($path2);
                                break;
                            }
                            
                            if (file_exists(public_path($path3))) {
                                $brandLogo = asset($path3);
                                break;
                            }
                            
                            if (file_exists(public_path($path4))) {
                                $brandLogo = asset($path4);
                                break;
                            }
                        }
                    @endphp
                    
                    @if($brandLogo)
                        <img src="{{ $brandLogo }}" 
                             alt="{{ $brandName }}" 
                             class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-300">
                    @else
                        <div class="w-full h-full flex items-center justify-center text-gray-400">
                            {{ substr($brandName, 0, 2) }}
                        </div>
                    @endif
                </div>
                <h3 class="font-semibold text-gray-800 mb-2 group-hover:text-green-900 transition-colors duration-300">{{ $brandName }}</h3>
                <p class="text-green-900 text-sm font-medium group-hover:text-gray-800 transition-colors duration-300">
                    {{ $brandItem->product_count ?? '0' }} products
                </p>
            </div>
            @endforeach
        </div>
    </div>
</section>
    <!-- Section 6: Get Discount -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-900 mb-10 text-center">Get Up to 70% off</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @php
                // Get 4 random products with discounts for this section
                $discountedProducts = $trendingProducts->where('discount', '>', 0)->take(4);
                $colors = ['bg-blue-50', 'bg-pink-50', 'bg-yellow-50', 'bg-green-50'];
                @endphp
                
                @foreach($discountedProducts as $index => $product)
                <a href="{{ route('frontend.products.show', $product->slug) }}" class="block">
                    <div class="{{ $colors[$index] ?? 'bg-blue-50' }} rounded-2xl p-6 flex flex-col hover:shadow-xl transition-all duration-300 group hover:-translate-y-2 border border-transparent hover:border-green-200 h-full">
                        <div class="mb-4">
                            <h3 class="text-lg font-semibold text-gray-800 group-hover:text-green-900 transition-colors duration-300">Save</h3>
                            <div class="text-3xl font-bold text-gray-900 mt-2 group-hover:scale-110 transition-transform duration-300 inline-block">
                                ₹{{ number_format($product->old_price - $product->price, 0) }}
                            </div>
                            @if($product->discount > 0)
                            <div class="text-sm text-green-900 font-medium mt-1">{{ $product->discount }}% OFF</div>
                            @endif
                        </div>
                        <p class="text-gray-600 text-sm mb-6 line-clamp-2">{{ $product->name }}</p>
                        <div class="mt-auto">
                            <img src="{{ $product->image ? asset('storage/products/' . $product->image) : asset('images/products/default.jpg') }}" 
                                 alt="{{ $product->name }}" 
                                 class="w-full h-40 object-contain group-hover:scale-105 transition-transform duration-500">
                        </div>
                    </div>
                </a>
                @endforeach
                
                <!-- Fallback if not enough discounted products -->
                @if($discountedProducts->count() < 4)
                    @for($i = $discountedProducts->count(); $i < 4; $i++)
                    <div class="{{ $colors[$i] }} rounded-2xl p-6 flex flex-col hover:shadow-xl transition-all duration-300 group hover:-translate-y-2 border border-transparent hover:border-green-200">
                        <div class="mb-4">
                            <h3 class="text-lg font-semibold text-gray-800 group-hover:text-green-900 transition-colors duration-300">Coming Soon</h3>
                            <div class="text-3xl font-bold text-gray-900 mt-2 group-hover:scale-110 transition-transform duration-300 inline-block">
                                Up to 70% OFF
                            </div>
                        </div>
                        <p class="text-gray-600 text-sm mb-6">Amazing deals coming your way!</p>
                        <div class="mt-auto flex items-center justify-center h-40">
                            <svg class="w-20 h-20 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                    @endfor
                @endif
            </div>
        </div>
    </section>

    <!-- Section 7: Weekly Popular Products -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center mb-10">
                <h2 class="text-3xl font-bold text-gray-900">Weekly Popular Products</h2>
                <a href="/products" class="text-green-900 font-semibold hover:underline hover:text-gray-800 transition-colors duration-300">View All →</a>
            </div>
            
            @if($weeklyPopular->count() > 0)
                <!-- Horizontal Scrolling Container -->
                <div class="relative">
                    <!-- Products Carousel -->
                    <div class="flex gap-6 overflow-x-auto pb-6 scrollbar-hide snap-x snap-mandatory scroll-smooth" id="weeklyProductsCarousel">
                        @foreach($weeklyPopular as $product)
                        <div class="flex-shrink-0 w-72 snap-start">
                            @include('frontend.partials.product-card', ['product' => $product])
                        </div>
                        @endforeach
                    </div>
                    
                    <!-- Scroll Indicator Dots -->
                    @if($weeklyPopular->count() > 4)
                    <div class="flex justify-center gap-2 mt-6">
                        @for($i = 0; $i < ceil($weeklyPopular->count() / 4); $i++)
                        <button class="w-3 h-3 rounded-full bg-gray-300 hover:bg-green-900 transition-colors duration-300 scroll-indicator-dot {{ $i === 0 ? 'bg-green-900' : '' }}" data-index="{{ $i }}" aria-label="Go to slide {{ $i + 1 }}"></button>
                        @endfor
                    </div>
                    @endif
                </div>
            @else
                <!-- Fallback if no products -->
                <div class="text-center py-12">
                    <div class="inline-block p-4 bg-gray-100 rounded-full mb-4">
                        <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">No Popular Products</h3>
                    <p class="text-gray-600">Popular products will be added soon</p>
                </div>
            @endif
        </div>
    </section>

    <!-- Section 8: Discount Banner -->
    <section class="py-20 bg-gradient-to-r from-green-900 to-gray-800 hover:shadow-2xl transition-shadow duration-500">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl font-bold text-white mb-4 hover:scale-105 transition-transform duration-300 inline-block">Get 5% Cash back on ₹200</h2>
            <p class="text-gray-200 text-lg mb-8 max-w-2xl mx-auto">
                Shopping is a bit of a relaxing hobby for me, which is sometimes troubling for the bank balance.
            </p>
            <a href="/products" class="inline-flex items-center gap-2 bg-white text-green-900 font-semibold py-3 px-8 rounded-lg hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 hover:shadow-lg">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                </svg>
                Shop Now
            </a>
        </div>
    </section>

    <!-- Section 9: Product Tabs -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-900 mb-10">Today's Best Deals for you!</h2>
            
            <!-- Tabs Navigation -->
            <div class="border-b border-gray-200 mb-8">
                <div class="flex flex-wrap gap-4">
                    @php
                    $tabs = ['Featured', 'New Arrivals', 'Trending', 'Best Sellers'];
                    @endphp
                    
                    @foreach($tabs as $index => $tab)
                    <button class="tab-button px-4 py-2 font-medium text-gray-600 hover:text-green-900 border-b-2 border-transparent hover:border-green-900 transition-all duration-300 hover:bg-green-50 rounded-t-lg {{ $index === 0 ? 'text-green-900 border-green-900' : '' }}" data-tab="{{ strtolower(str_replace(' ', '-', $tab)) }}">
                        {{ $tab }}
                    </button>
                    @endforeach
                </div>
            </div>

            <!-- Tab Content -->
            <div id="tab-content">
                <!-- Featured Products Tab (Default) -->
                <div class="tab-pane active" id="tab-featured">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        @foreach($featuredProducts->take(4) as $product)
                            @include('frontend.partials.product-card', ['product' => $product])
                        @endforeach
                    </div>
                </div>
                
                <!-- New Arrivals Tab -->
                <div class="tab-pane hidden" id="tab-new-arrivals">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        @foreach($newArrivals->take(4) as $product)
                            @include('frontend.partials.product-card', ['product' => $product])
                        @endforeach
                    </div>
                </div>
                
                <!-- Trending Tab -->
                <div class="tab-pane hidden" id="tab-trending">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        @foreach($trendingProducts->take(4) as $product)
                            @include('frontend.partials.product-card', ['product' => $product])
                        @endforeach
                    </div>
                </div>
                
                <!-- Best Sellers Tab -->
                <div class="tab-pane hidden" id="tab-best-sellers">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        @foreach($bestSellers->take(4) as $product)
                            @include('frontend.partials.product-card', ['product' => $product])
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Most Selling Products -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center mb-10">
                <h2 class="text-3xl font-bold text-gray-900">Most Selling Products</h2>
                <a href="/products" class="text-green-900 font-semibold hover:underline hover:text-gray-800 transition-colors duration-300">View All →</a>
            </div>
            
            @if($bestSellers->count() > 0)
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach($bestSellers->take(4) as $product)
                        @include('frontend.partials.product-card', ['product' => $product])
                    @endforeach
                </div>
            @else
                <!-- Fallback if no products -->
                <div class="text-center py-12">
                    <div class="inline-block p-4 bg-gray-100 rounded-full mb-4">
                        <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">No Products Available</h3>
                    <p class="text-gray-600">Products will be added soon</p>
                </div>
            @endif
        </div>
    </section>

    <!-- Section: Trending Products (Large Featured) -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-900 mb-10 text-center">Trending Products for you!</h2>
            
            @if($trendingProducts->count() >= 2)
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    @foreach($trendingProducts->take(2) as $product)
                    <div class="bg-gradient-to-br from-gray-50 to-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 group hover:-translate-y-2">
                        <div class="flex flex-col md:flex-row">
                            <!-- Product Image -->
                            <div class="md:w-2/5 p-8">
                                <a href="{{ route('frontend.products.show', $product->slug) }}">
                                    <img src="{{ $product->image ? asset('storage/products/' . $product->image) : asset('images/products/default.jpg') }}" 
                                         alt="{{ $product->name }}" 
                                         class="w-full h-64 object-contain group-hover:scale-110 transition-transform duration-700">
                                </a>
                            </div>
                            
                            <!-- Product Content -->
                            <div class="md:w-3/5 p-8 flex flex-col justify-center">
                                <a href="{{ route('frontend.products.show', $product->slug) }}">
                                    <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-green-900 transition-colors duration-300">{{ $product->name }}</h3>
                                </a>
                                <p class="text-gray-600 mb-6 line-clamp-3">{{ $product->description }}</p>
                                
                                <!-- Features -->
                                <div class="flex items-center gap-4 mb-8 flex-wrap">
                                    <div class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-green-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span class="text-sm text-gray-700">Free Shipping</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-green-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span class="text-sm text-gray-700">Delivery within 24 hours</span>
                                    </div>
                                </div>
                                
                                <!-- Price and Add to Cart -->
                                <div class="flex items-center justify-between">
                                    <div>
                                        <span class="text-2xl font-bold text-gray-900">₹{{ number_format($product->price, 0) }}</span>
                                        @if($product->old_price)
                                        <span class="text-lg text-gray-400 line-through ml-2">₹{{ number_format($product->old_price, 0) }}</span>
                                        @endif
                                    </div>
                                    <button class="cart-btn-unified add-to-cart" onclick="addToCart({{ $product->id }})">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                        </svg>
                                        Shop Now
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            @else
                <!-- Fallback if not enough trending products -->
                <div class="text-center py-12">
                    <div class="inline-block p-4 bg-gray-100 rounded-full mb-4">
                        <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">More Trending Products Coming Soon</h3>
                    <p class="text-gray-600">Stay tuned for amazing trending products!</p>
                </div>
            @endif
        </div>
    </section>

    <!-- Section: Services Help -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-900 mb-10 text-center">Services to help you shop</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @php
                $services = [
                    [
                        'title' => 'Frequently asked questions',
                        'desc' => 'Get answers to all your shopping questions',
                        'icon' => '<svg class="w-12 h-12 text-green-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>',
                        'bgColor' => 'bg-blue-50',
                        'textColor' => 'text-blue-900'
                    ],
                    [
                        'title' => 'Online Payment Process',
                        'desc' => 'Secure and easy payment options',
                        'icon' => '<svg class="w-12 h-12 text-green-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>',
                        'bgColor' => 'bg-green-50',
                        'textColor' => 'text-green-900'
                    ],
                    [
                        'title' => 'Home Delivery Options',
                        'desc' => 'Fast and reliable delivery services',
                        'icon' => '<svg class="w-12 h-12 text-green-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>',
                        'bgColor' => 'bg-purple-50',
                        'textColor' => 'text-purple-900'
                    ]
                ];
                @endphp

                @foreach($services as $service)
                <div class="{{ $service['bgColor'] }} rounded-2xl overflow-hidden hover:shadow-2xl transition-all duration-500 group hover:-translate-y-2">
                    <div class="p-8">
                        <div class="mb-6">
                            {!! $service['icon'] !!}
                        </div>
                        <h3 class="text-xl font-bold {{ $service['textColor'] }} mb-4">{{ $service['title'] }}</h3>
                        <p class="text-gray-600 mb-8">{{ $service['desc'] }}</p>
                        
                        <!-- Learn More Button -->
                        <a href="/products" class="cart-btn-unified w-full inline-block text-center">
                            <svg class="w-4 h-4 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Learn More
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Tab functionality
            const tabButtons = document.querySelectorAll('.tab-button');
            const tabPanes = document.querySelectorAll('.tab-pane');
            
            tabButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const tabId = this.getAttribute('data-tab');
                    
                    // Remove active class from all buttons and panes
                    tabButtons.forEach(btn => {
                        btn.classList.remove('text-green-900', 'border-green-900');
                        btn.classList.add('text-gray-600', 'border-transparent');
                    });
                    
                    tabPanes.forEach(pane => {
                        pane.classList.remove('active');
                        pane.classList.add('hidden');
                    });
                    
                    // Add active class to clicked button and corresponding pane
                    this.classList.remove('text-gray-600', 'border-transparent');
                    this.classList.add('text-green-900', 'border-green-900');
                    
                    const activePane = document.getElementById(`tab-${tabId}`);
                    if (activePane) {
                        activePane.classList.remove('hidden');
                        activePane.classList.add('active');
                    }
                });
            });
        });
    </script>
</x-frontend-layout>
