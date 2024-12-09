<?php

namespace App\Domain\User\Actions;

use App\Domain\User\Models\ProfessionalProfile;
use App\Domain\User\DataTransferObjects\ProfessionalRelationsData;

class CreateProfessionalRelationshipsAction
{
    public function execute(ProfessionalRelationsData $relationsData, ProfessionalProfile $professional): ProfessionalProfile
    {
        $professional->medicalPlans()->sync($relationsData->medicalPlans);
        $professional->languages()->sync($relationsData->languages);
        $professional->patientGroups()->sync($relationsData->patientGroups);
        $professional->specializations()->sync($relationsData->specializations);

        if ($relationsData->address) {
            $professional->address()->create($relationsData->address->toArray());
        }

        return $professional;
    }
}
