@extends('layouts.login_register')

@section('content')
<br>



<div class="container">
    <div class="row">
        <div class="col-md-12">
             <div class="panel panel-default">
                 <div class="panel-body">
                     <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div> 
                        <input type="hidden" name="rol" value="admin">


                        <div class="form-group">
                            
                                <label class="col-md-4 control-label" >Avatar perfil</label>
                            
                           <div class="col-md-5">
                               <select id="avatar" onchange="perfil();" name="avatar"  class="form-control">
                                <option  value="perfil/plume.png">Pajaro azul</option>
                                <option  value="perfil/pvz2.png">Zombie</option>
                                <option  value="perfil/pyrojump.png">Llama de fuego</option>
                                <option  value="perfil/quadropus.png">Bola enojada</option>
                                <option  value="perfil/scribblenauts.png">Bola de sonido</option>
                                <option value="perfil/seesmic.png">Mapache</option>
                                <option value="perfil/sonic.png">Sonic</option>
                              </select>

                           </div>
                           <div class="col-md-1">
                               <img id="imgavatar" height="40" width="40" src="perfil/plume.png">
                           </div>
                           
                        </div>
                       


                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                 </div>
             </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function perfil(){
        var perfil = $('#avatar').val();
        if(perfil == "perfil/pvz2.png"){
            $('#imgavatar').attr('src', 'perfil/pvz2.png');
        }

        if(perfil == 'perfil/pyrojump.png'){
            $('#imgavatar').attr('src', 'perfil/pyrojump.png');
            
        }

        if(perfil == 'perfil/plume.png'){
            $('#imgavatar').attr('src', 'perfil/plume.png'); 
        }

        if(perfil == 'perfil/quadropus.png'){
            $('#imgavatar').attr('src', 'perfil/quadropus.png'); 
        }

        if(perfil == 'perfil/scribblenauts.png'){
            $('#imgavatar').attr('src', 'perfil/scribblenauts.png'); 
        }

        if(perfil == 'perfil/seesmic.png'){
            $('#imgavatar').attr('src', 'perfil/seesmic.png'); 
        }

        if(perfil == 'perfil/sonic.png'){
            $('#imgavatar').attr('src', 'perfil/sonic.png'); 
        }
    }
</script>

@endsection
