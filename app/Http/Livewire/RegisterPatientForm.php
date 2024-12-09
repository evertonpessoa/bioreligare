<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Arr;
use App\Domain\User\Actions\CreatePatientUserAction;
use App\Domain\User\DataTransferObjects\UserData;
use App\Domain\User\DataTransferObjects\PersonalProfileData;
use App\Domain\User\DataTransferObjects\PersonalRelationsData;
use App\Domain\User\Models\User;

class RegisterPatientForm extends Component
{
    const STEP_PERSONAL = 'personal';

    const STEPS = [
        self::STEP_PERSONAL,
    ];

    public $hasValidatedStep = [
        self::STEP_PERSONAL => false,
    ];

    public $step = self::STEP_PERSONAL;

    public $state = [
        'email' => '',
        'password' => '',
        'confirmPassword' => '',
        'profession' => '',
        'userType' => 'professional',
    ];

    protected $rules = [
        'state.email' => 'required|email|unique:users,email',
        'state.password' => 'required|min:8',
        'state.confirmPassword' => 'required|same:state.password|min:8',
        'state.profession' => 'required',
    ];

    protected $messages = [
        'state.email.required' => 'O campo "E-mail" é obrigatório.',
        'state.email.email' => 'Deve-se usar um e-mail válido.',
        'state.email.unique' => 'O e-mail já esta sendo utilizado.',
        'state.password.required' => 'O campo "Senha" é obrigatório.',
        'state.password.min' => 'Deve-se ter o mínimo de 8 caracteres.',
        'state.confirmPassword.required' => 'O campo "Confirmar Senha" é obrigatório.',
        'state.confirmPassword.string' => 'O campo "Confirmar Senha" é obrigatório.',
        'state.confirmPassword.min' => 'Deve-se ter o mínimo de 8 caracteres.',
        'state.confirmPassword.same' => 'As senhas devem coincidir.',
        'state.profession.required' => 'O campo "Profissão" é obrigatório.',
    ];

    protected $listeners = ['next', 'back'];

    public function render()
    {
        return view('livewire.register-patient-form', [
            'steps' => self::STEPS,
        ]);
    }

    public function updated($propertyName)
    {
        if (Arr::has($this->rules, $propertyName)) {
            $this->validateOnly($propertyName);
        }
    }

    public function next(array $childrenState)
    {
        $this->validate();
        $this->mergeState($childrenState);
        $this->submit();
    }

    public function submit()
    {
        $user = $this->store();
        $this->emit('submit-success', [
            'message' => "Seu pedido de cadastro de paciente foi realizado com sucesso! Agora é só aguardar a aprovação do cadastro, logo você receberá uma notificação. Obrigado {$user->first_name}!",
        ]);
    }

    public function back()
    {
        return redirect()->route('register');
    }

    protected function mergeState($childrenState)
    {
        $this->state = array_merge($this->state, $childrenState);
    }

    protected function store(): User
    {
        $patientUserCreator = app(CreatePatientUserAction::class);
        $userData = UserData::fromInput($this->state);
        $personalProfileData = PersonalProfileData::fromInput($this->state);
        $personalRelationshipData = PersonalRelationsData::fromInput($this->state);

        return $patientUserCreator->execute($userData, $personalProfileData, $personalRelationshipData);
    }
}
