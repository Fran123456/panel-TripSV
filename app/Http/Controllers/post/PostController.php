<?php

namespace App\Http\Controllers\post;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\post;
use App\Categoria;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $post = post::paginate(10);
        return view('post.post', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $categorias = Categoria::get();
        return view('post.nuevo', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $postb= new post();
        $postb->titulo= $request->titulo;
        $postb->slug=$request->slug;
        $postb->body=$request->editor1;
        $postb->categoria_id=$request->categoria;
        $postb->user_id=Auth::user()->id;
        $postb->save();
        return redirect()->route('blog.index')->with('msgN','Unidad agregada correctamente');


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
    $categorias = Categoria::get();
    $postb=post::where('id_post',$id)->first();
    return view('post.editar',compact('postb','categorias'));
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
        $postb=post::find($id);
        $postb->titulo= $request->titulo;
        $postb->slug=$request->slug;
        $postb->body=$request->editor1;
        $postb->categoria_id=$request->categoria;
        $postb->user_id=Auth::user()->id;
        $postb->save();

        return redirect()->route('blog.index')->with('msgN','Post actualizado correctamente');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $del= post::find($id)->delete();
     return back()->with('msgN','Post eliminado con exito');
    }


    public function updateblog(Request $request, $id)
    {
          post::where('id_post', $id)
          ->update(
            ['titulo' => $request->titulo],
            ['slug' => $request->slug],
            ['body' => $request->editor1],
            ['categoria_id' => $request->categoria]);

        return redirect()->route('blog.index')->with('msgN','Post actualizado correctamente');
    }



}
