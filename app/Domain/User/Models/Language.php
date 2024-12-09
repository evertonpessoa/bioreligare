<?php

namespace App\Domain\User\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany as BelongsToMany;

class Language extends BaseModel
{
    protected $fillable = ['name'];

    public function professionals(): BelongsToMany
    {
        return $this->belongsToMany(ProfessionalProfile::class);
    }
}
