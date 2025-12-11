<x-guest-layout>
    <div class="w-full max-w-4xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 bg-white rounded-2xl shadow-2xl overflow-hidden">

            <!-- Left: Same beautiful e-commerce image -->
            <div class="hidden md:block relative overflow-hidden">
                <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=800&h=900&fit=crop&crop=center&q=85"
                     alt="Welcome to PrimeHub"
                     class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
            </div>

            <!-- Right: Exact same size & style as login page -->
            <div class="p-6 md:p-10">
                <div class="max-w-xs mx-auto">

                    <h2 class="text-2xl font-bold text-gray-900">
                        Create <span class="text-emerald-600">Account</span>
                    </h2>

                    <p class="mt-1 text-xs text-gray-600">
                        Already shopping with us?
                        <a href="{{ route('login') }}" class="text-emerald-600 font-medium hover:underline">Log in</a>
                    </p>

                    @if($errors->any())
                        <div class="mt-3 p-3 bg-red-50 border border-red-200 rounded-lg text-xs text-red-700">
                            @foreach($errors->all() as $error) {{ $error }} @endforeach
                        </div>
                    @endif

                    <form method="POST" action="{{ route('register') }}" class="mt-6 space-y-4">
                        @csrf

                        <div>
                            <x-input-label for="name" value="Full Name" class="text-xs font-medium" />
                            <x-text-input id="name" name="name" type="text" :value="old('name')"
                                          required autofocus class="mt-1 h-10 text-sm rounded-lg" />
                        </div>

                        <div>
                            <x-input-label for="email" value="Email" class="text-xs font-medium" />
                            <x-text-input id="email" name="email" type="email" :value="old('email')"
                                          required class="mt-1 h-10 text-sm rounded-lg" />
                        </div>

                        <div>
                            <x-input-label for="password" value="Password" class="text-xs font-medium" />
                            <x-text-input id="password" name="password" type="password"
                                          required class="mt-1 h-10 text-sm rounded-lg" />
                        </div>

                        <div>
                            <x-input-label for="password_confirmation" value="Confirm Password" class="text-xs font-medium" />
                            <x-text-input id="password_confirmation" name="password_confirmation" type="password"
                                          required class="mt-1 h-10 text-sm rounded-lg" />
                        </div>

                        <button type="submit"
                            class="w-full h-11 bg-emerald-600 hover:bg-emerald-700 text-white font-medium rounded-lg shadow-md transition hover:shadow-lg">
                            Create Account
                        </button>
                    </form>

                    <div class="mt-6 flex items-center gap-3 text-xs">
                        <div class="flex-1 h-px bg-gray-300"></div>
                        <span class="text-gray-500">or continue with</span>
                        <div class="flex-1 h-px bg-gray-300"></div>
                    </div>

                    <!-- Fixed Google & Facebook icons -->
                    <div class="mt-4 grid grid-cols-2 gap-3">
                        <a href="#" class="flex items-center justify-center gap-2 py-2.5 border rounded-lg hover:bg-gray-50 text-sm font-medium transition">
                            <svg class="w-5 h-5" viewBox="0 0 24 24">
                                <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                                <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                                <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                                <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                            </svg>
                            Google
                        </a>

                        <a href="#" class="flex items-center justify-center gap-2 py-2.5 border rounded-lg hover:bg-gray-50 text-sm font-medium transition">
                            <svg class="w-5 h-5" fill="#1877F2" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                            Facebook
                        </a>
                    </div>

                    <p class="mt-6 text-center text-xs text-gray-500">
                        By signing up you agree to PrimeHub's 
                        <a href="#" class="text-emerald-600 hover:underline">Terms</a> & 
                        <a href="#" class="text-emerald-600 hover:underline">Privacy Policy</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>