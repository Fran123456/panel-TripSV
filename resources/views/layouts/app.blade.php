<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->



  <!--PLANTILLA---------------------------------------------------------------------->



  
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <!-- Toastr style -->
    <link href="{{asset('css/plugins/toastr/toastr.min.css')}}" rel="stylesheet">

    <!-- Gritter -->
    <link href="{{asset('js/plugins/gritter/jquery.gritter.css')}}" rel="stylesheet">

    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

     <script type="" src="{{asset('js/jquery-3.1.1.min.js')}}"></script>


     <link href="{{asset('css/plugins/blueimp/css/blueimp-gallery.min.css')}}" rel="stylesheet">
     <script src="{{asset('js/plugins/blueimp/jquery.blueimp-gallery.min.js')}}"></script>


     <link href="{{asset('css/plugins/select2/select2.min.css')}}" rel="stylesheet">









<!--PLANTILLA------------------------------------------------------------------------>

<style type="text/css">
  .redA{
    color:#ba5b5b;
  }
  .successA{
    color: #579a6c;
  }
</style>



</head>
<body>

  <div id="wrapper">
      <nav class="navbar-default navbar-static-side" role="navigation">
          <div class="sidebar-collapse">
              <ul class="nav metismenu" id="side-menu">
                  <li class="nav-header">
                      <div class="dropdown profile-element"> <span>

                              

                              <img alt="image" class="img-circle" height="50" width="50" src="{{asset(Auth::user()->img)}}" />

                               </span>
                          <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                              <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{ Auth::user()->name }}</strong>
                              </span> <span class="text-muted text-xs block">{{ Auth::user()->email }} <b class="caret"></b></span> </span> </a>
                          <ul class="dropdown-menu animated fadeInRight m-t-xs">

                           

                              <li><a href="{{route('Perfil.edit', Auth::user()->id) }}">Mi perfil</a></li>

                              <li class="divider"></li>
                              <li>
                                <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Salir
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                              </li>
                          </ul>
                      </div>
                      <div class="logo-element">
                          TRIP
                      </div>
                  </li>

                   <li>
                    <a href="{{route('home')}}"><i class="fa fa-home" aria-hidden="true"></i> <span class="nav-label">Dashboard</span></a>
                   </li>

                   <li>
                    <a href="{{route('unidad.index')}}"><i class="fa fa-plus-square" aria-hidden="true"></i> <span class="nav-label">Unidades</span></a>
                   </li>
                   <li>

                    <a href="{{route('guia.index')}}"><i class="fa fa-laptop"></i> <span class="nav-label">Guia turistico</span></a>

                    </li>



                    <li><a href="{{route('usuario.index')}}"><i class="fa fa-user" aria-hidden="true"></i><span class="nav-label">Usuarios</span></a></li>


                    
                    <li><a href="{{route('paquete.index')}}"><i class="fa fa-map-o" aria-hidden="true"></i><span class="nav-label">Paquetes</span></a></li>


                   <li><a href="{{route('blog.index')}}"><i class="fa fa-rss-square" aria-hidden="true"></i><span class="nav-label">Blog</span></a></li>

                   <li><a href="{{route('multimedia.index')}}"><i class="fa fa-file-image-o" aria-hidden="true"></i><span class="nav-label">Multimedia</span></a></li>

                   


              </ul>
          </div>
      </nav>

      <div id="page-wrapper" class="gray-bg">
          <div class="row border-bottom">
          <nav class="navbar navbar-static-top " role="navigation" style="margin-bottom: 0">
          <div class="navbar-header">
              <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
          </div>
              <ul class="nav navbar-top-links navbar-right">
                  <li>
                              <a href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                  <i class="fa fa-sign-out"></i> Salir
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  {{ csrf_field() }}
                              </form>
                  </li>
              </ul>
          </nav>
          </div>

          <div class="wrapper wrapper-content">
                  <!--AQUI VA EL CONTENIDO -->
                      @yield('content')
                  <!--AQUI VA EL CONTENIDO-->
          </div>


  

      </div>
    </div>



<!--PLANTILLA----------------------------------------------->

<!-- Mainly scripts -->
    
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
    <script src="{{asset('js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

    <!-- Flot -->
    <script src="{{asset('js/plugins/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('js/plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{asset('js/plugins/flot/jquery.flot.spline.js')}}"></script>
    <script src="{{asset('js/plugins/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('js/plugins/flot/jquery.flot.pie.js')}}"></script>

    <!-- Peity -->
    <script src="{{asset('js/plugins/peity/jquery.peity.min.js')}}"></script>
    <script src="{{asset('js/demo/peity-demo.js')}}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{asset('js/inspinia.js')}}"></script>
    <script src="{{asset('js/plugins/pace/pace.min.js')}}"></script>

    <!-- jQuery UI -->
    <script src="{{asset('js/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

    <!-- GITTER -->
    <script src="{{asset('js/plugins/gritter/jquery.gritter.min.js')}}"></script>

    <!-- Sparkline -->
    <script src="{{asset('js/plugins/sparkline/jquery.sparkline.min.js')}}"></script>

    <!-- Sparkline demo data  -->
    <script src="{{asset('js/demo/sparkline-demo.js')}}"></script>

    <!-- ChartJS-->
    <script src="{{asset('js/plugins/chartJs/Chart.min.js')}}"></script>


 <!--DATATABLE-->
   


<link rel="stylesheet" type="text/css" href="{{asset('DataTables/datatables.min.css')}}"/>
<script type="text/javascript" src="{{asset('DataTables/datatables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/llamarLenguaje.js')}}"></script>


<!--PLANTILLA----------------------------------------------->








</body>
</html>
