<?php

namespace App\Http\Controllers;
use App\Models\Mesa;
use Illuminate\Http\Request;

class MesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() // consultar la información
    {
        //
        $mesas=Mesa::get();
        return response()->json($mesas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $mesas=new Mesa();
        $mesas->numero_mesa=$request->numero_mesa;
        $mesas->capacidad=$request->capacidad;
        $mesas->estado=$request->estado;
        $mesas->ubicacion=$request->ubicacion;
        $mesas->save();
        return response()->json($mesas);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $mesa=Mesa::find($id);
        return response()->json($mesa);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $mesa=Mesa::find($id);
        $mesa->numero_mesa=$request->numero_mesa;
        $mesa->capacidad=$request->capacidad;
        $mesa->estado=$request->estado;
        $mesa->ubicacion=$request->ubicacion;
        $mesa->save();
        return response()->json($mesa);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

        Mesa::destroy($id);
        return response()->json(['message'=>'Se elimino correctamente']);
    }
}
