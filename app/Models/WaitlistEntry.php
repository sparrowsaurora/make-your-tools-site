<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WaitlistEntry extends Model
{
    protected $fillable = [
        'first_name',
        'email',
        'ip_address',
        'user_agent',
        'source',
        'invited_at',
    ];
}
