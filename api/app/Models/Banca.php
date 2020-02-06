<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banca extends Model
{
    protected $primaryKey = "banca_id";
    
    public $timestamps = false;
    public $incrementing = true;

    protected $fillable = [
        'nome',
        'sigla',
    ];
}