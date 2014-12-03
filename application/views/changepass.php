<!DOCTYPE html>
<!-- /******************************************************* 
 Autor : LABG1E2
 Tipo de programa: "Vista para el cambio de contraseña de todos los usuarios registrados"
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

    <title>Tu Receta Médica</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="../assets/css/login.css" rel="stylesheet">
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
              <a class="navbar-brand" href="<?php echo base_url()."main/members";?>">Tu Receta Médica</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                
                <li><a href="<?php echo base_url()."main/members";?>">Inicio</a></li>
                <?php if($this->session->userdata('is_logged_in')){ ?>
                <li><a href="<?php echo base_url()."main/logout";?>">Cerrar sesión</a></li>
                <?php } ?>
              </ul>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>

 <div class="container">

      <form class="well" action="<?php echo base_url()."main/new_password";?>" method="post" accept-charset="utf-8">
        <h2 class="form-signin-heading">Cambiar Clave</h2>
        <?php echo validation_errors(); ?>
        <label>Clave:</label>
        <input type="password" class="form-control" name="passW" placeholder="Clave" required>
        <label>Nueva Clave:</label>
        <input type="password" class="form-control" name="npassW" placeholder="Nueva Clave" required>
        <label>Confirme la Clave:</label>
        <input type="password" class="form-control" name="cpassW" placeholder="Confirme la Clave" required>
        <button class="btn btn-large btn-primary" type="submit">Cambiar Clave</button>
        
      </form>

    </div> <!-- /container -->



      <!-- FOOTER -->
       <div id="footer">
      <div class="container">
        <p><a href="#"><br>Tu Receta Médica</a>, by <a href="#">LabG1E2</a>.</p>
        <p class="pull-right"><a href="#">Back to top</a></p>
      </div>
    </div>




    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>