<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rol;

class RolController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //if($clientes.usuario=="alum"){
        //}
        $rol = Rol::all(); 
        //foreach($clientes as $cliente){
        //    echo $cliente->nombre."</br>";        
        //}
        // return response()->json(['success' => true,
        //    'data' => $clientes,
        //    'message' => 'Operacion Correcta'], 200);
        return response()->json($rol);
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
        Rol::create($request->all());
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
        $rol= Rol::findOrFail($id);
        //echo "$cliente->nombre<br>";
        //echo "$cliente->apellido<br>";
        //echo "$cliente->telefono<br>";
        //echo "$cliente->direccion<br>";
        return response()->json($rol);
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
        
        Rol::findOrFail($id)->update($request->all());
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
        Rol::findOrFail($id)->delete();
        return response()->json(['success' => true]);
    }
}
