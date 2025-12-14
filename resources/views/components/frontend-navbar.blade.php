<nav class="bg-white shadow-sm border-b relative">
    <div class="max-w-screen-xl mx-auto flex items-center justify-between py-4 px-6">

        {{-- Logo --}}
        <a href="{{ url('/') }}" class="flex items-center space-x-2">
            <span class="text-2xl font-bold text-green-700">PrimeHub</span>
        </a>

        {{-- Center Menu --}}
        <div class="hidden md:flex items-center space-x-8">

            {{-- Category Mega Menu --}}
            <div class="relative">
                <button id="megaMenuToggle" data-dropdown-toggle="megaMenu"
                    class="cursor-pointer relative pb-1 font-medium text-black-700 hover:text-gray-700
                    after:content-[''] after:absolute after:left-0 after:bottom-0 after:w-0
                    hover:after:w-full after:h-[2px] after:bg-blue-600 after:transition-all flex items-center space-x-1">
                    <span>Category</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>

                <div id="megaMenu"
                    class="absolute top-full left-0 z-20 hidden bg-white border shadow-xl rounded-lg mt-2 py-6 px-8 w-[600px]">
                    <h2 class="text-lg font-semibold mb-6">Popular Categories</h2>

                    <div class="grid grid-cols-3 gap-4">
                        @php
                            $categories = [
                                ['name'=>'Furniture','img'=>'furniture.png'],
                                ['name'=>'Shoe','img'=>'shoe.png'],
                                ['name'=>'Laptop','img'=>'laptop.png'],
                                ['name'=>'Headphone','img'=>'headphone.png'],
                                ['name'=>'Bag','img'=>'handbag.png'],
                                ['name'=>'Book','img'=>'book.png'],
                            ];
                        @endphp

                        @foreach($categories as $cat)
                        <a href="#" class="flex items-center space-x-4 p-3 rounded-lg hover:bg-gray-50 border">
                            <img src="{{ asset('images/categories/'.$cat['img']) }}"
                                 class="w-10 h-10 rounded bg-gray-50 p-1">
                            <div>
                                <p class="font-semibold text-sm">{{ $cat['name'] }}</p>
                                <p class="text-xs text-gray-500">240 Items Available</p>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Brands Mega Menu --}}
            <div class="relative">
                <button id="megaMenuToggle1" data-dropdown-toggle="megaMenu1"
                    class="cursor-pointer relative pb-1 font-medium text-black-700 hover:text-gray-700
                    after:content-[''] after:absolute after:left-0 after:bottom-0 after:w-0
                    hover:after:w-full after:h-[2px] after:bg-blue-600 after:transition-all flex items-center space-x-1">
                    <span>Brands</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>

                <div id="megaMenu1"
                    class="absolute top-full left-0 z-20 hidden bg-white border shadow-xl rounded-lg mt-2 py-6 px-8 w-[600px]">
                    <h2 class="text-lg font-semibold mb-6">Popular Brands</h2>

                    <div class="grid grid-cols-3 gap-4">
                        @php
                            $brands = ['lg','apple','gucci','boat','adidas','skechers'];
                        @endphp

                        @foreach($brands as $brand)
                        <a href="#" class="flex items-center space-x-4 p-3 rounded-lg hover:bg-gray-50 border">
                            <img src="{{ asset('images/brands/'.$brand.'.png') }}"
                                 class="w-10 h-10 rounded bg-gray-50 p-1">
                            <div>
                                <p class="font-semibold text-sm">{{ ucfirst($brand) }}</p>
                                <p class="text-xs text-gray-500">240 Items Available</p>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>

            <a href="#" class="font-medium hover:text-gray-700">What's New</a>
            <a href="#" class="font-medium hover:text-gray-700">Shopping</a>
        </div>

        {{-- Search --}}
        <div class="hidden md:flex items-center w-72 relative">
            <input type="text"
                class="w-full border rounded-full py-2 pl-4 pr-10 focus:ring-0"
                placeholder="Search Product">
            <svg class="absolute right-3 w-5 h-5 text-gray-500" fill="none" stroke="currentColor"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
            </svg>
        </div>

        {{-- Right Section --}}
        <div class="hidden md:flex items-center space-x-6">

            {{-- Cart --}}
            <a href="{{ route('cart') }}" class="flex items-center space-x-1 hover:text-gray-700 font-medium">
                <i class="fa-solid fa-cart-shopping"></i>
                <span>Cart</span>
            </a>

            {{-- Auth --}}
            @guest
                <a href="{{ route('register') }}" class="font-medium hover:text-gray-700">SignUp</a>
                <a href="{{ route('login') }}" class="font-medium hover:text-gray-700">Login</a>
            @endguest

            @auth
            <div class="relative">
                <button id="accountToggle" data-dropdown-toggle="accountMenu"
                    class="flex items-center space-x-2 font-medium hover:text-gray-700">
                    <i class="fa-solid fa-user"></i>
                    <span>{{ Auth::user()->name }}</span>
                </button>

                <div id="accountMenu"
                    class="hidden absolute right-0 mt-3 w-52 bg-white rounded-lg shadow border z-50">
                    <ul class="py-2 text-sm">
                        <li><a href="{{ route('profile.edit') }}" class="block px-4 py-2 hover:bg-gray-100">Manage Account</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Wishlist</a></li>
                        <li><a href="{{ route('cart') }}" class="block px-4 py-2 hover:bg-gray-100">Cart</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">My Orders</a></li>
                        <li><hr></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="w-full text-left px-4 py-2 text-red-600 hover:bg-red-50">
                                    Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
            @endauth
        </div>
    </div>
</nav>
