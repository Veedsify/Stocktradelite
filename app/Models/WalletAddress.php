<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WalletAddress extends Model
{
    use HasFactory;

    protected $fillable = [
        'btc_address',
        'eth_address',
    ];

}
