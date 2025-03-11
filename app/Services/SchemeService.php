<?php

namespace App\Services;

use App\Models\Scheme;
use App\Models\SchemeDetail;
use Illuminate\Http\Request;

class SchemeService
{
    public function getSchemes(): Object
    {

        return Scheme::all();
    }
    public function getActiveSchemes(): Object
    {
        return Scheme::where('status', 1)->get();
    }
    public function createScheme(array $userData): Scheme
    {
        $create = [
            'title_en' => $userData['title_en'],
            'title_ml' => $userData['title_ml'],
            'total_period' => $userData['total_period'],
            'scheme_type_id' => $userData['scheme_type_id'],
            'payment_terms_en' => $userData['payment_terms_en'],
            'description_en' => $userData['description_en'],
            'terms_and_conditions_en' => $userData['terms_and_conditions_en'],
            'payment_terms_ml' => $userData['payment_terms_ml'],
            'description_ml' => $userData['description_ml'],
            'terms_and_conditions_ml' => $userData['terms_and_conditions_ml'],
            'status' => $userData['status'],
        ];
        $scheme = Scheme::create($create);

        return $scheme;
    }

    public function getScheme($id): Object
    {
        return Scheme::find($id);
    }


    public function updateScheme(Scheme $scheme, array $userData, string $imageUrl = null): void
    {

        $update = [
            'title_en'    => $userData['title_en'],
            'title_ml' => $userData['title_ml'],
            'total_period'    => $userData['total_period'],
            'scheme_type_id'    => $userData['scheme_type_id'],
            'payment_terms_en' => $userData['payment_terms_en'],
            'description_en' => $userData['description_en'],
            'terms_and_conditions_en' => $userData['terms_and_conditions_en'],
            'payment_terms_ml' => $userData['payment_terms_ml'],
            'description_ml' => $userData['description_ml'],
            'terms_and_conditions_ml' => $userData['terms_and_conditions_ml'],
            'status'    => $userData['status'],
        ];
        
        $scheme->update($update);
    }

    public function deleteScheme(Scheme $scheme): void
    {
        // delete scheme
        Scheme::find($scheme->id)->delete();
    }
}
