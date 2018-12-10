<?php
namespace App\Http\Controllers\paquete;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\paquete as package;
use App\Guia ;

use App\User;
use App\transporte_model as tran;
use App\ruta_turistica;
use Illuminate\Support\Facades\Auth;

class PaqueteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {     

          $paquete = package::orderBy('id_paquete','asc')->paginate(10);

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

        $user = User::get();
        return view('paquete.nuevo', compact('guias', 'transporte','user'));

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
        //codigo para paquete
        $randString = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"),0,$lenght);
        $n1 = rand(1000000, 9999999);
        $n2 = rand(1000, 9999);
        $str = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"),0,5);
        $codePackage = "paquete-".$n1."-".$randString."-".$n2."-".$str;
        //fin para codigo de paquete
        
        //codigo para ruta
        $randSt1 = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"),0,$lenght);
        $m1 = rand(1000000, 9999999);
        $m2 = rand(1000, 9999);
        $str2 = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"),0,5);
        $codeRuta = "ruta-".$m1."-".$randSt1."-".$m2."-".$str2;
        //fin para codigo de ruta
        
        $ruta->id_ruta = $codeRuta;       
        $ruta->titulo = $request->titulo_ruta;
        $ruta->latitudInicial = $request->lati_inicial;
        $ruta->longitudInicial = $request->long_inicial;
        $ruta->latitudfinal = $request->lati_final;
        $ruta->longitudfinal = $request->long_final;
        $ruta->descripcion = $request->descripcion;
        $ruta->save();
        
        $pack->id_paquete = $codePackage;
        $pack->titulo = $request->titulo;
        $pack->slug = $request->slug;
        $pack->body = $request->body;
        $pack->estado = $request->estado;
        $pack->cupo = $request->cupo;
        $pack->stock = $request->stock;
        $pack->fechaDeViaje = $request->fechaViaje;
        $pack->hora_partida = $request->hora_partida;
        $pack->hora_regreso = $request->hora_regreso;
        $pack->guia_id = $request->guia;
        $pack->rutaTuristica_id = $codeRuta;
        $pack->transporte_id = $request->transporte;
        $pack->user_id = Auth::user()->id;
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
          $paquete =  package::where('id_paquete',$id)->first();
          $transporte =tran::get();
          $guias = Guia::where('disponibilidad', 'Disponible')->get();
          $ruta = ruta_turistica::where('id_ruta', $paquete->rutaTuristica_id)->first();
          
          $select =  $this->select_estado($paquete->estado);
          return view('paquete.show', compact('paquete', 'select', 'transporte', 'guias', 'ruta'));
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
        $ruta = ruta_turistica::find($id);
             
        $ruta->titulo = $request->titulo_ruta;
        $ruta->latitudInicial = $request->lati_inicial;
        $ruta->longitudInicial = $request->long_inicial;
        $ruta->latitudfinal = $request->lati_final;
        $ruta->longitudfinal = $request->long_final;
        $ruta->descripcion = $request->descripcion;
        $ruta->save();

        $pack = package::find($id);
        
        $pack->titulo = $request->titulo;
        $pack->slug = $request->slug;
        $pack->body = $request->body;
        $pack->estado = $request->estado;
        $pack->cupo = $request->cupo;
        $pack->stock = $request->stock;
        $pack->fechaDeViaje = $request->fechaViaje;
        $pack->hora_partida = $request->hora_partida;
        $pack->hora_regreso = $request->hora_regreso;
        $pack->guia_id = $request->guia;
        $pack->transporte_id = $request->transporte;
        $pack->save();
        
        return redirect()->route('paquete.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        package::find($id)->delete();
        return back()->with('msgD','Item eliminado con exito');
    }


    public function select_estado($option){
        $variableSelect ="";
        $valores = array(
           'Publicado', 'Completado','Borrador'
        );
        for ($i=0; $i <3 ; $i++) { 
            if($option == $valores[$i]){
                $variableSelect= $variableSelect . "<option selected value='".$option."'>".$option."</option>";
            }else{
                 $variableSelect= $variableSelect. "<option value='".$valores[$i]."'>".$valores[$i]."</option>";
            }
        }

        return $variableSelect;
    }
}
