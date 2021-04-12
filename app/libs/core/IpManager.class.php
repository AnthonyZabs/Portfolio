<?php
####################################
# ShopiLock V1.0                   #
# Developed by J. A. A. Z.         #
#  - 2021                          #
# This is a paid licensed product  #
# and is not allowed to distribute #
####################################

class IpManager extends DBManager {

    private $IP;           // Visitors IP address
    private $Country;      // Country
    private $CountryCode;  // Two digits country code
    private $City;         // Get City name
    private $RegionName;   // Region Name
    private $ZipCode;      // Five digits ZipCode
    private $lon;          // Longitude
    private $lat;          // Latitude

    public function __construct() {
        $this->IP = $this->GetIP(); // We request the real visitor's IP address
        $this->IP = "75.52.82.25";
        $Data = $this->GetIPData();
        
        if ($Data['country_name'] != null):
            $this->Country = $Data['country_name'];
            $this->CountryCode = ($Data['country_code2'] == "")? $Data['country_code3'] : $Data['country_code2'];
            $this->City = $Data['city'];
            $this->RegionName = $Data['state_prov'];
            $this->ZipCode = $Data['zipcode'];
            $this->lon = $Data['longitude'];
            $this->lat = $Data['latitude'];

            if (!$this->IPVerification($this->IP)):
                $this->RegisterIP();
            else:
                $this->UpdateIP();
            endif;

        endif;
    }

    public function GetIP() {
        if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
            $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
            $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        }
        $client = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote = $_SERVER['REMOTE_ADDR'];

        if (filter_var($client, FILTER_VALIDATE_IP)) {
            return $client;
        } else if (filter_var($forward, FILTER_VALIDATE_IP)) {
            return $forward;
        } else {
            return $remote;
        }
    }

    private function GetIPData() {
        $url = "https://api.ipgeolocation.io/ipgeo?apiKey=" . $this->API_KEY . "&ip=" . $this->IP . "&lang=en&fields=*&excludes=currency,time_zone,organization,connection_type,isp,country_flag,district,continent_code,continent_name,is_eu,calling_code,country_capital,country_tld,languages,geoname_id";
        $cURL = curl_init();
        curl_setopt($cURL, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($cURL, CURLOPT_URL, $url);
        curl_setopt($cURL, CURLOPT_HTTPGET, true);
        curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($cURL, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Accept: application/json'
        ));
        $result = curl_exec($cURL);
        curl_close($cURL);
        
        return json_decode($result, true);
    }

    private function IPVerification() {
        if ($this->GetRowCount("site_visitors", "ip", "ip = '" . $this->IP . "'", "1") <= 0)
            return false;

        return true;
    }

    private function RegisterIP() {
        return $this->InsertT("site_visitors", "ip, country, countryCode, city, regionName, zipCode, lon, lat, first_visit, last_visit", "'".$this->IP."', '" . $this->Country . "', '" . $this->CountryCode . "', '" . $this->City . "', '" . $this->RegionName . "', '" . $this->ZipCode . "', " . $this->lon . ", " . $this->lat . ", " . time() . ", " . time());
    }

    private function UpdateIP() {
        return $this->UpdateT("site_visitors", "last_visit:" . time() . "", "ip = '" . $this->IP . "'", "1");
    }
    
}
?>