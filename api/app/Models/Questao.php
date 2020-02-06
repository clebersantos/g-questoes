<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Questao extends Model
{
    public $timestamps = false;
    public $incrementing = true;

    protected $fillable = [
        'nome',
        'orgao_id',
        'banca_id',
        'assunto_id'
    ];

    public function assunto()
    {
        return $this->hasOne(
            Assunto::Class,
            'id',
            'assunto_id'
        );
    }

    public function banca()
    {
        return $this->hasOne(
            Banca::Class,
            'id',
            'banca_id'
        );
    }

    public function orgao()
    {
        return $this->hasOne(
            Orgao::Class,
            'id',
            'orgao_id'
        );
    }
}