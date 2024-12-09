<?php

namespace App\Domain\User\DataTransferObjects;

use App\Support\Mask;
use Carbon\Carbon;
use Spatie\DataTransferObject\DataTransferObject;

class ProfessionalProfileData extends DataTransferObject
{
    public string $phone;

    public string $professionalDocument;

    public Carbon $startedWorkingAt;

    public string $resumeeBody;

    public string $degreeUrl;

    public string $healthCounsilUrl;

    public ?string $ethicalRegulatoryUrl;

    public ?string $videoUrl;

    public static function fromInput(array $input)
    {
        return new self([
            'phone' => Mask::strip($input['commercialPhone']),
            'professionalDocument' => $input['professionalDocument'],
            'startedWorkingAt' => Carbon::createFromFormat('Y', $input['startedWorkingAt']),
            'resumeeBody' => $input['curriculum'],
            'degreeUrl' => $input['degree'],
            'healthCounsilUrl' => $input['healthCounsil'],
            'ethicalRegulatoryUrl' => $input['ethicalRegulatory'] ?? null,
            'videoUrl' => $input['videoUrl'] ?? null,
        ]);
    }
}
