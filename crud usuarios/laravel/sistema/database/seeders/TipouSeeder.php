<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipouSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run():void
    {
      DB::table('empleados')->insert([
        'tipo_usuario'=>'Administrador'
      ]);
      DB::table('empleados')->insert([
        'tipo_usuario'=>'Empleado'
      ]);

    }
}
