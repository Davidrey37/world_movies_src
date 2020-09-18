<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?php echo $siteurl;?>public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $siteurl;?>public/css/fontello.css">
    <link rel="stylesheet" href="<?php echo $siteurl;?>public/css/animate.min.css">
    <link href="<?php echo $siteurl;?>public/css/hover-min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $siteurl;?>public/css/estilos.css">
    <link rel="icon" type="image/ico" href="<?php echo $siteurl . "public/img/World.png";?>">

    <title>World Movies</title>
  </head>
  <body class="bg-dark">
    <div class="container-fluid">
      

      <div class="row sticky-top shadow">
        <div class="col-12 col-sm-1 text-center bg-light px-0">
           <a href="<?php echo $siteurl ."inicio";?>"><img src="<?php echo $siteurl . "public/img/World.png";?>" class="img-fluid my-1" style="width: 50px"></a>
        </div>
        <div class="col-12 col-sm-11 px-0">
          <?php include "app/views/layouts/modules/nav.php" ?>
        </div>
      </div>
      <div class="row">
        <div class="col-12 px-0 bg-light">
          <?php 
            $objRoutesController = new RoutesController();
            $view = $objRoutesController -> RequestRoute();
            include $view;
          ?>
        </div>
      </div>

      <div class="row mt-1">
        <div class="col-12 text-light bg-secondary text-center">
          <h6 class="mb-0 mt-1">Derechos Reservados World Movies</h6>
          <h6 class="mb-0">Desing by David Reyes</h6>
          <h6 class=" icon-copyright"><?php echo date("Y") ?></h6>
        </div>
      </div>

    </div>

    <script src="<?php echo $siteurl;?>public/js/jquery-3.4.1.slim.min.js"></script>
    <script src="<?php echo $siteurl;?>public/js/popper.min.js"></script>
    <script src="<?php echo $siteurl;?>public/js/bootstrap.min.js"></script>
  </body>
</html>