<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormServiceRequest extends FormRequest
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
    public function rules()
    {
        return [
            'age' => 'required|string',
            'partner' => 'nullable|string',
            'kids' => 'nullable|string',
            'support' => 'nullable|string',
            'annualIncome' => 'required|string',
            'homeOwnership' => 'required|string',
            'advisor' => 'required|string|max:200',
            'localAdvisor' => 'required|string',
            'languagePreference' => 'required|string',
            'otherConsiderations' => 'nullable|string',
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'birthYear' => 'required|string',
            'zipCode' => 'required|string|regex:/\d{5}/',
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'age.required' => 'The age is required.',
            'annualIncome.required' => 'The annual income is required.',
            'homeOwnership.required' => 'The home ownership status is required.',
            'advisor.required' => 'The advisor attribute is required.',
            'advisor.max' => 'The advisor attribute may not be greater than 200 characters.',
            'localAdvisor.required' => 'The local advisor field is required.',
            'languagePreference.required' => 'The language preference is required.',
            'firstName.required' => 'The first name is required.',
            'lastName.required' => 'The last name is required.',
            'email.required' => 'The email address is required.',
            'email.email' => 'The email address must be a valid email address.',
            'phone.required' => 'The phone number is required.',
            'phone.regex' => 'The phone number format is invalid.',
            'birthYear.required' => 'The birth year is required.',
            'zipCode.required' => 'The ZIP code is required.',
            'zipCode.regex' => 'The ZIP code format is invalid.',
        ];
    }
}
