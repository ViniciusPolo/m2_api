<?php

namespace App\Http\Resources;

use App\Models\Descontos;
use App\Http\Resources\ProdutosResource as ProdutosResource;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\DescontosResource as DescontosResource;
use App\Models\Produtos;

class CampanhasResource extends JsonResource
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
            'campanha'=>$this->campanha,
            'desconto_da_campanha'=>$this->desconto_da_campanha,
            'descontos em %'=> DescontosResource::collection(Descontos::where('id','=',$this->desconto_da_campanha)->get()),
            'produtos da campanha'=> ProdutosResource::collection(Produtos::where('campanha_atual','=',$this->id)->get())


        ];
    }
}
