<?php

namespace App\Http\Controllers;

use App\Models\Disqueras;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DisquerasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros['disqueras']=Disqueras::paginate(10);
        return view('disqueras.index',$registros);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('disqueras.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosdisquera=request()->except('_token');

        
        if($request->hasfile('fotos')){
            $datosdisquera['fotos']=$request->file('fotos')->store('uploads','public');
        }
        
        Disqueras::insert($datosdisquera);

        //return response()->json($datosdisquera);

        return redirect('disqueras')->with('msj','Disquera registrada exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Disqueras  $disqueras
     * @return \Illuminate\Http\Response
     */
    public function show(Disqueras $disqueras)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Disqueras  $disqueras
     * @return \Illuminate\Http\Response
     */
    public function edit($id_Disquera)
    {
        $disqueras=Disqueras::findOrFail($id_Disquera);
        return view('disqueras.edit',compact('disqueras'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Disqueras  $disqueras
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_Disquera)
    {
        $datosdisquera=request()->except('_token','_method');

        if ($request->hasFile('fotos')){
            $disqueras=Disqueras::findOrFail($id_Disquera);
            Storage::delete('public/'.$disqueras->fotos);
            $datosdisquera['fotos']=$request->file('fotos')->store('uploads','public');
        }

        Disqueras::where('id_Disquera','=',$id_Disquera)->update($datosdisquera);
        return redirect('disqueras')->with('msj','Disquera actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Disqueras  $disqueras
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_Disquera)
    {
        $disqueras=Disqueras::findOrFail($id_Disquera);
        
        if(Storage::delete('public/'.$disqueras->foto)){
            Disqueras::destroy($id_Disquera);
        }

        
        
         return redirect('disqueras')->with('msj','Disquera borrada exitosamente');
    }
}
