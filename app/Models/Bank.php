<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;
    protected $table = "banks";

    // allow the 
    protected $fillable = [
        'account',
        'amount',
        'cvv',
        'expire',
    ];
}
