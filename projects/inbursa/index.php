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
                <h1 class="justify-content-center text-center"><img src="/projects/inbursa/img/inbursa-logo.png" alt="Logo Inbursa Móvil" class="img-fluid"></h1>
                <p class="mb-4">
                    Incorporaci&oacute;n al equipo de Analista de Sistemas (Desarrollador .NET) para el negocio de la aplicaci&oacute;n Inbursa M&oacute;vil (i-m&oacute;vil). Dentro de las actividades que se realizan y caracter&iacute;sticas destacables de la aplicaci&oacute;n, se encuentran:
                </p>
                <p class="mb-4">
                    <ul>
                        <li>Desarrollada para Android e iOS (Xamarin).</li>
                        <li>Buenas pr&aacute;cticas de desarrollo e implementaci&oacute;n de metodolog&iacute;a Scrum.</li>
                        <li>Consulta de saldos y movimientos.</li>
                        <li>Transferencias a cuentas propias y terceros (del mismo u otro banco).</li>
                        <li>Pago de servicios (telefon&iacute;a, televisi&oacute;n, etc.).</li>
                        <li>Consulta del tipo de cambio (d&oacute;lar y euro).</li>
                        <li>Reporte de siniestros y solicitud de asistencia v&iacute;a GPS.</li>
                        <li>Bloqueo de cuentas (con previo registro).</li>
                        <li>Generaci&oacute;n de c&oacute;digos de seguridad din&aacute;micos.</li>
                    </ul>
                </p>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <a href="https://play.google.com/store/apps/details?id=com.inbursa.client&hl=es_MX&gl=US" target="_blank"><input type="button" class="btn btn-primary d-block w-100" value="VER EN PLAY STORE"></a>
                    </div>
                    <div class="col-md-6 form-group">
                        <a href="https://apps.apple.com/mx/app/inbursa-m%C3%B3vil/id389155495" target="_blank"><input type="button" class="btn btn-primary d-block w-100" value="VER EN APP STORE"></a>
                    </div>
                </div>
            </div>
            <?php else: ?>
            <div class="col-md-6 text-justify">
                <h1 class="justify-content-center text-center"><img src="/projects/inbursa/img/inbursa-logo.png" alt="Logo Inbursa Móvil" class="img-fluid"></h1>
                <p class="mb-4">
                    Incorporation to the Systems Analyst team (.NET Developer) for the business of the Inbursa Móvil application (i-mobile). Among the activities carried out and notable characteristics of the application, are:
                </p>
                <p class="mb-4">
                    <ul>
                        <li>Developed for Android and iOS (Xamarin).</li>
                        <li>Good practices for the development and implementation of Scrum methodology.</li>
                        <li>Check balances and movements.</li>
                        <li>Transfers to own accounts and third parties (of the same or another bank).</li>
                        <li>Payment of services (telephony, television, etc.).</li>
                        <li>Check the exchange rate (dollar and euro).</li>
                        <li>Claim report and request for assistance via GPS.</li>
                        <li>Account blocking (with prior registration).</li>
                        <li>Generation of dynamic security codes.</li>
                    </ul>
                </p>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <a href="https://play.google.com/store/apps/details?id=com.inbursa.client&hl=es_MX&gl=US" target="_blank"><input type="button" class="btn btn-primary d-block w-100" value="VIEW ON PLAY STORE"></a>
                    </div>
                    <div class="col-md-6 form-group">
                        <a href="https://apps.apple.com/mx/app/inbursa-m%C3%B3vil/id389155495" target="_blank"><input type="button" class="btn btn-primary d-block w-100" value="VIEW ON APP STORE"></a>
                    </div>
                </div>
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