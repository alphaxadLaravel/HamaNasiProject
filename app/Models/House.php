<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;

    // users table here
    protected $table = "houses";

    // allow the fillable columns in users table
    protected $fillable = [
        'regNumber',
        'region',
        'user_id',
        'district',
        'category',
        'purpose',
        'rent_period',
        'price',
        'photos',
        'description',
    ];

    // The House belongs to House Agent
    public function user(){
        return $this->belongsTo(User::class);
    }

    // House can be wished many times
    public function wish(){
        return $this->hasMany(Booking::class);
    }

}
