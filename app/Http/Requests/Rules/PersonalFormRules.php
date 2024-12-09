<?php

namespace App\Http\Requests\Rules;

class PersonalFormRules
{
    /**
     * Get the validation rules.
     *
     */
    public static function rules(): array
    {
        return [
            'state.firstName' => 'required',
            'state.lastName' => 'required',
            'state.birthday' => 'required|date_format:d/m/Y',
            'state.cpf' => 'required|cpf',
            'state.rg' => 'required',
            'state.gender' => 'required',
            'photo' => 'required|image',
            'state.phone' => 'required|regex:/(\(?\d{2}\)?\s)?(\d{4,5}\-?\d{4})/u',
        ];
    }

    /**
     * Get the validation messages.
     *
     */
    public static function messages(): array
    {
        return [
            'state.firstName.required' => __('validation.required', ['attribute' => '"Nome"']),
            'state.birthday.required' => __('validation.required', ['attribute' => '"Data de Nascimento"']),
            'state.birthday.date_format' => __('validation.date_format', ['attribute' => '"Data de Nascimento"']),
            'state.lastName.required' => __('validation.required', ['attribute' => '"Sobrenome"']),
            'state.cpf.required' => __('validation.required', ['attribute' => '"CPF"']),
            'state.rg.required' => __('validation.required', ['attribute' => '"RG"']),
            'state.gender.required' => __('validation.required', ['attribute' => '"Gênero"']),
            'photo.image' => __('validation.image', ['attribute' => '"Foto"']),
            'photo.required' => __('validation.required', ['attribute' => '"Foto"']),
            'state.phone.required' => __('validation.required', ['attribute' => '"Telefone"']),
            'state.phone.regex' => __('validation.regex'),
        ];
    }
}
