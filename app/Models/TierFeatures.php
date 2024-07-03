<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TierFeatures extends Model
{
    use HasFactory;

    protected $fillable = [
        'tier_id',
        'feature',
    ];
}
