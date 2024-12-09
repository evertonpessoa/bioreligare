<?php

namespace App\Domain\User\DataTransferObjects;

use Illuminate\Support\Collection;
use App\Domain\User\Models\Language;
use App\Domain\User\Models\MedicalPlan;
use App\Domain\User\Models\PatientGroup;
use App\Domain\User\Models\Specialization;
use App\Domain\User\Enums\ProfessionalRoleEnum;
use App\Domain\User\Enums\ProfessionalTypeEnum;
use Spatie\DataTransferObject\DataTransferObject;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Spatie\Permission\Models\Role;

class ProfessionalRelationsData extends DataTransferObject
{
    public EloquentCollection $patientGroups;

    public EloquentCollection $languages;

    public EloquentCollection $medicalPlans;

    public EloquentCollection $roles;

    public Collection $specializations;

    public ?AddressData $address;

    public static function fromInput(array $input)
    {
        return new self([
            'patientGroups' => PatientGroup::findOrFail($input['patientGroups']),
            'languages' => Language::findOrFail($input['languages']),
            'medicalPlans' => MedicalPlan::findOrFail($input['medicalPlans']),
            'specializations' => Specialization::findOrFail($input['specializations']),
            'roles' => Role::whereIn('name', [$input['userType']])->get(),
            'address' => $input['professional'] ? AddressData::fromInput($input['professional']) : null,
        ]);
    }

    public static function getRoles(string $speciality)
    {
        switch ($speciality) {
            case ProfessionalTypeEnum::MEDICINE:
                return ProfessionalRoleEnum::getMedicineRoles();

            case ProfessionalTypeEnum::PSYCHOLOGY:
                return ProfessionalRoleEnum::getPsychologyRoles();
        }
    }
}
