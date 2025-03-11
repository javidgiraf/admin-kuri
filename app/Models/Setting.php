<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Setting extends Model
{
    use HasFactory;
    use SoftDeletes;

    const CURRENCY = "₹";

    protected $fillable = [
        'option_name',
        'option_code',
        'option_value',
        'terms_and_conditions_en',
        'terms_and_conditions_ml',
        'symbol',
        'status'
    ];
}
