<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateHumanRequest extends FormRequest
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
    $method = $this->method();

    if ($method == 'PUT'){

        return [
            'firstName' => ['required'],
            'lastName' => ['required'],
            'country' => ['required'],
            'city' => ['required'],
            'street' => ['required'],
            'phoneNumber' => ['required']
 ];

} else {
        return [
            'firstName' => ['sometimes', 'required'],
            'lastName' => ['sometimes', 'required'],
            'country'=> ['sometimes', 'required'],
            'city' => ['sometimes', 'required'],
            'street' => ['sometimes', 'required'],
            'phoneNumber' => ['sometimes', 'required']
        ];
    }
}
}
