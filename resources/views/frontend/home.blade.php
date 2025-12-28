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
                    <a href="#"
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
                    <!-- Main Product Image with Floating Effect -->
                    <div class="hero-main-image absolute inset-0 z-20">
                        <img src="https://images.unsplash.com/photo-1556656793-08538906a9f8?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                             alt="Premium Smartphone"
                             class="hero-product-img w-full h-full rounded-3xl shadow-2xl object-cover border-8 border-white hover:scale-105 transition-transform duration-700">
                        <!-- Badge on Main Image -->
                        <div class="hero-badge absolute -top-4 -right-4 bg-gradient-to-r from-red-500 to-orange-500 text-white px-4 py-2 rounded-xl shadow-lg">
                            <span class="font-bold text-sm">🔥 30% OFF</span>
                        </div>
                    </div>
                    
                    <!-- Floating Card 1 (Smartwatch) -->
                    <div class="hero-floating-card-1 absolute -bottom-6 -left-6 md:-bottom-10 md:-left-10 z-10">
                        <div class="hero-card bg-white rounded-2xl shadow-xl p-3 transform rotate-6 hover:rotate-0 transition-transform duration-500">
                            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80"
                                 alt="Smart Watch"
                                 class="w-full h-full rounded-xl object-cover">
                        </div>
                    </div>
                    
                    <!-- Floating Card 2 (Headphones) -->
                    <div class="hero-floating-card-2 absolute -top-6 -right-6 md:-top-10 md:-right-10 z-10">
                        <div class="hero-card bg-white rounded-2xl shadow-xl p-3 transform -rotate-6 hover:rotate-0 transition-transform duration-500">
                            <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80"
                                 alt="Premium Headphones"
                                 class="w-full h-full rounded-xl object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="hero-scroll-indicator absolute bottom-8 left-1/2 transform -translate-x-1/2">
            <a href="#products" class="text-gray-400 hover:text-green-700 transition-colors">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
                </svg>
            </a>
        </div>
    </section>

    <!-- Section 2: Shop by Categories -->
    <section id="categories" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex justify-between items-center mb-10">
                <h2 class="text-3xl font-bold text-gray-900">Shop Our Top Categories</h2>
                <a href="#" class="text-green-900 font-semibold hover:underline hover:text-gray-800 transition-colors duration-300 flex items-center gap-2">
                    <span>View All Categories</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
                @php
                $categories = [
                    ['name' => 'furniture', 'image' => 'furniture.jpg'],
                    ['name' => 'handBag', 'image' => 'handbag.jpg'],
                    ['name' => 'books', 'image' => 'books.jpg'],
                    ['name' => 'tech', 'image' => 'tech.jpg'],
                    ['name' => 'sneakers', 'image' => 'sneakers.jpg'],
                    ['name' => 'travel', 'image' => 'travel.jpg']
                ];
                @endphp
                @foreach($categories as $category)
                <div class="text-center group cursor-pointer">
                    <div class="bg-gray-50 rounded-xl p-6 mb-4 group-hover:shadow-xl transition-all duration-300 group-hover:-translate-y-2 border border-gray-100 group-hover:border-green-200">
                        <img src="{{ asset('images/home_images/' . $category['image']) }}" alt="{{ $category['name'] }}" class="w-full h-32 object-contain mx-auto group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <h3 class="font-semibold text-gray-800 group-hover:text-green-900 transition-colors duration-300">{{ $category['name'] }}</h3>
                </div>
                @endforeach
            </div>
            
            <!-- View All Button for Mobile -->
            <div class="mt-10 text-center block md:hidden">
                <a href="#" class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-green-800 to-emerald-700 text-white font-semibold rounded-lg hover:from-green-900 hover:to-emerald-800 transition-all duration-300 transform hover:scale-105 shadow-md hover:shadow-lg">
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
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex justify-between items-center mb-10">
                <h2 class="text-3xl font-bold text-gray-900">Today's Best Deals For You!</h2>
                <a href="#" class="text-green-900 font-semibold hover:underline hover:text-gray-800 transition-colors duration-300">View All →</a>
            </div>
            
            <!-- First Row - 4 Products -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                @php
                $firstRowProducts = [
                    [
                        'name' => 'HomePod mini',
                        'desc' => 'Smart speaker with immersive sound',
                        'price' => '₹239.00',
                        'oldPrice' => '₹299.00',
                        'image' => 'homepod.jpg',
                        'rating' => 4.8,
                        'reviews' => 121
                    ],
                    [
                        'name' => 'iPhone 14 Pro',
                        'desc' => 'Latest smartphone with advanced camera',
                        'price' => '₹999.00',
                        'oldPrice' => '₹1,099.00',
                        'image' => 'iphone.jpg',
                        'rating' => 4.9,
                        'reviews' => 256
                    ],
                    [
                        'name' => 'Samsung QLED TV',
                        'desc' => '65" 4K Smart TV with Quantum HDR',
                        'price' => '₹1,299.00',
                        'oldPrice' => '₹1,599.00',
                        'image' => 'tv.jpg',
                        'rating' => 4.7,
                        'reviews' => 189
                    ],
                    [
                        'name' => 'MacBook Air M2',
                        'desc' => 'Lightweight laptop with M2 chip',
                        'price' => '₹1,199.00',
                        'oldPrice' => '₹1,299.00',
                        'image' => 'macbook.jpg',
                        'rating' => 4.8,
                        'reviews' => 312
                    ]
                ];
                @endphp

                @foreach($firstRowProducts as $product)
                <div class="bg-white rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden group hover:-translate-y-2 border border-gray-100 hover:border-green-200">
                    <div class="relative overflow-hidden">
                        <div class="absolute top-4 right-4 z-10">
                            <button class="text-gray-400 hover:text-red-500 bg-white p-2 rounded-full shadow-md hover:shadow-lg transition-all duration-300 transform hover:scale-110">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="p-4">
                            <img src="{{ asset('images/home_images/' . $product['image']) }}" 
                                 alt="{{ $product['name'] }}" 
                                 class="w-full h-48 object-contain mb-4 group-hover:scale-105 transition-transform duration-500">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="font-semibold text-gray-800 group-hover:text-green-900 transition-colors duration-300">{{ $product['name'] }}</h3>
                            </div>
                            <p class="text-gray-600 text-sm mb-3">{{ $product['desc'] }}</p>
                            <div class="flex items-center mb-4">
                                <div class="flex text-yellow-400">
                                    @for($j = 0; $j < 5; $j++)
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                    @endfor
                                </div>
                                <span class="ml-2 text-gray-600 text-sm">({{ $product['rating'] }} • {{ $product['reviews'] }} reviews)</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <div>
                                    <span class="text-xl font-bold text-gray-900 group-hover:text-green-900 transition-colors duration-300">{{ $product['price'] }}</span>
                                    <span class="text-gray-400 line-through text-sm ml-2">{{ $product['oldPrice'] }}</span>
                                </div>
                                <button class="cart-btn-unified">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Second Row - 4 Products -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @php
                $secondRowProducts = [
                    [
                        'name' => 'Nike Air Max',
                        'desc' => 'Premium running shoes with air cushion',
                        'price' => '₹129.00',
                        'oldPrice' => '₹159.00',
                        'image' => 'nike-shoes.jpg',
                        'rating' => 4.6,
                        'reviews' => 89
                    ],
                    [
                        'name' => 'Sony WH-1000XM4',
                        'desc' => 'Noise cancelling wireless headphones',
                        'price' => '₹349.00',
                        'oldPrice' => '₹399.00',
                        'image' => 'sony-headphones.jpg',
                        'rating' => 4.9,
                        'reviews' => 432
                    ],
                    [
                        'name' => 'Dyson V11 Vacuum',
                        'desc' => 'Cordless vacuum with powerful suction',
                        'price' => '₹599.00',
                        'oldPrice' => '₹699.00',
                        'image' => 'dyson.jpg',
                        'rating' => 4.7,
                        'reviews' => 167
                    ],
                    [
                        'name' => 'KitchenAid Mixer',
                        'desc' => 'Professional stand mixer, 5-quart',
                        'price' => '₹449.00',
                        'oldPrice' => '₹499.00',
                        'image' => 'kitchenaid.jpg',
                        'rating' => 4.8,
                        'reviews' => 203
                    ]
                ];
                @endphp

                @foreach($secondRowProducts as $product)
                <div class="bg-white rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden group hover:-translate-y-2 border border-gray-100 hover:border-green-200">
                    <div class="relative overflow-hidden">
                        <div class="absolute top-4 right-4 z-10">
                            <button class="text-gray-400 hover:text-red-500 bg-white p-2 rounded-full shadow-md hover:shadow-lg transition-all duration-300 transform hover:scale-110">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="p-4">
                            <img src="{{ asset('images/home_images/' . $product['image']) }}" 
                                 alt="{{ $product['name'] }}" 
                                 class="w-full h-48 object-contain mb-4 group-hover:scale-105 transition-transform duration-500">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="font-semibold text-gray-800 group-hover:text-green-900 transition-colors duration-300">{{ $product['name'] }}</h3>
                            </div>
                            <p class="text-gray-600 text-sm mb-3">{{ $product['desc'] }}</p>
                            <div class="flex items-center mb-4">
                                <div class="flex text-yellow-400">
                                    @for($j = 0; $j < 5; $j++)
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                    @endfor
                                </div>
                                <span class="ml-2 text-gray-600 text-sm">({{ $product['rating'] }} • {{ $product['reviews'] }} reviews)</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <div>
                                    <span class="text-xl font-bold text-gray-900 group-hover:text-green-900 transition-colors duration-300">{{ $product['price'] }}</span>
                                    <span class="text-gray-400 line-through text-sm ml-2">{{ $product['oldPrice'] }}</span>
                                </div>
                                <button class="cart-btn-unified">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Section 5: Choose by Brand -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-gray-900 mb-10 text-center">Choose by Brand</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                @php
                $brands = [
                    ['name' => 'Apple', 'image' => 'apple.png'],
                    ['name' => 'Adidas', 'image' => 'adidas.png'],
                    ['name' => 'Boat', 'image' => 'boat.png'],
                    ['name' => 'Gucci', 'image' => 'gucci.png'],
                    ['name' => 'LG', 'image' => 'lg.png'],
                    ['name' => 'Skechers', 'image' => 'skechers.png'],
                    ['name' => 'Samsung', 'image' => 'samsung.png'],
                    ['name' => 'Nike', 'image' => 'nike.png']
                ];
                @endphp
                
                @foreach($brands as $brand)
                <div class="bg-white rounded-xl p-6 text-center hover:shadow-xl transition-all duration-300 group hover:-translate-y-2 border border-gray-100 hover:border-green-200">
                    <div class="w-16 h-16 mx-auto mb-4 bg-gray-50 rounded-full p-3 group-hover:bg-green-50 transition-colors duration-300">
                        <img src="{{ asset('images/home_images/' . $brand['image']) }}" 
                             alt="{{ $brand['name'] }}" class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-300">
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
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-gray-900 mb-10 text-center">Get Up to 70% off</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @php
                $discounts = [
                    ['color' => 'bg-blue-50', 'amount' => '100', 'image' => 'sofa.jpg'],
                    ['color' => 'bg-pink-50', 'amount' => '29', 'image' => 'book.jpg'],
                    ['color' => 'bg-yellow-50', 'amount' => '67', 'image' => 'shirt.jpg'],
                    ['color' => 'bg-green-50', 'amount' => '59', 'image' => 'bug-book.jpg']
                ];
                @endphp
                @foreach($discounts as $discount)
                <div class="{{ $discount['color'] }} rounded-2xl p-6 flex flex-col hover:shadow-xl transition-all duration-300 group hover:-translate-y-2 border border-transparent hover:border-green-200">
                    <div class="mb-4">
                        <h3 class="text-lg font-semibold text-gray-800 group-hover:text-green-900 transition-colors duration-300">Save</h3>
                        <div class="text-3xl font-bold text-gray-900 mt-2 group-hover:scale-110 transition-transform duration-300 inline-block">₹{{ $discount['amount'] }}</div>
                    </div>
                    <p class="text-gray-600 text-sm mb-6">Explore Our Furniture & Home Furnishing Range</p>
                    <div class="mt-auto">
                        <img src="{{ asset('images/home_images/' . $discount['image']) }}" alt="Discount" class="w-full h-40 object-contain group-hover:scale-105 transition-transform duration-500">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Section 7: Weekly Popular Products -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex justify-between items-center mb-10">
                <h2 class="text-3xl font-bold text-gray-900">Weekly Popular Products</h2>
                <a href="#" class="text-green-900 font-semibold hover:underline hover:text-gray-800 transition-colors duration-300">View All →</a>
            </div>
            
            <!-- Horizontal Scrolling Container -->
            <div class="relative">
                <!-- Products Carousel -->
                <div class="flex gap-6 overflow-x-auto pb-6 scrollbar-hide snap-x snap-mandatory scroll-smooth" id="weeklyProductsCarousel">
                    @php
                    $weeklyProducts = [
                        [
                            'name' => 'Wireless Earbuds Pro',
                            'desc' => 'Active noise cancellation, 30hr battery',
                            'price' => '₹179.00',
                            'oldPrice' => '₹199.00',
                            'image' => 'wireless-earbuds.jpg',
                            'rating' => 4.7,
                            'reviews' => 234,
                            'category' => 'Electronics'
                        ],
                        [
                            'name' => 'Gaming Keyboard',
                            'desc' => 'Mechanical RGB backlit keyboard',
                            'price' => '₹89.00',
                            'oldPrice' => '₹109.00',
                            'image' => 'gaming-keyboard.jpg',
                            'rating' => 4.5,
                            'reviews' => 189,
                            'category' => 'Gaming'
                        ],
                        [
                            'name' => 'Yoga Mat Premium',
                            'desc' => 'Non-slip, eco-friendly material',
                            'price' => '₹49.00',
                            'oldPrice' => '₹59.00',
                            'image' => 'yoga-mat.jpg',
                            'rating' => 4.8,
                            'reviews' => 156,
                            'category' => 'Fitness'
                        ],
                        [
                            'name' => 'Designer Handbag',
                            'desc' => 'Genuine leather, waterproof',
                            'price' => '₹299.00',
                            'oldPrice' => '₹349.00',
                            'image' => 'designer-handbag.jpg',
                            'rating' => 4.9,
                            'reviews' => 98,
                            'category' => 'Fashion'
                        ],
                        [
                            'name' => 'Smart Home Camera',
                            'desc' => '360° view, night vision, motion detection',
                            'price' => '₹129.00',
                            'oldPrice' => '₹149.00',
                            'image' => 'smart-camera.jpg',
                            'rating' => 4.6,
                            'reviews' => 312,
                            'category' => 'Smart Home'
                        ],
                        [
                            'name' => 'Coffee Maker Deluxe',
                            'desc' => 'Programmable, 12-cup capacity',
                            'price' => '₹159.00',
                            'oldPrice' => '₹189.00',
                            'image' => 'coffee-maker.jpg',
                            'rating' => 4.7,
                            'reviews' => 267,
                            'category' => 'Home Appliances'
                        ],
                        [
                            'name' => 'Fitness Tracker',
                            'desc' => 'Heart rate monitor, sleep tracking',
                            'price' => '₹79.00',
                            'oldPrice' => '₹99.00',
                            'image' => 'fitness-tracker.jpg',
                            'rating' => 4.4,
                            'reviews' => 423,
                            'category' => 'Wearables'
                        ],
                        [
                            'name' => 'Portable Speaker',
                            'desc' => 'Waterproof, 20hr battery life',
                            'price' => '₹119.00',
                            'oldPrice' => '₹139.00',
                            'image' => 'portable-speaker.jpg',
                            'rating' => 4.8,
                            'reviews' => 198,
                            'category' => 'Audio'
                        ],
                        [
                            'name' => '4K Action Camera',
                            'desc' => 'Waterproof, image stabilization',
                            'price' => '₹249.00',
                            'oldPrice' => '₹299.00',
                            'image' => 'action-camera.jpg',
                            'rating' => 4.6,
                            'reviews' => 178,
                            'category' => 'Camera'
                        ],
                        [
                            'name' => 'Electric Toothbrush',
                            'desc' => 'Smart pressure sensor, 4 modes',
                            'price' => '₹89.00',
                            'oldPrice' => '₹119.00',
                            'image' => 'electric-toothbrush.jpg',
                            'rating' => 4.7,
                            'reviews' => 345,
                            'category' => 'Personal Care'
                        ],
                        [
                            'name' => 'Drone with Camera',
                            'desc' => '4K video, 30min flight time',
                            'price' => '₹399.00',
                            'oldPrice' => '₹499.00',
                            'image' => 'drone.jpg',
                            'rating' => 4.8,
                            'reviews' => 156,
                            'category' => 'Electronics'
                        ],
                        [
                            'name' => 'Air Purifier',
                            'desc' => 'HEPA filter, smart sensor',
                            'price' => '₹199.00',
                            'oldPrice' => '₹249.00',
                            'image' => 'air-purifier.jpg',
                            'rating' => 4.5,
                            'reviews' => 234,
                            'category' => 'Home'
                        ]
                    ];
                    @endphp

                    @foreach($weeklyProducts as $product)
                    <div class="flex-shrink-0 w-72 snap-start">
                        <div class="bg-white rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden group hover:-translate-y-2 border border-gray-100 hover:border-green-200 h-full">
                            <div class="relative overflow-hidden">
                                <!-- Category Badge -->
                                <div class="absolute top-4 left-4 z-10">
                                    <span class="px-3 py-1 text-xs font-semibold rounded-full bg-green-900 text-white">
                                        {{ $product['category'] }}
                                    </span>
                                </div>
                                
                                <!-- Wishlist Button -->
                                <div class="absolute top-4 right-4 z-10">
                                    <button class="text-gray-400 hover:text-red-500 bg-white p-2 rounded-full shadow-md hover:shadow-lg transition-all duration-300 transform hover:scale-110">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                        </svg>
                                    </button>
                                </div>
                                
                                <div class="p-4">
                                    <!-- Product Image -->
                                    <img src="{{ asset('images/home_images/' . $product['image']) }}" 
                                         alt="{{ $product['name'] }}" 
                                         class="w-full h-48 object-contain mb-4 group-hover:scale-105 transition-transform duration-500">
                                    
                                    <!-- Product Info -->
                                    <div class="flex justify-between items-start mb-2">
                                        <h3 class="font-semibold text-gray-800 group-hover:text-green-900 transition-colors duration-300">{{ $product['name'] }}</h3>
                                    </div>
                                    
                                    <!-- Description -->
                                    <p class="text-gray-600 text-sm mb-3 line-clamp-2">{{ $product['desc'] }}</p>
                                    
                                    <!-- Rating -->
                                    <div class="flex items-center mb-4">
                                        <div class="flex text-yellow-400">
                                            @for($j = 0; $j < 5; $j++)
                                                @if($j < floor($product['rating']))
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
                                        <span class="ml-2 text-gray-600 text-sm">{{ $product['rating'] }} • {{ $product['reviews'] }} reviews</span>
                                    </div>
                                    
                                    <!-- Price and Add to Cart -->
                                    <div class="flex justify-between items-center">
                                        <div>
                                            <span class="text-xl font-bold text-gray-900 group-hover:text-green-900 transition-colors duration-300">{{ $product['price'] }}</span>
                                            @if($product['oldPrice'])
                                            <span class="text-gray-400 line-through text-sm ml-2">{{ $product['oldPrice'] }}</span>
                                            @endif
                                        </div>
                                        <button class="cart-btn-unified">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                            </svg>
                                            Add to Cart
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                
                <!-- Scroll Indicator Dots -->
                <div class="flex justify-center gap-2 mt-6">
                    @for($i = 0; $i < ceil(count($weeklyProducts) / 4); $i++)
                    <button class="w-3 h-3 rounded-full bg-gray-300 hover:bg-green-900 transition-colors duration-300 scroll-indicator-dot {{ $i === 0 ? 'bg-green-900' : '' }}" data-index="{{ $i }}" aria-label="Go to slide {{ $i + 1 }}"></button>
                    @endfor
                </div>
            </div>
        </div>
    </section>

    <!-- Section 8: Discount Banner -->
    <section class="py-20 bg-gradient-to-r from-green-900 to-gray-800 hover:shadow-2xl transition-shadow duration-500">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold text-white mb-4 hover:scale-105 transition-transform duration-300 inline-block">Get 5% Cash back on ₹200</h2>
            <p class="text-gray-200 text-lg mb-8 max-w-2xl mx-auto">
                Shopping is a bit of a relaxing hobby for me, which is sometimes troubling for the bank balance.
            </p>
            <button class="flex items-center gap-2 bg-white text-green-900 font-semibold py-3 px-8 rounded-lg hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 hover:shadow-lg">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                </svg>
                Learn More
            </button>
        </div>
    </section>

    <!-- Section 9: Product Tabs -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-gray-900 mb-10">Today's Best Deals for you!</h2>
            
            <!-- Tabs Navigation -->
            <div class="border-b border-gray-200 mb-8">
                <div class="flex flex-wrap gap-4">
                    @foreach(['Gadgets', 'Fashion', 'Toys', 'Education', 'Beauty', 'Travel', 'Fitness', 'Sneakers'] as $tab)
                    <button class="px-4 py-2 font-medium text-gray-600 hover:text-green-900 border-b-2 border-transparent hover:border-green-900 transition-all duration-300 hover:bg-green-50 rounded-t-lg {{ $loop->last ? 'text-green-900 border-green-900' : '' }}">
                        {{ $tab }}
                    </button>
                    @endforeach
                </div>
            </div>

            <!-- Tab Content - Different Products -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @php
                $tabProducts = [
                    [
                        'name' => 'Laptop Sleeve MacBook',
                        'desc' => 'Organic Cotton, fairtrade certified',
                        'price' => '₹59.00',
                        'oldPrice' => '',
                        'image' => 'laptop-sleeve.jpg',
                        'rating' => 4.8,
                        'reviews' => 121,
                        'badge' => ''
                    ],
                    [
                        'name' => 'Wireless Mouse Pro',
                        'desc' => 'Ergonomic design with silent clicks',
                        'price' => '₹39.00',
                        'oldPrice' => '₹49.00',
                        'image' => 'wireless-mouse.jpg',
                        'rating' => 4.5,
                        'reviews' => 89,
                        'badge' => 'Sale'
                    ],
                    [
                        'name' => 'Smart Watch Series 5',
                        'desc' => 'Health monitoring & notifications',
                        'price' => '₹299.00',
                        'oldPrice' => '₹349.00',
                        'image' => 'smart-watch.jpg',
                        'rating' => 4.9,
                        'reviews' => 234,
                        'badge' => 'Popular'
                    ],
                    [
                        'name' => 'Noise Cancelling Earbuds',
                        'desc' => 'Wireless with 30hr battery life',
                        'price' => '₹129.00',
                        'oldPrice' => '₹159.00',
                        'image' => 'earbuds.jpg',
                        'rating' => 4.7,
                        'reviews' => 156,
                        'badge' => 'New'
                    ]
                ];
                @endphp

                @foreach($tabProducts as $product)
                <div class="bg-white rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden group hover:-translate-y-2 border border-gray-100 hover:border-green-200">
                    <div class="relative overflow-hidden">
                        <!-- Product Badge -->
                        @if($product['badge'])
                        <div class="absolute top-4 left-4 z-10">
                            <span class="px-3 py-1 text-xs font-semibold rounded-full {{ $product['badge'] == 'Sale' ? 'bg-red-500 text-white' : ($product['badge'] == 'Popular' ? 'bg-yellow-500 text-white' : 'bg-green-500 text-white') }}">
                                {{ $product['badge'] }}
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
                        
                        <!-- Product Image -->
                        <div class="p-4">
                            <img src="{{ asset('images/home_images/' . $product['image']) }}" 
                                 alt="{{ $product['name'] }}" 
                                 class="w-full h-48 object-contain mb-4 group-hover:scale-105 transition-transform duration-500">
                            
                            <!-- Product Info -->
                            <h3 class="font-semibold text-gray-800 mb-2 group-hover:text-green-900 transition-colors duration-300">
                                {{ $product['name'] }}
                            </h3>
                            <p class="text-gray-600 text-sm mb-3">{{ $product['desc'] }}</p>
                            
                            <!-- Rating -->
                            <div class="flex items-center mb-4">
                                <div class="flex text-yellow-400">
                                    @for($j = 0; $j < 5; $j++)
                                        @if($j < floor($product['rating']))
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
                                <span class="ml-2 text-gray-600 text-sm">
                                    {{ $product['rating'] }} • {{ $product['reviews'] }} reviews
                                </span>
                            </div>
                            
                            <!-- Price and Add to Cart -->
                            <div class="flex justify-between items-center">
                                <div>
                                    <span class="text-xl font-bold text-gray-900 group-hover:text-green-900 transition-colors duration-300">
                                        {{ $product['price'] }}
                                    </span>
                                    @if($product['oldPrice'])
                                    <span class="text-gray-400 line-through text-sm ml-2">
                                        {{ $product['oldPrice'] }}
                                    </span>
                                    @endif
                                </div>
                                <button class="cart-btn-unified">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Section: Most Selling Products (Carousel) -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex justify-between items-center mb-10">
                <h2 class="text-3xl font-bold text-gray-900">Most Selling Products</h2>
                <a href="#" class="text-green-900 font-semibold hover:underline hover:text-gray-800 transition-colors duration-300">View All →</a>
            </div>
            
            <!-- Products Grid (Carousel-style) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @php
                $mostSellingProducts = [
                    [
                        'name' => 'Instax Mini 11',
                        'desc' => 'Selfie mode and selfie mirror, Macro mode',
                        'price' => '₹89.00',
                        'image' => 'instax-mini.jpg',
                        'rating' => 4.8,
                        'reviews' => 121
                    ],
                    [
                        'name' => 'Hand Watch',
                        'desc' => 'Citizen 650M, W-69g',
                        'price' => '₹59.00',
                        'image' => 'watch.jpg',
                        'rating' => 4.6,
                        'reviews' => 89
                    ],
                    [
                        'name' => 'Adidas Sneakers',
                        'desc' => 'x Sean Wotherspoon Superstar sneakers',
                        'price' => '₹159.00',
                        'image' => 'adidas-sneakers.jpg',
                        'rating' => 4.7,
                        'reviews' => 156
                    ],
                    [
                        'name' => 'Pendleton Water Bottle',
                        'desc' => 'Stainless steel, Food safe, Hand wash',
                        'price' => '₹89.00',
                        'image' => 'water-bottle.jpg',
                        'rating' => 4.9,
                        'reviews' => 203
                    ]
                ];
                @endphp

                @foreach($mostSellingProducts as $product)
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
                        
                        <div class="p-4">
                            <!-- Product Image -->
                            <img src="{{ asset('images/home_images/' . $product['image']) }}" 
                                 alt="{{ $product['name'] }}" 
                                 class="w-full h-48 object-contain mb-4 group-hover:scale-105 transition-transform duration-500">
                            
                            <!-- Product Info -->
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="font-semibold text-gray-800 group-hover:text-green-900 transition-colors duration-300">{{ $product['name'] }}</h3>
                                <span class="text-lg font-bold text-gray-900 group-hover:text-green-900 transition-colors duration-300">{{ $product['price'] }}</span>
                            </div>
                            
                            <!-- Description -->
                            <p class="text-gray-600 text-sm mb-3">{{ $product['desc'] }}</p>
                            
                            <!-- Rating -->
                            <div class="flex items-center mb-4">
                                <div class="flex text-yellow-400">
                                    @for($j = 0; $j < 5; $j++)
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                    @endfor
                                </div>
                                <span class="ml-2 text-gray-600 text-sm">({{ $product['reviews'] }})</span>
                            </div>
                            
                            <!-- Add to Cart Button -->
                            <button class="cart-btn-unified w-full">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Section: Trending Products (Large Featured) -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-gray-900 mb-10 text-center">Trending Products for you!</h2>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Trending Product 1 -->
                <div class="bg-gradient-to-br from-gray-50 to-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 group hover:-translate-y-2">
                    <div class="flex flex-col md:flex-row">
                        <!-- Product Image -->
                        <div class="md:w-2/5 p-8">
                            <img src="{{ asset('images/home_images/furniture-village.jpg') }}" 
                                 alt="Furniture Village" 
                                 class="w-full h-64 object-contain group-hover:scale-110 transition-transform duration-700">
                        </div>
                        
                        <!-- Product Content -->
                        <div class="md:w-3/5 p-8 flex flex-col justify-center">
                            <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-green-900 transition-colors duration-300">Furniture Village</h3>
                            <p class="text-gray-600 mb-6">Premium furniture collection with modern designs and premium materials</p>
                            
                            <!-- Features -->
                            <div class="flex items-center gap-4 mb-8">
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
                            
                            <!-- Add to Cart Button -->
                            <button class="cart-btn-unified">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                                Shop Now
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Trending Product 2 -->
                <div class="bg-gradient-to-br from-gray-50 to-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 group hover:-translate-y-2">
                    <div class="flex flex-col md:flex-row">
                        <!-- Product Image -->
                        <div class="md:w-2/5 p-8">
                            <img src="{{ asset('images/home_images/fashion-world.jpg') }}" 
                                 alt="Fashion World" 
                                 class="w-full h-64 object-contain group-hover:scale-110 transition-transform duration-700">
                        </div>
                        
                        <!-- Product Content -->
                        <div class="md:w-3/5 p-8 flex flex-col justify-center">
                            <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-green-900 transition-colors duration-300">Fashion World</h3>
                            <p class="text-gray-600 mb-6">Latest fashion trends and premium clothing collections for all seasons</p>
                            
                            <!-- Features -->
                            <div class="flex items-center gap-4 mb-8">
                                <div class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-green-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-sm text-gray-700">Free Returns</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-green-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="text-sm text-gray-700">Delivery within 24 hours</span>
                                </div>
                            </div>
                            
                            <!-- Add to Cart Button -->
                            <button class="cart-btn-unified">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                                Shop Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Best Selling Store -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-gray-900 mb-10 text-center">Best Selling Store</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @php
                $stores = [
                    [
                        'name' => 'Staples',
                        'category' => 'Bag, Perfume',
                        'image' => 'store-one.jpg',
                        'logo' => 'store-logo-one.jpg',
                        'delivery' => 'Delivery within 24 hours'
                    ],
                    [
                        'name' => 'Now Delivery',
                        'category' => 'Bag, Perfume',
                        'image' => 'store-two.jpg',
                        'logo' => 'store-logo-two.jpg',
                        'delivery' => 'Delivery within 24 hours'
                    ],
                    [
                        'name' => 'Bevmo',
                        'category' => 'Bag, Perfume',
                        'image' => 'store-three.jpg',
                        'logo' => 'store-logo-three.jpg',
                        'delivery' => 'Delivery within 24 hours'
                    ],
                    [
                        'name' => 'Quicklly',
                        'category' => 'Bag, Perfume',
                        'image' => 'store-four.jpg',
                        'logo' => 'store-logo-four.jpg',
                        'delivery' => 'Delivery within 24 hours'
                    ]
                ];
                @endphp

                @foreach($stores as $store)
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 group hover:-translate-y-2">
                    <!-- Store Banner -->
                    <div class="relative h-48 overflow-hidden">
                        <img src="{{ asset('images/home_images/' . $store['image']) }}" 
                             alt="{{ $store['name'] }}" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        
                        <!-- Store Logo -->
                        <div class="absolute -bottom-8 left-6">
                            <div class="w-16 h-16 bg-white rounded-full p-1 shadow-lg">
                                <img src="{{ asset('images/home_images/' . $store['logo']) }}" 
                                     alt="{{ $store['name'] }} Logo" 
                                     class="w-full h-full object-cover rounded-full">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Store Info -->
                    <div class="pt-10 pb-6 px-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-green-900 transition-colors duration-300">{{ $store['name'] }}</h3>
                        
                        <!-- Categories -->
                        <div class="flex items-center gap-2 mb-4">
                            <span class="text-sm text-gray-600">{{ $store['category'] }}</span>
                        </div>
                        
                        <!-- Delivery Info -->
                        <div class="flex items-center gap-2 mb-6">
                            <svg class="w-5 h-5 text-green-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="text-sm text-gray-700">{{ $store['delivery'] }}</span>
                        </div>
                        
                        <!-- Visit Store Button -->
                        <button class="cart-btn-unified w-full">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Visit Store
                        </button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Section: Services Help -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-gray-900 mb-10 text-center">Services to help you shop</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @php
                $services = [
                    [
                        'title' => 'Frequently asked questions',
                        'desc' => 'Updates on safe Shopping in our Stores',
                        'image' => 'faq.jpg',
                        'bgColor' => 'bg-blue-50',
                        'textColor' => 'text-blue-900'
                    ],
                    [
                        'title' => 'Online Payment Process',
                        'desc' => 'Updates on safe Shopping in our Stores',
                        'image' => 'online-payment.jpg',
                        'bgColor' => 'bg-green-50',
                        'textColor' => 'text-green-900'
                    ],
                    [
                        'title' => 'Home Delivery Options',
                        'desc' => 'Updates on safe Shopping in our Stores',
                        'image' => 'home-delivery.jpg',
                        'bgColor' => 'bg-purple-50',
                        'textColor' => 'text-purple-900'
                    ]
                ];
                @endphp

                @foreach($services as $service)
                <div class="{{ $service['bgColor'] }} rounded-2xl overflow-hidden hover:shadow-2xl transition-all duration-500 group hover:-translate-y-2">
                    <div class="p-8">
                        <h3 class="text-xl font-bold {{ $service['textColor'] }} mb-4">{{ $service['title'] }}</h3>
                        <p class="text-gray-600 mb-8">{{ $service['desc'] }}</p>
                        
                        <!-- Service Image -->
                        <div class="relative h-48">
                            <img src="{{ asset('images/home_images/' . $service['image']) }}" 
                                 alt="{{ $service['title'] }}" 
                                 class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-700">
                        </div>
                        
                        <!-- Learn More Button -->
                        <button class="cart-btn-unified w-full mt-6">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Learn More
                        </button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

</x-frontend-layout>