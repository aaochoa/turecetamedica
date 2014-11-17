<!DOCTYPE html>
<!-- /******************************************************* 
 Autor : LABG1E2
 Tipo de programa: "Vista del login"
 Lenguaje: PHP, HTML, CSS, JAVASCRIPT
 Descripción: Tu Receta Médica
********************************************************  -->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Log in - Tu Receta Medica</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../assets/ico/favicon.png">

    <!-- Le styles -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../assets/css/login.css" rel="stylesheet">
   
  </head>

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
              <a class="navbar-brand" href="<?php echo base_url()."main/";?>">Tu Receta Médica</a>
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
                    <li class="disabled"><a href="#">Normatividad</a></li>
                  </ul>
                </li>
                <li><a href="<?php echo base_url()."main/signup";?>">Registrarse</a></li>
              </ul>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>


    <div class="container">

      <form class="well" action="<?php echo base_url()."main/login_validation";?>" method="post" accept-charset="utf-8">
        <h2 class="form-signin-heading">Log In</h2>
        <?php echo validation_errors(); ?>
        <label>Numero del documento:</label>
        <input type="text" class="form-control" name="idUsers" placeholder="Numero del documento" autocomplete="off" required>
        <label>Clave:</label>
        <input type="password" class="form-control" name="passW" placeholder="Clave" required>
        <button class="btn btn-large btn-primary" type="submit">Log in</button>
        
      </form>

    </div> <!-- /container -->
    
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