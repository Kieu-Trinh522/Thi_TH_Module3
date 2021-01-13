<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agencies extends Model
{
    use HasFactory;

    protected $fillable = [
        'agent_code',
        'agent_name',
        'phone',
        'email',
        'address',
        'manager_name',
        'active_status'
    ];
}
