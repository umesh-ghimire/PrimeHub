<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Vendor extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'shop_name',
        'shop_slug',
        'description',
        'logo',
        'banner',
        'phone',
        'address',
        'status',
        'balance',
        'total_sales',
        'rating',
        'is_verified',
        'settings',
    ];

    protected $casts = [
        'balance' => 'decimal:2',
        'rating' => 'decimal:2',
        'settings' => 'array',
        'is_verified' => 'boolean',
        'total_sales' => 'integer',
    ];

    /**
     * Get the user that owns the vendor.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the products for the vendor.
     */
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    /**
     * Get the order items for the vendor.
     */
    public function orderItems(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }

    /**
     * Scope a query to only include active vendors.
     */
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    /**
     * Scope a query to only include verified vendors.
     */
    public function scopeVerified($query)
    {
        return $query->where('is_verified', true);
    }

    /**
     * Scope a query to only include pending vendors.
     */
    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }

    /**
     * Get the formatted balance.
     */
    public function getFormattedBalanceAttribute()
    {
        return '₹' . number_format($this->balance, 2);
    }

    /**
     * Check if vendor is active.
     */
    public function getIsActiveAttribute()
    {
        return $this->status === 'active';
    }

    /**
     * Get vendor's total products count.
     */
    public function getTotalProductsAttribute()
    {
        return $this->products()->count();
    }

    /**
     * Get vendor's total orders count.
     */
    public function getTotalOrdersAttribute()
    {
        return $this->orderItems()->distinct('order_id')->count('order_id');
    }

    /**
     * Get vendor's average rating formatted.
     */
    public function getFormattedRatingAttribute()
    {
        return number_format($this->rating, 1) . '/5';
    }
}