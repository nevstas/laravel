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
            'avatar' => 'required|image|max:100000',
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'Заполните имя',
            'first_name.max' => 'Имя не должно превышать 255 символов',

            'last_name.required' => 'Заполните фамилию',
            'last_name.max' => 'Фамилия не должна превышать 255 символов',

            'patronymic.required' => 'Заполните отчество',
            'patronymic.max' => 'Отчество не должно превышать 255 символов',

            'phone.required' => 'Заполните телефон',
            'phone.max' => 'Телефон не должен превышать 255 символов',

            'address.required' => 'Заполните адрес',
            'address.max' => 'Адрес не должен превышать 255 символов',

            'avatar.required' => 'Загрузите аватар',
            'avatar.image' => 'Загружаемый файл аватара не является картинкой',
            'avatar.max' => 'Максимальный размер аватара должен быть не более 100 Мб',
        ];
    }
}
