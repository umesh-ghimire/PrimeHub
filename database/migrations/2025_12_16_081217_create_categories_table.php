<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->text('icon')->nullable(); 
            $table->string('color')->nullable()->default('bg-gray-50');
            $table->foreignId('parent_id')->nullable()
                ->constrained('categories')->onDelete('cascade');
            $table->integer('product_count')->default(0);
            $table->boolean('is_active')->default(true);
            $table->integer('order')->default(0);
            $table->timestamps();
            
            // Optional indexes
            $table->index('parent_id');
            $table->index('is_active');
        });
    }

    public function down()
    {
        Schema::dropIfExists('categories');
    }
};