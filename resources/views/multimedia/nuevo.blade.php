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

                            <h5>Multimedia al paquete "{{ $paquete->titulo}}"</h5>

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

                                    <label class="col-lg-2 control-label">Tipo multimedia</label>
                                    <div class="col-lg-4">
                                     <select onchange="desicionTipo();" id="def" class="form-control"><option value="imagen">imagen</option><option value="video">video URL</option></select> 
                                    </div>
                                    <input type="hidden" name="centinelatipo" value="imagen" id="centinelatipo">
                                </div>
                                <hr>

                                 <div class="form-group" id="padre">
                                     <div id="imgURL">
                                       <label class="col-lg-2 control-label">Imagen</label>
                                           <div class="col-lg-6">
                                                 <input  type="file" name="img">
                                          </div>
                                     </div>
                                </div>

                                 <input type="hidden" value="{{$paquete->id_paquete}}" name="idpaquete">
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



      videoHTML = '<div id="videoURL">'+
        '<label class="col-lg-2 control-label">Url video</label>'+
        '<div class="col-lg-6">'+
        '<textarea type="text" cols="6" class="form-control" name="url"></textarea>'+
        '</div>'+
        '</div>';

        imgURL = '<div id="imgURL">'+
                    '<label class="col-lg-2 control-label">Imagen</label>'+
                       '<div class="col-lg-4">'+
                         '<input  type="file" name="img">'+
                             '</div>'+
                  '</div>';



//inicio
     if($('#def').val() =="imagen"){
       $('#centinelatipo').val('imagen');

       $('#imgURL').remove();
       $('#videoURL').remove();
       $('#padre').append(imgURL);
     }

     if($('#def').val() == "video"){
      $('#centinelatipo').val('video');


       $('#imgURL').remove();
       $('#videoURL').remove();
       $('#padre').append(videoHTML);
     }
   //fin




  function desicionTipo(){
 
  //inicio
     if($('#def').val() =="imagen"){
       $('#centinelatipo').val('imagen');

       $('#imgURL').remove();
       $('#videoURL').remove();
       $('#padre').append(imgURL);
     }

     if($('#def').val() == "video"){
      $('#centinelatipo').val('video');


       $('#imgURL').remove();
       $('#videoURL').remove();
       $('#padre').append(videoHTML);
     }
   //fin



  }

</script>


@endsection


