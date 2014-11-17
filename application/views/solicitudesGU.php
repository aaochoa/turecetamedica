<!DOCTYPE html>
<!-- /******************************************************* 
 Autor : LABG1E2
 Tipo de programa: "Vista del formulario de sugerencias, quejas y reclamos usuarios registrados"
 Lenguaje: PHP, HTML, CSS, JAVASCRIPT
 Descripción: Tu Receta Médica
********************************************************  -->
<html lang="en">
<head>
	<meta charset="utf-8">
    <title>Tu Receta Medica</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../assets/ico/favicon.png">
    <!-- Le styles -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../assets/css/signup.css" rel="stylesheet">
   
	
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
              <a class="navbar-brand" href="<?php echo base_url()."main/members";?>">Tu Receta Médica</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                
                <li><a href="<?php echo base_url()."main/members";?>">Inicio</a></li>
                <li><a href="<?php echo base_url()."main/logout";?>">Cerrar sesión</a></li>
              </ul>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>

      <form class="well" action="<?php echo base_url()."main/solicitudG";?>" method="post" accept-charset="utf-8">
        <h2 class="form-signin-heading">Sugerencias, quejas y reclamos</h2>
        <?php echo validation_errors(); ?>
        <label>Numero del documento:</label>
        <input type="text" class="form-control" name="idUsers" placeholder="Numero del documento" autocomplete="off" required>
        <label>Email:</label>
        <input type="email" class="form-control" name="email" placeholder="Email" required autocomplete="off">
        <label>Sugerencia, queja o reclamo:</label>
        <textarea class="form-control" rows="5" name="sugerencia" placeholder="Sugerencia, queja o reclamo" required autocomplete="off"></textarea>
        <br>
      <a data-toggle="modal" href="#myModal" class="btn btn-primary">Enviar</a>
      <div class="modal" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 class="modal-title">Tu Receta Médica</h4>
            </div>
          <div class="modal-body">
            El contenido de este formulario sera revisado por el administrador.<br>
            Revise su correo frecuentemente. Esperamos dar pronta respuesta.<br><br>
            Para continuar con la solicitud haga click en Aceptar. <br>
            Para volver a la pagina principal haga click en cancelar.  
          </div>
          <div class="modal-footer">
            <a class="btn" href="<?php echo base_url()."main/members";?>">Cancelar</a>
            <button class="btn btn-large btn-primary" type="submit" 
            href="<?php echo base_url()."main/solicitudG";?>">Aceptar</button>
          </div>
        </div>
      </div> 
</div>
      </form>
        
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