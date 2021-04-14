<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Project View</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://portfolio.prj/app/libs/resources//vendor/carousel-albery/css/albery.css" type="text/css">
</head>
<body>
    <div class="container">
        
        <div class="row">

            <div class="col-md-6">
                
                <div class="albery-container">

                    <div class="albery-wrapper">

                        <?php
                            $Pics = array_diff(scandir(getcwd() . "\\img\\screens"), array('..', '.'));
                            foreach ($Pics as $Pic):
                        ?>
                        <div class="albery-item justify-content-center text-center mb-2">
                            <img src="<?php echo dirname($_SERVER['PHP_SELF']) . "/img/screens/" . $Pic;?>" alt="">
                        </div>
                        <?php endforeach; ?>

                    </div>
        
                    <div class="move-right">
                        <a href="#" id="rightArrow"></a>
                    </div>
                    <div class="move-left">
                        <a href="#" id="leftArrow"></a>
                    </div>
        
                </div>
        
                <div class="pagination-container">
                    <div class="pagination-wrapper">
                        
                        <?php
                            $i = 1;
                            $Pics = array_diff(scandir(getcwd() . "\\img\\screens"), array('..', '.'));
                            foreach ($Pics as $Pic):
                        ?>
                        <div class="pagination-item" data-item="<?php echo $i; ?>">
                            <img src="<?php echo dirname($_SERVER['PHP_SELF']) . "/img/screens/" . $Pic;?>" alt="">
                        </div>
                        <?php $i++; endforeach; ?>
                        
                    </div>
                </div>

            </div>

            <div class="col-md-6 text-justify">
                <h1 class="justify-content-center text-center mb-4"><img src="/projects/inmospacio/img/inmospacio-logo.png" alt="Logo InmoSpacio" class="img-fluid"></h1>
                <p class="mb-4">
                    Sistema de gesti&oacute;n y control de bienes ra&iacute;ces para la empresa InmoSpacio. Algunas caracter&iacute;sticas destacables del sistema desarrollado son:
                </p>
                <p class="mb-4">
                    <ul>
                        <li>Gesti&oacute;n de visitantes en el sitio. (Contador de visitas por usuario y ubicaci&oacute;n).</li>
                        <li>Logs de b&uacute;squedas realizadas por los usuarios.</li>
                        <li>Panel Administrativo para el Web Master.</li>
                        <li>Estad&iacute;sticas generales del sitio.</li>
                        <li>Gesti&oacute;n de propiedades en venta o renta.</li>
                        <li>Galer&iacute;a de fotos y ubicaci&oacute;n en Google Maps.</li>
                        <li>Contenido din&aacute;mico en p&aacute;ginas. (Gestionables desde el Panel Administrativo para evitarle al cliente editar c&oacute;digo).</li>
                        <li>El servicio incluy&oacute; instalaci&oacute;n en Hosting y configuraci&oacute;n de correo corporativo. (Vinculado al formulario de Contacto).</li>
                    </ul>
                </p>
                <div class="col-md-6 form-group">
                    <a href="https://inmospacio.com" target="_blank"><input type="button" class="btn btn-primary d-block w-100" value="VER SITIO"></a>
                </div>
            </div>
            
        </div>
    </div>
</body>
<script src="http://portfolio.prj/app/libs/resources//vendor/carousel-albery/js/albery.js"></script>
<script>
  $(".albery-container").albery({
    speed: 500,
    imgWidth: 546,
  });
</script>
</html>