@extends('template')

@section('content')

<div class="login-box">
    <div class="login-logo">
      <h1>SiSDAE</h1>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">Iniciar sesión</p>
  
      <form action="{{'login'}}" method="post">
        @csrf          
        <div class="form-group has-feedback">
          <input type="email" name="email" class="form-control" placeholder="Correo Electrónico" value="{{ old('email')}}" required="">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          
          @error('email')
            <br>
            <div class="alert alert-danger">Error email</div>
              
          @enderror
        </div>

        <div class="form-group has-feedback">
          <input type="password" name="password" class="form-control" placeholder="Contraseña">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-xs-12">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Iniciar sesión</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
  
  
      <a href="#">¿Olvidaste tu contraseña?</a><br>
  
    </div>
    <!-- /.login-box-body -->
  </div>
    
@endsection