@extends('layouts.app')

@section('content')
 <link href="{{asset('css/plugins/datapicker/datepicker3.css')}}" rel="stylesheet">


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
                            <h5>NUEVO PAQUETE</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                               
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form class="form-horizontal">
                                <p>Agrega un paquete para poder generar compras</p>

                                <div class="form-group"><label class="col-lg-2 control-label">Titulo</label>
                                    <div class="col-lg-10"><input type="text" id="titulo" class="form-control"> 
                                    </div>
                                </div>


                                <div class="form-group"><label class="col-lg-2 control-label">Slug</label>
                                    <div class="col-lg-10"><input type="text" readonly="" id="slug" class="form-control"> 
                                    </div>
                                </div>


                                <div class="form-group">
                                   <label class="col-lg-2 control-label">Estado</label>
                                    <div class="col-lg-4">
                                      <select class="select2_demo_1 form-control" name="estado">
                                        <option value="Publicado">Publicado</option>
                                        <option value="Completado">Completado</option>
                                        <option value="Borrador">Borrador</option>
                                    </select>
                                    </div>
                                    <label class="col-lg-2 control-label">Cupo</label>
                                    <div class="col-lg-4">
                                      <input type="number" class="form-control" name="cupo">
                                      <input type="hidden" name="stock" value="0">
                                    </div>
                                </div>

                                <div class="form-group" id="data_1">
                                <label class="col-lg-2 control-label">Fecha de viaje</label>
                                <div class="col-lg-4 ">
                                   <div class="input-group date"><span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="03/04/2014"></div>
                                </div>
                                <label class="col-lg-2 control-label">Guia</label>
                                    <div class="col-lg-4">
                                      <select class="select2_demo_1 form-control" name="guia">
                                         @foreach($guias as $key => $guia)
                                            <option value="{{$guia->id}}">{{$guia->nombre}}{{$guia->apellido}}</option>
                                         @endforeach
                                      </select>
                                    </div>
                               </div>



 



                                <div class="form-group"><label class="col-lg-2 control-label">Password</label>
                                    <div class="col-lg-10"> <textarea id="editor1"></textarea> </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <div class="i-checks"><label> <input type="checkbox"><i></i> Remember me </label></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-sm btn-white" type="submit">Sign in</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>





    </div>
</div>
</div>






<script src="{{asset('js/plugins/datapicker/bootstrap-datepicker.js')}}"></script>
<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
<script src="{{asset('vendor/slug/jquery.friendurl.js')}}"></script>
<script>
     CKEDITOR.replace( 'editor1' ); 

     $('#titulo').friendurl({
      id : 'slug'
     });


      $('#data_1 .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });
</script>
@endsection


