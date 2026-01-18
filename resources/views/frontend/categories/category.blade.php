<x-frontend-layout>
    <!-- Clean Hero Section -->
    <section class="relative py-20 md:py-28 bg-linear-to-br from-green-50 via-white to-emerald-50">
        <!-- Subtle Background Pattern -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-0 left-1/4 -translate-x-1/2 w-96 h-96 bg-green-100 rounded-full mix-blend-multiply filter blur-3xl opacity-30"></div>
            <div class="absolute bottom-0 right-1/4 translate-x-1/2 w-96 h-96 bg-emerald-100 rounded-full mix-blend-multiply filter blur-3xl opacity-30"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Breadcrumb -->
            <nav class="mb-8">
                <ol class="flex items-center space-x-2 text-sm">
                    <li>
                        <a href="/" class="text-gray-500 hover:text-green-900 transition-colors">Home</a>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-gray-400 mx-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-green-900 font-medium">Categories</span>
                    </li>
                </ol>
            </nav>

            <!-- Hero Content -->
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-6">
                    Shop by 
                    <span class="text-transparent bg-clip-text bg-linear-to-br from-green-700 to-emerald-600">
                        Category
                    </span>
                </h1>
                
                <p class="text-xl text-gray-600 mb-10 leading-relaxed">
                    Discover amazing products across all categories. Find exactly what you're looking for with our curated collections.
                </p>

                <!-- Stats -->
                <div class="flex flex-wrap gap-8 mb-12">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-green-900">{{ $categories->count() }}+</div>
                        <div class="text-gray-500">Categories</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-green-900">{{ $categories->sum('product_count') }}+</div>
                        <div class="text-gray-500">Products</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-green-900">50+</div>
                        <div class="text-gray-500">Brands</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Grid -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Browse All Categories</h2>
            <p class="text-gray-600">Select a category to explore products</p>
        </div>

        <!-- Categories Grid -->
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($categories as $category)
            <a href="{{ route('frontend.category.show', ['category' => $category->slug]) }}" 
               class="group relative overflow-hidden rounded-2xl bg-white shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                <!-- Category Image -->
                <div class="relative h-48 overflow-hidden {{ $category->color ?? 'bg-gray-50' }}">
                    @if($category->image)
                        <!-- FIXED: Use $category->image directly, not the entire object -->
                        <img src="{{ $category->image }}" 
                             alt="{{ $category->name }}" 
                             class="w-full h-full object-cover opacity-90 group-hover:opacity-100 group-hover:scale-105 transition-all duration-500">
                    @else
                        <!-- Fallback image based on category name -->
                        @php
                            $fallbackImages = [
                                'electronics' => 'https://images.unsplash.com/photo-1498049794561-7780e7231661?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80',
                                'fashion' => 'https://images.unsplash.com/photo-1445205170230-053b83016050?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80',
                                'home' => 'https://images.unsplash.com/photo-1556228453-efd6c1ff04f6?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80',
                                'beauty' => 'https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80',
                                'sports' => 'https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80',
                                'books' => 'https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80',
                                'toys' => 'https://images.unsplash.com/photo-1596462502278-27bfdc403348?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80',
                                'automotive' => 'https://images.unsplash.com/photo-1563720223484-21c6c2d3c8e5?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80',
                            ];
                            
                            $categorySlug = strtolower($category->slug);
                            $fallbackImage = $fallbackImages[$categorySlug] ?? 'https://images.unsplash.com/photo-1498049794561-7780e7231661?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80';
                        @endphp
                        <img src="{{ $fallbackImage }}" 
                             alt="{{ $category->name }}" 
                             class="w-full h-full object-cover opacity-90 group-hover:opacity-100 group-hover:scale-105 transition-all duration-500">
                    @endif
                    <div class="absolute inset-0 bg-gradient-to-t from-black/10 to-transparent"></div>
                    
                    <!-- Icon -->
                    <div class="absolute top-4 right-4 text-gray-600">
                        @if($category->icon)
                            {!! $category->icon !!}
                        @else
                            <!-- Default icon -->
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                            </svg>
                        @endif
                    </div>
                </div>
                
                <!-- Category Info -->
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2 group-hover:text-green-900 transition-colors">
                        {{ $category->name }}
                    </h3>
                    <p class="text-sm text-gray-500">{{ $category->product_count ?? 0 }} products</p>
                </div>
                
                <!-- Hover Effect -->
                <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-green-700 to-emerald-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></div>
            </a>
            @endforeach
        </div>
    </div>
