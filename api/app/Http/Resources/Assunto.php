<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Assunto extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nome' => $this->nome,
            'pai' => $this->pai,
            'filhos' => Assunto::collection($this->filhos),
            'quantidade' => $this->quantidadeQuestoes($request->all()
            ),
        ];
    }
}
