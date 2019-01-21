@extends('layouts.app')

@section('content')


<div class="container">




                <div class="row">
                    
                      <div class="col-md-4">
                          <div class="payment-card">
                              <i class="fa fa-cogs fa-4x text-success" aria-hidden="true"></i>
                              <h2>
                                  Configuración de página de inicio
                              </h2>
                              <div class="row">
                                  <div class="col-sm-12">
                                      <a href="{{route('configuraciones-home')}}" class="btn btn-info">Ir</a>
                                  </div>
                                  
                              </div>
                          </div>
                      </div>
                    
                    <div class="col-md-4">
                          <div class="payment-card">
                              <i class="fa fa-cogs fa-4x text-success" aria-hidden="true"></i>
                              <h2>
                                  Configuración de página: About Us
                              </h2>
                              <div class="row">
                                  <div class="col-sm-12">
                                      <a href="{{route('configuraciones-aboutUs')}}" class="btn btn-info">Ir</a>
                                  </div>
                                  
                              </div>
                          </div>
                      </div>
                    
                  </div>


                    
                  
              

</div>
@endsection

   

  