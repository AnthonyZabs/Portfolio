<?php
####################################
# Developed by J. A. A. Z.         #
#  - 2021                          #
####################################

class SessionManager
{
    // Constructs the Class
    public function __construct() {
        if (!isset($_SESSION))
            session_start();
    }

    // Verifies if Session Exists
    public function Exist($nome) {
        return isset($_SESSION[$nome]);
    }

    // Saves the Session
    public function Save($nome, $valor) {
        $_SESSION[$nome] = $valor;
    }

    // Reads the session
    public function Read($nome) {
        if ($this->Exist($nome))
            return $_SESSION[$nome];

        return null;
    }

    // Deletes the session
    public function Delete($nome) {
        if ($this->Exist($nome))
            unset($_SESSION[$nome]);
    }

    // Destroy
    public function Destroy() {
        if (isset($_SESSION))
            return session_destroy();

        return false;
    }
}