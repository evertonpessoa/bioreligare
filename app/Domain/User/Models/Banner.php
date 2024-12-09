<?php

namespace App\Domain\User\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $fillable = [
        'placement',
        'image_path',
        'title',
        'description',
        'link',
        'created_at',
        'updated_at',
    ];
}
