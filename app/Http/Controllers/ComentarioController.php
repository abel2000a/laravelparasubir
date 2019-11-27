<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comentario;
use Illuminate\Support\Facades\DB;

class ComentarioController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sugerencia = DB::table('comentarios_sugerencia')
        ->join('persona' , 'persona.persona_id' , 'comentarios_sugerencia.persona_id')
        ->select('comentarios_sugerencia.*','persona.persona_nombre','persona.persona_celular')
        ->get();
        return response()->json($sugerencia);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //$d = new \stdClass();
        //$d->titulo = $request->input('titulo');
        //$d->descripcion = $request->input('descripcion');
        Comentario::create($request->all());
        return response()->json(['success' => true]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($comentario_id)
    {
        //
        $comentario= Comentario::findOrFail($comentario_id);
        //echo "$cliente->nombre<br>";
        //echo "$cliente->apellido<br>";
        //echo "$cliente->telefono<br>";
        //echo "$cliente->direccion<br>";
        return response()->json($comentario);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($comentario_id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $comentario_id)
    {
        
        Comentario::findOrFail($comentario_id)->update($request->all());
            return response()->json(['success' => true]);
        
 
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($comentario_id)
    {
        Comentario::findOrFail($comentario_id)->delete();
        return response()->json(['success' => true]);
    }
}