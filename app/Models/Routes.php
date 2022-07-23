<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Routes extends Model
{
    use HasFactory;
    // users table here
    protected $table = "routes";

    // allow the fillable columns in users table
    protected $fillable = [
        'user_id',
        'transport_id',
        'user_id',
        'from',
        'to',
        'price',
    ];

}
