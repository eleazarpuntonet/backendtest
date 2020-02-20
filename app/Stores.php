<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stores extends Model
{
    protected $table = 'stores';

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function autos_inventario()
    {
        return $this->belongsToMany(Cars::class, 'inventario', 'stores_id')
                    ->withPivot('cantidad')
                    ->as('cantidad_autos');
    }
}
