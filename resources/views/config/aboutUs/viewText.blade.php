@extends('layouts.app')

@section('content')

<div class="container">
    <div>
       @if(session('msgS'))
       <div class="alert alert-success alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         {{session('msgS')}}
        </div>
       @endif
    </div>

    <div>
        @if(session('msgE'))
        <div class="alert alert-danger alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         {{session('msgN')}}
        </div>
       @endif
    </div>

    
    <div class="col-md-6">
        <h3>Gestión de Titulo e Historia de página About Us</h3>
    </div>
    <hr>
    <div class="panel panel-default col-md-6">
        <div class="panel panel-heading">
            <h4><span class="fa fa-pencil"></span>&nbsp;Actualizar Titulo e Historia</h4>
        </div>
        
        <div class="panel panel-body ">
            
            <form class="form-horizontal" action="{{route('update-text')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label>Clave (Titulo)</label>
                    <input type="text" name="claveT" class="form-control" value="{{$title->clave}}" disabled="">
                </div>
                
                <div class="form-group">
                    <label>Contenido (Texto)</label>
                    <input type="text" name="contenidoT" class="form-control" value="{{$title->contenido}}">
                </div>
                <hr>
                
                <div class="form-group">
                    <label>Clave (Historia)</label>
                    <input type="text" name="claveH" class="form-control" value="{{$hist->clave}}" disabled="">
                </div>
                
                <div class="form-group">
                    <label>Contenido (texto)</label>
                    <textarea name="contenidoH" class="form-control">{{$hist->contenido}}</textarea>
                </div>
                
                <div class="form-group">
                    <label></label>
                    <input type="submit" name="save" class="btn btn-primary" value="Guardar">
                </div>
            </form>
        </div>
        
    </div>

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
   
</div>

@endsection

