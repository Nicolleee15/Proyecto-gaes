<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tiporepuesto extends Model
{
    protected $table = 'tipo_repuesto';
    protected $primaryKey = 'id';
    protected $fillable = [
        'tipo',
        'stock'
    ];
    public $timestamps = false;

    public function inventarios()
    {
        return $this->hasMany(Inventario::class, 'idTipo_fk', 'id');  // 'idTipo_fk' es la clave foránea en 'Inventarios' que apunta a 'id' de 'Tiporepuesto'
    }
}
