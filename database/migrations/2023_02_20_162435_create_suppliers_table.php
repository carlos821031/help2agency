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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name')->comment('Nombre de la agencia');
            $table->string('parent_agency')->comment('Nombre de cadena hotelera o agencia madre');
            $table->string('description')->comment('Informacion de la agencia');
            $table->string('logo')->comment('Url al logo');
            $table->foreignId('location_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
