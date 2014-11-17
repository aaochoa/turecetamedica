<!DOCTYPE html>
<!-- /******************************************************* 
 Autor : LABG1E2
 Tipo de programa: "Vista que se muestra despues de diligenciar el formulario de registro"
 Lenguaje: PHP, HTML, CSS, JAVASCRIPT
 Descripción: Tu Receta Médica
********************************************************  -->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Espera - Tu Receta Médica</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../assets/ico/favicon.png">

    <!-- CSS -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../assets/css/required.css" rel="stylesheet">
    
    
  </head>

  <body>


    <!-- Part 1: Wrap all page content here -->
    <div id="wrap">

      <!-- Begin page content -->
      <div class="container">
        <div class="page-header">
          <a href="<?php echo base_url()."main/members";?>"><h1>Tu Receta Médica</h1></a>
        </div>
        <p class="lead"><h2>Su solicitud ha quedado en la lista de espera<br></h2></p>
        <p>Debido a las politicas de Tu Receta Médica de registro de usuarios a la plataforma, usted ha 
          quedado en espera y su solicitud será evaluada por el administrador. Espere en las proximas horas 
          una respuesta a la vuelta de correo electronico. <br>
          <a href="<?php echo base_url()."main/principal";?>">Volver</a><br><h3>El equipo de TU RECETA MÉDICA le desea un buen día</h3></p>
        </p>
      </div>

      <div id="push"></div>
    </div>

    <div id="footer">
      <div class="container">
        <p><a href="#">Tu Receta Médica</a>, by <a href="#">LabG1E2</a>.</p>
      </div>
    </div>



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap.js"></script>
    
  </body>
</html>