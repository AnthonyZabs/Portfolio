<?php
####################################
# ShopiLock V1.0                   #
# Developed by J. A. A. Z.         #
#  - 2021                          #
# This is a paid licensed product  #
# and is not allowed to distribute #
####################################

class Model {

    function __construct() {
        $this->DB = new DBManager();
        $this->Session = new SessionManager();
    }
    
}
?>