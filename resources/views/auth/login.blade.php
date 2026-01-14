<x-frontend-layout>
<x-guest-layout>
    <div class="w-full max-w-4xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 bg-white rounded-2xl shadow-2xl overflow-hidden">

            <!-- Left: Same beautiful e-commerce image -->
            <div class="hidden md:block relative overflow-hidden">
                <img
                    src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=800&h=900&fit=crop&crop=center&q=85"
                    alt="Welcome back"
                    class="w-full h-full object-cover scale-105"
                >
                <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
            </div>

            <!-- Right: Compact Login Form -->
            <div class="p-6 md:p-10">
                <div class="max-w-xs mx-auto">
                    <h2 class="text-2xl font-bold text-gray-900">
                        Welcome Back
                    </h2>
                    <p class="mt-1 text-xs text-gray-600">
                        Don't have an account?
                        <a href="{{ route('register') }}" class="text-emerald-600 font-medium hover:underline">Sign up</a>
                    </p>

                    @if($errors->any())
                        <div class="mt-3 p-2 bg-red-50 rounded-lg text-xs text-red-700">
                            @foreach($errors->all() as $error) {{ $error }} @endforeach
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}" class="mt-6 space-y-4">
                        @csrf

                        <!-- Email -->
                        <div>
                            <x-input-label for="email" value="Email" class="text-xs font-medium" />
                            <x-text-input
                                id="email"
                                name="email"
                                type="email"
                                :value="old('email')"
                                required
                                autofocus
                                autocomplete="username"
                                class="mt-1 h-10 text-sm rounded-lg w-full"
                            />
                        </div>

                        <!-- Password -->
                        {{-- <div>
                            <x-input-label for="password" value="Password" class="text-xs font-medium" />
                            <x-text-input
                                id="password"
                                name="password"
                                type="password"
                                required
                                autocomplete="current-password"
                                class="mt-1 h-10 text-sm rounded-lg w-full"
                            />
                        </div> --}}

    <div class="relative mt-1 py-2">
    <x-input-label for="password" value="Password" class="text-xs font-medium" />

        <x-text-input
            id="password"
            name="password"
            type="password"
            required
            autocomplete="current-password"
            class="h-10 text-sm rounded-lg w-full pr-10 border-gray-300 focus:ring-blue-500 focus:border-blue-500"
        />

        <button
            type="button"
            onclick="togglePassword()"
           class="absolute right-3 top-11 -translate-y-1/2 text-gray-500 hover:text-blue-600">


            <svg id="eye-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
            </svg>

            <svg id="eye-slash-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 hidden">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 0 1-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
            </svg>
        </button>
    </div>
</div>

                        <!-- Remember Me + Forgot Password -->
                        <div class="flex items-center justify-between text-xs">
                            <label class="flex items-center gap-2">
                                <input type="checkbox" name="remember" class="rounded border-gray-300 text-emerald-600 focus:ring-emerald-500">
                                <span class="text-gray-700">Remember me</span>
                            </label>

                            <a href="{{ route('password.request') }}" class="text-emerald-600 hover:underline">
                                Forgot password?
                            </a>
                        </div>

                        <!-- Login Button -->
                        <button type="submit" class="w-full h-11 mt-2 bg-emerald-600 hover:bg-emerald-700 text-white font-medium rounded-lg shadow-md transition hover:shadow-lg">
                            Log In
                        </button>
                    </form>

                    <div class="mt-6 flex items-center gap-3 text-xs">
                        <div class="flex-1 h-px bg-gray-300"></div>
                        <span class="text-gray-500">or continue with</span>
                        <div class="flex-1 h-px bg-gray-300"></div>
                    </div>

                    <div class="mt-4 grid grid-cols-2 gap-3">
                        <a href="{{route('google.redirect')}}" class="flex items-center justify-center gap-2 py-2.5 border rounded-lg hover:bg-gray-50 text-sm font-medium">
                            <svg class="w-5 h-5" viewBox="0 0 24 24"><path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/><path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/><path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/><path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/></svg>
                            Google
                        </a>

                        <a href="{{ route('auth.facebook') }}" class="flex items-center justify-center gap-2 py-2.5 border rounded-lg hover:bg-gray-50 text-sm font-medium">
                            <svg class="w-5 h-5" fill="#1877F2" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                            Facebook
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    function togglePassword() {
        const input = document.getElementById('password');
        const eye = document.getElementById('eye-icon');
        const eyeSlash = document.getElementById('eye-slash-icon');

        if (input.type === 'password') {
            input.type = 'text';
            eye.classList.add('hidden');
            eyeSlash.classList.remove('hidden');
        } else {
            input.type = 'password';
            eye.classList.remove('hidden');
            eyeSlash.classList.add('hidden');
        }
    }
</script>
</x-guest-layout>
</x-frontend-layout>
