@extends('layouts.app')

@section('content')

<div>
    <h2>Reportes Excel</h2>
</div>
<hr>
<div class="row">
    
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3><span class="fa fa-user"></span>&nbsp;Guias</h3>
            </div>
            <div class="panel-body">
                <h3><span class="fa fa-file-excel-o" style="color: green;"></span>&nbsp;<a href="{{route('guiasExcel')}}">Descargar Reporte de Guias</a></h3>
            </div>
            <div class="panel-footer">
                
            </div>
        </div>
        
    </div>
    
    <div class="col-md-4">
        
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3><span class="fa fa-users" ></span >&nbsp;Turistas</h3>
            </div>
            <div class="panel-body">
                <h3><span class="fa fa-file-excel-o" style="color: green;"></span>&nbsp;<a href="{{route('turistasExcel')}}">Decargar Reporte de Turistas</a></h3>
            </div>
            <div class="panel-footer">
                
            </div>
        </div>
        
    </div>
    
    <div class="col-md-4">
        
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3><span class="fa fa-bus"></span>&nbsp;Unidades</h3>
            </div>
            <div class="panel-body">
                <h3><span class="fa fa-file-excel-o" style="color: green;"></span>&nbsp;<a href="{{route('unidadesExcel')}}">Descargar Reporte de Unidades</a></h3>
            </div>
            <div class="panel-footer">
                
            </div>
        </div>
        
    </div>
    
</div>
@endsection

