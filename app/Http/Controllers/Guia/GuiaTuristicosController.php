<?php

namespace App\Http\Controllers\Guia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Redirect;
use DataTables;
use App\Guia;

class GuiaTuristicosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $items = \App\Guia::all();

        return view('Guia.Guia', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Guia.Guia');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        App\Guia::create([
        'nombre'=>$request['name'],
        'img_perfil'=>$request['image'],
        'apellido'=>$request['apellido'],
        'dui'=>$request['dui'],
        'direccion'=>$request['direccion'],
        'disponibilidad'=>$request['disponibilidad']



       ]);
       return "Usuario registrado";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $guia= Guia::find($id);
        return view('Guia.Guia', compact('guia'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_guia)
    {
        Guia::find($id_guia)->delete();
        return back()->with('info','Usuario Eliminado correctamente');
        
    }
}
