<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    protected $table = 'reference';
    protected $primaryKey = 'idReference';
    protected $fillable = [
        'nomReference',
    ];
    public $timestamps = false;

    public function inventarios()
    {
        return $this->hasMany(Inventario::class, 'idReference_fk', 'idReference');
    }

}
