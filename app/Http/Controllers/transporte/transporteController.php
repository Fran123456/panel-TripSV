<?php

namespace App\Http\Controllers\transporte;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\transporte_model as transporte_model;

class transporteController extends Controller
{
    
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $transp = transporte_model::orderBy('id','asc')->paginate(10);
        return view('unidades.unidad', compact('transp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('unidades.nuevo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $trans = new transporte_model();
        $trans->nombre = $request->nameT;
        $trans->descripcion = $request->descT;
        $trans->capacidad = $request->capaT;
        $trans->save();
        
        return redirect()->route('unidad.index')
                ->with('msgN','Unidad agregada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transp = transporte_model::where('id',$id)->first();
        return view('unidades.editar', compact('transp'));
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
        $tran = transporte_model::find($id);
        
        $tran->nombre = $request->nameT;
        $tran->descripcion = $request->descT;
        $tran->capacidad = $request->capaT;
        
        $tran->save();
            
        return redirect()->route('unidad.index',$tran->id)->with('msgN','Unidad actualizada correctamente');       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = transporte_model::find($id)->delete();


        return back()->with('msgD','Unidad eliminada con exito');
    }
}
