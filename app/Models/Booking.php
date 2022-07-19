<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    // boking table here
    protected $table = "bookings";

    // allow the fillable columns in wishlist table
    protected $fillable = [
        'user_id',
        'house_id',
        'status',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    } 

    // Wish list belongs to a house
    public function house(){
        return $this->belongsTo(House::class);
    } 
}
