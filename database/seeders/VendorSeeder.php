<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Vendor;
use Illuminate\Database\Seeder;

class VendorSeeder extends Seeder
{
    public function run()
    {
        // Check if vendor already exists
        if (Vendor::count() > 0) {
            $this->command->info('Vendor already exists. Skipping...');
            return;
        }

        // Get or create the vendor user
        $user = User::firstOrCreate(
            ['email' => 'vendor@example.com'],
            [
                'name' => 'Test Vendor',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
            ]
        );

        // Create the main vendor
        Vendor::create([
            'user_id' => $user->id,
            'shop_name' => 'Main Store',
            'shop_slug' => 'main-store',
            'description' => 'Main vendor store with all products',
            'status' => 'active', // Make sure this matches your enum values
            'is_verified' => true,
            'rating' => 4.8,
            'balance' => 0,
            'total_sales' => 0,
        ]);

        $this->command->info('Vendor seeded successfully!');
    }
}