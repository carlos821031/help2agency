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
        Schema::create('contact_ways', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            //$table->unsignedBigInteger('contact_id');
            //$table->foreignId('contact_id'); 
            $table->foreignId('contact_id')->constrained();   
            //$table->foreign('contact_id')
            //        ->references('id')->on('contacts')
            //        ->onDelete('cascade')
             //       ->onUpdate('cascade');            
            $table->string('full_name')->comment('Nombre para la forma de contacto');            
            $table->string('valor')->comment('Valor del medio de contactacto');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_ways');
    }
};
