<?php

namespace App\Domain\User\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Procedure extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'banner_path',
        'specialization_id'
    ];

    public function specializations() {
        return $this->belongsTo(Specialization::class, 'specialization_id');
    }
}
