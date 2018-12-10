@extends('layouts.app')

@section('content')
 <link href="{{asset('css/plugins/datapicker/datepicker3.css')}}" rel="stylesheet">
<link href="{{asset('css/plugins/clockpicker/clockpicker.css')}}" rel="stylesheet">

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
                               <form class="form-horizontal" action="{{route('paquete.store')}}" method="post">
                                {{ csrf_field() }}
                                <p>Agregar un paquete para poder generar compras</p>

                                <div class="form-group"><label class="col-lg-2 control-label">Titulo</label>
                                <div class="col-lg-10"><input type="text" name="titulo" id="titulo" class="form-control"> 
                                    </div>
                                </div>


                                <div class="form-group"><label class="col-lg-2 control-label">Slug</label>
                                    <div class="col-lg-10"><input type="text" readonly="" name="slug" id="slug" class="form-control"> 
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
                                   <div class="input-group date"><span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" name="fechaViaje" class="form-control" value="03/04/2014"></div>
                                </div>
                                <label class="col-lg-2 control-label">Guia</label>
                                    <div class="col-lg-4">
                                      <select class="select2_demo_1 form-control" name="guia">
                                         @foreach($guias as $key => $guia)
                                            <option value="{{$guia->id}}">{{$guia->nombre}} {{$guia->apellido}}</option>
                                         @endforeach
                                      </select>
                                    </div>
                               </div>


                                <div class="form-group" id="data_1">
                                <label class="col-lg-2 control-label">Hora de partida</label>
                                <div class="col-lg-4 ">
                                    <div class="input-group clockpicker" data-autoclose="true">
                                      <input type="text" class="form-control" name="hora_partida" value="08:00" >
                                      <span class="input-group-addon">
                                          <span class="fa fa-clock-o"></span>
                                      </span>
                                     </div>
                                </div>
                                <label class="col-lg-2 control-label">Hora de regreso</label>
                                    <div class="col-lg-4">
                                       <div class="input-group clockpicker" data-autoclose="true">
                                        <input type="text" class="form-control" name="hora_regreso" value="20:00" >
                                          <span class="input-group-addon">
                                           <span class="fa fa-clock-o"></span>
                                         </span>
                                       </div>
                                      </div>
                               </div>

                                <div class="form-group" id="data_1">
                                <label class="col-lg-2 control-label">Usuario:</label>
                                <div class="col-lg-4 ">
                                   <input type="text" readonly="" name="user" class="form-control" value="{{Auth::user()->id}}">
                                </div>
                                <label class="col-lg-2 control-label">Unidad de trasporte</label>
                                    <div class="col-lg-4">
                                      <select class="select2_demo_1 form-control" name="transporte">
                                         @foreach($transporte as $key => $value)
                                            <option value="{{$value->id}}">{{$value->nombre}} - capacidad: {{$value->capacidad}}</option>
                                         @endforeach
                                      </select>
                                    </div>
                               </div>


                                <div class="form-group"><label class="col-lg-2 control-label">Cuerpo</label>
                                    <div class="col-lg-10"> <textarea id="editor1" name="body"></textarea> </div>
                                </div>

                                <hr>
                                <h3>Ruta turistica</h3>
                                <div class="form-group"><label class="col-lg-2 control-label">Titulo ruta</label>
                                <div class="col-md-10"><input type="text" class="form-control" name="titulo_ruta"></div></div>

                                <div class="form-group">
                                   <label class="col-lg-2 control-label">Latitud inicial</label>
                                    <div class="col-lg-4">
                                      <input type="text" class="form-control" name="lati_inicial">
                                    </div>
                                    <label class="col-lg-2 control-label">Longitud inicial</label>
                                    <div class="col-lg-4">
                                      <input type="text" class="form-control" name="long_inicial">
                                    </div>
                                </div>

                                <div class="form-group">
                                   <label class="col-lg-2 control-label">Latitud final</label>
                                    <div class="col-lg-4">
                                      <input type="text" class="form-control" name="lati_final">
                                    </div>
                                    <label class="col-lg-2 control-label">Longitud final</label>
                                    <div class="col-lg-4">
                                      <input type="text" class="form-control" name="long_final">
                                    </div>
                                </div>

                                 <div class="form-group"><label class="col-lg-2 control-label">Descripción ruta</label>
                                     <div class="col-lg-10"> <textarea id="editor2" name="descripcion"></textarea> </div>
                                </div>
                                
                                <div class="form-group">
                                    <input type="submit" name="" class="btn btn-primary" value="Guardar">
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
<script src="{{asset('js/plugins/clockpicker/clockpicker.js')}}"></script>
<script>
     CKEDITOR.replace( 'editor1' ); 
     CKEDITOR.replace( 'editor2' ); 

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

      $('.clockpicker').clockpicker();
</script>
@endsection


