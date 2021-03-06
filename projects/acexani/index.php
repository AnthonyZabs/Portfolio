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
                <h1 class="justify-content-center text-center mb-2"><img src="/projects/acexani/img/acexani-logo.png" alt="Logo ACEXANI-II" class="img-fluid"></h1>
                <p class="mb-4">
                    Durante mi estancia de estudios en el Instituto, se requiri&oacute; un sistema de miner&iacute;a de datos que facilitara la lectura, gesti&oacute;n y c&aacute;lculos estad&iacute;sticos de los resultados de los ex&aacute;menes CENEVAL, espec&iacute;ficamente del EXANI-II. (Los resultados los recib&iacute;an en archivos de EXCEL con cientos de filas y columnas dificultando su lectura &oacute;ptima).
                </p>
                <p class="mb-4">
                    <ul>
                        <li>Gestor de base de datos desde 0 (tipo phpmyadmin).</li>
                        <li>Importaci&oacute;n de archivos CSV. (Los datos le&iacute;dos se almacenan en la base de datos generada dependiendo de la estructura del CSV).</li>
                        <li>Constructor de consultas estad&iacute;sticas de manera gr&aacute;fica para el usuario com&uacute;n. (Sentencia SQL, c??lculo de media, mediana, moda, desviaci&oacute;n est&aacute;ndar, y consultas utilizando cl&aacute;usulas condicionales y operadores l&oacute;gicos).</li>
                        <li>Exportaci&oacute;n de datos en CSV, JSON, XML, EXCEL, PDF y m??s.</li>
                    </ul>
                </p>
                <p class="mb-4"><i>El sistema se encuentra alojado en la Intranet del Instituto, y se capacitan alumnos de servicio social para el correcto uso del mismo.</i></p>
            </div>
            <?php else: ?>
            <div class="col-md-6 text-justify">
                <h1 class="justify-content-center text-center mb-2"><img src="/projects/acexani/img/acexani-logo.png" alt="Logo ACEXANI-II" class="img-fluid"></h1>
                <p class="mb-4">
                    During my study stay at the Institute, a data mining system was required that facilitated the reading, management and statistical calculations of the results of the CENEVAL exams, specifically the EXANI-II. (The results were received in EXCEL files with hundreds of rows and columns making it difficult to read them optimally).
                </p>
                <p class="mb-4">
                    <ul>
                        <li>Database manager from 0 (like phpmyadmin).</li>
                        <li>CSV file import. (The read data is stored in the generated database depending on the structure of the CSV).</li>
                        <li>Statistical query builder in a graphical way for the common user. (SQL statement, calculation of mean, median, mode, standard deviation, and queries using conditional clauses and logical operators).</li>
                        <li>Data export in CSV, JSON, XML, EXCEL, PDF and more.</li>
                    </ul>
                </p>
                <p class="mb-4"><i>The system is hosted on the Institute's Intranet, and social service students are trained for its correct use.</i></p>
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