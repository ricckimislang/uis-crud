<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class User_details extends Model
{
    protected $table = 'user_details';
    protected $fillable = [
        'contact',
        'age',
        'gender',
        'occupation',
    ];

}

