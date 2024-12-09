<?php

namespace App\Domain\User\DataTransferObjects;

use App\Support\Mask;
use Illuminate\Support\Carbon;
use Spatie\DataTransferObject\DataTransferObject;

class PersonalProfileData extends DataTransferObject
{
    public string $cpfDocument;

    public string $rgDocument;

    public string $gender;

    public bool $acceptsSciCollab;

    public Carbon $birthday;

    public ?string $profession;

    public string $phone;

    public string $photo;

    public AddressData $address;

    public static function fromInput(array $input)
    {
        return new self([
            'cpfDocument' => Mask::strip($input['cpf']),
            'rgDocument' => $input['rg'],
            'gender' => $input['gender'],
            'acceptsSciCollab' => $input['acceptScientificCollaboration'] ?? false,
            'birthday' => Carbon::createFromFormat('d/m/Y', $input['birthday']),
            'profession' => $input['profession'] ?? null,
            'phone' => Mask::strip($input['phone']),
            'photo' => $input['photo'],
            'address' => AddressData::fromInput($input['personal']),
        ]);
    }
}
