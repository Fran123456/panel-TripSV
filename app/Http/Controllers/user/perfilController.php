<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
class perfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $perfil = User::find($id);
        $urls = array('perfil/plume.png','perfil/pvz2.png','perfil/pyrojump.png','perfil/quadropus.png','perfil/scribblenauts.png','perfil/seesmic.png','perfil/sonic.png');

        $nombres = array('Pajaro azul','Zombie' ,'Llama de fuego','Bola enojada','Bola de sonido','Mapache','Sonic');
       return view('users.verPerfil', compact('perfil','urls','nombres'));
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

        $perfil = User::find($id);
        $perfil->fill($request->all())->save();
      /*$perfil->name = $request->get('name');
        $perfil->email = $request->get('email');
        $perfil->img = $request->get('img');*/

      return redirect()->route('Perfil.edit', $id)->with('info', 'Perfil editado correctamente');

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
