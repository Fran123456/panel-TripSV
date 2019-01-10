<?php
namespace App\Http\Controllers\Multimedia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\multimedia;
use App\paquete as package;
use App\post;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;


class MultimediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  // $multimedia1 = multimedia::paginate(10);

        
       $multimedia1 = DB::table('multimedia')
            ->join('paquetes', 'multimedia.paquete_id', '=', 'paquetes.id_paquete')
           // ->join('posts', 'multimedia.post_id', '=', 'posts.id_post')
            ->select('multimedia.*', 'paquetes.titulo')
            ->get();

        return view('multimedia.multimedia', compact('multimedia1'));
    }

    public function index2(){
         $multimedia1 = DB::table('multimedia')
            ->join('posts', 'multimedia.post_id', '=', 'posts.id')
           // ->join('posts', 'multimedia.post_id', '=', 'posts.id_post')
            ->select('multimedia.*', 'posts.titulo')
            ->get();

        return view('multimedia.multimediaPost', compact('multimedia1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create($id)
    {
       // return view('multimedia.nuevo');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


     $r = package::where('id_paquete',$request['idpaquete'])->first();
      $respuesta = 0;
      if($r == null){
        $respuesta = 1;
      }

         

        if($respuesta == 0){
              $guide = multimedia::create([
                        'url'=>$request['url'],
                        'tipox' => $request['seleccion'],
                        'paquete_id'=>$request['idpaquete']
                      ]);
              $guide->save();
              return redirect()->route('multimedia.index')->with('msgN','Registro Agregado correctamente');
        }
        elseif($respuesta==1)
        {
              $guide = multimedia::create([
                        'url'=>$request['url'],
                        'tipox' => $request['seleccion'],
                        'post_id'=>$request['idpaquete']
                      ]);
              $guide->save();
              return redirect()->route('multimedia-post')->with('msgN','Registro Agregado correctamente');
        }
       
       
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        multimedia::find($id)->delete();
        return back()->with('supr','Elemento Eliminado correctamente');

    }


    public function multimedia_paquete($id){
        
        $paquete  = package::where('id_paquete',$id)->first();
        $va = 0;

        if($paquete == null){
           $paquete = post::where('id', $id)->first();
           $va = 1;
           
        }
        return view('multimedia.nuevo', compact('paquete','va'));
    }

    public function nuevo__(){
        return view('multimedia.nuevo__');
    }


}
