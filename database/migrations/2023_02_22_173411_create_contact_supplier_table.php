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
        Schema::create('contact_supplier', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('supplier_id')
                ->onDelete('cascade')
                ->constrained();
            $table->foreignId('contact_id')
                ->onDelete('cascade')
                ->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_suppliers'); 
        Schema::dropIfExists('contact_supplier');      
    }
};
