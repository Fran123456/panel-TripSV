@extends('layouts.app')

@section('content')

<div class="container">
    
    <div>
       @if(session('msgN'))
        <div class="alert alert-success alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         {{session('msgN')}}
        </div>
       @endif
    </div>
    

    <div>
        @if(session('msgU'))
       <div class="alert alert-success alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{session('msgU')}}
        </div>
        @endif
    </div>
     
    <div>
        @if(session('msgD'))
        <div class="alert alert-danger alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{session('msgD')}}
        </div>
        @endif
    </div>
    
    <div class="row">
      <div class="col-md-6 text-left">
         <h3>Gestión de usuarios</h3>
      </div>
      <div class="col-md-6 text-right">
        <a class="btn btn-primary" href="#newModal" data-toggle="modal">Nuevo</a>
      </div>
    </div>
   
    
    <br>
    <table class="table table-bordered table-hover table-striped" id="usuarios">
        <thead>
            <tr class="warnig">
                <th width="30px">ID</th>
                <th>Nombre</th>
                <th>Avatar</th>
                <th>Correo</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            
            @foreach($usuario as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td><img src="{{$user->img}}" width="50px" height="50px"></td>
                <td>{{$user->email}}</td>
<<<<<<< HEAD
=======

                @if($user->id == Auth::user()->id)
                <td>
                  <button disabled="" class="btn btn-info">Editar</button>
                </td>
                <td>{!! Form::open(['route' => ['usuario.destroy', $user->id], 'method' => 'DELETE']) !!}
                                        <button disabled="" class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>                           
                    {!! Form::close() !!}</td>

                @else
>>>>>>> 621a706f4407b3cb06b011a5f1e73a99f823a91f
                <td>
                    <a class="btn btn-info" href="{{route('usuario.edit',$user->id)}}" id="edit">Editar</a>
                    
                </td>
                <td>{!! Form::open(['route' => ['usuario.destroy', $user->id], 'method' => 'DELETE']) !!}
                                        <button onclick="return confirm('Estas seguro de Eliminar este Registro')" class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>                           
                    {!! Form::close() !!}</td>
<<<<<<< HEAD
=======

                @endif
>>>>>>> 621a706f4407b3cb06b011a5f1e73a99f823a91f
            </tr>
            @endforeach
            
        </tbody>
    </table>
    {{$usuario->render()}}
</div>

    <div class="modal fade" id="newModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h3 class="modal-title" id="">Agregar nuevo Usuario</h3>
          </div>
            <div class="modal-body" id="app1">
               {!! Form::open(['route' => 'usuario.store']) !!}
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nameN" class="form-control" required="" v-model="nombreM">
                    </div>
                  
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="emailN" class="form-control" required="" v-model="emailM">
                    </div>
                  
                    <div class="form-group">
                        <label for="contraseña">Contraseña</label>
                        <input type="password" name="passN" class="form-control" required="" v-model="passM">
                    </div>
                  
                    <div class="form-group">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-success" v-bind:disabled="!isFormValid()">Guardar</button>
                    </div>
                  
               {!! Form::close() !!}
          </div>
          
        </div>
      </div>
    </div>

    

<script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
  
   
    new Vue({
       el: "#app1",
       data:{
           nombreM:'',
           emailM:'',
           passM:''
       },
       methods:{
           isFormValid:function(){
               return this.nombreM != "" && this.emailM != "" && this.passM != "";
           }
       }
   });
</script>
@endsection