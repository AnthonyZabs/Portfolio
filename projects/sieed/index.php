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
                <h1 class="justify-content-center text-center mb-2"><img src="/projects/sieed/img/sieed-logo.png" alt="Logo SIEED" class="img-fluid"></h1>
                <p class="mb-4">
                    Como parte de mi estancia por servicio social en el Tecnol&oacute;gico Nacional de M&eacute;xico (TecnNM), me encargu&eacute; de parte del desarrollo y mantenimiento del Sistema de Inscripci&oacute;n Electr&oacute;nica para los Eventos Deportivos (SIEED). Usado a nivel nacional por los Tecnol&oacute;gicos incorporados al TecNM para la organizaci&oacute;n y control de los eventos deportivos prenacionales y nacionales estudiantiles.
                </p>
                <p class="mb-4">
                    <ul>
                        <li>Sistema de sesiones de usuario por usarios MySQL (para mayor seguridad).</li>
                        <li>Mejora de apartados de la parte Frontend.</li>
                        <li>Actualizaci&oacute;n de diseño web por cambio de Gobierno.</li>
                        <li>Revisi&oacute;n y mejora del modelo de la base de datos.</li>
                        <li>Reportes en PDF generados autom&aacute;ticamente.</li>
                        <li>Correcci&oacute;n de errores.</li>
                    </ul>
                </p>
                <p class="mb-4"><i>En 2021 el sistema fue dado de baja debido a la cancelaci&oacute;n de eventos masivos por el COVID-19.</i></p>
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