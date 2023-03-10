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
        Schema::create('releases', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('date_start')->comment('Fecha de inicio para ese release');
            $table->date('date_finish')->comment('Fecha fin para ese cupo release');
            $table->integer('release_value')->comment('Valor del release');
            $table->foreignId('contract_id')
                ->constrained();           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('releases');
    }
};
