<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Scheme extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_en',
        'title_ml',
        'total_period',
        'pdf_file',
        'status',
        'scheme_type_id',
        'payment_terms_en',
        'terms_and_conditions_en',
        'description_en',
        'payment_terms_ml',
        'terms_and_conditions_ml',
        'description_ml',
    ];

    public function getFormattedTotalAmountAttribute()
    {
        return number_format($this->attributes['total_amount'], 2);
    }
    public function getFormattedScheduleAmountAttribute()
    {
        return number_format($this->attributes['schedule_amount'], 2);
    }
    public function schemeType()
    {
        return $this->belongsTo(SchemeType::class, 'scheme_type_id');
    }

    public function schemeSetting()
    {
        return $this->hasOne(SchemeSetting::class, 'scheme_id', 'id');
    }

    public function setPdfFileAttribute($file)
    {
        if (is_null($file)) {
            $this->attributes['pdf_file'] = null;
            return;
        }

        if (!empty($this->attributes['pdf_file'])) {
            $existingFilePath = 'schemes/' . $this->attributes['pdf_file'];
            if (Storage::disk('public')->exists($existingFilePath)) {
                Storage::disk('public')->delete($existingFilePath);
            }
        }

        // Store the new file
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('schemes', $fileName, 'public');
        $this->attributes['pdf_file'] = $fileName;
    }


    public function getPdfFileAttribute()
    {
        return asset('storage/schemes/' . $this->attributes['pdf_file']);
    }
}
