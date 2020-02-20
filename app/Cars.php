<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    protected $table = 'cars';

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function tiendas_disponibles()
    {
        return $this->belongsToMany(Stores::class, 'inventario', 'cars_id');
    }
}
