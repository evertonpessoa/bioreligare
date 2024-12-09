<?php

namespace App\Domain\User\Models;

use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ProfessionalProfile extends BaseModel
{
    protected $casts = [
        'started_working_at' => 'date'
    ];

    protected $fillable = [
        'phone',
        'professional_document',
        'started_working_at',
        'resumee_body',
        'degree_url',
        'health_council_url',
        'ethical_regulatory_url',
        'video_url',
        'photo_path',
        'name',
        'linkedin',
        'instagram',
        'facebook',
        'description',
        'professional_type_id'
    ];

    public function medicalPlans(): BelongsToMany
    {
        return $this->belongsToMany(MedicalPlan::class);
    }

    public function languages(): BelongsToMany
    {
        return $this->belongsToMany(Language::class);
    }

    public function patientGroups(): BelongsToMany
    {
        return $this->BelongsToMany(PatientGroup::class);
    }

    public function address(): HasOne
    {
        return $this->hasOne(Address::class);
    }

    public function professionalType()
    {
        return $this->belongsTo(ProfessionalType::class, 'professional_type_id');
    }

    public function specializations(): BelongsToMany
    {
        return $this->belongsToMany(Specialization::class);
    }
}
