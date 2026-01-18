<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::where('is_active', true)
            ->withCount(['products' => function($query) {
                $query->where('is_active', true);
            }])
            ->get();
        
        // Get popular products
        $productController = new ProductController();
        $popularProducts = $productController->getPopularProductsForCategory(4);
        
        return view('frontend.categories.category', compact('categories', 'popularProducts'));
    }
    
    public function show($slug)
    {
        $category = Category::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();
        
        // Get active products for this category
        $products = Product::where('category_id', $category->id)
            ->where('is_active', true)
            ->paginate(12);
        
        // Get related categories (same parent)
        $relatedCategories = Category::where('is_active', true)
            ->where('id', '!=', $category->id)
            ->when($category->parent_id, function($query) use ($category) {
                return $query->where('parent_id', $category->parent_id);
            }, function($query) use ($category) {
                // If no parent, get other top-level categories
                return $query->whereNull('parent_id');
            })
            ->inRandomOrder()
            ->limit(6)
            ->get();
        
        // Get popular products
        $productController = new ProductController();
        $popularProducts = $productController->getPopularProductsForCategory(4);
        
        return view('frontend.categories.category-detail', compact(
            'category', 
            'products',
            'relatedCategories', 
            'popularProducts'
        ));
    }
}