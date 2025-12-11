<nav class="bg-white border-b border-gray-100 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">

            <!-- Logo -->
            <div class="flex items-center space-x-4">
                <a href="{{ route('dashboard') }}" class="flex items-center space-x-3">
                    <x-application-logo class="w-9 h-9 text-emerald-600" />
                    <span class="text-2xl font-bold text-gray-900">PrimeHub</span>
                </a>
            </div>

            <!-- Dropdown (Pure CSS) -->
            <div class="relative group">
                <button class="flex items-center space-x-3 px-5 py-2 rounded-2xl hover:bg-gray-100 transition">
                    <span class="text-sm font-semibold text-gray-900">
                        {{ Auth::user()->name }}
                    </span>
                    <!-- Down Arrow -->
                    <svg class="w-5 h-5 text-gray-600 transition-transform duration-200 group-hover:rotate-180" 
                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>

                <!-- Dropdown Menu -->
                <div class="absolute right-0 mt-3 w-56 bg-white rounded-2xl shadow-xl ring-1 ring-black/10 overflow-hidden opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 origin-top-right scale-95 group-hover:scale-100 z-50">
                    <a href="{{ route('profile.edit') }}"
                       class="flex items-center gap-4 px-5 py-4 text-gray-700 hover:bg-emerald-50 transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                        Edit Profile
                    </a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                                class="w-full flex items-center gap-4 px-5 py-4 text-red-600 hover:bg-red-50 transition">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                            </svg>
                            Log Out
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</nav>