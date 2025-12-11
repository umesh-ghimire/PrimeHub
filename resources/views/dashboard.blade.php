<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-10 text-center">
                    <h1 class="text-4xl font-bold text-gray-900 mb-4">Welcome back, {{ Auth::user()->name }}!</h1>
                    <p class="text-lg text-gray-600">You are now logged into PrimeHub.</p>
                    
                    <div class="mt-10">
                        <a href="{{ route('profile.edit') }}" 
                           class="inline-flex items-center px-8 py-4 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold rounded-2xl rounded-2xl shadow-lg transition transform hover:scale-105">
                            Go to My Profile
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>