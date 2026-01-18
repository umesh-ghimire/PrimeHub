<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
        'quantity',
    ];

    protected $casts = [
        'quantity' => 'integer',
    ];

    /**
     * Get the user that owns the cart item.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the product that owns the cart item.
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * Get the total price for this cart item.
     */
    public function getTotalAttribute()
    {
        return $this->product->price * $this->quantity;
    }

    /**
     * Get the formatted total price.
     */
    public function getFormattedTotalAttribute()
    {
        return '₹' . number_format($this->total, 0);
    }

    /**
     * Scope a query to only include cart items for a specific user.
     */
    public function scopeForUser($query, $userId)
    {
        return $query->where('user_id', $userId);
    }
}