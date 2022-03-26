<?php

namespace App\Http\Resources;

use App\Models\Cidades;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\CidadesResource as CidadesResource;

class GrupoCidadesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'grupo'=>$this->grupo,
            'campanha_ativa '=>$this->campanha_ativa,
            'cidades'=> CidadesResource::collection(Cidades::where('grupo_cidade','=',$this->id)->get())
        ];
    }
}
