<?php

namespace App\Domain\User\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany as BelongsToMany;

class MedicalPlan extends BaseModel
{
    protected $fillable = [
        'name',
        'logo_path',
        'text_title',
        'text-small',
    ];

    public function professionals(): BelongsToMany
    {
        return $this->belongsToMany(ProfessionalProfile::class);
    }
}
