<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'mobile',
        'password',
        'referrel_code',
        'aadhar_number',
        'pancard_no',
        'otp',
        'is_verified',
        'status',
        'device_type',
        'token_id'
    ];
}
