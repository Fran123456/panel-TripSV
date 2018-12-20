@extends('layouts.app')

                   @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


@section('content')
<head>

</head>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>CHAT</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                               
                            </div>
                        </div>
                        <div class="ibox-content">
                                    <iframe src="https://www2.cbox.ws/box/?boxid=2381469&boxtag=KqbgyQ" width="100%" height="450" allowtransparency="yes" allow="autoplay" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto"></iframe>    
                        </div>
             </div>
       </div>

         <div class="col-md-6">
                   <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>CALENDARIO</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                               
                            </div>
                        </div>
                        <div class="ibox-content">
                                     <div class="cal1"></div>
                                    <div class="cal2">
                                        <script type="text/template" id="template-calendar">
                                        </script>
                                     </div>
       
                        </div>
                    </div>
          </div>
    </div>
</div>
<hr>
<h2 style="text-align: center;">Guias con mas Viajes Hechos</h2>
<div class="container">
    <div class="row">
        <div>
            {!! $chart->container() !!}
        </div>
        <hr>
        <div>
            <h2 style="text-align: center;">Rutas mas Visitadas&nbsp;<span style="font-size: 15px;">(Año 2018)</span></h2>
            {!! $ruta->container() !!}
        </div>
        <div>
            
        </div>
    </div>
</div>




<link rel="stylesheet" type="text/css" href="{{asset('CLNDR-master/demo/css/clndr.css')}}">
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/frappe-charts@1.1.0/dist/frappe-charts.min.iife.js"></script>
{!! $chart->script() !!}
{!! $ruta->script() !!}

<script type="text/javascript">
   
</script>

<script src="{{asset('CLNDR-master/src/clndr.js')}}"></script>
<script src="{{asset('CLNDR-master/demo/demo.js')}}"></script>

@endsection
