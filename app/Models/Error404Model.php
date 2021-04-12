<?php
####################################
# ShopiLock V1.0                   #
# Developed by J. A. A. Z.         #
#  - 2021                          #
# This is a paid licensed product  #
# and is not allowed to distribute #
####################################

class Error404Model extends Model {
    public $Page;
    public $PageDesc;
    public $isACP;
    public $needAuth;

    function __construct() {
        parent::__construct();
        $this->Page = $this->DB->GetRow("site_config", "site_name");
        $this->PageDesc = "Error 404 - P&aacute;gina no encontrada";
        $this->isACP = false;
        $this->needAuth = false;
    }
}
?>