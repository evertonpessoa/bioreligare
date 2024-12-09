<?php

namespace App\Domain\User\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SuppressWarnings(PHPMD.NumberOfChildren)
 */
class BaseModel extends Model
{
    use HasFactory;
    use SoftDeletes;
}
