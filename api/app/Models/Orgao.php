<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orgao extends Model
{
    protected $table = 'tb_orgao';
    protected $primaryKey = "id_orgao";
    
    public $timestamps = false;
    public $incrementing = true;

    protected $fillable = [
        'no_orgao',
    ];

}