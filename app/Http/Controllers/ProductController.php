<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function search(Request $request)
    {
        // Comes from ?query=...
        $query = trim($request->input('query', ''));

        // Base query – copy any filters you use on the home page
        $productsQuery = Product::query();
        // e.g.:
        // $productsQuery->where('is_active', 1);

        if ($query !== '') {
            $productsQuery->where(function ($q) use ($query) {
                $q->where('name', 'LIKE', "%{$query}%")
                  ->orWhere('description', 'LIKE', "%{$query}%");
            });
        }

        $products = $productsQuery
            ->orderBy('created_at', 'desc')
            ->paginate(9)
            ->withQueryString(); // keeps ?query=... on pagination

        return view('search-results', [
    'products' => $products,
    'query'    => $query,
]);
    }
}
