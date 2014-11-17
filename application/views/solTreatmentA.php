<!DOCTYPE html>
<!-- /******************************************************* 
 Autor : LABG1E2
 Tipo de programa: "Vista del administrador para la solicitud de tratamientos"
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
        document.getElementById("idTreatments").value = x[0].innerHTML;
        document.getElementById("idSolicitante").value = x[1].innerHTML;
        document.getElementById("nameT").value = x[2].innerHTML;
        document.getElementById("enfermedad").value = x[3].innerHTML;
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
                  </ul>
                </li>
                 <li><a href="<?php echo base_url()."main/pacientesinact";?>">Usuarios inactivos</a></li>
                <li><a href="<?php echo base_url()."main/logout";?>">cerrar sesión</a></li>  
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>

  <div class="container">

  <div class="page-header">
        <h1><br><br>Solicitudes adición de tratamientos</h1>
  </div>

  <div class="row">
    <div class="col-lg-6">
      <div class="bs-docs-example">
            <table class="table table-striped" id="myTable">
              <thead>
                <tr>
                  <th>Numero de solicitud</th>
                  <th>Numero de documento</th>
                  <th>Nombre del tratamiento</th>
                  <th>Enfermedad relacionada</th>
                </tr>
              </thead>
              <tbody>
                
                <?php if(!empty($query)){ ?>
                  <?php foreach($query as $row){ ?>
                  <tr onclick="javascript:showRow(this);">
                  <td><?php echo $row->idTreatments;?></td>
                  <td><?php echo $row->idSolicitante;?></td>
                  <td><?php echo $row->nameT;?></td>
                  <td><?php echo $row->enfermedad;?></td>
                </tr>
                <?php } ?>
                <?php } ?>
              </tbody>
            </table>
          </div>
      </div>
    
    <div class="col-lg-6">
      <form class="well" action="<?php echo base_url()."main/solicitudTreatment";?>" method="post" accept-charset="utf-8">
        <h2 class="form-signin-heading">Sugerencias, quejas o reclamos</h2>
        <?php echo validation_errors(); ?>
        
        <label>Id:</label>
        <input type="text" id="idTreatments" class="form-control" name="idTreatments" placeholder="Id" autocomplete="off" required>
        <label>Numero del documento:</label>
        <input type="text" id="idSolicitante" class="form-control" name="idSolicitante" placeholder="Numero del documento" autocomplete="off" required>
        <label>Nombre del Tratamiento:</label>
        <input type="text" id="nameT" class="form-control" name="nameT" placeholder="Nombre del Tratamiento" required autocomplete="off">
        <label>Enfermedad relacionada:</label>
        <input type="text" id="enfermedad" class="form-control" name="enfermedad" placeholder="Enfermedad relacionada" required autocomplete="off">
        <br>
        <button class="btn btn-large btn-primary" type="submit" name="mybutton" value="accept">Aceptar</button>
        <button class="btn btn-large btn-secondary" type="submit" name="mybutton" value="reject">Rechazar</button>
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