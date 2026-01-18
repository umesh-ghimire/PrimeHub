<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class AddBrandsToProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // List of brands to add
        $brands = [
            'Apple',
            'Samsung', 
            'Nike',
            'Adidas',
            'LG',
            'Boat',
            'Gucci',
            'Skechers',
            'Sony',
            'Microsoft',
            'HP',
            'Dell',
            'Lenovo',
            'Canon',
            'Nikon',
            'Puma',
            'Reebok',
            'Under Armour',
            'Levi\'s',
            'Zara',
            'H&M',
            'Ray-Ban',
            'Titan',
            'Fastrack',
            'Fossil',
            'Casio',
            'Timex',
            'OnePlus',
            'Xiaomi',
            'Realme',
            'Oppo',
            'Vivo'
        ];
        
        $this->command->info('🔄 Adding brands to products...');
        
        // Get all products
        $products = Product::all();
        
        $updatedCount = 0;
        
        // Assign random brands to products
        foreach ($products as $product) {
            // Skip if product already has a brand
            if (!empty($product->brand)) {
                continue;
            }
            
            // Assign a random brand
            $randomBrand = $brands[array_rand($brands)];
            $product->brand = $randomBrand;
            $product->save();
            $updatedCount++;
        }
        
        $this->command->info("✅ Successfully added brands to {$updatedCount} products!");
        
        // Show brand distribution
        $brandCounts = Product::whereNotNull('brand')
            ->where('brand', '!=', '')
            ->select('brand', DB::raw('count(*) as count'))
            ->groupBy('brand')
            ->orderBy('count', 'desc')
            ->get();
            
        if ($brandCounts->count() > 0) {
            $this->command->info("\n📊 Brand Distribution:");
            $this->command->table(
                ['Brand', 'Product Count'],
                $brandCounts->map(function($item) {
                    return [$item->brand, $item->count];
                })->toArray()
            );
            
            $this->command->info("Total unique brands: " . $brandCounts->count());
        } else {
            $this->command->warn("⚠️ No brands found in database!");
        }
    }
}