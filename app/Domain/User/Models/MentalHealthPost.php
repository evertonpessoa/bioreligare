<?php

namespace App\Domain\User\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MentalHealthPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_post_path',
        'title',
        'description'
    ];

    protected $casts = [
        'posted_at' => 'datetime'
    ];
}
