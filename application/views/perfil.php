<!DOCTYPE html>
<!-- /******************************************************* 
 Autor : LABG1E2
 Tipo de programa: "Vista del perfil del usuario"
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
    <link href="../assets/css/perfil.css" rel="stylesheet">
    <link href="../assets/css/carousel.css" rel="stylesheet">
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
                <li><a href="<?php echo base_url()."main/logout";?>">Cerrar sesión</a></li>
              </ul>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>

<div class="container">

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Información del Usuario, <?php echo $this->session->userdata('my_name');?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <?php if(!empty($query)){ ?>
                <?php foreach($query as $row){ ?>
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="<?php echo $row->pic;?>" 
                  class="img-circle" style="width: 130px; height: 130px;"> </div>
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Numero de documento</td>
                        <td><?php echo $row->idPaciente;?></td>
                      </tr>
                      <tr>
                        <td>Estrato</td>
                        <td><?php echo $row->estrato;?></td>
                      </tr>
                      <tr>
                        <td>Fecha de nacimiento</td>
                        <td><?php echo $row->birthDate;?></td>
                      </tr>
                      <tr>
                        <td>Genero</td>
                        <td><?php echo $row->gender;?></td>                        
                      </tr>
                      <tr>
                        <td>Sisben/EPS</td>
                        <td><?php echo $row->sisbenEps;?></td>                        
                      </tr>
                      <tr>
                        <td>Dirección</td>
                        <td><?php echo $row->direccion;?></td>                        
                      </tr>
                     
                      <?php } ?>
                      <?php } ?>
                     </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="panel-footer">
                   <a href="<?php echo base_url()."main/editar";?>" data-original-title="Editar Información" data-toggle="tooltip" 
                   type="button" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> Editar información</a>
                <span class="pull-right">
                    <a href="<?php echo base_url()."main/editprofilepic";?>" data-original-title="Editar Información" data-toggle="tooltip" 
                   type="button" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> Editar foto de perfil</a>  
                </span>  
            </div>
          </div>
        </div>
      </div>
    </div>

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
    <script src="../assets/js/perfil.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>