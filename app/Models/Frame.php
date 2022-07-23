<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frame extends Model
{
    use HasFactory;
    // rooms
    protected $table = "frames";

    // allow the fillable columns 
    protected $fillable = [
        'width',
        'house_id',

    ];
}
