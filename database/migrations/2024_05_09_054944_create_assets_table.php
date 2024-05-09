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
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->string('asset_name');
            $table->string('asset_type');
            $table->longText('asset_desc') -> nullable();
            $table->string('asset_status') -> nullable();
            $table->string('asset_location')-> nullable();
            $table->string('asset_depreciation_code') -> nullable(); 
            $table->double('asset_fee');
            $table->datetime('asset_payment_date') -> nullable();
            $table->string('asset_approved_by') -> nullable();
            $table->timestamp('asset_approved_datetime') -> nullable();
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assets');
    }
};
