<?php

namespace App\Http\Controllers;

use App\Models\Descontos;
use Illuminate\Http\Request;
use App\Http\Resources\DescontosResource as DescontosResource;

class DescontosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $desconto = Descontos::orderby('desconto','asc')->get();
        return $desconto;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $descontos = new Descontos;
        $descontos->desconto = $request->input('desconto');
    
        if( $descontos->save() ){
          return new DescontosResource( $descontos );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $descontos = Descontos::findOrFail( $id );
        return new DescontosResource( $descontos );
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
        $descontos = Descontos::findOrFail( $request->id );
        $descontos->titulo = $request->input('titulo');

        if( $descontos->save() ){
            return new DescontosResource( $descontos );
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $descontos = Descontos::findOrFail( $id );
        if( $descontos->delete() ){
            return new DescontosResource( $descontos );
        }
    }
}