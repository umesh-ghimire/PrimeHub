<footer class="w-full bg-white mt-10 border-t pt-10">
    <div class="max-w-7xl mx-auto px-6">

        <div class="grid grid-cols-1 md:grid-cols-4 lg:grid-cols-5 gap-10">

            {{-- Logo + Description --}}
            <div class="col-span-1 lg:col-span-2">
                <div class="flex items-center space-x-2">
                    {{-- <img src="{{ asset('images/logo.png') }}" class="h-12" alt="Logo"> --}}
                    <h1 class="text-2xl font-bold text-green-700">PrimeHub</h1>
                </div>

                <p class="text-gray-600 mt-4">
                    Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.
                    Velit officia consequat duis enim velit mollit.
                </p>

                {{-- Accepted Payments --}}
                {{-- <h3 class="mt-6 mb-3 font-semibold text-gray-800">Accepted Payments</h3> --}}
                {{-- <div class="flex flex-wrap gap-3">
                    <img src="{{ asset('payments/stripe.png') }}" class="h-8">
                    <img src="{{ asset('payments/visa.png') }}" class="h-8">
                    <img src="{{ asset('payments/mastercard.png') }}" class="h-8">
                    <img src="{{ asset('payments/amazon.png') }}" class="h-8">
                    <img src="{{ asset('payments/klarna.png') }}" class="h-8">
                    <img src="{{ asset('payments/paypal.png') }}" class="h-8">
                    <img src="{{ asset('payments/applepay.png') }}" class="h-8">
                    <img src="{{ asset('payments/googlepay.png') }}" class="h-8">
                </div> --}}
            </div>

            {{-- Department --}}
            <div>
                <h3 class="font-semibold text-gray-800 mb-3">Department</h3>
                <ul class="space-y-2 text-gray-600">
                    <li class="cursor-pointer hover:text-yellow-500 hover:translate-x-1 transition-all duration-200">Fashion</li>
                    <li class="cursor-pointer hover:text-yellow-500 hover:translate-x-1 transition-all duration-200">Education Product</li>
                    <li class="cursor-pointer hover:text-yellow-500 hover:translate-x-1 transition-all duration-200">Frozen Food</li>
                    <li class="cursor-pointer hover:text-yellow-500 hover:translate-x-1 transition-all duration-200">Beverages</li>
                    <li class="cursor-pointer hover:text-yellow-500 hover:translate-x-1 transition-all duration-200">Organic Grocery</li>
                    <li class="cursor-pointer hover:text-yellow-500 hover:translate-x-1 transition-all duration-200">Beauty Products</li>
                    <li class="cursor-pointer hover:text-yellow-500 hover:translate-x-1 transition-all duration-200">Books</li>
                    <li class="cursor-pointer hover:text-yellow-500 hover:translate-x-1 transition-all duration-200">Electronics & Gadget</li>
                    <li class="cursor-pointer hover:text-yellow-500 hover:translate-x-1 transition-all duration-200">Travel Accessories</li>
                    <li class="cursor-pointer hover:text-yellow-500 hover:translate-x-1 transition-all duration-200">Fitness</li>
                    <li class="cursor-pointer hover:text-yellow-500 hover:translate-x-1 transition-all duration-200">Sneakers</li>
                    <li class="cursor-pointer hover:text-yellow-500 hover:translate-x-1 transition-all duration-200">Toys</li>
                    <li class="cursor-pointer hover:text-yellow-500 hover:translate-x-1 transition-all duration-200">Furniture</li>
                </ul>
            </div>

            {{-- About Us --}}
            <div>
                <h3 class="font-semibold text-gray-800 mb-3">About Us</h3>
                <ul class="text-gray-600 space-y-2">
                    <li class="cursor-pointer hover:text-yellow-500 hover:translate-x-1 transition-all duration-200">About PrimeHub</li>
                    <li class="cursor-pointer hover:text-yellow-500 hover:translate-x-1 transition-all duration-200">Careers</li>
                    <li class="cursor-pointer hover:text-yellow-500 hover:translate-x-1 transition-all duration-200">News & Blog</li>
                    <li class="cursor-pointer hover:text-yellow-500 hover:translate-x-1 transition-all duration-200">Help</li>
                    <li class="cursor-pointer hover:text-yellow-500 hover:translate-x-1 transition-all duration-200">Press Center</li>
                    <li class="cursor-pointer hover:text-yellow-500 hover:translate-x-1 transition-all duration-200">Shop By Location</li>
                    <li class="cursor-pointer hover:text-yellow-500 hover:translate-x-1 transition-all duration-200">Shopcart Brands</li>
                    <li class="cursor-pointer hover:text-yellow-500 hover:translate-x-1 transition-all duration-200">Affiliate & Partners</li>
                    <li class="cursor-pointer hover:text-yellow-500 hover:translate-x-1 transition-all duration-200">Ideas & Guides</li>
                </ul>
            </div>

            {{-- Services --}}
            <div>
                <h3 class="font-semibold text-gray-800 mb-3">Services</h3>
                <ul class="text-gray-600 space-y-2">
                    <li class="cursor-pointer hover:text-yellow-500 hover:translate-x-1 transition-all duration-200">Gift Card</li>
                    <li class="cursor-pointer hover:text-yellow-500 hover:translate-x-1 transition-all duration-200">Web App</li>
                    <li class="cursor-pointer hover:text-yellow-500 hover:translate-x-1 transition-all duration-200">Shipping & Delivery</li>
                    <li class="cursor-pointer hover:text-yellow-500 hover:translate-x-1 transition-all duration-200">Account Signup</li>
                </ul>
            </div>

        

        </div>

        {{-- Bottom Bar --}}
        <div class="border-t mt-10 pt-6 flex flex-col md:flex-row justify-between items-center text-gray-700">

            <div class="flex items-center gap-10 text-pink-700 font-medium">
                <div class="flex items-center space-x-2 cursor-pointer">
                    <span>💼</span><span>Become Seller</span>
                </div>

                <div class="flex items-center space-x-2 cursor-pointer">
                    <span>🎁</span><span>Gift Cards</span>
                </div>

                <div class="flex items-center space-x-2 cursor-pointer">
                    <span>❓</span><span>Help Center</span>
                </div>
            </div>

            <div class="flex items-center gap-6 mt-4 md:mt-0 text-gray-600">
                <a href="#">Terms of Service</a>
                <a href="#">Privacy & Policy</a>
            </div>

            <p class="text-gray-600 mt-4 md:mt-0">
                All Rights Reserved by primehub <a class="text-blue-600" href="#">PrimeHub Web</a> | 2025

        </div>
    </div>
</footer>
