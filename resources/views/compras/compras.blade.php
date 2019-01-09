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
        <h3>Gestión de unidades</h3>
    </div>
    <div class="col-md-6 text-right">
        <a class="btn btn-info" href="{{route('unidad.create')}}">Agregar una unidad</a> 
        <br>
        <br>
    </div>
    
    <table class="table table-bordered table-hover table-striped" id="unidades">
        <thead>
            <tr class="">
                <th>ID compra</th>
                <th>Acompañantes</th>
                <th>Total</th>
                <th>Estado</th>
                <th>Stockpago</th>
                <th>Paquete_id</th>
                <th>Ubicacion_id</th>
                <th>Cliente_id</th>
            </tr>
        </thead>
        <tbody>
            @foreach($compras as $key => $tran)
            <tr>
                
                <td>{{$tran->id_compra}}</td>
                <td>{!!$tran->acompañantes!!}</td>
                <td>{{$tran->total}}</td>
                <td>{{$tran->estado}}</td>
                <td>{!!$tran->stockpago!!}</td>
                <td>{{$tran->paquete_id}}</td>
                <td>{!!$tran->ubicacion_id!!}</td>
                <td>{{$tran->cliente_id}}</td>
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
   
</div>


@endsection

