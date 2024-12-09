<?php

namespace App\Http\Livewire;

use App\Support\Mask;
use Illuminate\Support\Arr;
use Livewire\WithFileUploads;
use App\Domain\User\Models\Language;
use App\Domain\User\Models\MedicalPlan;
use App\Domain\User\Models\PatientGroup;
use App\Domain\User\Models\Specialization;
use App\Domain\User\Enums\ProfessionalTypeEnum;
use App\Domain\User\Enums\SpecializationTypeEnum;
use App\Http\Requests\Rules\ProfessionalFormRules;
use App\Http\Livewire\Contracts\UsesAddressFormComponent;

class ProfessionalForm extends UsesAddressFormComponent
{
    use WithFileUploads;

    public $speciality;
    public $step;
    public $medicalSpecialities;
    public $medSecSpecialities;

    public $state = [
        'curriculum' => '',
        'experinceTime' => '',
        'psychologicalApproaches' => [],
        'psychologicalAreas' => [],
        'professionalDocument' => '',
        'medicalPrimarySpeciality' => [],
        'medicalSecondarySpeciality' => [],
        'patientGroups' => [],
        'medicalPlans' => [],
        'languages' => [],
        'startedWorkingAt' => '',
        'commercialPhone' => '',
        'videoUrl' => '',
    ];

    public $degree;
    public $ethicalRegulatory;
    public $healthCounsil;

    protected $listeners = ['specialitySet', 'childrenValidated'];

    public function mount()
    {
        $this->medicalSpecialities = Specialization::where('name', SpecializationTypeEnum::MEDICINE_SPECIALIZATION)->get();
        $this->medSecSpecialities = collect([]);
    }

    public function mounted(string $step)
    {
        $this->step = $step;
    }

    public function specialitySet(string $speciality)
    {
        $this->speciality = $speciality;
        $this->state['psychologicalAreas'] = [];
        $this->state['psychologicalApproaches'] = [];
        $this->state['medicalPrimarySpeciality'] = [];
        $this->state['medicalSecondarySpeciality'] = [];
    }

    public function updated($propertyName)
    {
        if ($propertyName === 'state.medicalPrimarySpeciality') {
            $this->medSecSpecialities = $this->medicalSpecialities->whereIn('parent_specialization_id', $this->state['medicalPrimarySpeciality']);
        }

        if ($propertyName === 'state.commercialPhone') {
            $this->state['commercialPhone'] = Mask::phone($this->state['commercialPhone']);
        }

        if (Arr::has($this->rules(), $propertyName)) {
            $this->validateOnly($propertyName);
        }
    }

    public function next()
    {
        $this->validate();
        $this->saveImages();
        $this->mergeSpecializations();
        $this->emit('next', $this->state);
    }

    public function render()
    {
        return view('livewire.professional-form', [
            'specialities' => [
                'medicine' => ProfessionalTypeEnum::MEDICINE,
                'therapy' => ProfessionalTypeEnum::THERAPY,
                'psychology' => ProfessionalTypeEnum::PSYCHOLOGY,
            ],
            'patientGroups' => PatientGroup::all(),
            'medicalPlans' => MedicalPlan::all(),
            'languages' => Language::all(),
            'psychologicalApproaches' => Specialization::where('name', SpecializationTypeEnum::PSYCHOLOGY_APPORACH),
            'psychologicalAreas' => Specialization::where('name', SpecializationTypeEnum::PSYCHOLOGY_AREA),
            'medicalPrimarySpeciality' => $this->medicalSpecialities->where('parent_specialization_id', null),
        ]);
    }

    protected function rules()
    {
        $rules = ProfessionalFormRules::rules();

        if ($this->speciality === ProfessionalTypeEnum::PSYCHOLOGY) {
            $rules = $rules + [
                'state.psychologicalAreas' => 'required',
                'state.psychologicalApproaches' => 'required',
            ];
        }

        if ($this->speciality === ProfessionalTypeEnum::MEDICINE) {
            $rules = $rules + [
                'state.medicalPrimarySpeciality' => 'required',
            ];
        }

        return $rules;
    }

    protected function saveImages()
    {
        $this->state['degree'] = $this->degree->store('degree-images');
        $this->state['healthCounsil'] = $this->healthCounsil->store('health-counsil-images');
        if ($this->ethicalRegulatory) {
            $this->state['ethicalRegulatory'] = $this->ethicalRegulatory->store('ethical-regulatory-images');
        }
    }

    protected function mergeSpecializations()
    {
        $this->state['specializations'] = $this->state['psychologicalAreas']
            + $this->state['psychologicalApproaches']
            + $this->state['medicalPrimarySpeciality']
            + $this->state['medicalSecondarySpeciality'];
    }

    protected function messages()
    {
        return ProfessionalFormRules::messages();
    }
}
