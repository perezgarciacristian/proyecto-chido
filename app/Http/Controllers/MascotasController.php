<?php

namespace App\Http\Controllers;

use App\Models\mascotas;
use Illuminate\Http\Request;

class MascotasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mascotas = mascotas::all();
        return view('mascotas.mascotasindex', compact('mascotas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mascotas.mascotasCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
           'Nombre' => 'required',
           'Edad'=> 'required',
           'Genero'=> 'required',
        ]);

        mascotas::create($request->all());

        return redirect('/mascotas');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mascotas  $mascotas
     * @return \Illuminate\Http\Response
     */
    public function show(mascotas $mascotas)
    {
        return view('mascotas.mascotasShow', compact('mascotas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mascotas  $mascotas
     * @return \Illuminate\Http\Response
     */
    public function edit(mascotas $mascotas)
    {
        return view('mascotas.mascotasedit', compact('mascotas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\mascotas  $mascotas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mascotas $mascotas)
    {
        //dd($request->all());
        $request->validate([
            'Nombre' => 'required',
            'Edad'=> 'required',
            'Genero'=> 'required',
         ]);

         //$mascotas->Nombre = $request->Nombre;
         //$mascotas->Edad = $request->Edad;
         //$mascotas->Genero = $request->Genero;

        
         mascotas::where('id', $mascotas)->update($request->except('_token','_method'));

         return redirect('/mascotas');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mascotas  $mascotas
     * @return \Illuminate\Http\Response
     */
    public function destroy(mascotas $mascotas)
    {
        $mascotas->delete();
        return redirect('/mascotas');
    }
}
