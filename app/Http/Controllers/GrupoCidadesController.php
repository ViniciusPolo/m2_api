<?php

namespace App\Http\Controllers;

use App\Models\Grupocidades;
use Illuminate\Http\Request;
use App\Http\Resources\GrupoCidadesResource as GrupoCidadesResource;


class GrupoCidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grupocidades = Grupocidades::orderby('id','desc')->get();
        return $grupocidades;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $grupocidades = new GrupoCidades();
        $grupocidades->grupo = $request->input('grupo');
        $grupocidades->campanha_ativa = $request->input('campanha_ativa');

        if( $grupocidades->save() ){
            return new GrupoCidadesResource( $grupocidades );
          }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $grupocidades = Grupocidades::findOrFail( $request->id );
        return new GrupoCidadesResource( $grupocidades );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $grupocidades = GrupoCidades::findOrFail( $request->id );
        $grupocidades->grupo = $request->input('grupo');
        $grupocidades->campanha_ativa= $request->input('campanha_ativa');

    
        if( $grupocidades->save() ){
          return new GrupoCidadesResource( $grupocidades );
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $grupocidades = GrupoCidades::findOrFail( $request->id );
        if($grupocidades->delete()){
            return new GrupoCidadesResource($grupocidades);
        }

    }
}
