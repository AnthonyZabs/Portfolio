<?php
####################################
# ShopiLock V1.0                   #
# Developed by J. A. A. Z.         #
#  - 2021                          #
# This is a paid licensed product  #
# and is not allowed to distribute #
####################################

class Dbh extends Config {

    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $charset = "utf8mb4";

    protected function connect() {
        $this->servername = $this->Server;
        $this->username = $this->User;
        $this->password = $this->Pass;
        $this->dbname = $this->DB;

        try {
            $DNS = "mysql:host=" . $this->servername . ";dbname=" . $this->dbname . ";charset=" . $this->charset . ";";
            $PDO = new PDO($DNS, $this->username, $this->password);
            $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $PDO;

        } catch (PDOException $e) {
            echo '[Error 101] -> ' . $e->getMessage();
        }
    }
    
}
?>