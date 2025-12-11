<x-guest-layout>
    <div class="w-full max-w-4xl mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 bg-white/70 backdrop-blur-2xl rounded-3xl shadow-2xl ring-1 ring-black/5 overflow-hidden">

            <!-- Left: Same beautiful e-commerce image as Login/Register/Reset -->
            <div class="hidden lg:block relative overflow-hidden">
                <img 
                    src="https://images.unsplash.com/photo-1607083206968-13611e3d76db?w=1200&h=1400&fit=crop&q=90"
                    alt="PrimeHub – The Future of Shopping"
                    class="w-full h-full object-cover scale-110"
                >
                <div class="absolute inset-0 bg-gradient-to-br from-emerald-600/40 via-transparent to-teal-600/30"></div>
            </div>

            <!-- Right: Exact same form style as the others -->
            <div class="p-8 lg:p-14">
                <div class="max-w-md mx-auto">

                    <!-- Title -->
                    <div class="text-center mb-10">
                        <h1 class="text-3xl font-bold text-gray-900">Forgot Password?</h1>
                        <p class="mt-3 text-sm text-gray-600 leading-relaxed">
                            No problem. Enter your email and we’ll send you a secure reset link.
                        </p>
                    </div>

                    <!-- Success message -->
                    <x-auth-session-status class="mb-6" :status="session('status')" />

                    <!-- Form -->
                    <form method="POST" action="{{ route('password.email') }}" class="space-y-7">
                        @csrf

                        <div class="relative">
                            <x-input-label for="email" value="Email Address" class="text-sm font-medium text-gray-700 mb-2" />
                            <div class="relative">
                                <x-text-input
                                    id="email"
                                    name="email"
                                    type="email"
                                    :value="old('email')"
                                    required autofocus autocomplete="username"
                                    class="w-full h-14 px-5 pl-12 rounded-2xl bg-gray-50/60 border-0 text-gray-900 placeholder-gray-400 focus:ring-4 focus:ring-emerald-300 focus:bg-white transition-all text-base"
                                    placeholder="you@primehub.com"
                                />
                                <svg class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <x-input-error :messages="$errors->get('email')" class="mt-2 text-xs" />
                        </div>

                        <button type="submit"
                            class="w-full h-14 bg-gradient-to-r from-emerald-600 to-teal-600 hover:from-emerald-700 hover:to-teal-700 text-white font-bold text-lg rounded-2xl shadow-xl transform transition-all hover:scale-[1.02] active:scale-[0.98] focus:outline-none focus:ring-4 focus:ring-emerald-300">
                            Email Reset Link
                        </button>
                    </form>

                    <!-- Back to login -->
                    <div class="mt-8 text-center">
                        <a href="{{ route('login') }}" class="inline-flex items-center gap-2 text-sm font-medium text-gray-600 hover:text-emerald-600 transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                            </svg>
                            Back to Login
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-guest-layout>