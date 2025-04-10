<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table = 'venta';   
    protected $primaryKey = 'pk_cod_venta';
    protected $fillable = [
        'pk_cod_venta',
        'fecha_venta',
        'subtotal',
        'total',
        'cantidad',
        'descuento',
        'fk_cod_cliente',
    ];
    public $timestamps = false; // Desactivar los timestamps si no se utilizan
}
