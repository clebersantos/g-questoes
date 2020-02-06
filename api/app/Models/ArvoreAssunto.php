<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArvoreAssunto extends Model
{
    public $timestamps = false;
    public $incrementing = true;
    
    protected $fillable = [
        'assunto_pai_id',
        'assunto_filho_id'
    ];

    public function pai()
    {
        return $this->hasOne(
            Assunto::class,
            'assunto_id',
            'assunto_pai_id'
        );
    }

    public function filho()
    {
        return $this->hasOne(
            Assunto::class,
            'assunto_id',
            'assunto_filho_id'
        );
    }
}