<?php

namespace App\Http\Requests\Rules;

class ProfessionalFormRules
{
    /**
     * Get the validation rules.
     *
     */
    public static function rules(): array
    {
        return [
            'state.professionalDocument' => 'required',
            'state.curriculum' => 'required',
            'state.startedWorkingAt' => 'required|date_format:Y|before_or_equal:' . today()->year . '|after_or_equal:' . today()->subCentury()->year,
            'state.patientGroups' => 'required',
            'state.languages' => 'required',
            'state.medicalPlans' => 'required',
            'healthCounsil' => 'required|image',
            'degree' => 'required|image',
            'state.videoUrl' => 'sometimes|url',
        ];
    }

    /**
     * Get the validation messages.
     *
     */
    public static function messages(): array
    {
        return [
            'state.professionalDocument.required' => __('validation.required', ['attribute' => '"Documento Profissional"']),
            'state.startedWorkingAt.required' => __('validation.required', ['attribute' => '"Ano em que começou a exercer a profissão"']),
            'state.startedWorkingAt.date_format' => __('validation.date_format', ['attribute' => '"Ano em que iniciou a profissão"', 'format' => '"AAAA (Ex: 1991)"']),
            'state.startedWorkingAt.before_or_equal' => 'O ano em que começou a exercer a profissão deve ser menor ou igual a ' . today()->year,
            'state.startedWorkingAt.after_or_equal' => 'O ano em que começou a exercer a profissão deve ser maior ou igual a ' . today()->subCentury()->year,
            'state.psychologicalAreas.required' => __('validation.required', ['attribute' => '"Áreas de Psicologia"']),
            'state.psychologicalApproaches.required' => __('validation.required', ['attribute' => '"Abordagens Psicoterapeuticas"']),
            'degree.required' => __('validation.required', ['attribute' => '"Imagem do Diploma"']),
            'healthCounsil.required' => __('validation.required', ['attribute' => '"Imagem da Carteira do Conselho"']),
            'state.patientGroups.required' => __('validation.required', ['attribute' => '"Público Alvo"']),
            'state.languages.required' => __('validation.required', ['attribute' => '"Idiomas"']),
            'state.medicalPlans.required' => __('validation.required', ['attribute' => '"Atendimento Planos de Saúde"']),
            'state.curriculum.required' => __('validation.required', ['attribute' => '"Início Currículo"']),
            'state.medicalPrimarySpeciality.required' => __('validation.required', ['attribute' => 'Especialidade Principal']),
        ];
    }
}
