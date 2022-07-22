<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    // rooms
    protected $table = "rooms";

    // allow the fillable columns 
    protected $fillable = [
        'type',
        'parking',
    ];
}
