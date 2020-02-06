<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assunto extends Model
{
    public $timestamps = false;
    public $incrementing = true;
    
    protected $fillable = [
        'nome',
        'slug'
    ];

    public function pai()
    {
        return $this->hasOneThrough(
            Assunto::class,
            ArvoreAssunto::class,
            'assunto_filho_id',
            'id',
            'id',
            'assunto_filho_id'
        );
    }

    public function filhos()
    {
        return $this->belongsToMany(
            Assunto::class,
            'arvore_assunto',
            'assunto_pai_id',
            'assunto_filho_id'
        );
    }

    public function questoes($arrParam = [])
    {
        $questoes = $this->hasMany(
            Questao::class
        );
        if ($arrParam) {
            $questoes->where($arrParam);
        }
        return $questoes;
    }

    public function quantidadeQuestoes($arrParam = [])
    {
        $quantidadeQuestoes = $this->questoes($arrParam)->count();
        $filhos = $this->filhos()->get();
        if ($filhos->isNotEmpty()) {
            foreach ($filhos as $filho) {
                $quantidadeQuestoes += $filho->quantidadeQuestoes($arrParam);
            }
        }
        return $quantidadeQuestoes;
    }

    public function scopeAssuntosRaiz($query)
    {
        return $query->doesntHave('pai');
    }
}