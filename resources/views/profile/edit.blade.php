<x-editpage>
    <div class="w-full px-4 py-12 sm:px-6 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <div class="relative overflow-hidden rounded-3xl bg-gradient-to-br from-white/90 via-white/70 to-white/90 backdrop-blur-2xl shadow-2xl ring-1 ring-white/50">

                <!-- Subtle Floating Blobs for Depth -->
                <div class="absolute -top-32 -left-32 w-96 h-96 bg-emerald-500/25 rounded-full blur-3xl"></div>
                <div class="absolute -bottom-32 -right-32 w-96 h-96 bg-teal-500/25 rounded-full blur-3xl"></div>

                <!-- Vibrant Top Gradient Accent -->
                <div class="h-3 bg-gradient-to-r from-emerald-500 via-teal-500 to-cyan-600"></div>

                <div class="relative p-8 lg:p-12">
                    <div class="max-w-4xl mx-auto">

                        <!-- Main Page Header -->
                        <div class="text-center mb-14">
                            <h1 class="text-4xl font-extrabold text-gray-900 tracking-tight">Account Settings</h1>
                            <p class="mt-3 text-lg text-gray-600">Manage your profile, password, and account securely</p>
                        </div>

                        <!-- ===================== PROFILE INFORMATION ===================== -->
                        <div class="mb-16">
                            <div class="text-center mb-10">
                                <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-emerald-500 to-teal-600 rounded-3xl shadow-xl ring-4 ring-emerald-300/30">
                                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                    </svg>
                                </div>
                                <h2 class="mt-5 text-2xl font-bold text-gray-900">Profile Information</h2>
                                <p class="mt-1 text-base text-gray-600">Keep your name and email up to date</p>
                            </div>

                            <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                                @csrf
                            </form>

                            <form method="post" action="{{ route('profile.update') }}" class="space-y-8">
                                @csrf
                                @method('patch')

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                    <div class="group">
                                        <x-input-label for="name" value="Full Name" class="text-base font-semibold text-gray-800" />
                                        <x-text-input
                                            id="name"
                                            name="name"
                                            type="text"
                                            class="mt-2 block w-full h-14 px-6 rounded-2xl bg-white/70 border border-white/50 text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-4 focus:ring-emerald-400/50 focus:bg-white focus:border-emerald-400 focus:shadow-xl transition-all"
                                            :value="old('name', $user->name)"
                                            required
                                            autofocus
                                            autocomplete="name"
                                            placeholder="John Doe"
                                        />
                                        <x-input-error :messages="$errors->get('name')" class="mt-2 text-sm text-red-500" />
                                    </div>

                                    <div class="group">
                                        <x-input-label for="email" value="Email Address" class="text-base font-semibold text-gray-800" />
                                        <x-text-input
                                            id="email"
                                            name="email"
                                            type="email"
                                            class="mt-2 block w-full h-14 px-6 rounded-2xl bg-white/70 border border-white/50 text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-4 focus:ring-emerald-400/50 focus:bg-white focus:border-emerald-400 focus:shadow-xl transition-all"
                                            :value="old('email', $user->email)"
                                            required
                                            autocomplete="username"
                                            placeholder="john@example.com"
                                        />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm text-red-500" />
                                    </div>
                                </div>

                                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                                    <div class="p-5 bg-amber-50/80 border border-amber-200/50 rounded-2xl text-center">
                                        <p class="text-base text-amber-900">
                                            Your email address is unverified.
                                            <button form="send-verification" type="submit" class="font-bold text-emerald-600 hover:underline ml-1">
                                                Resend verification email
                                            </button>
                                        </p>
                                        @if (session('status') === 'verification-link-sent')
                                            <p class="mt-3 text-base font-bold text-emerald-600">Verification link sent!</p>
                                        @endif
                                    </div>
                                @endif

                                <div class="flex justify-end mt-6">
                                    <button type="submit"
                                        class="px-10 py-4 bg-gradient-to-r from-emerald-500 via-teal-500 to-cyan-600 hover:from-emerald-600 hover:via-teal-600 hover:to-cyan-700 text-white font-bold text-lg rounded-2xl shadow-xl transition-all hover:scale-105">
                                        Save Profile
                                    </button>
                                </div>

                                @if (session('status') === 'profile-updated')
                                    <p x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 4000)" x-transition
                                       class="text-center text-xl font-bold text-emerald-600 animate-pulse mt-8">
                                        Profile updated successfully!
                                    </p>
                                @endif
                            </form>
                        </div>

                        <hr class="my-16 border-t border-white/30">

