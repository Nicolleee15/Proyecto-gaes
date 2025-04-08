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
        Schema::create('inventario', function (Blueprint $table) {
            $table->increments('idCodBarras');
            $table->string('estado', 15);
            $table->string('ubi_pasillo', 15);
            $table->string('ubi_estanteria', 15);
            $table->integer('precio_unitario');
            $table->date('fecha_ingreso');
            $table->integer('cantidad_ingresada');
            $table->string('estado_activacion', 15);
            
            $table->unsignedInteger('idMarca_fk');
            $table->foreign('idMarca_fk')->references('idMarca')->on('marcas');
        
            $table->unsignedInteger('idTipo_fk');
            $table->foreign('idTipo_fk')->references('id')->on('tipo_repuesto');

            $table->unsignedInteger('idColor_fk');
            $table->foreign('idColor_fk')->references('idColor')->on('color');
        
            $table->unsignedInteger('idProveedor_fk');
            $table->foreign('idProveedor_fk')->references('idProveedor')->on('proveedor');
        
            $table->unsignedInteger('idReference_fk');
            $table->foreign('idReference_fk')->references('idReference')->on('reference');
        
            $table->unsignedInteger('idModelo_fk');
            $table->foreign('idModelo_fk')->references('idModelo')->on('modelo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventario');
    }
};