</section>

  <!-- Popular Products Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="flex justify-between items-center mb-12">
            <div>
                <h2 class="text-3xl font-bold text-gray-900">Popular Products</h2>
                <p class="text-gray-600 mt-2">Top picks from different categories</p>
            </div>
            <a href="/products" class="text-green-900 font-semibold hover:underline flex items-center gap-2">
                View All
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
            </a>
        </div>

        @if(count($popularProducts) > 0)
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($popularProducts as $product)
                <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden group hover:-translate-y-1">
                    <!-- Product Image -->
                    <div class="relative h-48 bg-gray-100 overflow-hidden">
                        <!-- FIXED: Check if $product is an object and access image property -->
                        <img src="{{ $product->image ?? $product['image'] ?? '' }}" 
                             alt="{{ $product->name ?? $product['name'] ?? '' }}" 
                             class="w-full h-full object-contain p-4 group-hover:scale-105 transition-transform duration-500">
                        
                        <!-- Category Badge -->
                        <div class="absolute top-3 left-3">
                            <span class="px-2 py-1 text-xs font-medium rounded bg-white/90 text-gray-700">
                                {{ $product->category->name ?? $product['category'] ?? 'Uncategorized' }}
                            </span>
                        </div>
                        
                        <!-- Wishlist -->
                        <button class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white flex items-center justify-center text-gray-400 hover:text-red-500 transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </button>
                    </div>
                    
                    <!-- Product Info -->
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-900 mb-2 group-hover:text-green-900 transition-colors">
                            {{ $product->name ?? $product['name'] ?? '' }}
                        </h3>
                        
                        <!-- Rating -->
                        <div class="flex items-center mb-3">
                            <div class="flex text-yellow-400">
                                @php
                                    $rating = $product->rating ?? $product['rating'] ?? 0;
                                    $ratingCount = floor($rating);
                                @endphp
                                @for($j = 0; $j < 5; $j++)
                                <svg class="w-4 h-4" fill="{{ $j < $ratingCount ? 'currentColor' : 'none' }}" stroke="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                @endfor
                            </div>
                            <span class="ml-2 text-sm text-gray-500">{{ number_format($rating, 1) }}</span>
                        </div>
                        
                        <!-- Price and CTA -->
                        <div class="flex items-center justify-between">
                            <div>
                                @php
                                    $price = $product->price ?? $product['price'] ?? 0;
                                    $oldPrice = $product->old_price ?? $product['oldPrice'] ?? null;
                                @endphp
                                <span class="text-lg font-bold text-gray-900">₹{{ number_format($price, 0) }}</span>
                                @if($oldPrice)
                                <span class="text-sm text-gray-400 line-through ml-2">₹{{ number_format($oldPrice, 0) }}</span>
                                @endif
                            </div>
                            <button class="flex items-center gap-2 px-4 py-2 bg-green-900 text-white text-sm font-medium rounded-lg hover:bg-emerald-800 transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                                Add
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        @else
            <!-- Fallback if no popular products -->
            <div class="text-center py-12">
                <div class="inline-block p-4 bg-gray-100 rounded-full mb-4">
                    <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-medium text-gray-900 mb-2">No Popular Products Available</h3>
                <p class="text-gray-600 mb-6">Check back soon for featured products</p>
                <a href="{{ route('frontend.products.index') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-green-900 text-white font-medium rounded-lg hover:bg-emerald-800 transition-colors">
                    Browse All Products
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
            </div>
        @endif
    </div>
</section>

    <!-- Newsletter -->
    <section class="py-16 bg-linear-to-r from-green-900 to-emerald-800">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-white mb-4">Stay Updated</h2>
            <p class="text-gray-200 mb-8 max-w-2xl mx-auto">
                Subscribe to get notified about new products and exclusive offers
            </p>
            
            <form class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
                <input type="email" 
                       placeholder="Enter your email" 
                       class="grow px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                <button type="submit" class="px-6 py-3 bg-white text-green-900 font-semibold rounded-lg hover:bg-gray-100 transition-colors">
                    Subscribe
                </button>
            </form>
            
            <p class="text-gray-300 text-sm mt-6">By subscribing, you agree to our Privacy Policy</p>
        </div>
    </section>

    <style>
        /* Simple hover effects */
        .group:hover .group-hover\:scale-105 {
            transform: scale(1.05);
        }
        
        /* Smooth transitions */
        .transition-all {
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        }
    </style>
</x-frontend-layout>