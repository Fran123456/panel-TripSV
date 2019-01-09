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
                <div class="panel-heading">Edita el estado</div>
                <div class="panel-body">
                   <div class="row">
                       <div class="col-md-12">
                              <form style="padding-left:20px;padding-right: 20px" action="{{ route('updatecompras',$compra->id_compra) }}" method="post" class="form-horizontal">
                                {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="nombre">ID compra</label>          
                                        <input type="text" readonly=""  class="form-control" required="" value="{{ $compra->id_compra }}">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="nombre">Total</label>           
                                        <input name="total" class="form-control" readonly="" value="{{ $compra->total }}"></input>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="capacidad">Estado</label>          
                                        <select name="estado" class="form-control" required="" value="">
                                          <option value="reservado">Reservado</option>
                                          <option value="completado">Completado</option>

                                        </select>
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

