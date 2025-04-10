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
        Schema::create('venta', function (Blueprint $table) {
            $table->string('pk_cod_venta', 10)->primary();
            $table->date('fecha_venta');
            $table->decimal('subtotal', 10, 2);
            $table->decimal('total', 10, 2);
            $table->integer('cantidad');
            $table->decimal('descuento', 10, 2);
            $table->string('fk_cod_cliente', 10);
            $table->foreign('fk_cod_cliente')->references('pk_cod_cliente')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('venta');
    }
};
