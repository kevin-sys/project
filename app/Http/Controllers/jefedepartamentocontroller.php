<?php

namespace App\Http\Controllers;

use App\Models\jefedepartamento;
use Illuminate\Http\Request;

class jefedepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['jefedepartamento']=jefedepartamento::paginate(5);
        return view('jefedepartamento.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('jefedepartamento.create');

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
        $DatosJefeDepartamento=request()->except('_token');
        if($request->hasFile('Foto')){
            $DatosJefeDepartamento['Foto']=$request->file('Foto')->store('uploads', 'public');
        }
        jefedepartamento::insert($DatosJefeDepartamento);
        return response()->json($DatosJefeDepartamento);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\jefedepartamento  $jefedepartamento
     * @return \Illuminate\Http\Response
     */
    public function show(jefedepartamento $jefedepartamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\jefedepartamento  $jefedepartamento
     * @return \Illuminate\Http\Response
     */
    public function edit($Id)
    {
        //
        $jefedepartamento=jefedepartamento::findOrFail($Id);
        return view('jefedepartamento.edit', compact('jefedepartamento'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\jefedepartamento  $jefedepartamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Id)
    {
        //
        $DatosJefeDepartamento=request()->except(['_token', '_method']);
       jefedepartamento::where('Id', '=',$Id)->update($DatosJefeDepartamento);
       $jefedepartamento=jefedepartamento::findOrFail($Id);
       return view('jefedepartamento.edit', compact('jefedepartamento'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jefedepartamento  $jefedepartamento
     * @return \Illuminate\Http\Response
     */
    public function destroy($Id)
    {
        //
        jefedepartamento::destroy($Id);
        return redirect('jefedepartamento');        
    }
}
