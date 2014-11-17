<!DOCTYPE html>
<!-- /******************************************************* 
 Autor : LABG1E2
 Tipo de programa: "Vista para los medicos logueados"
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
              <a class="navbar-brand" href="<?php echo base_url()."main/medicamentos";?>">Tu Receta Médica</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Información General <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo base_url()."main/medicamentos";?>">Ver lista de medicamnetos</a></li>
                    <li><a href="<?php echo base_url()."main/eps";?>">Ver lista de EPS</a></li>
                    <li><a href="<?php echo base_url()."main/nopos";?>">¿Qué medicamentos, procedimientos NO cubre el POS? </a></li>
                    <li class="disabled"><a href="#">Normatividad</a></li>
                  </ul>
                  <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Solicitudes<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo base_url()."main/solicitudesGU";?>">Solicitudes Generales</a></li>
                    <li><a href="<?php echo base_url()."main/solMedicine";?>">Solicitudes de adición de medicamentos</a></li>
                    <li><a href="<?php echo base_url()."main/solTreatment";?>">Solicitudes de adición de tratamientos</a></li>
                  </ul>
                </li>
                  <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Información de la Cuenta <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo base_url()."main/perfil";?>">Perfil</a></li>
                    <li><a href="<?php echo base_url()."main/logout";?>">cerrar sesión</a></li>
                  </ul>
                </li>  
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="../assets/img/examples/slide-01.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Bienvenido, <?php echo $this->session->userdata('my_name');?></h1>
              <p></p>
            </div>
          </div>          
        </div>
        <div class="item">
          <img src="../assets/img/examples/slide-02.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Tu receta médica acercando a sus pacientes</h1>
              <p>Tu receta médica le brinda la posibilidad de agregar informacion de suma importancia para usted de sus pacientes</p>
              <p><a class="btn btn-lg btn-primary disabled" href="<?php echo base_url()."main/addpaciente";?>" role="button">Añadir paciente</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="../assets/img/examples/slide-03.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Nuevos Tratamientos</h1>
              <p>Tu Receta Médica le brinda la posibilidad de observar tratamientos alternativos 
                gracias al conocimiento y experiencia de los especialistas de la salud registrados en la plataforma.</p>
              <p><a class="btn btn-lg btn-primary" href="<?php echo base_url()."main/tratamientos";?>" role="button">Ver Tratamiendos</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
         <center><img class="img-circle" src="../assets/img/examples/minsalud.jpeg" alt="Generic placeholder image" style="width: 250px; height: 250px;"></center>
          <h2><center> MinSalud </center></h2>
          <p>Para mayor información acerca del estado del sistema de salud visite la página del Ministerio de salud.</p>
          <p><center><a class="btn btn-primary" href="http://www.minsalud.gov.co" role="button">Ir al sitio &raquo;</a></center></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="../assets/img/examples/dollar.jpeg" alt="Generic placeholder image" style="width: 250px; height: 250px;">
          <h2>Medicamentos Sugeridos</h2>
          <p>Tu Receta Médica le da la posibilidad de aprender acerca de medicamentos alternativos sugeridos por profesionales de la salud de esta comunidad.</p>
          <p><a class="btn btn-default" href="<?php echo base_url()."main/medicine";?>" role="button">Ver lista &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <a class="twitter-timeline" href="https://twitter.com/MinSaludCol" data-widget-id="520359799821574144">Tweets by @MinSaludCol</a>
          <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
          <h4>Información minuto a minuto proporcionada por el ministerio de salud</h4>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- FOOTER -->
      
        
       <div id="footer">
      <div class="container">
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p><a href="#"><br>Tu Receta Médica</a>, by <a href="#">LabG1E2</a>.</p>
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
