<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'amount',
        'payment_method',
        'is_upgrade',
        'payment_id',
        'payment_proof',
        'transaction_ref',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
