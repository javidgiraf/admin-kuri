<?php

namespace App\Http\Requests;

use App\Models\Customer;
use App\Models\Nominee;
use App\Models\SchemeType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserUpdatePostRequest extends FormRequest
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
        $id = decrypt($this->route('user'));
        $customer_id = Customer::whereUserId($id)->first();
        $nominee_id = Nominee::whereUserId($id)->first();

        $rules = [
            'name' => ['required'],
            'email' => ['required', 'email', Rule::unique('users', 'email')->ignore($id)],
            'referrel_code' => ['required', Rule::unique('customers', 'referrel_code')->ignore($customer_id)],
            'mobile' => [
                            'required', 
                            'max:15',
                            'min:10', 
                            'regex:/^[6-9]\d{9}$/', 
                            Rule::unique('customers', 'mobile')->ignore($customer_id),
                        ],
            'aadhar_number' => ['required', 'numeric', Rule::unique('customers', 'aadhar_number')->ignore($customer_id)],
            'address' => ['required'],
            'country_id' => ['required', Rule::exists('countries', 'id')],
            'state_id' => ['required', Rule::exists('states', 'id')],
            'district_id' => ['required', Rule::exists('districts', 'id')],
            'pincode' => ['nullable', 'numeric', 'min:6'],
            'nominee_name' => ['required'],
            'nominee_relationship' => ['required'],
            'nominee_phone' => [
                                    'required', 
                                    'min:10',
                                    'max:15', 
                                    'regex:/^[6-9]\d{9}$/', 
                                    Rule::unique('nominees', 'phone')->ignore($nominee_id)
                               ],
        ];

        return $rules;
    }
}
