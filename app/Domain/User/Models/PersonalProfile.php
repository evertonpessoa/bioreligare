<?php

namespace App\Domain\User\Models;

use Illuminate\Database\Eloquent\Relations\HasOne;

class PersonalProfile extends BaseModel
{
    protected $casts = [
        'birthday' => 'date',
    ];

    protected $fillable = [
        'user_id',
        'cpf',
        'rg',
        'gender',
        'birthday',
        'profession',
        'phone',
        'picture_url',
        'accept_scientific_collab',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function address(): HasOne
    {
        return $this->hasOne(Address::class);
    }
}
