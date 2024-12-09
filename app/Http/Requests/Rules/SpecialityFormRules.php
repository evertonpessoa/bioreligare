<?php

namespace App\Http\Requests\Rules;

class SpecialityFormRules
{
    /**
     * Get the validation rules.
     *
     */
    public static function rules(): array
    {
        return [
            'state.speciality' => 'required',
            'state.email' => 'required|email|unique:users,email',
            'state.password' => 'required|min:8',
            'state.confirmPassword' => 'required|same:state.password|min:8',
        ];
    }

    /**
     * Get the validation messages.
     *
     */
    public static function messages(): array
    {
        return [
            'state.email.required' => __('validation.required', ['attribute' => 'e-mail']),
            'state.email.email' => __('validation.email', ['attribute' => 'e-mail']),
            'state.email.unique' => __('validation.unique', ['attribute' => 'e-mail']),

            'state.speciality.required' => __('validation.required', ['attribute' => '"Especialidade"']),

            'password.required' => __('validation.required', ['attribute' => '"Senha"']),
            'password.string' => __('validation.string', ['attribute' => '"Senha"']),
            'password.min' => __('validation.min', ['attribute' => '"Senha"', 'min' => '8']),

            'state.confirmPassword.required' => __('validation.required', ['attribute' => '"Confirmar Senha"']),
            'state.confirmPassword.string' => __('validation.string', ['attribute' => '"Confirmar Senha"']),
            'state.confirmPassword.min' => __('validation.min', ['attribute' => '"Senha"', 'min' => '8']),
            'state.confirmPassword.same' => __('validation.same', ['attribute' => '"Senha"', 'other' => '"Confirmar Senha"']),
        ];
    }
}
