<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
    public function rules()
    {
        return [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'phone' => 'required|max:255',
            'address' => 'required|max:255',
            'avatar' => 'required|image|max:100000',
            'status' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => __('contacts.first_name_required'),
            'first_name.max' => __('contacts.first_name_max'),

            'last_name.required' => __('contacts.last_name_required'),
            'last_name.max' => __('contacts.last_name_max'),

            'phone.required' => __('contacts.phone_required'),
            'phone.max' => __('contacts.phone_max'),

            'address.required' => __('contacts.address_required'),
            'address.max' => __('contacts.address_max'),

            'avatar.required' => __('contacts.avatar_required'),
            'avatar.image' => __('contacts.avatar_image'),
            'avatar.max' => __('contacts.avatar_max'),

            'status.required' => __('contacts.status_required'),
        ];
    }
}
