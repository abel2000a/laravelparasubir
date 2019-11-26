<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mostrar;
use Illuminate\Support\Facades\DB;

class MostrarController extends Controller
{
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illumin  ate\Http\Response
     */
    public function index()
    {
        $egresa = DB::table('egresado')
        ->join('persona' , 'persona.persona_id' , 'egresado.persona_id')
        ->join('escuela_prof','escuela_prof.escuela_prof_id','egresado.escuela_prof_id')
        ->join('facultad','facultad.facultad_id','escuela_prof.facultad_id')
        ->select('persona.persona_id','egresado.egresado_codigo','persona.persona_nombre','persona_apellido_pat','facultad.facultad_nombre','facultad.facultad_sede')
        ->get();
        return response()->json($egresa);
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
        Mostrar::create($request->all());
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
    public function show($id)
    {
        //
        $local_view= Mostrar::findOrFail($id);
        //echo "$cliente->nombre<br>";
        //echo "$cliente->apellido<br>";
        //echo "$cliente->telefono<br>";
        //echo "$cliente->direccion<br>";
        return response()->json($local_view);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    public function update(Request $request, $id)
    {
        
        Mostrar::findOrFail($id)->update($request->all());
            return response()->json(['success' => true]);
        

        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mostrar::findOrFail($id)->delete();
        return response()->json(['success' => true]);
    }
}
