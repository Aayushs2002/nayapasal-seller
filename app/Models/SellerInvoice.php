<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerInvoice extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'invoice_id',
        'seller_id',
        'amount',
        'payment_method',
        'account_number',
    ];

    public function seller()
    {
        return $this->belongsTo(Seller::class, 'seller_id', 'id');
    }
}
