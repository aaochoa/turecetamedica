<!DOCTYPE html>
<!-- /******************************************************* 
 Autor : LABG1E2
 Tipo de programa: "Vista del formulario de edicion de datos del paciente"
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

      <form class="well" action="<?php echo base_url()."main/editarPerfil";?>" method="post" accept-charset="utf-8">
        <h2 class="form-signin-heading">Formulario edición de datos</h2>
        <?php echo validation_errors(); ?>

        <?php if(!empty($query)){ ?>
        <?php foreach($query as $row){ ?>

        <label>Estrato:</label>
        <input type="text" class="form-control" value="<?php echo $row->estrato;?>" name="estrato" required autocomplete="off">
        <label>Fecha de nacimiento:</label>
        <input type="text" class="form-control" value="<?php echo $row->birthDate;?>" name="birthDate" required autocomplete="off">
        <label>Genero:</label>
        <select class="form-control" name="gender" value="<?php echo $row->gender;?>">
        <option>Seleccione una opción</option>
        <option value="Masculino">Masculino</option>
        <option value="Femenino">Femenino</option>
        </select><br>
        <label>Sisben/EPS:</label>
        <input type="text" class="form-control" value="<?php echo $row->sisbenEps;?>" name="sisbenEps" required autocomplete="off">
        <label>Dirección:</label>
        <input type="text" class="form-control" value="<?php echo $row->direccion;?>" name="direccion" required autocomplete="off">
        

        <?php } ?>
        <?php } ?>
        <br>
      <a data-toggle="modal" href="#myModal" class="btn btn-primary">Guardar</a>
      <div class="modal" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 class="modal-title">Tu Receta Médica</h4>
            </div>
          <div class="modal-body">
            Está seguro que desea realizar los cambios.<br><br>
            Para continuar click en Aceptar. <br>
            Para volver a la pagina principal haga click en cancelar.  
          </div>
          <div class="modal-footer">
            <a class="btn" href="<?php echo base_url()."main/members";?>">Cancelar</a>
            <button class="btn btn-large btn-primary" type="submit" 
            href="<?php echo base_url()."main/editarPerfil";?>">Aceptar</button>
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