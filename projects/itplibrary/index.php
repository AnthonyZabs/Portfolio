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
                <h1 class="justify-content-center text-center mb-5"><img src="/projects/itplibrary/img/itplibrary-logo.png" alt="Logo ITP Library" class="img-fluid"></h1>
                <p class="mb-4">
                    Sistema b&aacute;sico para la gesti&oacute;n de una biblioteca. Es un proyecto escolar que realic&eacute; para la materia de Programaci&oacute;n Orientada a Objectos. Programado en Java, las caracter&iacute;sticas m&aacute;s destacables son:
                </p>
                <p class="mb-4">
                    <ul>
                        <li>Interf&aacute;z gr&aacute;fica con dise&ntilde;o estilo Material Desing.</li>
                        <li>Conexi&oacute;n a base datos MySQL.</li>
                        <li>Gesti&oacute;n de libros, pr&eacute;stamos y devoluciones.</li>
                        <li>Sanciones por devoluciones fuera de tiempo.</li>
                        <li>Logs de movimientos.</li>
                        <li>Tablas de consulta.</li>
                    </ul>
                </p>
                <div class="col-md-6 form-group">
                    <a href="https://github.com/AnthonyZabs/ITPLibrary" target="_blank"><input type="button" class="btn btn-primary d-block w-100" value="VER EN GITHUB"></a>
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