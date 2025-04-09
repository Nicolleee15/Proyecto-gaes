<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('p_nombre_usuario');
            $table->string('s_nombre_usuario');
            $table->string('p_apellido_usuario');
            $table->string('s_apellido_usuario');
            $table->string('email_usuarios');
            $table->string('password_usuarios');
            $table->string('tipo_usuario');
            $table->string('telefono', 15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
};
