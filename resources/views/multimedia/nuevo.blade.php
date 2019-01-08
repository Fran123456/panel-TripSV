@extends('layouts.app')

@section('content')


<style type="text/css">
  .cont{
    padding-left: 40px;
    padding-right: 40px;
  }
</style>

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

            


          <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            @if($va == 0)
                            <h5>Multimedia al paquete "{{ $paquete->titulo}}"</h5>
                            @endif

                            @if($va == 1)
                            <h5>Multimedia al post "{{ $paquete->titulo}}"</h5>
                            @endif

                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                               
                            </div>
                        </div>
                        <div class="ibox-content">

                            <form  class="form-horizontal" action="{{route('multimedia.store')}}" method="post" enctype="multipart/form-data">
                              {{ csrf_field() }}
                                <div class="form-group">
                                  <input type="hidden" name="multi" value="paquete">

                                    <label class="col-lg-2 control-label">Tipo multimedia</label>
                                    <div class="col-lg-4">
                                     <select name="seleccion"class="form-control">
                                    
                                      @if($va == 0)<!--paquete-->
                                        <option  value="imagen">Imagen URL</option>
                                        <option value="video">video URL</option>
                                        <option value="caruselHome">Carusel URL</option>
                                         <option value="imagenReserva">Imagen reserva URL</option>
                                         <option value="topES">Top URL</option>
                                      @elseif($va == 1)
                                          <option  value="imagen">Imagen URL</option>
                                        <option value="video">video URL</option>
                                        <option value="imagenReserva">Imagen reserva URL</option>
                                        <option value="imgListaPost">Imagen lista post URL</option>
                                      @else
                                      <option value="banerMural">Banner URL</option>
                                      <option value="imgVideoHome">Banner URL</option>
                                      <option value="videoHome">Video home URL</option>
                                      <option value="portadaListaPost">Portada</option>
                                      @endif
                                    </select> 
                                    </div>
                                    <input type="hidden" name="centinelatipo" value="imagen" id="centinelatipo">
                                </div>
                                <hr>

                                    <div id="videoURL">
                                    <label class="col-lg-2 control-label">Url</label>
                                      <div class="col-lg-6">
                                      <textarea type="text" cols="6" class="form-control" name="url"></textarea>
                                      </div>
                                    </div>

                                <br>
                                  @if($va == 0)
                                 <input type="hidden" value="{{$paquete->id_paquete}}" name="idpaquete">
                                 @else
                                <input type="hidden" value="{{$paquete->id_post}}" name="idpaquete">
                                 @endif

                                <div class="form-group">
                                  <div class="col-lg-4 text-right">
                                    <button type="submit" class="btn btn-info">Agregar</button>
                                  </div>
                                </div>

                            </form>
                        </div>
                    </div>

          </div>
</div>
</div>


<script type="text/javascript">



</script>


@endsection


