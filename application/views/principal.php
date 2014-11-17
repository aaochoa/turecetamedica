
<!DOCTYPE html>
<!-- /******************************************************* 
 Autor : LABG1E2
 Tipo de programa: "Vista principal del aplicativo"
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

    <title>Bienvenido - Tu Receta Médica</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../assets/css/cover.css" rel="stylesheet">

   
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Tu Receta Médica</h3>
              <ul class="nav masthead-nav">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Opciones <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo base_url()."main/medicamentos";?>">Ver lista de medicamnetos</a></li>
                    <li><a href="<?php echo base_url()."main/apoyo";?>">Ver grupos de apoyo</a></li>
                    <li><a href="<?php echo base_url()."main/eps";?>">Ver lista de EPS</a></li>
                    <li><a href="<?php echo base_url()."main/nopos";?>">¿Qué medicamentos, procedimientos NO cubre el POS? </a></li>
                    <li class="disabled"><a href="#">Normatividad</a></li>
                  </ul>
                </li>
                <li class="active"><a href="<?php echo base_url()."main/signup";?>">Registrarse</a></li>
                <li><a href="<?php echo base_url()."main/login";?>">Ingresar</a></li>
              </ul>
            </div>
          </div>

          <div class="inner cover">
            <h1 class="cover-heading">Bienvenido</h1>
            <p class="lead">Aquí puedes encontrar la lista de medicamentos ofrecidos por el POS, normatividad relacionada con el sistema de salud
              entre otras funciones. No olvides registrarte para poder acceder a información médica, tratamientos y compra de medicamentos.
            </p>
            <p class="lead">
              <a href="<?php echo base_url()."main/signup";?>" class="btn btn-lg btn-default">Registrarse</a>
            </p>
          </div>

        </div>
      </div>
    </div>
          
    <div class="mastfoot">
      <div class="inner">
        <p> <a href="#">Tu Receta Médica</a>, by <a href="#">LabG1E2</a>.</p>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/docs.min.js"></script>
  </body>
</html>