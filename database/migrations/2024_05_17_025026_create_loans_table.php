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
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->string('loan_code');
            $table->string('loan_name');
            $table->string('loan_type');
            $table->string('loan_borrower');
            $table->string('loan_financiar');
            $table->integer('loan_account_num') -> nullable();
            $table->string('loan_principal');
            $table->double('loan_interest');
            $table->double('loan_amount');
            $table->double('loan_monthly_payment') -> nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
