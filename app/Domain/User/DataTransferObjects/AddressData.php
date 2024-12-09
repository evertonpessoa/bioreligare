<?php

namespace App\Domain\User\DataTransferObjects;

use App\Support\Mask;
use Spatie\DataTransferObject\DataTransferObject;

class AddressData extends DataTransferObject
{
    public string $cep;

    public string $street;

    public string $number;

    public ?string $complement;

    public string $neighborhood;

    public string $city;

    public string $state;

    public static function fromInput(array $input)
    {
        return new self([
            'cep' => Mask::strip($input['cep']),
            'street' => $input['streetAddress'],
            'number' => $input['streetNumber'],
            'complement' => $input['streetComplement'] ?? null,
            'neighborhood' => $input['neighborhood'],
            'city' => $input['city'],
            'state' => $input['state'],
        ]);
    }
}
