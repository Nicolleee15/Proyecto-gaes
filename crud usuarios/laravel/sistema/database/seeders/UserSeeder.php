<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
 
    public function run()
    {
            DB::table('empleados')->insert([
                'p_nombre_usuario' => 'John',
                's_nombre_usuario' => 'Alexander',
                'p_apellido_usuario' => 'Martinez',
                's_apellido_usuario' => 'Lozano',
                'email_usuarios' => 'john.martinez36@gmail.com',
                'password_usuarios' => Hash::make('john1234'),
                'tipo_usuario' =>'Administrador',
                'telefono' => '3132391778'
            ]);

    }
}
