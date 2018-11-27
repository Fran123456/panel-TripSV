<?php

namespace App\Http\Controllers\Guia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;
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
        $items = Guia::all();

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
        $guide = Guia::create([
        'nombre'=>$request['name'],
        'img_profile'=>$request->file('image'),
        'apellido'=>$request['apellido'],
        'dui'=>$request['dui'],
        'disponibilidad'=>$request['disponibilidad']

       ]);
        
        if($request->file('image')){
            $path = Storage::disk('public')->put('image',$request->file('image'));
            $guide->fill(['img_profile'=> asset($path)])->save();
        }
        
       return redirect()->route('guia.index')->with('msgN','Registro Agregado correctamente');
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
        $datos = array(
            'disponible',
            'En_ruta'
        );
        
        $name = array(
            'disponible',
            'en ruta'
        );
        
        $items = Guia::where('id',$id)->first();
        return view('Guia.edit', compact('items','datos','name'));
        
        
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
        $guide = Guia::find($id);
        
        $guide->nombre = $request['name'];
        //$guide->img_profile = $request['image'];
        $guide->apellido = $request['apellido'];
        $guide->dui = $request['dui'];
        $guide->disponibilidad = $request['disponibilidad'];
        
        $guide->save();
        

        return redirect()->route('guia.index',$guide->id)->with('msgU','Datos actualizados correctamente');

    }
    
    public function viewfoto($id)
    {
        $guia = Guia::where('id',$id)->first();
        return view('Guia.updateFoto', compact('guia'));
    }

    public function updateFoto(Request $request, $id)
    {
        $guia = Guia::find($id);
        
        if($request->file('image')){
            $path = Storage::disk('public')->put('image',$request->file('image'));
            $guia->fill(['img_profile'=> asset($path)])->save();
        }
        
        return redirect()->route('guia.index',$guia->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Guia::find($id)->delete();
        return back()->with('supr','Usuario Eliminado correctamente');
        
    }
}
