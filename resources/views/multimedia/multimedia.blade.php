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

        <a class="btn btn-info" href="{{route('multimedia.create')}}">Agregar multimedia</a> 
        <br>

        <br>
        <br>
    </div>
    

    <table class="table table-bordered table-hover table-striped" id="multimedia">

        <thead>
            <tr class="">
                <th width="60">N°</th>
                <th>Multimedia</th>

                <th>Tipo</th>
                <th width="160">Editar información</th>
                <th width="160">Cambio de multimedia</th>
                <th width="160">Eliminar</th>

            </tr>
        </thead>
        <tbody>
            @foreach($multimedia as $key => $value)
            <tr>
                <td>{{$key +1}}</td>
                <td><div class="lightBoxGallery"><a title="Image from Unsplash" href="{{ $value->url }}" data-gallery=""><img height="60px" width="60px" src="{{ $value->url }}"></a>

                                   </div></td> 
                <td>{{$value->tipo}}</td>             

                <td>
                    <a class="btn btn-info" href="{{route('unidad.edit',$value->id)}}">Editar</a>
                 
                </td>
                <td><a class="btn btn-warning" href="{{route('unidad.edit',$value->id)}}"><i class="fa fa-picture-o" aria-hidden="true"></i></a></td>
                <td>
                    {!! Form::open(['route' => ['unidad.destroy', $value->id], 'method' => 'DELETE']) !!}
                                        <button onclick="return confirm('Estas seguro de Eliminar este Registro')" class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>                           
                    {!! Form::close() !!}
            </tr>
            @endforeach
            
        </tbody>
        
    </table>

    <!--PARA GALERIA-->
                                 <div id="blueimp-gallery" class="blueimp-gallery">
                                    <div class="slides"></div>
                                    <h3 class="title"></h3>
                                    <a class="prev">‹</a>
                                    <a class="next">›</a>
                                    <a class="close">×</a>
                                    <a class="play-pause"></a>
                                    <ol class="indicator"></ol>
                                   </div>
    {{$multimedia->render()}}
</div>


@endsection

