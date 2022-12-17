<?php

namespace App\Http\Requests;

use App\Rules\nationalId;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            //
            'id' => ['required', 'integer', 'max:64'],
            'first_name' => ['required', 'string', 'max:64'],
            'last_name' => ['required', 'string', 'max:64'],
            'nationalId' => ['required', 'regex:/^[0-9]{10}$/', new nationalId,Rule::unique('users')->ignore(Auth::user()->id)],
            'mobileNumber' => ['required', 'regex:/^09[0-9]{9}$/'],
            'gender' => ['required', 'string', 'max:6'],
            'vState' => ['nullable', 'string', 'max:3'],
            'birthDate' => ['nullable','regex:/^\d{4}\/(0[1-9]|1[012])\/(0[1-9]|[12][0-9]|3[01])$/', 'max:12'],
            'avatar' => [ 'nullable','image','mimes:jpeg,jpg', 'max:200'],
            'username' => ['required', 'regex:/^(?=.{8,20}$)(?![_.0-9])(?!.*[_.]{2})[a-zA-Z0-9._]+(?<![_.])$/', 'max:32',Rule::unique('users')->ignore(Auth::user()->id)],
            'email' => ['required', 'regex:/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}/', 'email', 'max:255',Rule::unique('users')->ignore(Auth::user()->id)],
            'state' => ['nullable','string', 'max:64'],
            'city' => ['nullable','string', 'max:64'],
        ];
    }
}
