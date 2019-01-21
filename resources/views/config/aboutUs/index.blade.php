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
        <h3>Gestión de imagenes para Background de página About Us</h3>
    </div>
    <hr>
    <div class="panel panel-default col-md-6">
        <div class="panel panel-heading col-md-6">
            <h4><span class="fa fa-camera"></span>&nbsp;Actualizar Fondo</h4>
        </div>
        
        <div class="panel panel-body ">
            <div>
                <div class="lightBoxGallery"><a title="Image from Unsplash" href="{{$bg->contenido}}" data-gallery=""><img height="60px" width="60px" src="{{$bg->contenido}}"></a></div>
            </div>
            
            <form class="form-horizontal" action="{{route('update-bg')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label>Clave</label>
                    <input type="text" name="clave" class="form-control" value="{{$bg->clave}}" disabled="">
                </div>
                
                <div class="form-group">
                    <label>Contenido (Url)</label>
                    <input type="text" name="contenido" class="form-control" value="{{$bg->contenido}}">
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