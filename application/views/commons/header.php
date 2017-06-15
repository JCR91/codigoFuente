<?php
$random = (rand(10,100));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="shortcut icon" href="<?php echo getUrl(); ?>/images/favicon.ico"/> 
    <title>Denuncias Virtuales</title>

    
    <!-- Bootstrap -->
    <link href="<?php echo getUrl(); ?>/lib/bootstrap/css/bootstrap.min.css?rnd=<?php echo $random; ?>" rel="stylesheet">
    <link href="<?php echo getUrl(); ?>/lib/bootstrap/css/bootstrap-theme.min.css?rnd=<?php echo $random; ?>" rel="stylesheet">
    <link href="<?php echo getUrl(); ?>/lib/bootstrap/css/bootstrap-datetimepicker.min.css?rnd=<?php echo $random; ?>" rel="stylesheet">
    <link href="<?php echo getUrl(); ?>/css/estilos.css?rnd=<?php echo $random; ?>" rel="stylesheet">
    
       
    <!-- JQuery -->

    <script src="<?php echo getUrl(); ?>/js/modernizr.js?rnd=<?php echo $random; ?>"></script>
    <script src="<?php echo getUrl(); ?>/js/jquery-1.11.3.min.js?rnd=<?php echo $random; ?>"></script>
    <script src="<?php echo getUrl(); ?>/lib/bootstrap/js/moment-with-locales.js?rnd=<?php echo $random; ?>"></script>
    <script src="<?php echo getUrl(); ?>/lib/bootstrap/js/bootstrap.min.js?rnd=<?php echo $random; ?>"></script>
    <script src="<?php echo getUrl(); ?>/lib/bootstrap/js/bootstrap-datetimepicker.min.js?rnd=<?php echo $random; ?>"></script>
        
     <!-- KENDO -->
        
        <link href="<?php echo getUrl(); ?>/kendo/css/kendo.common.min.css?rnd=<?php echo $random; ?>" rel="stylesheet" />
        <link href="<?php echo getUrl(); ?>/kendo/css/kendo.dataviz.silver.min.css?rnd=<?php echo $random; ?>" rel="stylesheet" />
        <link href="<?php echo getUrl(); ?>/kendo/css/kendo.dataviz.min.css?rnd=<?php echo $random; ?>" rel="stylesheet" />
        <link href="<?php echo getUrl(); ?>/kendo/css/kendo.silver.min.css?rnd=<?php echo $random; ?>" rel="stylesheet" />
        <script src="<?php echo getUrl(); ?>/kendo/js/kendo.all.min.js?rnd=<?php echo $random; ?>"></script>
        <script src="<?php echo getUrl(); ?>/kendo/js/kendo.culture.es-PE.min.js?rnd=<?php echo $random; ?>"></script>
        <script src="<?php echo getUrl(); ?>/kendo/js/kendo.messages.es-ES.min.js?rnd=<?php echo $random; ?>"></script>
        <script src="<?php echo getUrl(); ?>/kendo/js/jszip.min.js?rnd=<?php echo $random; ?>"></script>

        <script src="<?php echo getUrl(); ?>/js/index.js?rnd=<?php echo $random; ?>"></script>
        <script src="<?php echo getUrl(); ?>/js/denuncia.js?rnd=<?php echo $random; ?>"></script>
  </head>
    <body class="fondo1">
      <header>
      <div class="cabecera-principal">
        <div class="container">
          <div class="row">
            <div class="col-xs-6">
              <figure class="logo-sistema">
                <img src="<?php echo getUrl(); ?>/images/logo-minedu.jpg" />
              </figure>
            </div>
            <div class="col-xs-6">
              <figure class="logo-minedu text-right">
                <img src="<?php echo getUrl(); ?>/images/logo-maba.png" />
              </figure>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-linea"></div>
      </header>