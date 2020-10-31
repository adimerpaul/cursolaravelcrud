<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas=Persona::all();
        return  view('personas',compact('personas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $persona=new Persona();
        $persona->nombre=$request->nombre;
        $persona->apellidos=$request->apellidos;
        $persona->ci=$request->ci;
        $persona->sexo=$request->sexo;
        $persona->celular=$request->celular;
        $persona->save();
        return redirect('persona');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $persona=Persona::find($id);
        return  view('modificar',compact('persona'));
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
        $persona=Persona::find($id);
        $persona->nombre=$request->nombre;
        $persona->apellidos=$request->apellidos;
        $persona->ci=$request->ci;
        $persona->sexo=$request->sexo;
        $persona->celular=$request->celular;
        $persona->save();
        return redirect('persona');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $d=Persona::find($id);
        $d->delete();
        return redirect('persona');
    }
}
