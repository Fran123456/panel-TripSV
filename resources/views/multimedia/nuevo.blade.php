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
        <div class="col-md-12">


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
                            <h5>AGREGA MULTIMEDIA</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                               
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form class="form-horizontal">
                                <div class="form-group"><label class="col-lg-2 control-label">Destino multimedia</label>
                                    <div class="col-lg-4">
                                     <select onchange="desicion();" id="abc" class="form-control"><option value="paquete">paquete</option><option value="blog">blog</option></select> 
                                    </div>
                                    <input type="hidden" name="centinela" value="paquete" id="centinela">

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
                                           <div class="col-lg-4">
                                                 <input  type="file" name="img">
                                          </div>
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
        '<div class="col-lg-4">'+
        '<input type="text" class="form-control" name="url">'+
        '</div>'+
        '</div>';

        imgURL = '<div id="imgURL">'+
                    '<label class="col-lg-2 control-label">Imagen</label>'+
                       '<div class="col-lg-4">'+
                         '<input  type="file" name="img">'+
                             '</div>'+
                  '</div>';


  function desicion(){
     if($('#abc').val() =="paquete"){
       $('#centinela').val('paquete');
     }

     if($('#abc').val() == "blog"){
      $('#centinela').val('blog');
     }
  }


  function desicionTipo(){
      var destino = $('#centinela').val();
      var tipo = $('#centinelatipo').val();


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

  function determinar(){
    
    
  }
</script>

@endsection


