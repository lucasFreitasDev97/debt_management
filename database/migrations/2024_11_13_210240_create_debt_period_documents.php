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
        Schema::create('debt_period_documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('debt_period_id')->constrained('debt_periods');
            $table->enum('status', ['pending', 'late', 'paid'])->default('pending');
            $table->string('receipt_file_path')->nullable();
            $table->string('voucher_file_path');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('debt_period_documents');
    }
};
