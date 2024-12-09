<?php

namespace App\Domain\User\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;

class Specialization extends BaseModel
{
    protected $fillable = [
        'name',
        'parent_specialization_id',
        'description',
        'specialty_type_id',
        'main_banner_path',
        'secondary_banner_path',
        'slug',
        'professional_type_id'
    ];

    public function professionals(): BelongsToMany
    {
        return $this->belongsToMany(ProfessionalProfile::class);
    }

    public function procedures()
    {
        return $this->hasMany(Procedure::class);
    }

    public static function boot() {
        parent::boot();

        self::saving(function ($specialization) {
            $specialization->slug = Str::slug($specialization->name, '-');
        });
    }

    public function professionalType()
    {
        return $this->belongsTo(ProfessionalType::class, 'professional_type_id');
    }
}
