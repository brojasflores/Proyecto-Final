@extends('layouts.master')

@section('titulo')
    UTEM - Alumno
@stop   

@section('content')
<center>
<div id="container">
    <br>
    <br>
    <br>
<h2 class="form-signin-heading" style="font-size:25px;">Agregar Alumno</h2>

    {{ Form::open(array('url' => 'Alumnos/add', 'method' => 'post')) }}

    <input name="" type="text" class="form-control" placeholder="Nombres" style="margin-top:10px;">
    <input name="" type="text" class="form-control" placeholder="Apellidos" style="margin-top: 10px;">
    <input name="" type="text" class="form-control" placeholder="Rut" id="rut" style="margin-top: 10px;">
    <input name="" type="text" class="form-control" placeholder="Carrera" style="margin-top: 10px;">
    <br>
    <button type="submit" class="btn btn-primary">Aceptar <i class="glyphicon glyphicon-plus-sign" aria-hidden="true"></i></button>

       
    {{Form::close()}}
    </div>
</center>
@stop