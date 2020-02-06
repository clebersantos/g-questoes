<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banca extends Model
{   
    public $timestamps = false;
    public $incrementing = true;

    protected $fillable = [
        'nome',
        'sigla',
    ];
}
