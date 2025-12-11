<x-guest-layout>
    <div class="w-full max-w-4xl mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 bg-white/70 backdrop-blur-2xl rounded-3xl shadow-2xl ring-1 ring-black/5 overflow-hidden">

            <!-- Left: Hero image -->
            <div class="hidden lg:block relative overflow-hidden">
                <img 
                    src="https://images.unsplash.com/photo-1607083206968-13611e3d76db?w=1200&h=1400&fit=crop&q=90"
                    alt="PrimeHub Secure Access"
                    class="w-full h-full object-cover scale-110"
                >
                <div class="absolute inset-0 bg-gradient-to-br from-emerald-600/40 via-transparent to-teal-600/30"></div>
            </div>

            <!-- Right: Confirm Password form -->
            <div class="p-8 lg:p-14">
                <div class="max-w-md mx-auto">

                    <!-- Title & Icon -->
                    <div class="text-center mb-10">
                        <div class="inline-flex items-center justify-center w-20 h-20 bg-emerald-100 rounded-3xl mb-6">
                            <svg class="w-10 h-10 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <h1 class="text-3xl font-bold text-gray-900">Confirm Password</h1>
                        <p class="mt-3 text-sm text-gray-600 leading-relaxed">
                            This is a secure area of PrimeHub. Please confirm your password to continue.
                        </p>
                    </div>

                    <!-- Form -->
                    <form method="POST" action="{{ route('password.confirm') }}" class="space-y-7">
                        @csrf

                        <div class="relative">
                            <x-input-label for="password" value="Current Password" class="text-sm font-medium text-gray-700 mb-2" />
                            <div class="relative">
                                <x-text-input
                                    id="password"
                                    name="password"
                                    type="password"
                                    required 
                                    autofocus 
                                    autocomplete="current-password"
                                    class="w-full h-14 px-5 pl-12 rounded-2xl bg-gray-50/60 border-0 text-gray-900 placeholder-gray-400 focus:ring-4 focus:ring-emerald-300 focus:bg-white transition-all text-base"
                                    placeholder="Enter your password"
                                />
                                <svg class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0-2.67 5.33-8 5.33-8S17.33 11 12 11zm0 0c-2.67 0-8 5.33-8 5.33S9.33 22 12 22m0-11v11"/>
                                </svg>
                            </div>
                            <x-input-error :messages="$errors->get('password')" class="mt-2 text-xs text-red-600" />
                        </div>

                        <button type="submit"
                            class="w-full h-14 bg-gradient-to-r from-emerald-600 to-teal-600 hover:from-emerald-700 hover:to-teal-700 text-white font-bold text-lg rounded-2xl shadow-xl transform transition-all hover:scale-[1.02] active:scale-[0.98] focus:outline-none focus:ring-4 focus:ring-emerald-300">
                            Confirm & Continue
                        </button>
                    </form>

                    <!-- Back to Dashboard -->
                    <div class="mt-8 text-center">
                        <a href="{{ route('dashboard') }}" class="inline-flex items-center gap-2 text-sm font-medium text-gray-600 hover:text-emerald-600 transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                            </svg>
                            Back to Dashboard
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-guest-layout>