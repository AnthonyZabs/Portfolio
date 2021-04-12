<?php
####################################
# ShopiLock V1.0                   #
# Developed by J. A. A. Z.         #
#  - 2021                          #
# This is a paid licensed product  #
# and is not allowed to distribute #
####################################

class App {

    public function __construct() {
        $IP = new IpManager();

        $url = isset($_GET['url']) ? $_GET['url']: 'index';
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        $filename = $url[0];
        
        $controllersPath = $_SERVER['DOCUMENT_ROOT'] . "/app/Controllers/" . $filename . "Controller.php";
        $error404Path = $_SERVER['DOCUMENT_ROOT'] . "/app/Controllers/Error404Controller.php";
        
        if (file_exists($controllersPath)):
            include_once $controllersPath;
            $Cname = $filename . "Controller";
            $C = new $Cname();
            $C->loadModel($filename);

            // Load method
            if (isset($url[1])) {
                if (method_exists($Cname, $url[1]))
                    $C->{$url[1]}();
                else
                    $C->Index();
            }
            else
                $C->Index();
        else:
            include_once $error404Path;
            $C = new Error404Controller();
            $C->loadModel('Error404');
            $C->Index();
        endif;
    }

}
?>