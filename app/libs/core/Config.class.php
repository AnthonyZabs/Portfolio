<?php
####################################
# Developed by J. A. A. Z.         #
#  - 2021                          #
####################################

class Config {

    // Website Settings
    public static $SOURCES       = "/app/libs/resources/";    // Images, CSS, Fonts, Javascript
    public static $SessionName   = "WEB_LOGIN";
    public static $WIDGETS       = "/app/Views/Widgets/";

    // DataBase Settings
    protected $Server            = "localhost"; // Database Host Server
    protected $User              = "root"; // DataBase User
    protected $Pass              = "123456"; // DataBase Password
    protected $DB                = "portfolio"; // DataBase Name

    // Geolocation API Settings (https://app.ipgeolocation.io/)
    protected $API_KEY = "15835da1a0c14c01a30151a58c33337d";   // License Key

}
?>