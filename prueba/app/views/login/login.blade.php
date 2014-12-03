@extends('layouts.master')

@section('titulo')
    UTEM - Iniciar Sesión
@stop   

@section('content')


   <body>
  
<div class="container" style="width: 400px;">

      <form class="form-signin" method="post" action="/" style="margin-top: 40px;">

        <h1 class="form-signin-heading" style="font-size:25px;"><b>Inicio de sesión</b></h1>

        {{ Form::open(array('url' => 'login')) }}

<p> <big>{{ Form::label('rut', 'Rut') }} </big></p>
<input class="form-control" placeholder="Rut" {{Form::text('rut') }} </p>

<p><big>{{ Form::label('password', 'Contraseña') }}</big></p>
 <input class="form-control" placeholder="Contrase&#xF1;a" {{ Form::password('password') }}</p>

@if (Session::has('login_errors'))
<span class="error"><b><big>Usuario o contraseña incorrecto/a.</big></b></span>
@endif

<button class="btn btn-lg btn-primary btn-block" type="submit" style="margin-top: 10px;"><i class="fa fa-user fa-fw"></i>Iniciar sesión</button>


{{ Form::close() }}

 
      </form>

    </div>

    

<?php echo HTML::script('js/jquery.Rut.min.js'); ?>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $("#rut").Rut();
    });
</script>

</body>

@stop