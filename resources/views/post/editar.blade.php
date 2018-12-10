@extends('layouts.app')

@section('content')


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
                            <h5>Edita un blog</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                               
                            </div>
                        </div>
                        <div class="ibox-content">

         
             <form class="form-horizontal" action="{{route('updateblog',$postb->id_post)}}" method="post" >
                              {{ csrf_field() }}
                                <div class="form-group"><label class="col-lg-2 control-label">Titulo</label>
                                    <div class="col-lg-10"><input type="text" name="titulo" id="titulo" class="form-control" value="{{ $postb->titulo }}" > 
                                    </div>
                                </div>


                                <div class="form-group"><label class="col-lg-2 control-label">Slug</label>
                                    <div class="col-lg-10"><input type="text" name="slug" readonly="" id="slug" class="form-control" value="{{ $postb->slug }}" > 
                                    </div>
                                </div>

                                <div class="form-group"><label class="col-lg-2 control-label">Cuerpo</label>
                                    <div class="col-lg-10"> <textarea id="editor1" name="editor1" value="" >{{ $postb->body}}</textarea> </div>
                                </div>

                                <div class="form-group"><label class="col-lg-2 control-label">Categoria</label>
                                    <div class="col-lg-4">
                                      <select name="categoria" class="form-control"  >
                                        
                                       @foreach($categorias as $value)
                                        <option value="{{$value->id_categoria}}">{{ $value->categoria }}</option>
                                       @endforeach
                                      </select>
                                     
                                    </div>

                                    <button type="submit" class="btn btn-success">Enviar</button>
                                </div>

                            </form>

                        </div>
                    </div>



        
    </div>
</div>
</div>

<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
<script src="{{asset('vendor/slug/jquery.friendurl.js')}}"></script>

<script>
     CKEDITOR.replace( 'editor1' );  

     $('#titulo').friendurl({
      id : 'slug'
     });


     
</script>






@endsection

