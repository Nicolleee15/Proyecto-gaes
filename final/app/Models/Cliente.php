<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';   
    protected $primaryKey = 'pk_cod_cliente';
    protected $fillable = [
        'pk_cod_cliente',
        'Pnombre_cliente',
        'Snombre_cliente',
        'Papellido_cliente',
        'Sapellido_cliente',
        'telefono_cliente',
        'correo_cliente',
        'direccion_cliente',
    ];
    public $timestamps = false; // Desactivar los timestamps si no se utilizan
  public function ventas()
    {
        return $this->hasMany(Venta::class, 'fk_cod_cliente', 'pk_cod_cliente');
    }
}

