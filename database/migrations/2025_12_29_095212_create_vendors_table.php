<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('shop_name');
            $table->string('Shop_slug')->unique();
            $table->longText('description')->nullable();
            $table->string('logo')->nullable();
            $table->string('banner')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->enum('status', ['pending','active', 'suspended','rejected'])->default('pending');
            $table->decimal('balance', 12, 2)->default(0);
            $table->integer('total_sales')->default(0);
            $table->decimal('rating', 3, 2)->default(0);
            $table->boolean('is_verified')->default(false);
            $table->json('settings')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendors');
    }
};
