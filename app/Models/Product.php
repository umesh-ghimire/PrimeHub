<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     public function scopeHomePage($query)
    {
        return $query
            ->where('status', 'active');        // example filter
           // ->where('is_featured', true);    // add/remove as needed
    }
}
