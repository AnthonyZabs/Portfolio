<?php
####################################
# Developed by J. A. A. Z.         #
#  - 2021                          #
####################################

class View {

    function __construct() {

    }
    
    function Render($model, $object, $layout = true) {
        $this->Model = $model;

        // Langs
        $this->LM = new LangManager();
        $this->LM = $this->LM->L;
        
        // Redirect if not logged in
        if ($this->Model->needAuth && !$this->Model->Session->Exist(Config::$SessionName)):
            header("Location: /ACP");
            exit;
        endif;

        // Redirect if logged in
        if ($this->Model->isACP && !$this->Model->needAuth && $this->Model->Session->Exist(Config::$SessionName)):
            header("Location: /ACP/dashboard");
            exit;
        endif;
        
        $ACPPath    = ($this->Model->isACP) ? "ACP/" : "";
        $viewDir    = explode('Controller', $object)[0];
        $viewName   = explode('::', $object)[1];
        $viewsPath  = $_SERVER['DOCUMENT_ROOT'] . "/app/Views/" . $viewDir . "/" . $viewName . ".php";        

        if (file_exists($viewsPath)):
            if ($layout)
                include_once $_SERVER['DOCUMENT_ROOT'] . "/app/Views/Templates/" . $ACPPath . "header.php";
                
            require $viewsPath;

            if ($layout)
                include_once $_SERVER['DOCUMENT_ROOT'] . "/app/Views/Templates/" . $ACPPath . "footer.php";
        endif;
    }
}
?>