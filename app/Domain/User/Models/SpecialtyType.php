<?php

namespace App\Domain\User\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialtyType extends Model
{
    use HasFactory;

    protected $table = 'specialty_type';

    protected $fillable = [
        'title',
        'slug',
    ];

    // [SpecialtyType]
    public function specializations()
    {
        return $this->hasMany(Specialization::class);
    }
}
