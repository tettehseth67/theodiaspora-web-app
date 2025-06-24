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
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->decimal('amount', 10, 2); // Amount donated
            $table->text('message')->nullable();
            $table->string('payment_method')->nullable(); // e.g., 'credit_card', 'bank_transfer', etc.
            $table->string('transaction_id')->nullable(); // Unique identifier
            $table->timestamp('donation_date')->useCurrent(); // Date of the donation
            $table->enum('status', ['pending', 'completed', 'failed'])->default('pending'); // Status of the donation
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donations');
    }
};
