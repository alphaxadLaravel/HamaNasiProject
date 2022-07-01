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
    'role',
    'status',
    ];

    
}
