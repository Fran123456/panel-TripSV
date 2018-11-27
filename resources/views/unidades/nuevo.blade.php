@extends('layouts.app')

@section('content')



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

            <div class="panel panel-default">
                <div class="panel-heading">Crea una nueva unidad</div>
                <div class="panel-body">
                   <div class="row">
                       <div class="col-md-12">
                              <form style="padding-left:10px;padding-right: 10px" action="{{route('unidad.store')}}" method="post" class="form-horizontal" id="frmNew">
                                   <div class="col-md-12">
                                      <div class="form-group">
                                        <label for="nombre">Nombre de Unidad</label>          
                                        <input type="text" name="nameT" class="form-control" required="">
                                    </div> 
                                   </div>
                                    <div class="col-md-12">
                                       <div class="form-group">
                                        <label for="nombre">Descripcion</label>           
                                        <!--<textarea name="descT" class="ckeditor" required=""></textarea>-->
                                        <textarea name="descT" class="form-control" required=""></textarea>
                                    </div> 
                                    </div>
                                    
                                    
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label for="capacidad">Capacidad</label>          
                                        <input type="number" name="capaT" class="form-control" required="">
                                    </div>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <br>
                                        <div class="form-group">
                                        <label for=""></label>           
                                        <input type="submit" name="newT" class="btn btn-success" value="Guardar" id="btnNew">
                                    </div>
                                    </div>

                                    
                                    {{csrf_field()}}
                                </form>
                       </div>
                   </div>
              </div>
        </div>
    </div>
</div>
</div>








<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.config.height = 100;
    CKEDITOR.config.width = 'auto';
    CKEDITOR.config.uiColor = '#AADC6E';
    /*$(function(){
    //prueba ajax
    $.ajaxSetup({
         headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
    });
    
    $('#btnNew').click(function(e){
        e.preventDefault();
        var url = "";
        $.ajax({
           type:'post',
           url:url,
           data:$('#frmNew').serialize(),
           success:function(result){
               toastr.success(result);
               console.log('exito');
           }
        });
    });
});*/   
</script>
@endsection


