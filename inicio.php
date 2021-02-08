<?php
	require_once 'class/Template.php';
	$Template = new Template('');
	$Template->bodyTop();	
?>
<br>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-info">
              <div class="card-header">
              <!--  <h3 class="card-title">Bienvenido/a al Sistema de Gestión de Laboratorio Multidisciplinario.</h3> -->
                <h3 class="card-title"> <b>Mensaje Recibido</b>  </h3> 
                      <p class= "correo">ehoilcanche@gmail.com</p>
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
                        <button type="button" class="btn btn-danger"> 
                          <i class="bi bi-trash"></i>
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                             <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                          </svg>
                        </button>
                      </div>

<style type="text/css">
  .correo{
    text-align:center;
  }
  .content{
    text-align:justify;
  } 
</style>

      <!--
          <div class="col-md-6">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"> <b>PROPÓSITO</b></h3>
              </div>
              <form action="" role="form">
                <div class="card-body" style="text-align: justify">
                  El sistema cumpla con la necesidad de los distintos talleres donde se realicen préstamos de herramientas y laboratorios y/o aulas, para que de esta forma tener un control del inventario más eficiente y fácil de usar para el personal.
                </div>
                <br><br>
              </form>
            </div>
          </div>
        <section>
          <div class="col-md-6">
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title"> <b>POLÍTICA DEL TECNOLÓGICO</b></h3>
              </div>
              <form action="" role="form">
                <div class="card-body" style="text-align: justify">
                  El Tecnológico Nacional de México (TecNM) establece el compromiso de implementar todos sus procesos, orientándose hacia la satisfacción de sus clientes, sustentada en la calidad del proceso educativo, para cumplir con sus requisitos, mediante la eficacia de un sistema de gestión de la calidad y de mejora continua, conforme a la norma ISO 9001:2008/NMX-CC-9001-IMNC-2008.
                </div>
              </form>
            </div>
          </div>
        </section>
-->
        <div class="tab-content container-lg" id="myTabContent">
          <div class="tab-pane fade show active" id="mensajes" role="tabpanel" aria-labelledby="mensajes-tab">
            <div class="card" style="margin-top: 20px">
              <h5 class="card-header bg-secondary" style="color:white;">
                <div class="row align-items-center">
                  <div class="col align-self-center text-center">
                    <p class="fw-bold mb-2 mt-2"> </p>
                  </div>
                  <div class="col align-self-center text-center">
                    <p class="fw-bold mb-2 mt-2"> </p>
                  </div>
                  <div class="col align-self-center text-center">
                    <p class="fw-bold mb-2 mt-2"> </p>
                  </div>
                </div>
              </h5>
            </div>
          </div>
        </div>

          <!--/.col (left) -->
          <!-- right column -->

          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->

    </section>

<?php
	$Template->bodyButton();
?>


<!--jQuery -->
<script
		src="https://code.jquery.com/jquery-3.5.1.min.js"
		integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
		crossorigin="anonymous">
</script>



<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.14.4/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/7.14.4/firebase-analytics.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.4/firebase-auth.js"></script>
<script src="conn.js"></script>

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyAU4y2rKWP-NqSwqPEeBEmyftRwn-ZrS1U",
    authDomain: "sistema-conectateayuntamiento.firebaseapp.com",
    projectId: "sistema-conectateayuntamiento",
    storageBucket: "sistema-conectateayuntamiento.appspot.com",
    messagingSenderId: "134177903420",
    appId: "1:134177903420:web:434bf889b90ed8e6e84439",
    measurementId: "G-9QQDXH5NHY"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>

<script type="text/javascript" src="funciones.js"></script>

<script src=""></script>

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
}</script>
<link rel="stylesheet" type="text/css" href="plugins/alertifyjs/css/alertify.css">
 <link rel="stylesheet" type="text/css" href="plugins/alertifyjs/css/themes/default.css">  
 <script src="plugins/alertifyjs/alertify.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
