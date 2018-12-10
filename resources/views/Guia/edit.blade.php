@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12">
    

<div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>NUEVO GUIA</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                               
                            </div>
                        </div>
                        <div class="ibox-content">



        <form action="{{route('updateGuia',$items->id)}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            
            <div class="form-group">
              <div id="divnombre"><label id="labelname">Nombre:</label></div>
              <input type="text" name="name" class="form-control" value="{{$items->nombre}}">
            </div>
            
            <div class="form-group">
              <div id="divapellido"><label id="labelapellido">Apellido:</label></div>
              <input type="text" name="apellido" class="form-control" value="{{$items->apellido}}">
            </div>
            
            <div class="form-group">
              <div id="divdui"><label id="labeldui">Dui:</label></div>
              <input type="text" name="dui" class="form-control" value="{{$items->dui}}">
            </div>
            
            

            <div class="form-group">
                <label>Estado</label>
                <select name="disponibilidad" class="form-control">
                    
                    
                    
                    
                    
                                    @for ($i = 0; $i < count($datos); $i++)
                                        @if( $datos[$i] == $items->disponibilidad)
                                           <option value="{{$items->disponibilidad}}" selected="">{{$name[$i]}}</option>
                                        @else
                                            <option value="{{$datos[$i] }}">{{$name[$i]}}</option>
                                        @endif
                                      @endfor
                    
  
                </select>
            </div>

    </div>
            <div class="panel-footer">
                <input type="submit" class="btn btn-info" value="Guardar cambios">
            </div>
       </form>
   </div>
                    </div>


</div></div></div>

@endsection

