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
                            <h5>PAQUETE - {{$paquete->titulo}}</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                               
                            </div>
                        </div>
                        <div class="ibox-content">
                               <form class="form-horizontal" action="{{route('paquete.store')}}" method="post">
                                {{ csrf_field() }}


                                <div class="form-group"><label class="col-lg-2 control-label">Titulo</label>
                                <div class="col-lg-10"><input type="text" name="titulo" id="titulo" readonly value="{{$paquete->titulo}}" class="form-control"> 
                                    </div>
                                </div>


                                <div class="form-group"><label class="col-lg-2 control-label">Slug</label>
                                    <div class="col-lg-10"><input type="text" readonly="" value="{{$paquete->slug}}" name="slug" id="slug" class="form-control"> 
                                    </div>
                                </div>


                                <div class="form-group">
                                   <label class="col-lg-2 control-label">Estado</label>
                                    <div class="col-lg-4">
                                      <select class="form-control" disabled="" name="estado">
                                      {!! $select  !!}}
                                      </select>
                                    </div>
                                    <label class="col-lg-2 control-label">Cupo</label>
                                    <div class="col-lg-4">
                                      <input type="number" readonly="" class="form-control" value="{{$paquete->cupo}}" name="cupo">
                                      <input type="hidden" name="stock" {{$paquete->stock}} value="0">
                                    </div>
                                </div>


                                <div class="form-group" id="data_1">
                                <label class="col-lg-2 control-label">Fecha de viaje</label>
                                <div class="col-lg-4 ">
                                   <div class="input-group date"><span class="input-group-addon"><i class="fa fa-calendar"></i></span><input readonly="" type="text" name="fechaViaje" class="form-control" value="{{$paquete->fechaDeViaje}}"></div>
                                </div>
                                <label class="col-lg-2 control-label">Guia</label>
                                    <div class="col-lg-4">
                                      <select disabled="" id="tguia" class="form-control" name="guia">
                                        @foreach($guias as $guia)
                                           @if($guia->id == $paquete->guia_id )
                                              <option selected="" value="{{ $guia->id }}">{{$guia->nombre}} </option>
                                           @else
                                               <option  value="{{ $guia->id }}">{{$guia->nombre}} </option>
                                           @endif
                                        @endforeach
                                      </select>
                                    </div>
                               </div>


                                <div class="form-group" id="data_1">
                                <label class="col-lg-2 control-label">Hora de partida</label>
                                <div class="col-lg-4 ">
                                    <div class="input-group clockpicker" data-autoclose="true">
                                      <input readonly="" type="text" class="form-control" name="hora_partida" value="{{$paquete->hora_partida}}" >
                                      <span class="input-group-addon">
                                          <span class="fa fa-clock-o"></span>
                                      </span>
                                     </div>
                                </div>
                                <label class="col-lg-2 control-label">Hora de regreso</label>
                                    <div class="col-lg-4">
                                       <div class="input-group clockpicker" data-autoclose="true">
                                        <input readonly="" type="text" class="form-control" name="hora_regreso" value="{{$paquete->hora_regreso}}" >
                                          <span class="input-group-addon">
                                           <span class="fa fa-clock-o"></span>
                                         </span>
                                       </div>
                                      </div>
                               </div>

                                <div class="form-group" id="data_1">
                               
                                <label class="col-lg-2 control-label">Unidad de trasporte</label>
                                    <div class="col-lg-4">
                                      <select disabled="" id="transporte" class="form-control" name="trasporte">
                                        @foreach($transporte as $tra)
                                           @if($tra->id == $paquete->transporte_id )
                                              <option selected="" value="{{ $tra->id }}">{{$tra->nombre}} </option>
                                           @else
                                               <option  value="{{ $tra->id }}">{{$tra->nombre}} </option>
                                           @endif
                                        @endforeach
                                      </select>
                                    </div>
                               </div>


                                <div class="form-group"><label class="col-lg-2 control-label">Cuerpo</label>
                                    <div class="col-lg-10"> <textarea id="editor1" disabled="" name="body">{{$paquete->body}}</textarea> </div>
                                </div>

                                <hr>
                                <h3>Ruta turistica</h3>
                                <div class="form-group"><label class="col-lg-2 control-label">Titulo ruta</label>
                                <div class="col-md-10"><input type="text" class="form-control" readonly="" id="titulo_ruta" value="{{$ruta->titulo}}" name="titulo_ruta"></div></div>

                                <div class="form-group">
                                   <label class="col-lg-2 control-label">Latitud inicial</label>
                                    <div class="col-lg-4">
                                      <input value="{{$ruta->latitudInicial}}" readonly="" type="text" class="form-control" name="lati_inicial">
                                    </div>
                                    <label class="col-lg-2 control-label">Longitud inicial</label>
                                    <div class="col-lg-4">
                                      <input  value="{{$ruta->longitudInicial}}" readonly="" type="text" class="form-control" name="long_inicial">
                                    </div>
                                </div>

                                <div class="form-group">
                                   <label class="col-lg-2 control-label">Latitud final</label>
                                    <div class="col-lg-4">
                                      <input value="{{$ruta->latitudfinal}}" readonly="" type="text" class="form-control" name="lati_final">
                                    </div>
                                    <label class="col-lg-2 control-label">Longitud final</label>
                                    <div class="col-lg-4">
                                      <input value="{{$ruta->longitudfinal}}" readonly="" type="text" class="form-control" name="long_final">
                                    </div>
                                </div>

                                 <div class="form-group"><label class="col-lg-2 control-label">Descripción ruta</label>
                                     <div class="col-lg-10"> <textarea disabled="" id="editor2" name="descripcion">{{ $ruta->descripcion}}</textarea> </div>
                                </div>
                                
                                <div class="form-group text-center">
                                    <input disabled="" type="submit" name="" class="btn btn-primary" value="Guardar">
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


