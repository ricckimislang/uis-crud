<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserDetails extends Model
{
    use HasFactory;
    protected $table = 'user_details';
    protected $fillable = [
        'contact',
        'age',
        'gender',
        'occupation',
    ];

}

