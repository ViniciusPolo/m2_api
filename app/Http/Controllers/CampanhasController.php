<?php

namespace App\Http\Controllers;

use App\Models\Campanhas;
use Illuminate\Http\Request;
use App\Http\Resources\CampanhasResource as CampanhasResource;

class CampanhasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $campanhas = Campanhas::orderby('id','desc')->get();

        return $campanhas;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campanhas = new Campanhas();
        $campanhas->campanha = $request->input('campanha');
        $campanhas->desconto_da_campanha = $request->input('desconto_da_campanha');

    
        if( $campanhas->save() ){
          return new CampanhasResource( $campanhas );
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
        $campanhas = Campanhas::findOrFail( $id );
        return new CampanhasResource( $campanhas );
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
        
        $campanhas = Campanhas::findOrFail( $request->id );
        $campanhas->campanha = $request->input('campanha');
        $campanhas->desconto_da_campanha = $request->input('desconto_da_campanha');

    
        if( $campanhas->save() ){
          return new CampanhasResource( $campanhas );
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
        $campanhas = Campanhas::findOrFail($id);
        if($campanhas->delete()){
            return new CampanhasResource($campanhas);
        }
    }
}
