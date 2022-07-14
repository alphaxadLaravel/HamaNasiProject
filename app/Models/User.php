<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    // users table here
    protected $table = "users";

    // allow the fillable columns in users table
    protected $fillable = [
    'fullname',
    'username',
    'password',
    'phone',
    'profile',
    'role',
    'status',
    ];

    // One House Agent has many houses
    public function house(){
        return $this->hasMany(House::class);
    }

    // users wishlist
    public function wish(){
        return $this->hasMany(WishList::class);
    }

    
}
