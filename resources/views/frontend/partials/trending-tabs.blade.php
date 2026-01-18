<div class="trending-section py-16 bg-gray-50" id="trending">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Best Sellers & Trending</h2>
            <div class="flex justify-center space-x-4 mb-8">
                <button class="trending-tab active px-6 py-2 rounded-full font-semibold transition-colors duration-300"
                        data-tab="best-sellers">
                    Best Sellers
                </button>
                <button class="trending-tab px-6 py-2 rounded-full font-semibold transition-colors duration-300"
                        data-tab="trending">
                    Trending Now
                </button>
                <button class="trending-tab px-6 py-2 rounded-full font-semibold transition-colors duration-300"
                        data-tab="new-arrivals">
                    New Arrivals
                </button>
            </div>
        </div>
        
        <div id="trending-products">
            <!-- Best Sellers Tab -->
            <div class="trending-tab-content active grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($bestSellers as $product)
                <x-frontend.partials.product-card :product="$product" />
                @endforeach
            </div>
            
            <!-- Trending Products Tab -->
            <div class="trending-tab-content hidden grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($trendingProducts as $product)
                <x-frontend.partials.product-card :product="$product" />
                @endforeach
            </div>
            
            <!-- New Arrivals Tab -->
            <div class="trending-tab-content hidden grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($newArrivals as $product)
                <x-frontend.partials.product-card :product="$product" />
                @endforeach
            </div>
        </div>
    </div>
</div>

<style>
    .trending-tab {
        background-color: #f3f4f6;
        color: #6b7280;
    }
    
    .trending-tab.active {
        background-color: #065f46;
        color: white;
    }
    
    .trending-tab-content {
        display: none;
    }
    
    .trending-tab-content.active {
        display: grid;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const tabs = document.querySelectorAll('.trending-tab');
        const tabContents = document.querySelectorAll('.trending-tab-content');
        
        tabs.forEach(tab => {
            tab.addEventListener('click', function() {
                const tabId = this.getAttribute('data-tab');
                
                tabs.forEach(t => t.classList.remove('active'));
                this.classList.add('active');
                
                tabContents.forEach(content => {
                    content.classList.remove('active');
                    content.style.display = 'none';
                });
                
                const activeContent = document.querySelector(`.trending-tab-content[data-tab="${tabId}"]`);
                if (activeContent) {
                    activeContent.classList.add('active');
                    activeContent.style.display = 'grid';
                }
            });
        });
    });
</script>