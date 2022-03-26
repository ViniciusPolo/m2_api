<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;
use App\Http\Resources\ProdutosResource as ProdutosResource;
use App\Models\Grupocidades;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produtos::orderby('produto','asc')->get();
        return $produtos;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produtos = new Produtos;
        $produtos->produto = $request->input('produto');
        $produtos->preco_produto = $request->input('preco_produto');
        $produtos->campanha_atual = $request->input('campanha_atual');

    
        if( $produtos->save() ){
          return new ProdutosResource( $produtos );
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
        $produtos = Produtos::findOrFail($request->id);
        return new ProdutosResource($produtos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $produtos = GrupoCidades::findOrFail( $request->id );
        $produtos->produto = $request->input('produto');
        $produtos->preco_produto = $request->input('preco_produto');
        $produtos->campanha_atual = $request->input('campanha_atual');

        if( $produtos->save() ){
            return new ProdutosResource( $produtos );
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
        $produtos = Produtos::findOrFail($request->id);
        if($produtos->delete()){
            return new ProdutosResource($produtos);
        }

    }
}
