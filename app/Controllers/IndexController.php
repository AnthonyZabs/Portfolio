<?php
####################################
# Developed by J. A. A. Z.         #
#  - 2021                          #
####################################

class IndexController extends Controller {

    function __construct() {
        parent::__construct();
    }

    function Index() {

        // Call the view
        $this->View->Render($this->Model, __METHOD__);
    }

    #############
    /* METHODS */
    #############

    // AJAX Method Response
    function SendContact() {
        if(isset($_POST["inputContactName"])):
            $Lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
            $Name = Extras::InjectionCleaner($_POST["inputContactName"]);
            $Email = Extras::InjectionCleaner($_POST["inputContactEmail"]);
            $Email = (empty($Email)) ? "NULL" : $Email;
            $Msg = Extras::InjectionCleaner($_POST["inputContactMessage"]);

            if (empty($Name) || empty($Email) || empty($Msg)):
                if ($Lang == "es")
                    $Response['text']   = 'Debes llenar todos los campos';
                else
                    $Response['text']   = 'You must fill all the fields';
                $Response['result'] = false;
            elseif (strlen($Msg) > 450):
                if ($Lang == "es")
                    $Response['text']   = 'El mensaje no debe ser mayor a 450 caracteres';
                else
                    $Response['text']   = "The message can't be greater than 450 characters";
                $Response['result'] = false;
            elseif ($Email != "NULL" && !filter_var($Email, FILTER_VALIDATE_EMAIL)):
                if ($Lang == "es")
                    $Response['text']   = 'El correo electrónico es inválido. Por favor, ingresa otro';
                else
                    $Response['text']   = "The email is invalid. Please enter another";
                $Response['result'] = false;
            else:
                $Email = ($Email != "NULL") ? "'" . $Email . "'" : $Email;

                if ($this->Model->DB->InsertT("messages", "name, email, message, author_ip, timestamp", "'".$Name."', ".$Email.", '".$Msg."', '".IpManager::GetIP()."', '".time()."'")) {
                    $M = $this->SendMail($Name, $Email, $Msg, IpManager::GetIP());

                    if ($Lang == "es")
                        $Response['text']   = 'Mensaje enviado exitosamente. Me pondré en contacto contigo a la brevedad posible';
                    else
                        $Response['text']   = "Message sent successfully. I will contact you as soon as possible";
                    $Response['result'] = true;
                }
                else {
                    if ($Lang == "es")
                        $Response['text']   = 'Ocurrió un problema al intentar enviar el mensaje. Inténtalo nuevamente o contáctame directamente por correo electrónico';
                    else
                        $Response['text']   = "There was a problem trying to send the message. Please try again or contact me directly by email";
                    $Response['result'] = false;
                }
            endif;

            // Sending response
            echo json_encode($Response);
        endif;
    }

    function SendMail($Name, $Email, $Msg, $IP) {
        $ToEmail = $this->Model->DB->GetRow("site_config", "site_email");

        $headers = "From: " . $ToEmail . "\r\n";
        $headers .= "Reply-To: " . $ToEmail . "\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();

        $content = "De: " . $Name . "\r\n";
        $content .= "Email: " . $Email . "\r\n";
        $content .= "IP: " . $IP . "\r\n";
        $content .= "---------------------------------" . "\r\n";
        $content .= $Msg . "\r\n";
        $content .= "---------------------------------" . "\r\n";

        return mail($ToEmail, "CONTACTO PARA SOLICITAR INFORMACIÓN", $content,  $headers);
    }
    
}
?>