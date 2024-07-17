<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdrawal extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'amount',
        'status',
        'full_name',
        'method',
        'bitcoin_address',
        'ethereum_address',
        'bank_name',
        'bank_account_name',
        'bank_account_number',
        'swift_code',
        'iban',
        'card_number',
        'card_name',
        'card_year',
        'card_month',
        'card_cvc',
        'transaction_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
