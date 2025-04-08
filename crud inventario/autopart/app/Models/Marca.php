<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table = 'marcas';
    protected $primaryKey = 'idMarca';
    protected $fillable = [
        'nomMarca',
    ];
    public $timestamps = false;

    public function inventarios()
    {
        return $this->hasMany(Inventario::class, 'idMarca_fk', 'idMarca');
    }
}
