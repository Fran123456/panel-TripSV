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
        <h3>Gestión de blog</h3>
    </div>
    <div class="col-md-6 text-right">
        <a class="btn btn-info" href="{{route('blog.create')}}">Agregar a blog</a> 
        <br>
        <br>
    </div>
    
    <table class="table table-bordered table-hover table-striped" id="unidades">
        <thead>
            <tr class="">
                <th width="60">N°</th>
                <th>Titulo</th>
                <th width="100">Editar</th>
                <th width="100">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($post as $key => $value)
            <tr>
                <td>{{$key +1}}</td>
                <td>{{$value->titulo}}</td>
                <td>
                    <a class="btn btn-info" href="{{route('blog.edit',$value->id)}}">Editar</a>
                    
                </td>
                <td>
                    {!! Form::open(['route' => ['blog.destroy', $value->id], 'method' => 'DELETE']) !!}
                                        <button onclick="return confirm('Estas seguro de Eliminar este Registro')" class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>                           
                    {!! Form::close() !!}
            </tr>
            @endforeach
            
        </tbody>
        
    </table>
    {{$post->render()}}
</div>


@endsection

