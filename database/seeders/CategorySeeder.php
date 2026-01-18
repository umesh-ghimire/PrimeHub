<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        // Check if categories already exist
        if (Category::count() > 0) {
            $this->command->info('Categories already exist. Skipping...');
            return;
        }

        $categories = [
            [
                'name' => 'Electronics',
                'slug' => 'electronics',
                'description' => 'Latest electronic gadgets and devices',
                'image' => 'https://images.unsplash.com/photo-1498049794561-7780e7231661?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80',
                'color' => 'bg-blue-50',
                'product_count' => 0,
                'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path></svg>',
                'is_active' => true,
                'order' => 1
            ],
            [
                'name' => 'Fashion',
                'slug' => 'fashion',
                'description' => 'Clothing, shoes, and accessories',
                'image' => 'https://images.unsplash.com/photo-1445205170230-053b83016050?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80',
                'color' => 'bg-pink-50',
                'product_count' => 0,
                'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>',
                'is_active' => true,
                'order' => 2
            ],
            [
                'name' => 'Home & Kitchen',
                'slug' => 'home-kitchen',
                'description' => 'Home appliances and kitchen essentials',
                'image' => 'https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80',
                'color' => 'bg-yellow-50',
                'product_count' => 0,
                'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>',
                'is_active' => true,
                'order' => 3
            ],
            [
                'name' => 'Sports & Fitness',
                'slug' => 'sports-fitness',
                'description' => 'Sports equipment and fitness gear',
                'image' => 'https://images.unsplash.com/photo-1518611012118-696072aa579a?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80',
                'color' => 'bg-green-50',
                'product_count' => 0,
                'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>',
                'is_active' => true,
                'order' => 4
            ],
            [
                'name' => 'Books',
                'slug' => 'books',
                'description' => 'Books and educational materials',
                'image' => 'https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80',
                'color' => 'bg-purple-50',
                'product_count' => 0,
                'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>',
                'is_active' => true,
                'order' => 5
            ],
            [
                'name' => 'Beauty & Health',
                'slug' => 'beauty-health',
                'description' => 'Beauty products and health supplements',
                'image' => 'https://images.unsplash.com/photo-1596462502278-27bfdc403348?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80',
                'color' => 'bg-red-50',
                'product_count' => 0,
                'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>',
                'is_active' => true,
                'order' => 6
            ],
            [
                'name' => 'Toys & Games',
                'slug' => 'toys-games',
                'description' => 'Toys, games, and entertainment',
                'image' => 'https://images.unsplash.com/photo-1596462502278-27bfdc403348?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80',
                'color' => 'bg-indigo-50',
                'product_count' => 0,
                'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>',
                'is_active' => true,
                'order' => 7
            ],
            [
                'name' => 'Automotive',
                'slug' => 'automotive',
                'description' => 'Car accessories and automotive products',
                'image' => 'https://images.unsplash.com/photo-1596462502278-27bfdc403348?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80',
                'color' => 'bg-gray-50',
                'product_count' => 0,
                'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"></path></svg>',
                'is_active' => true,
                'order' => 8
            ],
            [
                'name' => 'Travel',
                'slug' => 'travel',
                'description' => 'Travel gear and accessories',
                'image' => 'https://images.unsplash.com/photo-1596462502278-27bfdc403348?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80',
                'color' => 'bg-teal-50',
                'product_count' => 0,
                'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>',
                'is_active' => true,
                'order' => 9
            ],
            [
                'name' => 'Furniture',
                'slug' => 'furniture',
                'description' => 'Home and office furniture',
                'image' => 'https://images.unsplash.com/photo-1596462502278-27bfdc403348?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80',
                'color' => 'bg-amber-50',
                'product_count' => 0,
                'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path></svg>',
                'is_active' => true,
                'order' => 10
            ],
            [
                'name' => 'Technology',
                'slug' => 'technology',
                'description' => 'Tech gadgets and accessories',
                'image' => 'https://images.unsplash.com/photo-1596462502278-27bfdc403348?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80',
                'color' => 'bg-cyan-50',
                'product_count' => 0,
                'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path></svg>',
                'is_active' => true,
                'order' => 11
            ],
        ];

        foreach ($categories as $categoryData) {
            Category::firstOrCreate(
                ['slug' => $categoryData['slug']],
                $categoryData
            );
        }

        $this->command->info('Categories seeded successfully!');
    }
}