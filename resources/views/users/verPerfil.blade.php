@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">


            <div>
               @if(session('info'))
               <div class="alert alert-success alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  {{session('info')}}
                </div>
               @endif
            </div>




            <div class="panel panel-default">
                <div class="panel-heading">Mi perfil</div>
                 <form action="{{route('updatePerfil',$perfil->id)}}" method="post">
                  {{csrf_field()}}
                <div class="panel-body">
                   <div class="row">
                       <div class="col-md-12">
                           <label>Nombre:</label>
                           <input type="text" disabled="true" id="name" name="name" value="{{$perfil->name}}" class="form-control">
                           <br>
                       </div>
                       
                       <div class="col-md-12">
                           <label>Correo electronico:</label>
                           <input type="text" name="email" id="email" readonly="" value="{{$perfil->email}}" class="form-control">
                           <br>
                       </div>
                       <div class="col-md-10">
                           <label>Avatar:</label>
                              <div id="sel">
                                  <select disabled="true" id="avatar" onchange="perfil();" name="img"  class="form-control">
                                      @for ($i = 0; $i < count($urls); $i++)
                                        @if( $urls[$i] == $perfil->img )
                                           <option value="{{$perfil->img}}" selected="">{{$nombres[$i]}}</option>
                                        @else
                                            <option value="{{$urls[$i] }}">{{$nombres[$i]}}</option>
                                        @endif
                                      @endfor
                                  </select>
                              </div>
                              <br>
                       </div>
                       <div class="col-md-2">
                        <br>
                            <div id="ava">
                               <img id="imgavatar" height="40" width="40" src="{{asset($perfil->img)}}">
                            </div>
                       </div>
                       <div class="col-md-12 text-right">
                        <div id="b"><button  onclick="editar();" type="button" class="btn btn-info">Editar</button></div>
                        <div id="c"></div>
                           
                       </div>
                   </div>
                  
              </div>
             
            </form>

        </div>
    </div>
</div>
<script type="text/javascript">

 
    function editar(){
       
        $('#name').prop('disabled', false);
        $('#avatar').prop('disabled', false);

        $('#b').remove();
        $('#c').append('<input type="submit" class="btn btn-success" name="" value="Guardar">');
    }



    function perfil(){
        var perfil = $('#avatar').val();
        if(perfil == "perfil/pvz2.png"){
            $('#imgavatar').attr('src', '{{asset("perfil/pvz2.png")}}');
        }

        if(perfil == 'perfil/pyrojump.png'){
            $('#imgavatar').attr('src', '{{asset("perfil/pyrojump.png")}}');
            
        }

        if(perfil == 'perfil/plume.png'){
            $('#imgavatar').attr('src', '{{asset("perfil/plume.png")}}'); 
        }

        if(perfil == 'perfil/quadropus.png'){
            $('#imgavatar').attr('src', '{{asset("perfil/quadropus.png")}}'); 
        }

        if(perfil == 'perfil/scribblenauts.png'){
            $('#imgavatar').attr('src', '{{asset("perfil/scribblenauts.png")}}'); 
        }

        if(perfil == 'perfil/seesmic.png'){
            $('#imgavatar').attr('src', '{{asset("perfil/seesmic.png")}}'); 
        }

        if(perfil == 'perfil/sonic.png'){
            $('#imgavatar').attr('src', '{{asset("perfil/sonic.png")}}'); 
        }
    }
</script>
@endsection
