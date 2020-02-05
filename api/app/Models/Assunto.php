<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assunto extends Model
{
    protected $table = 'tb_assunto';
    protected $primaryKey = "id_assunto";

    public $timestamps = false;
    public $incrementing = true;
    
    protected $fillable = [
        'no_assunto',
        'id_assunto_pai'
    ];
}