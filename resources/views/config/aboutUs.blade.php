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


               <div class="row">
                      <div class="col-md-3">
                          <div class="payment-card">
                              <i class="fa fa-cogs fa-2x text-success" aria-hidden="true"></i>
                              <h4>
                                  Administración de Background de AboutUs
                              </h4>
                              <div class="row">
                                  <div class="col-sm-12">
                                      <a href="{{route('config-aboutUs.index')}}" class="btn btn-info">Ir</a>
                                  </div>
                                  
                              </div>
                          </div>
                      </div>
                   
                      <div class="col-md-3">
                          <div class="payment-card">
                              <i class="fa fa-cogs fa-2x text-success" aria-hidden="true"></i>
                              <h4>
                                  Administración de Titulo e Historia de AboutUs
                              </h4>
                              <div class="row">
                                  <div class="col-sm-12">
                                      <a href="{{route('view-text')}}" class="btn btn-info">Ir</a>
                                  </div>
                                  
                              </div>
                          </div>
                      </div>
                  </div>
              

</div>

@endsection

