<?php

namespace App\Domain\User\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfessionalType extends Model
{
    use HasFactory;

    protected $table = 'professional_types';

    protected $fillable = [
        'title',
        'slug',
        'description',
        'banner_path'
    ];

    public function professionalProfiles()
    {
        return $this->hasMany(ProfessionalProfile::class, 'professional_type_id');
    }

    public function specializations()
    {
        return $this->hasMany(Specialization::class, 'professional_type_id');
    }
}
