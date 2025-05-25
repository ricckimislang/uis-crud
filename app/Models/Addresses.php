<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Addresses extends Model
{
    use HasFactory;
    protected $table = 'addresses';
    protected $fillable = [
        'province',
        'city',
        'barangay',
    ];

}

