<?php

namespace App\Domain\User\Models;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialtyIntegrative extends SpecialtyType
{
    use HasFactory;

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('slug', function (Builder $builder) {
            $builder->where('slug', '=', 'integrativa');
        });
    }

    public function specializations() {
        return $this->hasMany(Specialization::class);
    }
}
