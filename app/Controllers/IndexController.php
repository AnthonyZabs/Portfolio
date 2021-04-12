<?php
####################################
# ShopiLock V1.0                   #
# Developed by J. A. A. Z.         #
#  - 2021                          #
# This is a paid licensed product  #
# and is not allowed to distribute #
####################################

class IndexController extends Controller {

    function __construct() {
        parent::__construct();
    }

    function Index() {

        // Call the view
        $this->View->Render($this->Model, __METHOD__);
    }
    
}
?>