@extends('layouts.app')

@section('content')

<div class="container" style="width:800px;">

 <div class="panel panel-default">
    <div class="panel-heading">Edicion datos de Usuario</div>
    <div class="panel-body">
      <form action="{{route('updateUsuario',$usuario->id)}}" method="post">
       <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" name="nameN" class="form-control" required="" value="{{$usuario->name}}">
       </div>
                  
       <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="emailN" class="form-control" required="" value="{{$usuario->email}}">
       </div>
                          
       <div class="form-group">       
        <button type="submit" class="btn btn-success">Guardar</button>
       </div>
       {{csrf_field()}}                   
    </form>
    </div>
 </div>
</div>

@endsection