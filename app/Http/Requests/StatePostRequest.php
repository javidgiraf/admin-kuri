<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StatePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $id = $this->request->get('id');
        return [
            'country_id' => 'required',
            'name' => 'required',
            'code' => 'required|unique:states,code,' . $id . ',id',
        ];
    }
}
