<?php

namespace App\Http\Controllers;

use App\Models\Generos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GenerosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros['generos']=Generos::paginate(10);
        return view('generos.index',$registros);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('generos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosgeneros=request()->except('_token');

        
        if($request->hasfile('foto')){
            $datosgeneros['foto']=$request->file('foto')->store('uploads','public');
        }
        
        Generos::insert($datosgeneros);

        

        //return response()->json($datosgeneros);

        return redirect('generos')->with('msj','Genero registrado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Generos  $generos
     * @return \Illuminate\Http\Response
     */
    public function show(Generos $generos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Generos  $generos
     * @return \Illuminate\Http\Response
     */
    public function edit($id_Genero)
    {
        $generos=Generos::findOrFail($id_Genero);
        return view('generos.edit',compact('generos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Generos  $generos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_Genero)
    {
        $datosgeneros=request()->except('_token','_method');

        if ($request->hasFile('foto')){
            $generos=Generos::findOrFail($id_Genero);
            Storage::delete('public/'.$generos->foto);
            $datosgeneros['foto']=$request->file('foto')->store('uploads','public');
        }

        Generos::where('id_Genero','=',$id_Genero)->update($datosgeneros);
        return redirect('generos')->with('msj','Genero actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Generos  $generos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_Genero)
    {
        $generos=Generos::findOrFail($id_Genero);
        
        Generos::destroy($id_Genero);
        
        return redirect('generos')->with('msj','Genero borrado exitosamente');
    }
}
