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
        'invited_at',
        'utm_source',
        'utm_medium',
        'utm_campaign',
        'utm_content',
    ];
}
