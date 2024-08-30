<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlashDeal extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'discount_percent',
        'product_price',
        'start_date',
        'end_date',
        'status',
    ];
}
