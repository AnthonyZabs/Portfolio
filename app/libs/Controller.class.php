<?php
####################################
# Developed by J. A. A. Z.         #
#  - 2021                          #
####################################

class Controller {

    function __construct() {
        $this->View = new View();
    }

    function loadModel($filename) {
        $modelsPath = $_SERVER['DOCUMENT_ROOT'] . "/app/Models/" . $filename . "Model.php";

        if (file_exists($modelsPath)):
            include_once $modelsPath;
            $Mname = $filename . "Model";
            $this->Model = new $Mname();
        endif;
    }

}
?>