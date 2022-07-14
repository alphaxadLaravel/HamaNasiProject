<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WishList extends Model
{
    use HasFactory;

    // wishlist table here
    protected $table = "wish_lists";

    // allow the fillable columns in wishlist table
    protected $fillable = [
        'user_id',
        'house_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    } 

    // Wish list belongs to a house
    public function house(){
        return $this->belongsTo(House::class);
    } 
}
