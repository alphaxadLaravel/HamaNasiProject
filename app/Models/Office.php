<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;
    // rooms
    protected $table = "offices";

    // allow the fillable columns 
    protected $fillable = [
        'rooms',
        'hall',
    ];
}
