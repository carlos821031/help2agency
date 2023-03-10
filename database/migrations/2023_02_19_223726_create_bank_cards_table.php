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
        Schema::create('bank_cards', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('alias')->comment('Alias');
            $table->string('bank_card_number')->comment('Tarjeta o cuenta del destinatario');
            $table->string('description')->nullable()->comment('Descripcion de la tarjeta.');
            $table->foreignId('contact_id')->constrained();
            $table->foreignId('currency_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bank_cards');
    }
};
