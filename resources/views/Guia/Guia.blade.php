@extends('layouts.app')

@section('content')


<div class="container">


                 <div>
                    @if(session('supr'))
                    <div class="alert alert-danger alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     {{session('supr')}}
                    </div>
                   @endif
                </div>

                <div>
                    @if(session('msgU'))
                    <div class="alert alert-info alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     {{session('msgU')}}
                    </div>
                   @endif
                </div>


                <div>
                    @if(session('msgN'))
                    <div class="alert alert-info alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     {{session('msgN')}}
                    </div>
                   @endif
                </div>


                    
                  
                    
                <div class="col-md-6">
                  <h3>Gestión de guia turistico</h3>
                </div>
                <div class="col-md-6 text-right">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                     Nuevo guia
                   </button>
                       <br>
                       <br>
                </div>
                   


      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">

              <h4 class="modal-title" id="exampleModalLabel">Nuevo guia</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

              {!! Form::open(['route'=>'guia.store','method'=> 'POST', 'id' => 'form', 'files'=>true])!!}
              <div class="form-group" id="fotogroup">
                <div id="divfoto"><label id="labelfoto">Foto de perfil:</label></div>
               {!!Form::file('image',null  , ['onchange'=>'validar();'])!!}
              </div>
              <div class="form-group">
              <div id="divnombre"><label id="labelname">Nombre:</label></div>
              {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa el nombre' , 'onchange'=>'validar();']) !!}
            </div>
            <div class="form-group">
              <div id="divapellido"><label id="labelapellido">Apellido:</label></div>
              {!! Form::text('apellido',null,['class'=>'form-control','placeholder'=>'Ingresa el Apellido','onchange'=>'validar();']) !!}
            </div>
              
            <div class="form-group">
              <div id="divdui"><label id="labeldui">Dui:</label></div>
              {!! Form::text('dui',null,['class'=>'form-control','placeholder'=>'Ingresa el dui', 'onchange'=>'validar();']) !!}
            </div>

              <div class="form-group">
              {!! Form::label('Estado:')!!}
              {!! Form::select('disponibilidad',array('En_ruta' => 'En ruta', 'Disponible' => 'Disponible') , ['class'=>'form-control']) !!}
             </div>


            {{ csrf_field() }}
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              
               <button onclick="validar2();" type="button" class="btn btn-success">Guardar</button>

              {!! Form::close() !!}
            </div>
          </div>
        </div>
      </div>

          <table class="table table-bordered table-hover table-striped" id="table">
               <thead>
                  <tr style="font-size: 14px" class="warnig">

                     <th width="40px">#</th>

                     <th>Imagen</th>
                     <th>Nombre</th>
                     <th>Apellido</th>
                     <th>Dui</th>

                     <th width="60px">Disponibilidad</th>
                     <th width="60px">Editar</th>
                     <th width="60px"> Eliminar</th>
                     <th>Foto</th>
                  </tr>
               </thead>
               <tbody>
                        @foreach ($items as $index => $item)
                        <tr>
                            <td>
                                {{ $index+1 }}
                            </td>
                             <td>

                                  <div class="lightBoxGallery"><a title="Image from Unsplash" href="{{ $item->img_profile }}" data-gallery=""><img height="40px" width="40px" src="{{ $item->img_profile }}"></a>
                                   </div>

                            </td>
                            <td>
                                {{ $item->nombre }}
                            </td>
                            <td>
                                {{ $item->apellido }}
                            </td>
                            <td>
                                {{ $item->dui }}
                            </td>
                            <td>
                                {{ $item->disponibilidad }}
                            </td>                           
                            <td>
                                <a href="{{route('guia.edit',$item->id)}}" class="btn btn-sm btn-info">Actualizar</a> 
                            </td>                          
                            <td>
                                {!! Form::open(['route' => ['guia.destroy', $item->id], 'method' => 'DELETE']) !!}
                                        <button onclick="return confirm('Estas seguro de Eliminar este Registro')" class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>                           
                                {!! Form::close() !!}
                            </td>
                            <td style="text-align: center">
                                <a href="{{route('foto',$item->id)}}" class="btn btn-success"><span class="fa fa-camera"></span></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
            </table>

</div>

                              <!--PARA GALERIA-->
                                 <div id="blueimp-gallery" class="blueimp-gallery">
                                    <div class="slides"></div>
                                    <h3 class="title"></h3>
                                    <a class="prev">‹</a>
                                    <a class="next">›</a>
                                    <a class="close">×</a>
                                    <a class="play-pause"></a>
                                    <ol class="indicator"></ol>
                                   </div>


@endsection

   

  <script type="text/javascript">
    
    function validar2(){
      cont = 0;
      
        img = $('input:file[name=image]').val();
        if(img == ""){
           $('#labelfoto').remove();
           $('#divfoto').append('<label id="labelfoto">Foto de perfil:</label>');
           $('#labelfoto').append(' Debe agregar una foto de perfil');
           $('#labelfoto').addClass('redA');
           cont++;
        }else{
          $('#labelfoto').remove();
          $('#divfoto').append('<label class="successA" id="labelfoto"><i class="fa fa-check" aria-hidden="true"></i> Foto de perfil:</label>');
          
        }


        if($('input:text[name=name]').val() == ""){
           $('#labelname').remove();
           $('#divnombre').append('<label id="labelname">Nombre:</label>');
           $('#labelname').append(' debe agregar nombres');
           $('#labelname').addClass('redA');
           cont++;
        }else{
          $('#labelname').remove();
          $('#divnombre').append('<label class="successA" id="labelname"><i class="fa fa-check" aria-hidden="true"></i> Nombre:</label>');
          
        }


         if($('input:text[name=apellido]').val() == ""){
           $('#labelapellido').remove();
           $('#divapellido').append('<label id="labelapellido">Apellido:</label>');
           $('#labelapellido').append(' debe agregar apellidos');
           $('#labelapellido').addClass('redA');
           cont++;
        }else{
          $('#labelapellido').remove();
          $('#divapellido').append('<label class="successA" id="labelapellido"><i class="fa fa-check" aria-hidden="true"></i> Apellido:</label>');
          

        }

        if($('input:text[name=dui]').val() == ""){
           $('#labeldui').remove();
           $('#divdui').append('<label id="labeldui">Dui:</label>');
           $('#labeldui').append(' el campo dui no debe estar vacio');
           $('#labeldui').addClass('redA');
           cont++;
        }else{
          $('#labeldui').remove();
          $('#divdui').append('<label class="successA" id="labeldui"><i class="fa fa-check" aria-hidden="true"></i> Dui:</label>');
          

        }


        
    
       if(cont == 0){
            $( "#form" ).submit();
       }

    }






    function validar(){
    
      
        img = $('input:file[name=image]').val();
        if(img == ""){
           $('#labelfoto').remove();
           $('#divfoto').append('<label id="labelfoto">Foto de perfil:</label>');
           $('#labelfoto').append(' Debe agregar una foto de perfil');
           $('#labelfoto').addClass('redA');
           
        }else{
          $('#labelfoto').remove();
          $('#divfoto').append('<label class="successA" id="labelfoto"><i class="fa fa-check" aria-hidden="true"></i> Foto de perfil:</label>');
          
        }


        if($('input:text[name=name]').val() == ""){
           $('#labelname').remove();
           $('#divnombre').append('<label id="labelname">Nombre:</label>');
           $('#labelname').append(' debe agregar nombres');
           $('#labelname').addClass('redA');
           
        }else{
          $('#labelname').remove();
          $('#divnombre').append('<label class="successA" id="labelname"><i class="fa fa-check" aria-hidden="true"></i> Nombre:</label>');
          
        }


         if($('input:text[name=apellido]').val() == ""){
           $('#labelapellido').remove();
           $('#divapellido').append('<label id="labelapellido">Apellido:</label>');
           $('#labelapellido').append(' debe agregar apellidos');
           $('#labelapellido').addClass('redA');
           
        }else{
          $('#labelapellido').remove();
          $('#divapellido').append('<label class="successA" id="labelapellido"><i class="fa fa-check" aria-hidden="true"></i> Apellido:</label>');
          

        }

        if($('input:text[name=dui]').val() == ""){
           $('#labeldui').remove();
           $('#divdui').append('<label id="labeldui">Dui:</label>');
           $('#labeldui').append(' el campo dui no debe estar vacio');
           $('#labeldui').addClass('redA');
           
        }else{
          $('#labeldui').remove();
          $('#divdui').append('<label class="successA" id="labeldui"><i class="fa fa-check" aria-hidden="true"></i> Dui:</label>');
          

        }


        if($('input:text[name=direccion]').val() == ""){
           $('#labeldir').remove();
           $('#divdir').append('<label id="labeldir">Dirección:</label>');
           $('#labeldir').append(' el campo dirección no debe estar vacio');
           $('#labeldir').addClass('redA');
           
        }else{
          $('#labeldir').remove();
          $('#divdir').append('<label class="successA" id="labeldir"><i class="fa fa-check" aria-hidden="true"></i> Dirección:</label>');
          

        }

      

    }

   
  </script>

