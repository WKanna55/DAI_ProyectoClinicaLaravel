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
        Schema::create('diagnoses', function (Blueprint $table) {
            $table->id();
            $table->text('alergias')->nullable();
            $table->text('sintomas')->nullable();
            $table->text('operAnteriores')->nullable();
            $table->text('valoracion')->nullable();
            $table->string('receta')->nullable();
            //-------------
            $table->unsignedBigInteger('appointment_id');
            $table->foreign('appointment_id')->references('id')->on('appointments');
            //-------------
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diagnoses');
    }
};
// nombre: 2023_11_22_114329_create_diagnoses_table.php