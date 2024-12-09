<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Domain\User\DataTransferObjects\UserData;
use App\Domain\User\Actions\CreateProfessionalUserAction;
use App\Domain\User\DataTransferObjects\PersonalProfileData;
use App\Domain\User\DataTransferObjects\ProfessionalProfileData;
use App\Domain\User\DataTransferObjects\ProfessionalRelationsData;
use App\Domain\User\Models\User;

class RegisterProfessionalUserForm extends Component
{
    const STEP_PLAN = 'plan';
    const STEP_SPECIALITY = 'speciality';
    const STEP_PERSONAL = 'personal';
    const STEP_PROFESSIONAL = 'professional';

    const STEPS = [
        self::STEP_PLAN,
        self::STEP_SPECIALITY,
        self::STEP_PERSONAL,
        self::STEP_PROFESSIONAL,
    ];

    public $hasValidatedStep = [
        self::STEP_SPECIALITY => false,
        self::STEP_PERSONAL => false,
        self::STEP_PROFESSIONAL => false,
    ];

    public $step = self::STEP_PLAN;

    public $state = [
        'userType' => 'professional',
    ];

    protected $listeners = ['next', 'back', 'submit'];

    public function next(array $childrenState)
    {
        $this->mergeState($childrenState);
        $this->hasValidatedStep[$this->step] = true;

        if ($this->isLastStep() && $this->submitIsValid()) {
            $this->submit();

            return;
        }

        $this->step = self::STEPS[array_search($this->step, self::STEPS) + 1];
    }

    public function back()
    {
        $this->hasValidatedStep[$this->step] = false;
        $this->step = self::STEPS[array_search($this->step, self::STEPS) - 1];
    }

    public function submit()
    {
        $user = $this->store();

        $this->emit('submit-success', [
            'message' => "Seu pedido de cadastro profissional foi realizado com sucesso!
                          Agora é só aguardar a aprovação do cadastro,
                          logo você receberá uma notificação. Obrigado {$user->first_name}!",
        ]);
    }

    public function render()
    {
        return view('livewire.register-professional-user-form', [
            'steps' => self::STEPS,
        ]);
    }

    protected function store(): User
    {
        $professionalUserCreator = app(CreateProfessionalUserAction::class);

        $userData = UserData::fromInput($this->state);
        $personalProfileData = PersonalProfileData::fromInput($this->state);
        $professionalProfileData = ProfessionalProfileData::fromInput($this->state);
        $professionalRelationshipData = ProfessionalRelationsData::fromInput($this->state);

        return $professionalUserCreator->execute($userData, $personalProfileData, $professionalProfileData, $professionalRelationshipData);
    }

    protected function submitIsValid(): bool
    {
        return $this->hasValidatedStep[self::STEP_SPECIALITY] &&
               $this->hasValidatedStep[self::STEP_PERSONAL] &&
               $this->hasValidatedStep[self::STEP_PROFESSIONAL];
    }

    protected function isLastStep(): bool
    {
        return $this->step === self::STEP_PROFESSIONAL;
    }

    protected function mergeState($childrenState)
    {
        $this->state = array_merge($this->state, $childrenState);
    }
}
