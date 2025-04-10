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
        Schema::create('clientes', function (Blueprint $table) {
            $table->string('pk_cod_cliente', 10)->primary();
            $table->string('Pnombre_cliente', 50); 
            $table->string('Snombre_cliente', 50);   
            $table->string('Papellido_cliente', 50); 
            $table->string('Sapellido_cliente', 50);
            $table->string('telefono_cliente', 15);
            $table->string('correo_cliente', 50)->unique();
            $table->string('direccion_cliente', 100);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
