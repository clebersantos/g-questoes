<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orgao extends Model
{
    protected $primaryKey = "orgao_id";
    
    public $timestamps = false;
    public $incrementing = true;

    protected $fillable = [
        'nome',
        'sigla'
    ];
}