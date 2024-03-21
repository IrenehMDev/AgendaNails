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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('appointment_type_id')->constrained();
            $table->unsignedBigInteger('user_customer_id');
            $table->unsignedBigInteger('user_created_id');

            $table->dateTime('start');
            $table->dateTime('finish');

            $table->foreign('user_customer_id')->references('id')->on('users') ;
            $table->foreign('user_created_id')->references('id')->on('users');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
