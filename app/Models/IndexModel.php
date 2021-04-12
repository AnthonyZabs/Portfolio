<?php
####################################
# Developed by J. A. A. Z.         #
#  - 2021                          #
####################################

class IndexModel extends Model {
    public $Page;
    public $PageDesc;
    public $isACP;
    public $needAuth;
    
    function __construct() {
        parent::__construct();
        $this->Page = $this->DB->GetRow("site_config", "site_name");
        $this->PageDesc = $this->DB->GetRow("site_config", "site_slogan");
        $this->isACP = false;
        $this->needAuth = false;
    }
}
?>