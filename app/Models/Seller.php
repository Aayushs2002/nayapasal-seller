<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Seller extends Authenticatable
{
    use HasFactory;
    protected $fillable = [
        'slug',
        'firstname',
        'lastname',
        'mobileno',
        'email',
        'businessname',
        'establishdate',
        'activities',
        'registration_number',
        'vatno',
        'address1',
        'address2',
        'postaladdress',
        'registration_documents',
        'vat_registration_documents',
        'otp',
        'status',
        'password',
        'remarks',
        'token',
        'verified',
        'active',
        'bank_name',
        'account_number',
        'account_holder_name',
        'bank_Qr',
        'esewa_id',
        'esewa_Qr',
        'khalti_id',
        'khalti_Qr',
        "logo",
        "company_logo"
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
