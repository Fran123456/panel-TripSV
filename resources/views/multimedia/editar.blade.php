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
                <div class="panel-heading">Mi perfil</div>
                <div class="panel-body">
                   <div class="row">
                       <div class="col-md-12">
                              <form style="padding-left:20px;padding-right: 20px" action="{{route('updateUnidad',$transp->id)}}" method="post" class="form-horizontal">
                                {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="nombre">Nombre de Unidad</label>          
                                        <input type="text" name="nameT" class="form-control" required="" value="{{$transp->nombre}}">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="nombre">Descripcion</label>           
                                        <textarea name="descT" class="form-control" required="">{{$transp->descripcion}}</textarea>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="capacidad">Capacidad</label>          
                                        <input type="number" name="capaT" class="form-control" required="" value="{{$transp->capacidad}}">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for=""></label>           
                                        <input type="submit" name="newT" class="btn btn-success" value="Guardar">
                                    </div>
                                    
                                </form>
                       </div>
                   </div>
              </div>
        </div>
    </div>
</div>
</div>








@endsection

