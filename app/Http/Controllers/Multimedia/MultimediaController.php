<?php
namespace App\Http\Controllers\Multimedia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\multimedia;

use App\paquete as package;
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


       if($request['centinelatipo'] == "imagen"){
                    
                      $guide = multimedia::create([
                        'url'=>$request->file('img'),
                        'tipox' => 'imagen',
                        'paquete_id'=>$request['idpaquete']

                       ]);
        
                        if($request->file('img')){
                          $path = Storage::disk('public')->put('resourceMultimedia',$request->file('img'));
                        // $guide->fill(['url'=> asset($path)])->save();
                          $guide->fill(['url'=> $path])->save();
                      }
        }else{
                     $guide = multimedia::create([
                        'url'=>$request['url'],
                        'tipox' => 'video',
                        'paquete_id'=>$request['idpaquete']
                      ]);
                     $guide->save();
           
        }
        
       return redirect()->route('multimedia.index')->with('msgN','Registro Agregado correctamente');
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
        return view('multimedia.nuevo', compact('paquete'));
    }

}
