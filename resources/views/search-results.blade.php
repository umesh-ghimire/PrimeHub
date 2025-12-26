<x-frontend-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Search Results') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                <h3 class="text-lg font-medium text-gray-900 mb-4">
                    Showing results for:
                    <span class="font-bold">"{{ $query }}"</span>
                </h3>

                @if($products->isEmpty())
                    <p class="text-gray-500">No products found matching your search.</p>
                @else
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        @foreach($products as $product)
                            <div class="border rounded-xl p-4 hover:bg-gray-50 transition">
                                <h4 class="font-bold text-lg text-indigo-600">
                                    {{ $product->name }}
                                </h4>

                                <p class="text-gray-600 text-sm mt-1 line-clamp-2">
                                    {{ $product->description }}
                                </p>

                                <div class="mt-4 flex justify-between items-center">
                                    <span class="text-gray-900 font-semibold">
                                        Rs {{ number_format($product->price, 2) }}
                                    </span>

                                    <a href="#"
                                       class="text-sm text-indigo-500 hover:text-indigo-700 font-medium">
                                        View Product →
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="mt-6">
                        {{ $products->appends(['query' => $query])->links() }}
                    </div>
                @endif

            </div>
        </div>
    </div>
</x-frontend-layout>
