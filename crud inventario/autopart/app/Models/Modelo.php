<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    protected $table = 'modelo';
    protected $primaryKey = 'idModelo';
    protected $fillable = [
        'nomModelo',
    ];
    public $timestamps = false;

    public function inventarios()
    {
        return $this->hasMany(Inventario::class, 'idModelo_fk', 'idModelo');
    }
}
