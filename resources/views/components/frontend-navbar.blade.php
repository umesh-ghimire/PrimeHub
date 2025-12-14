<nav class="bg-white shadow-sm border-b relative">
    <div class="max-w-screen-xl mx-auto flex items-center justify-between py-4 px-6">

        {{-- Logo --}}
        <a href="{{ url('/') }}" class="flex items-center space-x-2">
            <span class="text-2xl font-bold text-green-700">PrimeHub</span>
        </a>

        {{-- Center Menu --}}
        <div class="hidden md:flex items-center space-x-8">

            {{-- Category Mega Menu Container --}}
            <div class="relative">
                {{-- Category Mega Menu Trigger --}}
                <button id="megaMenuToggle" data-dropdown-toggle="megaMenu"
                    class="cursor-pointer relative pb-1 text-black-700 hover:text-gray-700 font-medium
                           after:content-[''] after:absolute after:left-0 after:bottom-0 after:w-0
                           hover:after:w-full after:h-[2px] after:bg-blue-600
                           after:transition-all after:duration-300 flex items-center space-x-1">
                    <span>Category</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>

                {{-- Category Mega Menu (Dropdown) --}}
                <div id="megaMenu" 
                    class="absolute top-full left-0 z-20 hidden 
                           bg-white border border-gray-200 shadow-xl rounded-lg mt-2 py-6 px-8 w-[600px]">
                    
                    <h2 class="text-lg font-semibold mb-6 text-gray-800">Popular Categories</h2>
                    
                    <div class="grid grid-cols-3 gap-4">
                        
                        {{-- Furniture --}}
                        <a href="#" class="flex items-center space-x-4 p-3 rounded-lg hover:bg-gray-50 transition-colors duration-200 border border-gray-100">
                            <img src="{{ asset('images/categories/furniture.png') }}" class="w-10 h-10 rounded-lg object-cover bg-gray-50 p-1">
                            <div>
                                <p class="font-semibold text-gray-800 text-sm">Furniture</p>
                                <p class="text-xs text-gray-500">240 Items Available</p>
                            </div>
                        </a>
                        
                        {{-- Shoe --}}
                        <a href="#" class="flex items-center space-x-4 p-3 rounded-lg hover:bg-gray-50 transition-colors duration-200 border border-gray-100">
                            <img src="{{ asset('images/categories/shoe.png') }}" class="w-10 h-10 rounded-lg object-cover bg-gray-50 p-1">
                            <div>
                                <p class="font-semibold text-gray-800 text-sm">Shoe</p>
                                <p class="text-xs text-gray-500">240 Items Available</p>
                            </div>
                        </a>
                        
                        {{-- Laptop --}}
                        <a href="#" class="flex items-center space-x-4 p-3 rounded-lg hover:bg-gray-50 transition-colors duration-200 border border-gray-100">
                            <img src="{{ asset('images/categories/laptop.png') }}" class="w-10 h-10 rounded-lg object-cover bg-gray-50 p-1">
                            <div>
                                <p class="font-semibold text-gray-800 text-sm">Laptop</p>
                                <p class="text-xs text-gray-500">240 Items Available</p>
                            </div>
                        </a>
                        
                        {{-- Headphone --}}
                        <a href="#" class="flex items-center space-x-4 p-3 rounded-lg hover:bg-gray-50 transition-colors duration-200 border border-gray-100">
                            <img src="{{ asset('images/categories/headphone.png') }}" class="w-10 h-10 rounded-lg object-cover bg-gray-50 p-1">
                            <div>
                                <p class="font-semibold text-gray-800 text-sm">Headphone</p>
                                <p class="text-xs text-gray-500">240 Items Available</p>
                            </div>
                        </a>
                        
                        {{-- Bag --}}
                        <a href="#" class="flex items-center space-x-4 p-3 rounded-lg hover:bg-gray-50 transition-colors duration-200 border border-gray-100">
                            <img src="{{ asset('images/categories/handbag.png') }}" class="w-10 h-10 rounded-lg object-cover bg-gray-50 p-1">
                            <div>
                                <p class="font-semibold text-gray-800 text-sm">Bag</p>
                                <p class="text-xs text-gray-500">240 Items Available</p>
                            </div>
                        </a>
                        
                        {{-- Book --}}
                        <a href="#" class="flex items-center space-x-4 p-3 rounded-lg hover:bg-gray-50 transition-colors duration-200 border border-gray-100">
                            <img src="{{ asset('images/categories/book.png') }}" class="w-10 h-10 rounded-lg object-cover bg-gray-50 p-1">
                            <div>
                                <p class="font-semibold text-gray-800 text-sm">Book</p>
                                <p class="text-xs text-gray-500">240 Items Available</p>
                            </div>
                        </a>
                        
                    </div>
                </div>
            </div>

            {{-- Brands Mega Menu Container --}}
            <div class="relative">
                <button id="megaMenuToggle1" data-dropdown-toggle="megaMenu1"
                    class="cursor-pointer relative pb-1 text-black-700 hover:text-gray-700 font-medium
                           after:content-[''] after:absolute after:left-0 after:bottom-0 after:w-0
                           hover:after:w-full after:h-[2px] after:bg-blue-600
                           after:transition-all after:duration-300 flex items-center space-x-1">
                    <span>Brands</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>

                {{-- Brands Mega Menu (Dropdown) --}}
                <div id="megaMenu1" 
                    class="absolute top-full left-0 z-20 hidden 
                           bg-white border border-gray-200 shadow-xl rounded-lg mt-2 py-6 px-8 w-[600px]">
                    
                    <h2 class="text-lg font-semibold mb-6 text-gray-800">Popular Brands</h2>
                    
                    <div class="grid grid-cols-3 gap-4">
                        
                        {{-- LG --}}
                        <a href="#" class="flex items-center space-x-4 p-3 rounded-lg hover:bg-gray-50 transition-colors duration-200 border border-gray-100">
                            <img src="{{ asset('images/brands/lg.png') }}" class="w-10 h-10 rounded-lg object-cover bg-gray-50 p-1">
                            <div>
                                <p class="font-semibold text-gray-800 text-sm">LG</p>
                                <p class="text-xs text-gray-500">240 Items Available</p>
                            </div>
                        </a>
                        
                        {{-- Apple --}}
                        <a href="#" class="flex items-center space-x-4 p-3 rounded-lg hover:bg-gray-50 transition-colors duration-200 border border-gray-100">
                            <img src="{{ asset('images/brands/apple.png') }}" class="w-10 h-10 rounded-lg object-cover bg-gray-50 p-1">
                            <div>
                                <p class="font-semibold text-gray-800 text-sm">Apple</p>
                                <p class="text-xs text-gray-500">240 Items Available</p>
                            </div>
                        </a>
                        
                        {{-- Gucci --}}
                        <a href="#" class="flex items-center space-x-4 p-3 rounded-lg hover:bg-gray-50 transition-colors duration-200 border border-gray-100">
                            <img src="{{ asset('images/brands/gucci.png') }}" class="w-10 h-10 rounded-lg object-cover bg-gray-50 p-1">
                            <div>
                                <p class="font-semibold text-gray-800 text-sm">Gucci</p>
                                <p class="text-xs text-gray-500">240 Items Available</p>
                            </div>
                        </a>
                        
                        {{-- Boat --}}
                        <a href="#" class="flex items-center space-x-4 p-3 rounded-lg hover:bg-gray-50 transition-colors duration-200 border border-gray-100">
                            <img src="{{ asset('images/brands/boat.png') }}" class="w-10 h-10 rounded-lg object-cover bg-gray-50 p-1">
                            <div>
                                <p class="font-semibold text-gray-800 text-sm">Boat</p>
                                <p class="text-xs text-gray-500">240 Items Available</p>
                            </div>
                        </a>
                        
                        {{-- Adidas --}}
                        <a href="#" class="flex items-center space-x-4 p-3 rounded-lg hover:bg-gray-50 transition-colors duration-200 border border-gray-100">
                            <img src="{{ asset('images/brands/adidas.png') }}" class="w-10 h-10 rounded-lg object-cover bg-gray-50 p-1">
                            <div>
                                <p class="font-semibold text-gray-800 text-sm">Adidas</p>
                                <p class="text-xs text-gray-500">240 Items Available</p>
                            </div>
                        </a>
                        
                        {{-- Skechers --}}
                        <a href="#" class="flex items-center space-x-4 p-3 rounded-lg hover:bg-gray-50 transition-colors duration-200 border border-gray-100">
                            <img src="{{ asset('images/brands/skechers.png') }}" class="w-10 h-10 rounded-lg object-cover bg-gray-50 p-1">
                            <div>
                                <p class="font-semibold text-gray-800 text-sm">Skechers</p>
                                <p class="text-xs text-gray-500">240 Items Available</p>
                            </div>
                        </a>
                        
                    </div>
                </div>
            </div>

            <a href="#" class="text-black-500 hover:text-gray-700 font-medium">What's New</a>
            <a href="#" class="text-black-500 hover:text-gray-700 font-medium">Shopping</a>
        </div>

        {{-- Search --}}
        <div class="hidden md:flex items-center w-72 relative">
            <input type="text"
                class="w-full border border-gray-300 rounded-full py-2 pl-4 pr-10 focus:ring-0 focus:border-gray-400"
                placeholder="Search Product">
            <svg class="absolute right-3 w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </div>

        {{-- Right Buttons --}}
        <div class="hidden md:flex items-center space-x-6 text-black-500">

            {{-- Account --}}
            <button id="accountToggle" data-dropdown-toggle="accountMenu"
                class="cursor-pointer flex items-center space-x-1 hover:text-gray-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5.121 17.804A10 10 0 1118.88 17.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <span>Account</span>
            </button>

            <div id="accountMenu"
                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                <ul class="py-2 text-sm text-gray-700">
                    <li><a href="{{ route('login') }}" class="block px-4 py-2 hover:bg-gray-100">Login</a></li>
                    <li><a href="{{ route('register') }}" class="block px-4 py-2 hover:bg-gray-100">Register</a></li>
                </ul>
            </div>

            {{-- Cart --}}
            <a href="{{ route('cart') }}" class="flex items-center space-x-1 hover:text-gray-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 7M7 13l-1.293 6.293A1 1 0 007 21h10a1 1 0 001-.707L19 13M10 21a1 1 0 100-2 1 1 0 000 2zm6 0a1 1 0 100-2 1 1 0 000 2z" />
                </svg>
                <span>Cart</span>
            </a>

        </div>

    </div>
</nav>