<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\guiasChart;
use App\Charts\RutasChart;
use App\Charts\unidadesChart;
use App\ruta_turistica;
use App\paquete;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Guias con mas Viajes Hechos
        $packM = paquete::where('guia_id','=',1)->count();
        $packE = paquete::where('guia_id','=',3)->count();
        $packJ = paquete::where('guia_id','=',2)->count();
        
        $chart = new guiasChart();
        $chart->labels(['Maria','Ever','Juan']);
        $chart->dataset('Guias','bar',[$packM,$packE,$packJ]);
        $chart->loaderColor('#B7EB95');
        //Guias con mas Viajes Hechos
        
        
        //Rutas mas visitadas
        $rutasOcc = ruta_turistica::where('titulo','=','occidente')->count();
        $rutasOr = ruta_turistica::where('titulo','=','oriente')->count();
        $rutasC = ruta_turistica::where('titulo','=','central')->count();
        
        $ruta = new RutasChart();
        $ruta->labels(['Ruta a Occidente','Ruta a Oriente','Ruta a Zona Central']);
        $ruta->dataset('Rutas Mas Visitadas','pie',[$rutasOcc,$rutasOr,$rutasC]);
        $ruta->loaderColor('yellow');
        //Rutas mas visitadas
        
        //Unidades mas Preferidas
        $unidad1 = paquete::where('transporte_id','=',1)->count();
        $unidad2 = paquete::where('transporte_id','=',2)->count();
        $unidad3 = paquete::where('transporte_id','=',3)->count();
        
        $unidad = new unidadesChart();
        
        $unidad->labels(['Microbus #1','Microbus #2','Microbus #3']);
        $unidad->dataset('Unidades mas Preferidas','line',[$unidad1,$unidad2,$unidad3]);
        $unidad->loaderColor('red');
        //Unidades mas Preferidas
        
        return view('home', compact('chart','ruta','unidad'));
    }
}
