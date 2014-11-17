<!DOCTYPE html>
<!-- /******************************************************* 
 Autor : LABG1E2
 Tipo de programa: "Vista con el listado de los medicamentos no aprobados por el POS"
 Lenguaje: PHP, HTML, CSS, JAVASCRIPT
 Descripción: Tu Receta Médica
********************************************************  -->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../assets/ico/favicon.png">

    <title>¿QUÉ NO CUBRE EL POS? - Tu Receta Médica</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../assets/css/basic.css" rel="stylesheet">
  

  </head>

    <!-- NAVBAR
================================================== -->
  <body>
    
    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo base_url()."main/medicamentos";?>">Tu Receta Médica</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Opciones <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo base_url()."main/medicamentos";?>">Ver lista de medicamnetos</a></li>
                    <li><a href="<?php echo base_url()."main/apoyo";?>">Ver grupos de apoyo</a></li>
                    <li><a href="<?php echo base_url()."main/eps";?>">Ver lista de EPS</a></li>
                    <li><a href="<?php echo base_url()."main/nopos";?>">¿Qué medicamentos, procedimientos NO cubre el POS? </a></li>
                    <li><a href="#">Normatividad</a></li>
                  </ul>
                </li>
                <li><a href="<?php echo base_url()."main/signup";?>">Registrarse</a></li>
                <li><a href="<?php echo base_url()."main/login";?>">Ingresar</a></li>
              </ul>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>


    <div class="container">

      <div class="starter-template">
        <h1>¿Qué medicamentos, procedimiento NO cubre el POS?<br></h1>
        <embed src="../assets/files/NOPOS.pdf" width="850" height="550" href="../assets/files/NOPOS.pdf"></embed>
        <p class="lead"><br></p>
      </div>
      <div class="mastfoot">
        <div class="inner">
            <p> <a href="#">Tu Receta Médica</a>, by <a href="#">LabG1E2</a>.</p>
        </div>
      </div>
    </div><!-- /.container -->

      
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
  </body>
</html>