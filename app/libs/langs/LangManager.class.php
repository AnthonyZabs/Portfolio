<?php
####################################
# Developed by J. A. A. Z.         #
#  - 2021                          #
####################################

class LangManager
{
    // Constructs the Class
    public function __construct() {
        $mLang = $this->detectLang();

        if ($mLang == "ES")
            $this->L = new ES();
        else
            $this->L = new EN();
        
        $this->lang = strtolower($mLang);
    }

    private function detectLang(){
        return strtoupper(substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2));
    }
}