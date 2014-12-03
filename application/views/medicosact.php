<!DOCTYPE html>
<!-- /******************************************************* 
 Autor : LABG1E2
 Tipo de programa: "Vista para el administrador de los medicos activos"
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

    <!-- Custom styles just for the navbar-->
    <link href="../assets/css/carousel.css" rel="stylesheet">
  

    <script language="javascript" type="text/javascript">
      function showRow(row)
      {
        var x=row.cells;
        document.getElementById("idUsers").value = x[0].innerHTML;
        document.getElementById("name").value = x[1].innerHTML;
        document.getElementById("lastName").value = x[2].innerHTML;
        document.getElementById("email").value = x[3].innerHTML;
        document.getElementById("rol").value = x[4].innerHTML;
      }
    </script>

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
                  <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Solicitudes<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo base_url()."main/solicitudesGU";?>">Solicitudes Generales</a></li>
                    <li><a href="<?php echo base_url()."main/solMedicine";?>">Solicitudes de adición de medicamentos</a></li>
                    <li><a href="<?php echo base_url()."main/solTreatment";?>">Solicitudes de adición de tratamientos</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Medicos<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo base_url()."main/medicosact";?>">Médicos activos</a></li>
                    <li><a href="<?php echo base_url()."main/apoyo";?>">Grupos de apoyo</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pacientes<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo base_url()."main/pacientesact";?>">Pacientes activos</a></li>
                    <li><a href="<?php echo base_url()."main/pacientesinact";?>">Usuarios inactivos</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                   <li><a href="<?php echo base_url()."main/logout";?>">Cerrar sesión</a></li>
                   <li><a href="<?php echo base_url()."main/changepass";?>">Cambiar clave</a></li>   
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>

  <div class="container">

  <div class="page-header">
        <h1><br><br>Médicos Activos del sitio</h1>
  </div>

  <div class="row">
    <div class="col-lg-6">
      <div class="bs-docs-example">
            <table class="table" id="myTable">
              <thead>
                <tr>
                  <th>Número de Documento</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Correo</th>
                  <th>rol</th>
                </tr>
              </thead>
              <tbody>
                
                <?php if(!empty($query)){ ?>
                  <?php foreach($query as $row){ ?>
                  <tr onclick="javascript:showRow(this);">
                  <td><?php echo $row->idUsers;?></td>
                  <td><?php echo $row->name;?></td>
                  <td><?php echo $row->lastName;?></td>
                  <td><?php echo $row->email;?></td>
                  <td><?php echo $row->rol;?></td>
                </tr>
                <?php } ?>
                <?php } ?>
              </tbody>
            </table>
          </div>
      </div>
    
      <div class="col-lg-6">
      <form class="well" action="<?php echo base_url()."main/desactivarCuenta";?>" method="post" accept-charset="utf-8">
        <h2 class="form-signin-heading">Desactivar cuenta del médico</h2>
        <?php echo validation_errors(); ?>
        
        <label>Numero del documento:</label>
        <input type="text" id="idUsers" class="form-control" name="idUsers" placeholder="Numero del documento" autocomplete="off" required>
        <label>Nombre:</label>
        <input type="text" id="name" class="form-control" name="name" placeholder="Nombre" required autocomplete="off">
        <label>Apellido:</label>
        <input type="text" id="lastName" class="form-control" name="lastName" placeholder="Apellido" required autocomplete="off">
        <label>Email:</label>
        <input type="email" id="email" class="form-control" name="email" placeholder="Email" required autocomplete="off">
        <label>Rol:</label>
        <select class="form-control" name="rol" id="rol">
        <option></option>
        <option value="1">Paciente</option>
        <option value="2">Médico General</option>
        <option value="3">Médico Especialista</option>
        </select>
        
        <br>
        <button class="btn btn-large btn-primary" type="submit">Eliminar</button>
      </form>
     </div> 
  </div>
</div>

<!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-6">
          <a class="twitter-timeline" href="https://twitter.com/MinSaludCol" data-widget-id="520359799821574144">Tweets by @MinSaludCol</a>
          <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
          <h4>Información minuto a minuto proporcionada por el ministerio de salud</h4>
        </div><!-- /.col-lg-6 -->
        <div class="col-lg-6">
         <center><img class="img-circle" src="../assets/img/examples/minsalud.jpeg" alt="Generic placeholder image" style="width: 250px; height: 250px;"></center>
          <h2><center> MinSalud </center></h2>
          <p>Para mayor información acerca del estado del sisrowalud visite la página del Ministerio de salud.</p>
          <p><center><a class="btn btn-primary" href="http://www.minsalud.gov.co" role="button">Ir al sitio &raquo;</a></center></p>
        </div><!-- /.col-lg-6 -->
      </div><!-- /.row -->


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
  </body>
</html>