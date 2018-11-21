@extends('layouts.app')

@section('content')
<div>
    <a href="{{route('guia.index')}}" class="btn btn-primary">Vover Atras</a>
</div>
<hr>
<div class="panel panel-default  col-md-6">
    <div class="panel-heading">
        <h3>Edicion de Datos</h3>
    </div>
    
    <div class="panel-body">

        <form action="{{route('updateGuia',$items->id)}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group" id="fotogroup">
              <div id="divfoto"><label id="labelfoto">Foto de perfil:</label></div>
              <input type="file" name="image">
            </div>
            
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


<div class="container">
    
</div>
@endsection

