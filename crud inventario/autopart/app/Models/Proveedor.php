<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = 'proveedor';
    protected $primaryKey = 'idProveedor';
    protected $fillable = [
        'nomProveedor',
    ];
    public $timestamps = false;

    public function inventarios()
    {
        return $this->hasMany(Inventario::class, 'idProveedor_fk', 'idProveedor');
    }

}
