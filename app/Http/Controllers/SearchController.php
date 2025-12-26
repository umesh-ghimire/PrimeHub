<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $searchTerm = $request->input('query'); // ?query=...

        $products = Product::query()
            ->when($searchTerm, function ($q) use ($searchTerm) {
                $q->where(function ($inner) use ($searchTerm) {
                    $inner->where('name', 'LIKE', "%{$searchTerm}%")
                          ->orWhere('description', 'LIKE', "%{$searchTerm}%");
                });
            })
            ->paginate(9);

        return view('search-results', compact('products', 'searchTerm'));
    }
}
