<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stores extends Model
{
    protected $table = 'stores';

    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
