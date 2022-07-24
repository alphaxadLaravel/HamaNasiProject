<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    // users table here
    protected $table = "homes";

    // allow the fillable columns 
    protected $fillable = [
        'house_id',
        'single',
        'self',
        'sitting',
        'toilet',
        'garden',
        'parking',
    ];
    public function house(){
        return $this->belongsTo(House::class);
    }
}
