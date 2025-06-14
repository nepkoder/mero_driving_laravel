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
        Schema::create('driving_entries', function (Blueprint $table) {
            $table->id();
            $table->enum('entry_type', ['membership', 'guest']);
            $table->unsignedBigInteger('customer_id')->nullable(); // for membership
            $table->string('guest_name')->nullable();              // for guest
            $table->date('entry_date');
            $table->time('start_time');
            $table->time('end_time');
            $table->string('payment_method');
            $table->unsignedBigInteger('trainer_id');    
            $table->timestamps();
            $table->foreign('customer_id')->references('id')->on('customer')->onDelete('set null');
            $table->foreign('trainer_id')->references('id')->on('userdata')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('driving_entries');
    }
};
