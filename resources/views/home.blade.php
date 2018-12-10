@extends('layouts.app')

                   @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


@section('content')
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css"
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
<h2 style="text-align: center;">Grafica para Categorias</h2>
<div class="container">
    <div class="row">
        <div id="chart" style="height: 250px;">
            
        </div>
    </div>
</div>




<link rel="stylesheet" type="text/css" href="{{asset('CLNDR-master/demo/css/clndr.css')}}">
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

<script src="{{asset('CLNDR-master/src/clndr.js')}}"></script>
<script src="{{asset('CLNDR-master/demo/demo.js')}}"></script>

<script type="text/javascript">
new Morris.Line({
   element:'chart',
   
   data:[
       {year:'2008',  value:20},
       { year: '2009', value: 10 },
       { year: '2010', value: 5 },
       { year: '2011', value: 5 },
       { year: '2012', value: 20 }
   ],
   
   xkey:'year',
   ykeys:['value'],
   labels:['value']
});
</script>

@endsection
