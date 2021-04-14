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
                <h1 class="justify-content-center text-center mb-5"><img src="/projects/cfe/img/cfe-logo.png" alt="Logo CFE" class="img-fluid"></h1>
                <p class="mb-4">
                    Como parte de mi estancia por prácticas profesionales en la Comisi&oacute;n Federal de Electricidad, realic&eacute; las siguientes actividades y proyectos.
                </p>
                <p class="mb-4">
                    <ul>
                        <li>Sistema para migrar base de datos de OSIsoft PI de la GCRC al SQL Server de la Zona de Operación de Transmisión Pachuca (ZOTP)</li>
                        <li>Desarrollo, mantenimiento y mejora de sistemas internos de la ZOTP.</li>
                        <li>Reubicación de la Sala de Operación.</li>
                        <li>Instructor de curso-taller y capacitación de C#.</li>
                        <li>Gráfica de demanda eléctrica en tiempo real.</li>
                        <li>Gráfica de análisis de tiempos y movimientos en las licencias.</li>
                        <li>Gráfica para el reporte semanal de la demanda en la ZOTP y en la Gerencia de Control Regional Central.</li>
                    </ul>
                </p>
                <p class="mb-4"><i>Todos estos sistemas se encuentran operando en la Intranet de la Organización.</i></p>
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