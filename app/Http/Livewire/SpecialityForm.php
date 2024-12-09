<?php

namespace App\Http\Livewire;

use App\Domain\User\Enums\ProfessionalTypeEnum;
use App\Http\Requests\Rules\SpecialityFormRules;
use Illuminate\Support\Arr;
use Livewire\Component;

class SpecialityForm extends Component
{
    public $state = [
        'speciality' => '',
        'acceptScientificCollaboration' => false,
        'email' => '',
        'password' => '',
        'confirmPassword' => '',
    ];

    public $subscriptionPlan = '';

    protected $listeners = ['planSet'];

    public function mounted(string $step)
    {
        $this->step = $step;
    }

    public function updated($propertyName)
    {
        if (Arr::has($this->rules(), $propertyName)) {
            $this->validateOnly($propertyName);
        }
    }

    public function specialitySet($specialityName)
    {
        $this->state['speciality'] = $specialityName;
        $this->emit('specialitySet', $specialityName);
        $this->updated('state.speciality');
    }

    public function planSet($planObj)
    {
        $this->subscriptionPlan = $planObj;
    }

    public function clearAttribute(string $attribute)
    {
        $this->state[$attribute] = '';
        $this->validateOnly('state.' . $attribute);
    }

    public function next()
    {
        $this->validate();

        $this->emit('next', $this->state);
    }

    public function render()
    {
        return view('livewire.speciality-form', [
            'specialities' => ProfessionalTypeEnum::getAll(),
        ]);
    }

    protected function rules()
    {
        return SpecialityFormRules::rules();
    }

    protected function messages()
    {
        return SpecialityFormRules::messages();
    }
}
