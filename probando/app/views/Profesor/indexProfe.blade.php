@extends('layouts.master')

@section('titulo')
    UTEM - Bienvenido
@stop 




@section('content')

<div class="container">

<div class="panel panel-green">
                        
                        <div class="panel-heading">
                            
                            <h4>Bienvenido al Inicio </h4> 

                        </div>
                        <div class="panel-body">

                            <i class="fa fa-comments fa-4x"></i>
                            
                            <div id="saludo" style="margin-top: -50px;margin-left: 80px;">  
                            <p>
                            
                              <b> Este es su panel de administración de su sitio web, en el cual
                                  usted podrá editar.....</b> 
                                
                            </p>
                            </div>

                        </div>

                        </div>
                 
</div>

<div class="panel panel-default">
  <div class="panel-heading">
                            <!-- Button trigger modal -->
                            <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                            Nuevo Articulo <i class="fa fa-plus-square"></i>
                            </button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Nuevo artículo</h4>
      </div>
      <div class="modal-body">
<!-- FORMULARIO -->
<form role="form" action="articulos/create" enctype="multipart/form-data" method="post" id="formulario">

  <div class="form-group">
    <label for="exampleInputEmail1">Titulo</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingrese el titulo" name="titulo" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Descripción</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingrese la descripción" name="descripcion" required>
  </div>
    <!-- C
 <div class="form-group">
    <label for="exampleInputEmail1">Imagen 1 <i class="fa fa-file-image-o"></i></label>
    <input type="file" class="form-control" id="exampleInputEmail1" placeholder="Ingrese la imagen 1" accept="image/gif, image/jpeg, image/png" name="foto1" required>
 </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Imagen 2 <i class="fa fa-file-image-o"></i></label>
    <input type="file" class="form-control" id="exampleInputEmail1" placeholder="Ingrese la imagen 2" accept="image/gif, image/jpeg, image/png" name="foto2">
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Imagen 3 <i class="fa fa-file-image-o"></i></label>
    <input type="file" class="form-control" id="exampleInputEmail1" placeholder="Ingrese la imagen 3" accept="image/gif, image/jpeg, image/png" name="foto3">
  </div>

                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar <i class="fa fa-times"></i></button>
                            <button type="submit" class="btn btn-primary">Guardar Cambios <i class="fa fa-floppy-o"></i>
                            </button>
</form>
<!-- FIN FORMULARIO-->
      </div>
    </div>
  </div>
</div>
<!-- FIN DE Modal -->

                        </div>

<!-- EDICION -->


<!-- Modal -->
<div class="modal fade" id="Edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Editar artículo</h4>
      </div>
      <div class="modal-body">
<!-- FORMULARIO -->
<form role="form" action="articulos/update" enctype="multipart/form-data" method="post" id="formEdit">
  <div class="form-group">

    <label for="exampleInputEmail1">Titulo </label>
    <input type="text" class="form-control" id="titulo_edit" placeholder="Ingrese el nombre" name="titulo_edit">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Descripción</label>
    <textarea style="height:172px;width: 568px;" type="text" class="form-control" id="descripcion_edit" placeholder="Ingrese el nombre" name="descripcion_edit"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Imagen 1</label>
    <input type="file" class="form-control"  placeholder="Ingrese el nombre" name="foto1_edit" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Imagen 2</label>
    <input type="file" class="form-control" id="foto2_edit" placeholder="Ingrese el nombre" name="foto2_edit">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Imagen 3</label>
    <input type="file" class="form-control" id="foto3_edit" placeholder="Ingrese el nombre" name="foto3_edit">
  </div>
  
  <div class="form-group">
  <label>Imagenes Actuales : (Imagen 1 - Imagen 2 - Imagen 3)</label><br>  
  <img id="foto1_edit2" height="150" width="150" />
  <img id="foto2_edit2" height="150" width="150" /> 
  <img id="foto3_edit2" height="150" width="150" />
  </div>


                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar <i class="fa fa-times"></i></button>
                            <button type="submit" class="btn btn-primary">Guardar Cambios <i class="fa fa-floppy-o"></i>
                            </button>
</form>
<!-- FIN FORMULARIO-->
      </div>
    </div>
  </div>
</div>
<!-- FIN DE Modal -->

 </div>


@stop