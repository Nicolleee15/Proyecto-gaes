<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    protected $table = 'inventario';
    protected $primaryKey = 'idCodBarras';
    protected $fillable = [
        'estado',
        'ubi_pasillo',
        'ubi_estanteria',
        'precio_unitario',
        'fecha_ingreso',
        'cantidad_ingresada',
        'estado_activacion',
        'idMarca_fk',
        'idTipo_fk',
        'idColor_fk',
        'idProveedor_fk',
        'idReference_fk',
        'idModelo_fk'
    ];

    public $timestamps = false;

    public function marca()
    {
        return $this->belongsTo(Marca::class, 'idMarca_fk', 'idMarca');
    }

    public function tiporepuesto()
    {
        return $this->belongsTo(Tiporepuesto::class, 'idTipo_fk', 'id');  // 'idTipo_fk' es la clave foránea en 'Inventarios' que apunta a 'id' de 'Tiporepuesto'
    }

    public function color()
    {
        return $this->belongsTo(Color::class, 'idColor_fk', 'idColor');
    }

    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class, 'idProveedor_fk', 'idProveedor');
    }

    public function reference()
    {
        return $this->belongsTo(Reference::class, 'idReference_fk', 'idReference');
    }

    public function modelo()
    {
        return $this->belongsTo(Modelo::class, 'idModelo_fk', 'idModelo');
    }
}
