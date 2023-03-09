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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('archivecontract')->comment('URL al adjunto del contrato');

            $table->string('season_start')->comment('Inicio de temporada. Verificar este campo');
            $table->string('season_finish')->comment('Fin de la temporada. Verificar este campo');
            $table->date('period_start')->comment('Inicio del periodo');
            $table->date('period_finish')->comment('Fin del periodo');
            $table->date('date_sing')->comment('Fecha de la firma');

            $table->string('place_sing')->comment('Lugar de la firma');
            $table->string('code')->comment('Codigo del contrato');
            $table->string('invoice_email')->comment('Email para facturacion');

            $table->decimal('yeard_baby', $precision = 3, $scale = 2)->comment('Edad maxima del infante');
            $table->decimal('yeard_child', $precision = 4, $scale = 2)->comment('Edad maxima del ninno');
            
            $table->foreignId('supplier_id')
                ->constrained();
            $table->foreignId('currency_id')
                ->constrained();
            $table->foreignId('category_id')
                ->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contracts');
    }
};
