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
        Schema::create('currencies', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('full_name')->comment('Nombre completo');
            $table->string('short_name')->comment('Nombre corto');            
            $table->decimal('exchange_rate', $precision = 15, $scale = 8)->comment('Tasa de cambio');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('currencies');
    }
};
