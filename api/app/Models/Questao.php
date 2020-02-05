<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Questao extends Model
{
    protected $table = 'tb_questao';
    protected $primaryKey = "id_questao";

    public $timestamps = false;
    public $incrementing = true;

    protected $fillable = [
        'ds_questao',
        'id_orgao',
        'id_banca',
        'id_assunto'
    ];

    public function assunto()
    {
        return $this->hasOne(
            Assunto::Class,
            'id_assunto',
            'id_assunto'
        );
    }

    public function banca()
    {
        return $this->hasOne(
            Banca::Class,
            'id_banca',
            'id_banca'
        );
    }

    public function orgao()
    {
        return $this->hasOne(
            Assunto::Class,
            'id_orgao',
            'id_orgao'
        );
    }
}