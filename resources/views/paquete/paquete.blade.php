@extends('layouts.app')

@section('content')
<div class="container">
    <div>
       @if(session('msgD'))
       <div class="alert alert-success alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         {{session('msgD')}}
        </div>
       @endif
    </div>

    <div>
        @if(session('msgN'))
        <div class="alert alert-info alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         {{session('msgN')}}
        </div>
       @endif
    </div>

    
    <div class="col-md-6">
        <h3>Gestión de paquetes</h3>
    </div>
    <div class="col-md-6 text-right">
        <a class="btn btn-info" href="{{route('paquete.create')}}">Agregar un paquete</a> 
        <br>
        <br>
    </div>
    
    <table class="table table-bordered table-hover table-striped" id="unidades">
        <thead>
            <tr class="">
                <th>No</th>
                <th>Titulo</th>
                <th>Cupo</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($paquete as $key => $tran)
            <tr>
                <td>{{$key +1}}</td>
                <td>{{$tran->nombre}}</td>
                <td>{!!$tran->descripcion!!}</td>
                <td>{{$tran->capacidad}}</td>
                <td>
                    <a class="btn btn-info" href="{{route('unidad.edit',$tran->id)}}">Editar</a>
                    
                </td>
                <td>
                    {!! Form::open(['route' => ['unidad.destroy', $tran->id], 'method' => 'DELETE']) !!}
                                        <button onclick="return confirm('Estas seguro de Eliminar este Registro')" class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>                           
                    {!! Form::close() !!}
            </tr>
            @endforeach
            
        </tbody>
        
    </table>
    {{$paquete->render()}}
</div>


@endsection

