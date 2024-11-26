<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "address";
    protected $fillable = [
        'user_id',
        'address',
        'district_id',
        'state_id',
        'country_id',
        'pincode',
        'status',
    ];
}
