<?php
####################################
# Developed by J. A. A. Z.         #
#  - 2021                          #
####################################

// core
require_once 'libs/core/Config.class.php';
require_once 'libs/core/Extras.class.php';
require_once 'libs/core/Dbh.class.php';
require_once 'libs/core/DBManager.class.php';
require_once 'libs/core/IpManager.class.php';
require_once 'libs/core/SessionManager.class.php';

// langs
require_once 'libs/langs/LangManager.class.php';
require_once 'libs/langs/EN.class.php';
require_once 'libs/langs/ES.class.php';

// libs
require_once 'libs/Model.class.php';
require_once 'libs/View.class.php';
require_once 'libs/Controller.class.php';
require_once 'libs/App.class.php';

// We start the application
$APP = new App();

?>