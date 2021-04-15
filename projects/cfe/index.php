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
            
            <?php if (substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2) == 'es'): ?>
            <div class="col-md-6 text-justify">
                <h1 class="justify-content-center text-center mb-5"><img src="/projects/cfe/img/cfe-logo.png" alt="Logo CFE" class="img-fluid"></h1>
                <p class="mb-4">
                    Como parte de mi estancia por pr&aacute;cticas profesionales en la Comisi&oacute;n Federal de Electricidad, realic&eacute; las siguientes actividades y proyectos.
                </p>
                <p class="mb-4">
                    <ul>
                        <li>Sistema para migrar base de datos de OSIsoft PI de la GCRC al SQL Server de la Zona de Operaci&oacute;n de Transmisi&oacute;n Pachuca (ZOTP).</li>
                        <li>Desarrollo, mantenimiento y mejora de sistemas internos de la ZOTP.</li>
                        <li>Reubicaci&oacute;n de la Sala de Operaci&oacute;n.</li>
                        <li>Instructor de curso-taller y capacitaci&oacute;n de C#.</li>
                        <li>Gr&aacute;fica de demanda el&eacute;ctrica en tiempo real.</li>
                        <li>Gr&aacute;fica de an&aacute;lisis de tiempos y movimientos en las licencias.</li>
                        <li>Gr&aacute;fica para el reporte semanal de la demanda en la ZOTP y en la Gerencia de Control Regional Central.</li>
                    </ul>
                </p>
                <p class="mb-4"><i>Todos estos sistemas se encuentran operando en la Intranet de la Organizaci&oacute;n.</i></p>
            </div>
            <?php else: ?>
            <div class="col-md-6 text-justify">
                <h1 class="justify-content-center text-center mb-5"><img src="/projects/cfe/img/cfe-logo.png" alt="Logo CFE" class="img-fluid"></h1>
                <p class="mb-4">
                As part of my internship at the Federal Electricity Commission (Comisi&oacute;n Federal de Electricidad), I carried out the following activities and projects.
                </p>
                <p class="mb-4">
                    <ul>
                        <li>System to migrate OSIsoft PI database from the GCRC to the SQL Server of the Pachuca Transmission Operation Zone (ZOTP).</li>
                        <li>Development, maintenance and improvement of internal systems of the ZOTP.</li>
                        <li>Relocation of the Operating Room.</li>
                        <li>C# course-workshop and training instructor.</li>
                        <li>Graph of electricity demand in real time.</li>
                        <li>Graph of analysis of times and movements in licenses.</li>
                        <li>Graph for the weekly report of the demand in the ZOTP and in the Central Regional Control Management.</li>
                    </ul>
                </p>
                <p class="mb-4"><i>All these systems are operating on the Organization's Intranet.</i></p>
            </div>
            <?php endif; ?>
            
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