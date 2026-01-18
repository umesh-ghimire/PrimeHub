<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description');
            $table->decimal('price', 10, 2);
            $table->decimal('old_price', 10, 2)->nullable();
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            // $table->foreignId(column: 'vendor_id')->nullable()->constrained('vendors')->onDelete('cascade');
            $table->string('brand')->nullable();
            $table->string('image')->nullable();
            $table->decimal('rating', 2, 1)->default(0);
            $table->integer('reviews')->default(0);
            $table->integer('discount')->default(0);
            $table->enum('stock', ['available', 'low', 'out_of_stock'])->default('available');
            $table->json('badges')->nullable();
            $table->boolean('is_best_seller')->default(false);
            $table->boolean('is_trending')->default(false);
            $table->boolean('is_new')->default(false);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            
            // Indexes
            $table->index('brand');
            // $table->index(columns: 'vendor_id'); 
            $table->index('category_id');
            $table->index('is_active');
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
};