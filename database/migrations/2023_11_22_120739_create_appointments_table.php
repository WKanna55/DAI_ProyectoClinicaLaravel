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
            $table->string('condicion');
            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id')->references('id')->on('patients');
            $table->unsignedBigInteger('doctor_id');
            $table->foreign('doctor_id')->references('id')->on('doctors');
            $table->unsignedBigInteger('shift_id');
            $table->foreign('shift_id')->references('id')->on('shifts');
            /*
            $table->unsignedBigInteger('diagnostico_id');
            $table->foreign('diagnostico_id')->references('id')->on('diagnoses');
            */
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
