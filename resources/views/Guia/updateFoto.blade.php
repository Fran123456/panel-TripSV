@extends('layouts.app')

@section('content')
<h3><span class="fa fa-camera"></span>&nbsp;Actualizar foto de perfil</h3>
<hr>
<form action="{{route('updateFoto',$guia->id)}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="form-group" id="fotogroup">
        <div id="divfoto"><label id="labelfoto">Foto de perfil:</label></div>
        <input type="file" name="image">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-success" value="Guardar">
    </div>
</form>
@endsection

