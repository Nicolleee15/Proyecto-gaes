<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Empleado extends Authenticatable
{
    use Notifiable;

    protected $table = 'empleados';

    protected $primaryKey = 'id'; // Cambiar si tu PK tiene otro nombre

    protected $fillable = [
        'p_nombre_usuario',
        's_nombre_usuario',
        'p_apellido_usuario',
        's_apellido_usuario',
        'email_usuarios',
        'password_usuarios',
        'tipo_usuario',
        'telefono',
    ];

    protected $hidden = [
        'password_usuarios',
        'remember_token',
    ];

    // Sobrescribir método para password personalizado
    public function getAuthPassword()
    {
        return $this->password_usuarios;
    }
}
