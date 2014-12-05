@extends('layouts.master')

@section('titulo')
    UTEM - Administrador Pautas y Tareas
@stop 

@section('content')

@section('sidebar')

<div id="wrapper">
<nav class="navbar navbar-fixed-top navbar-inverse" role="navigation"  >
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./">Administrador de Pautas y Tareas</a>
        </div>
          <ul class="nav navbar-nav">
            <li class="active"><a href="./">Inicio</a></li>
      </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/login">Ingresar al Portal<span class="sr-only">(current)</span></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

  

</body>

 

<div class="container">

 

 <section id="miSlide" class="carousel slide">
                <ol class="carousel-indicators">
                    <li data-target="#miSlide" data-slide-to="0" class="active"></li>
                    <li data-target="#miSlide" data-slide-to="1"></li>
                    <li data-target="#miSlide" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="item active">
                        <img src="images/aa.jpg" class="adaptar">
                    </div>
                    <div class="item">
                        <img src="images/aa.jpg" class="adaptar">
                    </div>
                    <div class="item">
                        <img src="images/aa.jpg" class="adaptar">
                    </div>
                </div>

                <a href="#miSlide" class="left carousel-control" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a href="#miSlide" class="right carousel-control" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </section>

         

          </div>



@stop