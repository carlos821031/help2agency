<?php

use Faker\Guesser\Name;
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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name')->comment('Nombre del Contacto');
            $table->string('last_name_1')->nullable()->comment('Apellido 1');
            $table->string('last_name_2')->nullable()->comment('Apellido 2');
            $table->string('email')->comment('Nombre del Contacto');
            $table->string('phone')->nullable()->comment('Telefona');            
            $table->string('nationality')->nullable()->comment('Nacionalidad');
            $table->text('description')->nullable()->comment('Notas sobre el contacto');
            $table->string('job')->nullable()->comment('Ocupacion, puesto d etrabajo');
            $table->string('show_as')->nullable()->comment('Mostrar como ...');
            $table->string('page_web')->nullable()->comment('Pagina web');            
            $table->text('address')->nullable()->comment('Direccion completa');
            $table->string('privacy')->nullable()->comment('Nivel de privacidad');
            $table->boolean('active');           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
