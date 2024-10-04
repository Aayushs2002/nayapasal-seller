<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name',
        'slug',
        'featured',
        'vendor_id',
        'brand_id',
        'tags',
        'featured_image',
        'description',
        'product_order',
        'product_price',
        'cutoff_price',
        'category_id',
        'product_stock',
        'mrp_price',
        'video',
        'total_sale',
        'discount_flag',
        'discount_type',
        'discount_amount',
        'discount_percentage',
        'seller_id',
        'customized',
        'active',
        'token',


    ];

    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }

    public function flashDeal()
    {
        return $this->hasOne(FlashDeal::class, 'product_id');
    }
}
