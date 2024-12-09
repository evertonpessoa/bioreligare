<?php

namespace App\Domain\User\Actions;

use App\Domain\User\Models\ProfessionalProfile;
use App\Domain\User\DataTransferObjects\ProfessionalProfileData;

class CreateProfessionalProfileAction
{
    public function execute(ProfessionalProfileData $professionalData): ProfessionalProfile
    {
        return ProfessionalProfile::create([
            'phone' => $professionalData->phone,
            'professional_document' => $professionalData->professionalDocument,
            'started_working_at' => $professionalData->startedWorkingAt,
            'resumee_body' => $professionalData->resumeeBody,
            'degree_url' => $professionalData->degreeUrl,
            'health_council_url' => $professionalData->healthCounsilUrl,
            'ethical_regulatory_url' => $professionalData->ethicalRegulatoryUrl,
            'video_url' => $professionalData->videoUrl,
            'photo_path' => $professionalData->photoPath,
            'name' => $professionalData->name,
            'linkedin' => $professionalData->linkedin,
            'instagram'=> $professionalData->instagram,
            'facebook' => $professionalData->facebook,
            'description' => $professionalData->description,
        ]);
    }
}
