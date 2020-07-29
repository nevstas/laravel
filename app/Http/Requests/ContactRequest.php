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
            'patronymic' => 'required|max:255',
            'phone' => 'required|max:255',
            'address' => 'required|max:255',
            'avatar' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'Заполните имя',
            'last_name.required' => 'Заполните фамилию',
            'patronymic.required' => 'Заполните отчество',
            'phone.required' => 'Заполните телефон',
            'address.required' => 'Заполните адрес',
            'avatar.required' => 'Загрузите аватар',

            'first_name.max' => 'Имя не должно превышать 255 символов',
            'last_name.max' => 'Фамилия не должна превышать 255 символов',
            'patronymic.max' => 'Отчество не должно превышать 255 символов',
            'phone.max' => 'Телефон не должен превышать 255 символов',
            'address.max' => 'Адрес не должен превышать 255 символов',
        ];
    }
}
