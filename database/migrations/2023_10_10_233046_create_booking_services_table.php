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
        Schema::create('booking_services', function (Blueprint $table) {
            $table->id();
            $table->string('reftouroperator')->nullable(); //Referencia del touroperador
            $table->string('reference'); //Referencia nuestra
            $table->string('agency'); //Agencia
            $table->string('clients'); //Nombre de un cliente
            $table->string('service'); //Servicio
            $table->string('type')->nullable(); //Tipo de servicio
            $table->dateTime('arrival', $precision = 0); //Fecha y hora de comienzo del servicio
            $table->dateTime('sortie', $precision = 0); //fecha y hora de terminacion del servicio
            $table->text('observation'); //Observaciones
            $table->string('supplier'); //Proveedor
            $table->integer('pax')->nullable(); //Cantidad de pax
            $table->string('state')->nullable(); //Estado de la asistencia            
            $table->integer('nights')->nullable(); //Cantidad de noches
            $table->string('attendee'); //Asistente o Polo Turistico
            $table->decimal('price_total', 8, 2)->default(0)->comment('Costo total del servicio');
            $table->decimal('sales_total', 8, 2)->default(0)->comment('Precio de venta total del servicio');
            $table->string('coordinator')->nullable(); //Coordinador del servicio
            $table->integer('period')->nullable(); //Mes.ano.state q pertenece. 10.2022.active(asistencia activa), 10.2022.archive(respaldo por si da error el importar, encuanto se importe bien debe ser eliminado.)
            $table->string('economic_status')->nullable(); //Estado Contable
            $table->integer('year')->nullable(); //Año del servicio
            $table->string('invoice')->nullable(); //Factura
            $table->integer('year_invoice')->nullable(); //Fecha de factura
            $table->decimal('paid', 8, 2)->default(0)->comment('Pagado');
            $table->integer('year_paid')->nullable(); //Fecha de pagado
            $table->boolean('active');//Activo o inactivo
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                    ->references('id')->on('users')
                    ->onUpdate('cascade'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking_services');
    }
};
