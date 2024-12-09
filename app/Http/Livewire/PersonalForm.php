<?php

namespace App\Http\Livewire;

use Livewire\WithFileUploads;
use Illuminate\Support\Arr;
use App\Domain\User\Enums\GenderEnum;
use App\Http\Requests\Rules\PersonalFormRules;
use App\Http\Livewire\Contracts\UsesAddressFormComponent;
use App\Support\Mask;

class PersonalForm extends UsesAddressFormComponent
{
    use WithFileUploads;

    public $step;

    public $state = [
        'firstName' => '',
        'lastName' => '',
        'birthday' => '',
        'cpf' => '',
        'rg' => '',
        'gender' => '',
        'phone' => '',
    ];

    public $photo;

    protected $listeners = ['childrenValidated'];

    public function mounted(string $step)
    {
        $this->step = $step;
    }

    public function updated($propertyName)
    {
        if ($propertyName === 'state.cpf') {
            $this->state['cpf'] = Mask::cpf($this->state['cpf']);
        }

        if ($propertyName === 'state.birthday') {
            $this->state['birthday'] = Mask::date($this->state['birthday']);
        }

        if ($propertyName === 'state.phone') {
            $this->state['phone'] = Mask::phone($this->state['phone']);
        }

        if (Arr::has($this->rules(), $propertyName)) {
            $this->validateOnly($propertyName);
        }
    }

    public function next()
    {
        $this->validate();
        $this->state['photo'] = $this->photo->store('avatar');
        $this->emit('next', $this->state);
    }

    public function render()
    {
        return view('livewire.personal-form', [
            'genders' => GenderEnum::getAll(),
        ]);
    }

    protected function rules()
    {
        return PersonalFormRules::rules();
    }

    protected function messages()
    {
        return PersonalFormRules::messages();
    }
}
