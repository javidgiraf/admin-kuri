<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SchemeUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title_en' => ['required', Rule::unique('schemes', 'title_en')->ignore(decrypt($this->route('scheme')))],
            'title_ml' => ['required', Rule::unique('schemes', 'title_ml')->ignore(decrypt($this->route('scheme')))],
            'total_period' => ['required', 'numeric'],
            'scheme_type_id' => ['required', Rule::exists('scheme_types', 'id')],
            'payment_terms_en' => ['required'],
            'description_en' => ['required'],
            'terms_and_conditions_en' => ['required'],
            'payment_terms_ml' => ['required'],
            'description_ml' => ['required'],
            'terms_and_conditions_ml' => ['required']
        ];
    }
}
