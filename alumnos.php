<?php
	require_once 'class/Template.php';
	$Template = new Template('');
	$Template->bodyTop();	
?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  <script src="https://www.gstatic.com/firebasejs/7.2.3/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.2.3/firebase-firestore.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.14.4/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.14.4/firebase-firestore.js"></script>

<br>

<section class="content">
  <div class="container-fluid container">

    <section class="content-header"> <!--  Contendeor del header -->
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="inicio.php">Inicio</a></li>
              <li class="breadcrumb-item active">Mensaje</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">     <!-- Contenido de la tabla -->
       <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"> <b>Mensaje</b>  </h3>
              </div>
              <div class="card-body">
                <div class="nuevo_mensaje">
                  <button id="btnNuevo" id="btnn" class="btn btn-success mx-4 mt-4 float-left" onclick="nuevo()">Nuevo mensaje</button>
                </div>
              </div>
            </div>
    </section>
  
    <section class="content">     <!-- Contenido de la tabla -->

       <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-info">
              <div class="card-header">
              <!--  <h3 class="card-title">Bienvenido/a al Sistema de Gestión de Laboratorio Multidisciplinario.</h3> -->
              <h3 class="card-title"> <b>Mensaje Enviado</b>  </h3>
                
                <p class= "correo">ehoilcanche@gmail.com</p> 
                <p class= "date">Fecha: 08/02/2021</p>
                
              </div>              
              <form role="form">
                <div class="card-body">
                  <button type="button" class="btn btn-outline-secondary"> 
                    <i class="bi bi-check-circle-fill"></i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill"viewBox="0 0 16 16">
                      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                    </svg>
                  </button>
                <section class="msj">       
                   <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
                </section>   
                <div class="btn"> 
                  <!-- ELIMINAR BOTON-->
                  <button type="button" class="btn btn-danger"> 
                    <i class="bi bi-trash"></i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                      <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                       <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                    </svg>
                  </button>
                  <!-- Editar Boton -->
                  <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="bi bi-pencil-square"></i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg>
                  </button>
                </div>
              </form>
            </div>
          </div>
<style type="text/css">
  .correo{
    text-align:center;
  }
  .content{
    text-align:justify;
  } 
  .date{
    text-align: right;
  }
</style>

     <!--      
         /.card-header  
          <div class="card-body">
             <div class="table-responsive">
               input para el buscador  
              <input class="form-control" id="buscar" type="search" placeholder="Buscar..">
              <table id="tabla_alumnos" class="table table-bordered table-hover mt-2 mb-3">
              <thead>
                <tr>  Encabezado  
                   <th>ID</th>  
                  <th>Nombre</th>
                  <th>Matrícula</th>
                  <th>Carrera</th>
                  <th>Semestre</th>
                  <th>Editar</th>
                  <th>Eliminar</th>
                </tr>
              </thead>
              <tbody id="tabla_al">     Valores   
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </table>
              
            </div>
 funciones del busador  
            <script>
            $(document).ready(function(){
              $("#buscar").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#tabla_al tr").filter(function() {
                  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
              });
            });
            </script>
            
            </div>
          </div>
        </div>
      </div>
    </section>

  empieza ventana modal para EDITAR

<div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModallabel" aria-hidden="true"> 
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div id="header1" class="modal-header" class="btn btn-primary">
        <h5 id="title1" class="modal-title" id="exampleModallabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      acá va el contenido del form 
      <div id="formAlumno">   BODY  
        <div class="modal-body">   FORMULARIO 
          <div class="form-group">
            <label for="nombre" class="col-form-label">Nombre</label>
            <input type="text" id="inombre" placeholder="Ingrese su nombre" class="form-control my-1">  
          </div>
          <div class="form-group">
            <label for="nombre" class="col-form-label">Matrícula</label>
            <input type="text" id="imatricula" placeholder="Ingrese su matrícula" class="form-control my-1">
          </div>
          <div class="form-group">
            <label for="nombre" class="col-form-label">Carrrera</label>
            <input type="text" id="icarrera" placeholder="Carrera" class="form-control my-1">
          </div>
          <div class="form-group">
            <label for="nombre" class="col-form-label">Semestre</label>
            <input type="text" id="isemestre" placeholder="Semestre" class="form-control my-1">
          </div>
        </div>
        <div class="modal-footer">  FOOTER 
          <button class="btn btn-default" data-dismiss="modal">Cancelar</button>
          <button id="boton" class="btn btn-success mx-3 my-3" onclick="guardar()">Editar</button>
        </div>
      </div>
    </div>
  </div>
</div> Fin de la ventana modal  

-->
 
<div class="modal fade" id="modalCRUD2" tabindex="-1" role="dialog" aria-labelledby="exampleModallabel" aria-hidden="true"> 
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div id="header2" class="modal-header" class="btn btn-primary">
        <h5 id="title2" class="modal-title" id="exampleModallabel">Enviar Mensaje</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
        
      <div id="formAlumno">  
        <div class="modal-body">      
          <div class="form-group">
            <label for="nombre" class="col-form-label">De:</label>
            <input type="text" id="iinombre" placeholder="Ingrese su correo" class="form-control my-1" required>  
          </div>
          <div class="form-group">
            <label for="nombre" class="col-form-label">Para: </label>
            <input type="text" id="iimatricula" placeholder="Ingrese el correo del destinatario" class="form-control my-1" required>
          </div>
          <label for="msg">Mensaje:</label>
          <div class="form-group">
             
            <textarea name="comentarios" rows="10" cols="63" placeholder="Mensaje."></textarea>
          </div>
        </div>    
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" onclick="guardar()">Understood</button>
          </div>
        </div>
      </div>
    </div>  
  </div>
</section>
<section>
 
</section>


<?php
	$Template->bodyButton();
?>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">
  $(document).ready(function(){ 
  $('.solo-numero').numeric();
   });
</script>

<script type="text/javascript">
  window.onload = function observador(){
    
firebase.auth().onAuthStateChanged(function(user) {
  if (user) 
  {
        
  } 
  else 
  {
    window.location = "index.html"
  }
});
</script>

<script src="https://www.gstatic.com/firebasejs/7.14.4/firebase-auth.js"></script>

<script src="alumnos/consultas.js"></script>
