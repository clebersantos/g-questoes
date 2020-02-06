<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Questao extends Model
{
    protected $primaryKey = "questao_id";

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
            'questao_id',
            'assunto_id'
        );
    }

    public function banca()
    {
        return $this->hasOne(
            Banca::Class,
            'questao_id',
            'banca_id'
        );
    }

    public function orgao()
    {
        return $this->hasOne(
            Orgao::Class,
            'questao_id',
            'orgao_id'
        );
    }
}