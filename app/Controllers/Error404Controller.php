<?php
####################################
# Developed by J. A. A. Z.         #
#  - 2021                          #
####################################

class Error404Controller extends Controller {

    function __construct() {
        parent::__construct();
    }

    function Index() {

        // Call the view
        $this->View->Render($this->Model, __METHOD__);
    }

}
?>