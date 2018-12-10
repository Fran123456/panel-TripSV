<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\categoria;

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
        $chart = new categoria();
        $chart->labels(['Comida','Recomendaciones','Consejos']);
        $chart->dataset('Categorias','bar',[5,10,15]);
        $chart->loaderColor('#B7EB95');
        return view('home', compact('chart'));
    }
}
