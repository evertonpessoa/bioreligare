<?php

namespace App\Domain\User\Models;

class Address extends BaseModel
{
    protected $fillable = [
        'street',
        'cep',
        'number',
        'complement',
        'neighborhood',
        'city',
        'state',
        'professional_profile_id',
        'personal_profile_id',
    ];
}
