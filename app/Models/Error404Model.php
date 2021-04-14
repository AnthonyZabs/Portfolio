<?php
####################################
# Developed by J. A. A. Z.         #
#  - 2021                          #
####################################

class Error404Model extends Model {
    public $Page;
    public $PageDesc;
    public $isACP;
    public $needAuth;

    function __construct() {
        parent::__construct();
        $this->Page = $this->DB->GetRow("site_config", "site_name");
        $this->PageDesc = "Error 404";
        $this->isACP = false;
        $this->needAuth = false;
    }
}
?>