<?php

namespace App\Http\Controllers;

use App\Models\Cidades;
use App\Models\Grupocidades;
use Illuminate\Http\Request;
use App\Http\Resources\CidadesResource as CidadesResource;


class CidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cidades = Cidades::orderby('cidade','asc')->get();
        return $cidades;


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cidades = new Cidades();
        $cidades->cidade = $request->input('cidade');
        $cidades->grupo_cidade = $request->input('grupo_cidade');

        if( $cidades->save() ){
            return new CidadesResource( $cidades );
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
        $cidades = Cidades::findOrFail( $request ->id );
        return new CidadesResource( $cidades );
    }

     /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showdetails(Request $request)
    {
        $cidades = Cidades::findOrFail( $request->id)->first();
        return new CidadesResource( $cidades );
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
        $cidades = Cidades::findOrFail( $request->id );
        $cidades->cidade = $request->input('cidade');
        $cidades->grupo_cidade= $request->input('grupo_cidade');

    
        if( $cidades->save() ){
          return new CidadesResource( $cidades );
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
        $cidades = Cidades::findOrFail( $request->id );
        if($cidades->delete()){
            return new CidadesResource($cidades);
        }
    }
}
