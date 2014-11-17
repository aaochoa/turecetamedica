<!DOCTYPE html>
<!-- /******************************************************* 
 Autor : LABG1E2
 Tipo de programa: "Vista del formulario de registro"
 Lenguaje: PHP, HTML, CSS, JAVASCRIPT
 Descripción: Tu Receta Médica
********************************************************  -->
<html lang="en">
<head>
	<meta charset="utf-8">
    <title>Sign up - Tu Receta Medica</title>
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
                <li><a href="<?php echo base_url()."main/login";?>">Ingresar</a></li>
              </ul>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>

      <form class="well" action="<?php echo base_url()."main/signup_request";?>" method="post" accept-charset="utf-8">
        <h2 class="form-signin-heading">Formulario solicitud de registro</h2>
        <?php echo validation_errors(); ?>
        <label>Numero del documento:</label>
        <input type="text" class="form-control" name="idUsers" placeholder="Numero del documento" autocomplete="off" required>
        <label>Nombre:</label>
        <input type="text" class="form-control" name="name" placeholder="Nombre" required autocomplete="off">
        <label>Apellido:</label>
        <input type="text" class="form-control" name="lastName" placeholder="Apellido" required autocomplete="off">
        <label>Email:</label>
        <input type="email" class="form-control" name="email" placeholder="Email" required autocomplete="off">
        <label>Rol:</label>
        <select class="form-control" name="rol">
        <option>Seleccione una opción</option>
        <option value="1">Paciente</option>
        <option value="2">Médico General</option>
        <option value="3">Médico Especialista</option>
        </select>
        <br>
      <a data-toggle="modal" href="#myModal" class="btn btn-primary">Registrar</a>
      <div class="modal" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 class="modal-title">Tu Receta Médica</h4>
            </div>
          <div class="modal-body">
            Este formulario es una solicitud de registro que tiene que ser evaluada por el administrador.<br>
            Revise su correo frecuentemente. Esperamos dar pronta respuesta.<br><br>
            Para continuar con la solicitud haga click en Aceptar. <br>
            Para volver a la pagina principal haga click en cancelar.  
          </div>
          <div class="modal-footer">
            <a class="btn" href="<?php echo base_url()."main/principal";?>">Cancelar</a>
            <button class="btn btn-large btn-primary" type="submit" 
            href="<?php echo base_url()."main/signup_request";?>">Aceptar</button>
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