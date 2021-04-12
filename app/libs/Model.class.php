<?php
####################################
# Developed by J. A. A. Z.         #
#  - 2021                          #
####################################

class Model {

    function __construct() {
        $this->DB = new DBManager();
        $this->Session = new SessionManager();
    }
    
}
?>