<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderBillingInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'billing_firstname',
        'billing_lastname',
        'billing_email',
        'billing_address',
        'billing_phonenumber',
        'billing_city',
        'shipping_city',
        'shipping_firstname',
        'shipping_lastname',
        'shipping_email',
        'shipping_address',
        'shipping_phonenumber',

    ];
}
