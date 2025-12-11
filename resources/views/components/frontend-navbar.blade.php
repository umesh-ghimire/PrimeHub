<nav class="bg-white shadow-sm border-b">
    <div class="max-w-screen-xl mx-auto flex items-center justify-between py-4 px-6">

        {{-- Logo --}}
        <a href="{{ url('/') }}" class="flex items-center space-x-2">
            {{-- <img src="{{ asset('images/logo.png') }}" class="h-10" alt="logo"> --}}
            <span class="text-2xl font-bold text-green-700">PrimeHub</span>
        </a>

        {{-- Center Menu --}}
        <div class="hidden md:flex items-center space-x-8">

            {{-- Category Mega Menu Trigger --}}
            <button id="megaMenuToggle" data-dropdown-toggle="megaMenu"
                class=" cursor-pointer relative pb-1 text-black-700 hover:text-gray-700 font-medium
               after:content-[''] after:absolute after:left-0 after:bottom-0 after:w-0
               hover:after:w-full after:h-[2px] after:bg-blue-600
               after:transition-all after:duration-300 flex items-center space-x-1">
                <span>Category</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
             <button id="megaMenuToggle1" data-dropdown-toggle="megaMenu1"
class="cursor-pointer relative pb-1 text-black-700 hover:text-gray-700 font-medium
               after:content-[''] after:absolute after:left-0 after:bottom-0 after:w-0
               hover:after:w-full after:h-[2px] after:bg-blue-600
               after:transition-all after:duration-300 flex items-center space-x-1">               <span>Brands</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>

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
                class=" cursor-pointer flex items-center space-x-1 hover:text-gray-700">
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
            <a href="#" class="flex items-center space-x-1 hover:text-gray-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 7M7 13l-1.293 6.293A1 1 0 007 21h10a1 1 0 001-.707L19 13M10 21a1 1 0 100-2 1 1 0 000 2zm6 0a1 1 0 100-2 1 1 0 000 2z" />
                </svg>
                <span>Cart</span>
            </a>

        </div>

    </div>

    {{-- Mega Menu --}}
    <div id="megaMenu" class="hidden z-20 bg-white border-b shadow-md py-6 px-10">

        <h2 class="text-lg font-semibold mb-4">Popular Categories</h2>

        <div class="grid grid-cols-4 gap-6">

            {{-- Category Card --}}
            <a href="#" class="flex items-center space-x-4 bg-gray-50 p-4 rounded-lg hover:bg-gray-100">
                <img src="{{ asset('categories/furniture.png') }}" class="w-12 h-12">
                <div>
                    <p class="font-semibold">Furniture</p>
                    <p class="text-sm text-gray-500">240 Items Available</p>
                </div>
            </a>

            <a href="#" class="flex items-center space-x-4 bg-gray-50 p-4 rounded-lg hover:bg-gray-100">
                <img src="{{ asset('categories/handbag.png') }}" class="w-12 h-12">
                <div>
                    <p class="font-semibold">Hand Bag</p>
                    <p class="text-sm text-gray-500">240 Items Available</p>
                </div>
            </a>

            <a href="#" class="flex items-center space-x-4 bg-gray-50 p-4 rounded-lg hover:bg-gray-100">
                <img src="{{ asset('categories/shoe.png') }}" class="w-12 h-12">
                <div>
                    <p class="font-semibold">Shoe</p>
                    <p class="text-sm text-gray-500">240 Items Available</p>
                </div>
            </a>

            <a href="#" class="flex items-center space-x-4 bg-gray-50 p-4 rounded-lg hover:bg-gray-100">
                <img src="{{ asset('categories/headphone.png') }}" class="w-12 h-12">
                <div>
                    <p class="font-semibold">Headphone</p>
                    <p class="text-sm text-gray-500">240 Items Available</p>
                </div>
            </a>

        </div>
    </div>
    {{-- Mega Menu1 --}}
    <div id="megaMenu1" class="hidden z-20 bg-white border-b shadow-md py-6 px-10">

        <h2 class="text-lg font-semibold mb-4">Popular Brands</h2>

        <div class="grid grid-cols-4 gap-6">

            {{-- Brand Card --}}
            <a href="#" class="flex items-center space-x-4 bg-gray-50 p-4 rounded-lg hover:bg-gray-100">
                <img src="{{ asset('brands/furniture.png') }}" class="w-12 h-12">
                <div>
                    <p class="font-semibold">Nike</p>
                    <p class="text-sm text-gray-500">240 Items Available</p>
                </div>
            </a>

            <a href="#" class="flex items-center space-x-4 bg-gray-50 p-4 rounded-lg hover:bg-gray-100">
                <img src="{{ asset('brands/handbag.png') }}" class="w-12 h-12">
                <div>
                    <p class="font-semibold">SS</p>
                    <p class="text-sm text-gray-500">240 Items Available</p>
                </div>
            </a>

            <a href="#" class="flex items-center space-x-4 bg-gray-50 p-4 rounded-lg hover:bg-gray-100">
                <img src="{{ asset('brands/shoe.png') }}" class="w-12 h-12">
                <div>
                    <p class="font-semibold">Goldstar</p>
                    <p class="text-sm text-gray-500">240 Items Available</p>
                </div>
            </a>

            <a href="#" class="flex items-center space-x-4 bg-gray-50 p-4 rounded-lg hover:bg-gray-100">
                <img src="{{ asset('categories/headphone.png') }}" class="w-12 h-12">
                <div>
                    <p class="font-semibold">Boat</p>
                    <p class="text-sm text-gray-500">240 Items Available</p>
                </div>
            </a>

        </div>
    </div>

    {{-- Flowbite --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script> --}}
</nav>
