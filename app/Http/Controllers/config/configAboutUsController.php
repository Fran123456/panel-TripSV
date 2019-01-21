<?php

namespace App\Http\Controllers\config;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class configAboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bg = DB::table('configuracion')->where('clave','background_AboutUs')->first();
        return view('config.aboutUs.index', compact('bg'));
    }

    
    public function update(Request $request)
    {
        DB::table('configuracion')->where('clave','background_AboutUs')
            ->update([
                'contenido'=>$request->contenido
            ]);
        
        return redirect()->route('config-aboutUs.index');
    }
    
    public function viewText()
    {
        $title = DB::table('configuracion')->where('clave','title_AboutUs')->first();
        $hist = DB::table('configuracion')->where('clave','historia_AboutUs')->first();
        
        return view('config.aboutUs.viewText', compact('title','hist'));
    }
    
    public function updateText(Request $request)
    {
        DB::table('configuracion')->where('clave','title_AboutUs')
                ->update([
                    'contenido'=>$request->contenidoT
                ]);
        
        DB::table('configuracion')->where('clave','historia_AboutUs')
                ->update([
                    'contenido'=>$request->contenidoH
                ]);
        
        return back()->with('msgS','Datos actualizados correctamente');
    }

    
}
