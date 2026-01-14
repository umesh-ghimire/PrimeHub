
<x-guest-layout>
    <div class="w-full max-w-4xl mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 bg-white/70 backdrop-blur-2xl rounded-3xl shadow-2xl ring-1 ring-black/5 overflow-hidden">

            <div class="hidden lg:block relative overflow-hidden">
                <img
                    src="https://images.unsplash.com/photo-1607083206968-13611e3d76db?w=1200&h=1400&fit=crop&q=90"
                    alt="PrimeHub – The Future of Shopping"
                    class="w-full h-full object-cover scale-110"
                >
                <div class="absolute inset-0 bg-gradient-to-br from-emerald-600/40 via-transparent to-teal-600/30"></div>
            </div>

            <div class="p-8 lg:p-14">
                <div class="max-w-md mx-auto">

                    <div class="text-center mb-10">
                        <h1 class="text-3xl font-bold text-gray-900">Reset Password</h1>
                        <p class="mt-3 text-sm text-gray-600 leading-relaxed">
                            Set a new password for your account to get back into PrimeHub.
                        </p>
                    </div>

                    @if ($errors->any())
                        <div class="mb-4 text-xs text-red-600 bg-red-50 p-3 rounded-lg">
                            <ul class="list-disc list-inside space-y-1">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.store') }}" class="space-y-7">
                        @csrf

                        <input type="hidden" name="token" value="{{ $request->route('token') }}">

                        <div class="relative">
                            <x-input-label for="email" value="Email Address" class="text-sm font-medium text-gray-700 mb-2" />
                            <div class="relative">
                                <x-text-input
                                    id="email"
                                    name="email"
                                    type="email"
                                    :value="old('email', $request->email)"
                                    required
                                    autocomplete="username"
                                    class="w-full h-14 px-5 pl-12 rounded-2xl bg-gray-50/60 border-0 text-gray-900 placeholder-gray-400 focus:ring-4 focus:ring-emerald-300 focus:bg-white transition-all text-base"
                                    placeholder="you@primehub.com"
                                />
                                <svg class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <x-input-error :messages="$errors->get('email')" class="mt-2 text-xs" />
                        </div>

                        <div class="relative">
                            <x-input-label for="password" value="New Password" class="text-sm font-medium text-gray-700 mb-2" />
                            <div class="relative">
                                <x-text-input
                                    id="password"
                                    name="password"
                                    type="password"
                                    required
                                    autocomplete="new-password"
                                    class="w-full h-14 px-5 pr-12 rounded-2xl bg-gray-50/60 border-0 text-gray-900 placeholder-gray-400 focus:ring-4 focus:ring-emerald-300 focus:bg-white transition-all text-base"
                                    placeholder="Enter a strong password"
                                />
                                <button type="button" onclick="toggleVisibility('password', 'eye-pass', 'slash-pass')" class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 hover:text-emerald-500 transition-colors">
                                    <svg id="eye-pass" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                    </svg>
                                    <svg id="slash-pass" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 hidden">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 0 1-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
                                    </svg>
                                </button>
                            </div>
                            <x-input-error :messages="$errors->get('password')" class="mt-2 text-xs" />
                        </div>

                        <div class="relative">
                            <x-input-label for="password_confirmation" value="Confirm Password" class="text-sm font-medium text-gray-700 mb-2" />
                            <div class="relative">
                                <x-text-input
                                    id="password_confirmation"
                                    name="password_confirmation"
                                    type="password"
                                    required
                                    autocomplete="new-password"
                                    class="w-full h-14 px-5 pr-12 rounded-2xl bg-gray-50/60 border-0 text-gray-900 placeholder-gray-400 focus:ring-4 focus:ring-emerald-300 focus:bg-white transition-all text-base"
                                    placeholder="Re-enter your new password"
                                />
                                <button type="button" onclick="toggleVisibility('password_confirmation', 'eye-conf', 'slash-conf')" class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 hover:text-emerald-500 transition-colors">
                                    <svg id="eye-conf" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                    </svg>
                                    <svg id="slash-conf" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 hidden">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 0 1-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
                                    </svg>
                                </button>
                            </div>
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-xs" />
                        </div>

                        <button type="submit"
                            class="w-full h-14 bg-gradient-to-r from-emerald-600 to-teal-600 hover:from-emerald-700 hover:to-teal-700 text-white font-bold text-lg rounded-2xl shadow-xl transform transition-all hover:scale-[1.02] active:scale-[0.98] focus:outline-none focus:ring-4 focus:ring-emerald-300">
                            Reset Password
                        </button>
                    </form>

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

    <script>
        function toggleVisibility(inputId, eyeId, slashId) {
            const input = document.getElementById(inputId);
            const eye = document.getElementById(eyeId);
            const slash = document.getElementById(slashId);

            if (input.type === 'password') {
                input.type = 'text';
                eye.classList.add('hidden');
                slash.classList.remove('hidden');
            } else {
                input.type = 'password';
                eye.classList.remove('hidden');
                slash.classList.add('hidden');
            }
        }
    </script>
</x-guest-layout>

