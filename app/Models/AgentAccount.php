<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgentAccount extends Model
{
    use HasFactory;
    // rooms
    protected $table = "agent_accounts";

    // allow the fillable columns 
    protected $fillable = [
        'user_id',
        'phone',
        'profit',
    ];
}
