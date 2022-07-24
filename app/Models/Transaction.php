<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = "transactions";

    // allow the fillable columns 
    protected $fillable = [
        'house_id',
        'From',
        'To',
        'Amount',
        'purpose',
        'Branch',
        'invoice',
    ];

}
