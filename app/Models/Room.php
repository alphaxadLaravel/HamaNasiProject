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
        'house_id',
        'type',
        'parking',
    ];

    public function house(){
        return $this->belongsTo(House::class);
    }
}
