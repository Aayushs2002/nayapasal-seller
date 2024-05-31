<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Seller extends Authenticatable
{
    use HasFactory;
    protected $fillable = [
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
        'verified'
    ];
}
