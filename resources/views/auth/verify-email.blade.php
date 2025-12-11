<x-guest-layout>
    <div class="w-full max-w-4xl mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 bg-white/70 backdrop-blur-2xl rounded-3xl shadow-2xl ring-1 ring-black/5 overflow-hidden">

            <!-- Left: Same beautiful e-commerce hero -->
            <div class="hidden lg:block relative overflow-hidden">
                <img 
                    src="https://images.unsplash.com/photo-1607083206968-13611e3d76db?w=1200&h=1400&fit=crop&q=90"
                    alt="Welcome to PrimeHub"
                    class="w-full h-full object-cover scale-110"
                >
                <div class="absolute inset-0 bg-gradient-to-br from-emerald-600/40 via-transparent to-teal-600/30"></div>
            </div>

            <!-- Right: Modern verification card -->
            <div class="p-8 lg:p-14">
                <div class="max-w-md mx-auto">

                    <!-- Icon + Title -->
                    <div class="text-center mb-10">
                        <div class="inline-flex items-center justify-center w-20 h-20 bg-emerald-100 rounded-3xl mb-6">
                            <svg class="w-10 h-10 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <h1 class="text-3xl font-bold text-gray-900">Verify Your Email</h1>
                    </div>

                    <!-- Main message -->
                    <div class="text-center">
                        <p class="text-gray-700 leading-relaxed">
                            Thanks for joining <span class="font-bold text-emerald-600">PrimeHub</span>!
                        </p>
                        <p class="mt-3 text-gray-600">
                            We’ve sent a verification link to:
                        </p>
                        <p class="mt-2 text-lg font-semibold text-gray-900">
                            {{ Auth::user()->email }}
                        </p>
                        <p class="mt-4 text-sm text-gray-600">
                            Please check your inbox (and spam folder) and click the link to activate your account.
                        </p>
                    </div>

                    <!-- Success message -->
                    @if (session('status') == 'verification-link-sent')
                        <div class="mt-8 p-5 bg-emerald-50 border border-emerald-200 rounded-2xl text-center">
                            <p class="text-emerald-800 font-semibold">
                                A new verification link has been sent!
                            </p>
                        </div>
                    @endif

                    <!-- Action Buttons -->
                    <div class="mt-10 space-y-4">
                        <form method="POST" action="{{ route('verification.send') }}">
                            @csrf
                            <button type="submit"
                                class="w-full h-14 bg-gradient-to-r from-emerald-600 to-teal-600 hover:from-emerald-700 hover:to-teal-700 text-white font-bold text-lg rounded-2xl shadow-xl transform transition-all hover:scale-[1.02] active:scale-[0.98]">
                                Resend Verification Email
                            </button>
                        </form>

                        <div class="text-center">
                            <form method="POST" action="{{ route('logout') }}" class="inline">
                                @csrf
                                <button type="submit"
                                    class="text-sm font-medium text-gray-600 hover:text-emerald-600 transition">
                                    Log Out
                                </button>
                            </form>
                        </div>
                    </div>

                </div