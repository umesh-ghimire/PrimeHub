<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Get only 8 active categories for home page
        $categories = Category::where('is_active', true)
            ->orderBy('order')
            ->take(8)  
            ->get();
        
        // Get featured products from database
        $productController = new ProductController();
        $featuredProducts = $productController->getFeaturedProducts(12);
        
        // Get best sellers for deals section
        $bestSellers = Product::where('is_active', true)
            ->where('is_best_seller', true)
            ->inRandomOrder()
            ->take(8)
            ->get();
        
        // Get trending products
        $trendingProducts = Product::where('is_active', true)
            ->where('is_trending', true)
            ->inRandomOrder()
            ->take(12)
            ->get();
        
        // Get new arrivals
        $newArrivals = Product::where('is_active', true)
            ->where('is_new', true)
            ->inRandomOrder()
            ->take(8)
            ->get();
        
        // Get weekly popular products
        $weeklyPopular = Product::where('is_active', true)
            ->where(function($query) {
                $query->where('is_best_seller', true)
                      ->orWhere('is_trending', true);
            })
            ->inRandomOrder()
            ->take(12)
            ->get();
        
        return view('frontend.home', compact(
            'categories', 
            'featuredProducts',
            'bestSellers',
            'trendingProducts',
            'newArrivals',
            'weeklyPopular'
        ));
    }
}