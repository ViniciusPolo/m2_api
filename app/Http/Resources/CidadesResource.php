<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CidadesResource extends JsonResource
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
            'cidade'=>$this->cidade,
            'grupo_cidade'=>$this->grupo_cidade,
            'campanha'=>$this->join('grupocidades','grupocidades.id','=','grupo_cidade')->join('campanhas','campanha_ativa','=','campanhas.id')->select('campanha')->first()
            
        ];
    }
}
