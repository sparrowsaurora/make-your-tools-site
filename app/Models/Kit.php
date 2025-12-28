<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kit extends Model
{
    /** @use HasFactory<\Database\Factories\KitFactory> */
    use HasFactory;


    protected $fillable = [
        'name',
        'slug',
        'description',
        'price_cents',
        'stock',
        'is_active',
        'is_deprecated',
        'sku',
        'image'
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