<!-- ===================== UPDATE PASSWORD ===================== -->
<div class="mb-16">
    <div class="text-center mb-10">
        <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-emerald-500 to-teal-600 rounded-3xl shadow-xl ring-4 ring-emerald-300/30">
            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
            </svg>
        </div>
        <h2 class="mt-5 text-2xl font-bold text-gray-900">Update Password</h2>
        <p class="mt-1 text-base text-gray-600">Use a strong, unique password for better security</p>
    </div>

    <form method="post" action="{{ route('password.update') }}" class="space-y-8">
        @csrf
        @method('put')

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Show Current Password only for manual users -->
            @if(is_null(auth()->user()->provider))
                <div class="group">
                    <x-input-label for="current_password" value="Current Password" class="text-base font-semibold text-gray-800" />
                    <x-text-input
                        id="current_password"
                        name="current_password"
                        type="password"
                        class="mt-2 block w-full h-14 px-6 rounded-2xl bg-white/70 border border-white/50 text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-4 focus:ring-emerald-400/50 focus:bg-white focus:border-emerald-400 focus:shadow-xl transition-all"
                        autocomplete="current-password"
                        placeholder="••••••••"
                    />
                    <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2 text-sm text-red-500" />
                </div>
            @endif

            <!-- New Password -->
            <div class="group">
                <x-input-label for="password" value="New Password" class="text-base font-semibold text-gray-800" />
                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-2 block w-full h-14 px-6 rounded-2xl bg-white/70 border border-white/50 text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-4 focus:ring-emerald-400/50 focus:bg-white focus:border-emerald-400 focus:shadow-xl transition-all"
                    autocomplete="new-password"
                    placeholder="••••••••"
                />
                <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2 text-sm text-red-500" />
            </div>

            <!-- Confirm New Password -->
            <div class="group">
                <x-input-label for="password_confirmation" value="Confirm New Password" class="text-base font-semibold text-gray-800" />
                <x-text-input
                    id="password_confirmation"
                    name="password_confirmation"
                    type="password"
                    class="mt-2 block w-full h-14 px-6 rounded-2xl bg-white/70 border border-white/50 text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-4 focus:ring-emerald-400/50 focus:bg-white focus:border-emerald-400 focus:shadow-xl transition-all"
                    autocomplete="new-password"
                    placeholder="••••••••"
                />
                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2 text-sm text-red-500" />
            </div>
        </div>

        <!-- Forgot Password link for manual users only -->
        @if(is_null(auth()->user()->provider))
            <div class="text-center mt-8">
                <a href="{{ route('password.forgot.logout.redirect') }}"
                   class="inline-block px-10 py-4 bg-gradient-to-r from-emerald-500 to-teal-600
                          hover:from-emerald-600 hover:to-teal-700 text-white font-bold text-lg
                          rounded-2xl shadow-xl transition-all hover:scale-105">
                    Forgot your password? Send reset link via email
                </a>
            </div>
        @endif

        <div class="flex justify-end mt-6">
            <button type="submit"
                class="px-10 py-4 bg-gradient-to-r from-emerald-500 via-teal-500 to-cyan-600
                       hover:from-emerald-600 hover:via-teal-600 hover:to-cyan-700 text-white
                       font-bold text-lg rounded-2xl shadow-xl transition-all hover:scale-105">
                Update Password
            </button>
        </div>

        @if (session('status') === 'password-updated')
            <p x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 4000)" x-transition
               class="text-center text-xl font-bold text-emerald-600 animate-pulse mt-8">
                Password updated successfully!
            </p>
        @endif
    </form>
</div>


<!-- Divider -->
<hr class="my-16 border-t border-white/30">
  
                        <!-- ===================== DELETE ACCOUNT ===================== -->
                        <div>
                            <div class="text-center mb-10">
                                <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-red-500 to-pink-600 rounded-3xl shadow-xl ring-4 ring-red-300/30">
                                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                                    </svg>
                                </div>
                                <h2 class="mt-5 text-2xl font-bold text-gray-900">Delete Account</h2>
                                <p class="mt-1 text-base text-gray-600">Permanently delete your account and all associated data</p>
                            </div>

                            <div class="max-w-2xl mx-auto text-center">
                                <p class="text-base text-gray-700 mb-10">
                                    This action is irreversible. Once deleted, your account and data cannot be recovered.
                                </p>

                                <form method="post" action="{{ route('profile.destroy') }}" class="space-y-8">
                                    @csrf
                                    @method('delete')

                                    <div class="group max-w-md mx-auto">
                                        <x-input-label for="delete_password" value="Confirm Password" class="text-base font-semibold text-gray-800" />
                                        <x-text-input
                                            id="delete_password"
                                            name="password"
                                            type="password"
                                            class="mt-2 block w-full h-14 px-6 rounded-2xl bg-white/70 border border-white/50 text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-4 focus:ring-red-400/50 focus:bg-white focus:border-red-400 focus:shadow-xl transition-all"
                                            placeholder="Enter your password to confirm"
                                            required
                                        />
                                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm text-red-500" />
                                    </div>

                                    <button type="submit"
                                        class="px-12 py-4 bg-gradient-to-r from-red-600 to-pink-600 hover:from-red-700 hover:to-pink-700 text-white font-bold text-lg rounded-2xl shadow-xl transition-all hover:scale-105">
                                        Permanently Delete My Account
                                    </button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-editpage>