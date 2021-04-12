<?php
####################################
# ShopiLock V1.0                   #
# Developed by J. A. A. Z.         #
#  - 2021                          #
# This is a paid licensed product  #
# and is not allowed to distribute #
####################################

// core
require_once 'libs/core/Config.class.php';
require_once 'libs/core/Extras.class.php';
require_once 'libs/core/Dbh.class.php';
require_once 'libs/core/DBManager.class.php';
require_once 'libs/core/IpManager.class.php';
require_once 'libs/core/SessionManager.class.php';

// libs
require_once 'libs/Model.class.php';
require_once 'libs/View.class.php';
require_once 'libs/Controller.class.php';
require_once 'libs/App.class.php';

// We start the application
$APP = new App();

?>