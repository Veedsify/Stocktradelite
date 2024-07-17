<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('withdrawals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->decimal('amount', 10, 2);
            $table->string('status')->default('pending');
            $table->string('full_name')->nullable();
            $table->string('method');
            $table->string('bitcoin_address')->nullable();
            $table->string('ethereum_address')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('bank_account_name')->nullable();
            $table->string('bank_account_number')->nullable();
            $table->string('swift_code')->nullable();
            $table->string('iban')->nullable();
            $table->string('card_number')->nullable();
            $table->string('card_name')->nullable();
            $table->string('card_year')->nullable();
            $table->string('card_month')->nullable();
            $table->string('card_cvc')->nullable();
            $table->string('transaction_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tables_withdrawals');
    }
};
