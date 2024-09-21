<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerInvoiceDetail extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'invoice_id',
        'order_id',
        'product_name',
        'quantity',
        'product_price',
        'commission',
        'product_id',
        'variation',
    ];

    
}
