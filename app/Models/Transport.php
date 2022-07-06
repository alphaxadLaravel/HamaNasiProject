<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    use HasFactory;
    // users table here
    protected $table = "transports";

    // allow the fillable columns in users table
    protected $fillable = [
        'plate',
        'region',
        'user_id',
        'district',
        'type',
        'price',
        'photo',
        'description',
    ];

}
