<?php

namespace App\Http\Controllers\paquete;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\paquete as package;
use App\Guia ;
use App\transporte_model as tran;
use App\ruta_turistica;
class PaqueteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {     
          $paquete = package::orderBy('id','asc')->paginate(10);
          return view('paquete.paquete', compact('paquete'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $transporte =tran::get();
        $guias = Guia::where('disponibilidad', 'Disponible')->get();
        return view('paquete.nuevo', compact('guias', 'transporte'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pack = new package();
        $ruta = new ruta_turistica();
        
        $lenght = 10;
        
        $randString = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"),0,$lenght);
        
        
         $ruta->titulo = $request->titulo_ruta;
        $ruta->latitudInicial = $request->lati_inicial;
        $ruta->longitudInicial = $request->long_inicial;
        $ruta->latitudfinal = $request->lati_final;
        $ruta->longitudfinal = $request->long_final;
        $ruta->descripcion = $request->descripcion;
        $ruta->save();
        
        $pack->titulo = $request->titulo;
        $pack->slug = $request->slug;
        $pack->body = $request->body;
        $pack->estado = $request->estado;
        $pack->cupo = $request->cupo;
        $pack->fechaDeViaje = $request->fechaViaje;
        $pack->hora_partida = $request->hora_partida;
        $pack->hora_regreso = $request->hora_regreso;
        $pack->guia_id = $request->guia;
        $pack->rutaTuristica_id = $randString;
        $pack->transporte_id = $request->transporte;
        $pack->user_id = $request->user;
        $pack->save();
        
        
       
        
        return redirect()->route('paquete.index');
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
    public function destroy($id)
    {
        //
    }
}
