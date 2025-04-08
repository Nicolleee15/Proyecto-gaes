<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $table = 'color';
    protected $primaryKey = 'idColor';
    protected $fillable = [
        'nomColor',
    ];
    public $timestamps = false;

    public function inventarios()
    {
        return $this->hasMany(Inventario::class, 'idColor_fk', 'idColor');
    }

}
