<!DOCTYPE html>
<!-- /******************************************************* 
 Autor : LABG1E2
 Tipo de programa: "Vista que impide que los usuarios ingresen a vistas no permitidas por su rol"
 Lenguaje: PHP, HTML, CSS, JAVASCRIPT
 Descripción: Tu Receta Médica
********************************************************  -->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>No Permitido - Tu Receta Médica</title>
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
        <p class="lead"><h2>Usted no tiene acceso a esta página</h2></p>
        <p>Señor usuario usted no tiene los permisos suficientes para acceder a este contenido 
          <a href="<?php echo base_url()."main/members";?>">Volver</a><br><h3>El equipo de TU RECETA MÉDICA le desea un buen día</h3></p>
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
