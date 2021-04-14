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
                <h1 class="justify-content-center text-center mb-4"><img src="/projects/futsoft/img/futsoft-logo.png" alt="Logo FutSoft" class="img-fluid"></h1>
                <p class="mb-4">
                    Sistema automatizado para la Gesti&oacute;n de Torneos de F&uacute;tbol 7. Es un proyecto escolar que realic&eacute; para la materia de Gesti&oacute;n de Proyectos. Entre las caracter&iacute;sticas m&aacute;s destacables est&aacute;n:
                </p>
                <p class="mb-4">
                    <ul>
                        <li>Sistema de usuarios y sesiones.</li>
                        <li>Gesti&oacute;n de Ligas, Torneos, Jornadas, Equipos, Entrenadores, &Aacute;rbitros y Jugadores.</li>
                        <li>Matchmaking de partidos autom&aacute;tico.</li>
                        <li>Seguimiento de los partidos (goles, faltas, cambios y comentarios).</li>
                        <li>Tablas estad&iacute;sticas (Tabla de goleo y Tabla General).</li>
                        <li>Plantillas de Equipos y perfil de jugadores.</li>
                        <li>Generaci&oacute;n de Jornadas automatizada (dependiendo de los resultados de los partidos previos tomando en cuenta goles de visitante).</li>
                        <li>Todo esto es gestionable desde un panel administrativo (con opci&oacute;n de agregar usuarios al sistema).</li>
                    </ul>
                </p>
                <div class="col-md-6 form-group">
                    <a href="https://github.com/AnthonyZabs/FutSoft" target="_blank"><input type="button" class="btn btn-primary d-block w-100" value="VER EN GITHUB"></a>
                </div>
            </div>
            <?php else: ?>
            <div class="col-md-6 text-justify">
                <h1 class="justify-content-center text-center mb-4"><img src="/projects/futsoft/img/futsoft-logo.png" alt="Logo FutSoft" class="img-fluid"></h1>
                <p class="mb-4">
                    Automated System for the Management of Soccer 7 Tournaments. It's a school project that I did for the subject of Project Management. Among the most notable features are: 
                </p>
                <p class="mb-4">
                    <ul>
                        <li>User and session system.</li>
                        <li>Management of Leagues, Tournaments, Journeys, Teams, Coaches, Referees and Players.</li>
                        <li>Automatic matchmaking.</li>
                        <li>Match tracking (goals, fouls, changes and comments).</li>
                        <li>Statistical tables (Goals Table and General Table).</li>
                        <li>Team templates and player profiles.</li>
                        <li>Generation of Journeys automated (depending on the results of the previous matches taking into visit away goals).</li>
                        <li>All this is manageable from an administrative panel (with the option of adding users to the system).</li>
                    </ul>
                </p>
                <div class="col-md-6 form-group">
                    <a href="https://github.com/AnthonyZabs/FutSoft" target="_blank"><input type="button" class="btn btn-primary d-block w-100" value="VIEW ON GITHUB"></a>
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