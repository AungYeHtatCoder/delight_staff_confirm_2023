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
        Schema::create('customer_lottery', function (Blueprint $table) {
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('lottery_id');
            $table->string('ticket_no');
            // Define foreign key constraints
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('lottery_id')->references('id')->on('lotteries');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_lottery');
    }
};