<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        // Start with base query
        $query = Product::active()->with('category');
        
        // Search functionality
        if ($request->has('search') && $request->search) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%");
            });
        }
        
        // Category filter
        if ($request->has('category') && $request->category) {
            $query->whereHas('category', function($q) use ($request) {
                $q->where('slug', $request->category);
            });
        }
        
        // Brand filtering
        if ($request->has('brand') && $request->brand) {
            $query->where('brand', $request->brand);
        }
        
        // For multiple brand selection
        if ($request->has('brands')) {
            $query->whereIn('brand', $request->brands);
        }
        
        // Price range filter
        if ($request->has('min_price') && $request->min_price) {
            $query->where('price', '>=', $request->min_price);
        }
        if ($request->has('max_price') && $request->max_price) {
            $query->where('price', '<=', $request->max_price);
        }
        
        // Sorting
        switch ($request->get('sort', 'featured')) {
            case 'newest':
                $query->orderBy('created_at', 'desc');
                break;
            case 'price-low':
                $query->orderBy('price', 'asc');
                break;
            case 'price-high':
                $query->orderBy('price', 'desc');
                break;
            case 'rating':
                $query->orderBy('rating', 'desc');
                break;
            case 'popular':
                $query->where('is_best_seller', true)
                      ->orderBy('reviews', 'desc');
                break;
            case 'featured':
            default:
                $query->orderBy('is_best_seller', 'desc')
                      ->orderBy('is_trending', 'desc')
                      ->orderBy('created_at', 'desc');
                break;
        }
        
        // Get paginated products
        $products = $query->paginate(12);
        
        // Get all products for the static page sections (for compatibility)
        $allProducts = Product::active()
            ->with('category')
            ->orderBy('created_at', 'desc')
            ->get();

        // Get categories with product counts for filter
        $categories = Category::active()->withCount(['products' => function($query) {
            $query->active();
        }])->get();

        // Get unique brands for filter
        $brands = Product::active()
            ->whereNotNull('brand')
            ->where('brand', '!=', '')
            ->select('brand')
            ->distinct()
            ->orderBy('brand')
            ->get()
            ->map(function($item) {
                $productCount = Product::active()
                    ->where('brand', $item->brand)
                    ->count();
                    
                return [
                    'name' => $item->brand,
                    'count' => $productCount
                ];
            })->toArray();

        // Get products with fallback logic for different sections
        $bestSellers = $this->getProductsWithFallback('bestSellers', 8);
        $trendingProducts = $this->getProductsWithFallback('trending', 8);
        $newArrivals = $this->getProductsWithFallback('newArrivals', 8);

        return view('frontend.products.product', compact(
            'products',
            'allProducts',
            'bestSellers',
            'trendingProducts',
            'newArrivals',
            'categories',
            'brands'
        ));
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)
            ->active()
            ->with('category')
            ->firstOrFail();

        // Get related products with fallback
        $relatedProducts = $this->getRelatedProductsWithFallback($product);

        return view('frontend.products.product-detail', compact('product', 'relatedProducts'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $brand = $request->input('brand');
        
        $productsQuery = Product::active();
        
        // Search in name/description
        if ($query) {
            $productsQuery->where(function($q) use ($query) {
                $q->where('name', 'like', "%{$query}%")
                  ->orWhere('description', 'like', "%{$query}%");
            });
        }
        
        // Brand filtering in search
        if ($brand) {
            $productsQuery->where('brand', $brand);
        }
        
        $products = $productsQuery->paginate(12);
        
        // Get brands for search page
        $brands = Product::active()
            ->whereNotNull('brand')
            ->where('brand', '!=', '')
            ->select('brand')
            ->distinct()
            ->orderBy('brand')
            ->get()
            ->map(function($item) {
                $productCount = Product::active()
                    ->where('brand', $item->brand)
                    ->count();
                    
                return [
                    'name' => $item->brand,
                    'count' => $productCount
                ];
            })->toArray();

        return view('search-results', compact('products', 'query', 'brand', 'brands'));
    }

    /**
     * Get products with fallback to ensure minimum products
     * Priority: Best Sellers > Trending > New Arrivals > Random Products
     */
    private function getProductsWithFallback($type = 'bestSellers', $limit = 4)
    {
        $products = collect();
        
        // Get products based on type
        switch ($type) {
            case 'bestSellers':
                $products = Product::active()->bestSellers()->inRandomOrder()->limit($limit)->get();
                break;
            case 'trending':
                $products = Product::active()->trending()->inRandomOrder()->limit($limit)->get();
                break;
            case 'newArrivals':
                $products = Product::active()->newArrivals()->inRandomOrder()->limit($limit)->get();
                break;
        }

        // If we have less than required products, fill with fallbacks
        if ($products->count() < $limit) {
            $needed = $limit - $products->count();
            $excludeIds = $products->pluck('id')->toArray();
            
            // Priority 1: Try other flagged products
            $fallbackTypes = ['bestSellers', 'trending', 'newArrivals'];
            
            foreach ($fallbackTypes as $fallbackType) {
                if ($fallbackType === $type) continue; // Skip current type
                
                if ($needed > 0) {
                    $fallbackProducts = $this->getProductsByType($fallbackType, $needed, $excludeIds);
                    $products = $products->merge($fallbackProducts);
                    $excludeIds = $products->pluck('id')->toArray();
                    $needed = $limit - $products->count();
                }
            }
            
            // If still not enough, get any active products
            if ($needed > 0) {
                $randomProducts = Product::active()
                    ->whereNotIn('id', $excludeIds)
                    ->inRandomOrder()
                    ->limit($needed)
                    ->get();
                
                $products = $products->merge($randomProducts);
            }
        }

        return $products->take($limit);
    }

    /**
     * Helper method to get products by type
     */
    private function getProductsByType($type, $limit, $excludeIds = [])
    {
        $query = Product::active();
        
        switch ($type) {
            case 'bestSellers':
                $query->bestSellers();
                break;
            case 'trending':
                $query->trending();
                break;
            case 'newArrivals':
                $query->newArrivals();
                break;
        }
        
        if (!empty($excludeIds)) {
            $query->whereNotIn('id', $excludeIds);
        }
        
        return $query->inRandomOrder()->limit($limit)->get();
    }

    /**
     * Get related products with fallback logic
     */
    private function getRelatedProductsWithFallback($product, $limit = 4)
    {
        // First, try to get products from same category that are flagged
        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->active()
            ->where(function($query) {
                $query->where('is_best_seller', true)
                    ->orWhere('is_trending', true)
                    ->orWhere('is_new', true);
            })
            ->inRandomOrder()
            ->limit($limit)
            ->get();

        // If not enough, get any products from same category
        if ($relatedProducts->count() < $limit) {
            $needed = $limit - $relatedProducts->count();
            $excludeIds = $relatedProducts->pluck('id')->push($product->id)->toArray();
            
            $categoryProducts = Product::where('category_id', $product->category_id)
                ->whereNotIn('id', $excludeIds)
                ->active()
                ->inRandomOrder()
                ->limit($needed)
                ->get();
                
            $relatedProducts = $relatedProducts->merge($categoryProducts);
        }

        // If still not enough, get flagged products from any category
        if ($relatedProducts->count() < $limit) {
            $needed = $limit - $relatedProducts->count();
            $excludeIds = $relatedProducts->pluck('id')->push($product->id)->toArray();
            
            $flaggedProducts = Product::whereNotIn('id', $excludeIds)
                ->active()
                ->where(function($query) {
                    $query->where('is_best_seller', true)
                        ->orWhere('is_trending', true)
                        ->orWhere('is_new', true);
                })
                ->inRandomOrder()
                ->limit($needed)
                ->get();
                
            $relatedProducts = $relatedProducts->merge($flaggedProducts);
        }

        // If still not enough, get any random products
        if ($relatedProducts->count() < $limit) {
            $needed = $limit - $relatedProducts->count();
            $excludeIds = $relatedProducts->pluck('id')->push($product->id)->toArray();
            
            $randomProducts = Product::whereNotIn('id', $excludeIds)
                ->active()
                ->inRandomOrder()
                ->limit($needed)
                ->get();
                
            $relatedProducts = $relatedProducts->merge($randomProducts);
        }

        return $relatedProducts->take($limit);
    }

    /**
     * Get popular products for category page with fallback
     * This can be used in CategoryController
     */
    public function getPopularProductsForCategory($limit = 4)
    {
        $products = collect();
        $excludeIds = [];
        
        // Priority order for popular products
        $priorityOrder = ['bestSellers', 'trending', 'newArrivals'];
        
        foreach ($priorityOrder as $type) {
            if ($products->count() >= $limit) break;
            
            $needed = $limit - $products->count();
            $typeProducts = $this->getProductsByType($type, $needed, $excludeIds);
            
            $products = $products->merge($typeProducts);
            $excludeIds = $products->pluck('id')->toArray();
        }
        
        // If still not enough, get random products
        if ($products->count() < $limit) {
            $needed = $limit - $products->count();
            $randomProducts = Product::active()
                ->whereNotIn('id', $excludeIds)
                ->inRandomOrder()
                ->limit($needed)
                ->get();
                
            $products = $products->merge($randomProducts);
        }

        return $products->take($limit);
    }

    /**
     * Get featured products for homepage or any page
     */
    public function getFeaturedProducts($limit = 8)
    {
        $products = collect();
        $excludeIds = [];
        
        // Get products with any special flag
        $featuredProducts = Product::active()
            ->where(function($query) {
                $query->where('is_best_seller', true)
                    ->orWhere('is_trending', true)
                    ->orWhere('is_new', true);
            })
            ->inRandomOrder()
            ->limit($limit)
            ->get();
            
        $products = $products->merge($featuredProducts);
        $excludeIds = $products->pluck('id')->toArray();
        
        // If not enough, get random products
        if ($products->count() < $limit) {
            $needed = $limit - $products->count();
            $randomProducts = Product::active()
                ->whereNotIn('id', $excludeIds)
                ->inRandomOrder()
                ->limit($needed)
                ->get();
                
            $products = $products->merge($randomProducts);
        }

        return $products->take($limit);
    }
}