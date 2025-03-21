<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DepositPostRequest extends FormRequest
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
        return [
            'payment_method' => 'required',
            'transaction_no' => 'nullable|unique:transaction_details,transaction_no|unique:transaction_histories,transaction_no',
            'receipt_upload'     => 'mimes:jpeg,png,jpg,gif,svg,pdf|max:2048',
        ];
    }
}
