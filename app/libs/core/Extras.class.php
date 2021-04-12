<?php
####################################
# ShopiLock V1.0                   #
# Developed by J. A. A. Z.         #
#  - 2021                          #
# This is a paid licensed product  #
# and is not allowed to distribute #
####################################

class Extras {

    public static function UpdateSQLExploder($S, $PA1 = ";", $PA2 = ":") {
        $A = explode($PA1, $S);
        $E = null;
        $String = "";
        $Count = 0;

        foreach ($A as $P):
            $E = explode($PA2, $P);
            foreach ($E as $P2):
                if ($Count == 1):
                    $String .= " = " . $P2 . ", ";
                    $Count = 0;
                else:
                    $String .= $P2;
                    $Count++;
                endif;
            endforeach;
        endforeach;

        return substr($String, 0, -2);
    }
    
    // Remove injections from inputs
    public static function InjectionCleaner($var)
    {
        $var = htmlspecialchars($var);
        $var = str_replace("<?php", "", $var);
        $var = str_replace("?>", "", $var);
        $var = str_replace("SELECT", "", $var);
        $var = str_replace("INSERT", "", $var);
        $var = str_replace("UPDATE", "", $var);
        $var = str_replace("DROP", "", $var);
        $var = str_replace("TRUNCATE", "", $var);
        $var = str_replace("CREATE", "", $var);
        $var = str_replace("<script", "", $var);
        $var = str_replace("data:image/jpeg;base64,", "", $var);
        $var = str_replace("data:image/png;base64,", "", $var);

        return $var;
    }

    // Función para encriptar las contraseña (máxima seguridad)
    function Encrypt($pass) 
    {
        $encript = $pass.'jaaz2021';
        $special = htmlspecialchars($encript);
        $base = base64_encode($special);
        $entities = htmlentities($base);
        $md = md5($entities);
        $sha = sha1($md);
        $asl = addslashes($sha);
        $convert = convert_uuencode($asl);

        return $convert;
    }

    // Método para operaciones hexadecimales
    function HexCalc($hex1, $hex2, $op = "sum") {
        $result = "#ffffff";

        if ($op == "sum") {
            $result = dechex(hexdec($hex1) + hexdec($hex2));
        }
        else if ($op == "sub") {
            $result = dechex(hexdec($hex1) - hexdec($hex2));
        }
        
        return $result;
    }

    // Método para convertir color hexadecimal a rgba
    function hex2rgba($hexStr, $alpha=1.0) {
        $hexStr = trim($hexStr, "\t\n\r\0\x0B#");
        $hexStr = Extras::SetHexFormat($hexStr);
        $rgb = [];
        switch(strlen($hexStr)) {
            case 3:
            for ($i = 0; $i < 3; $i++) {
                $rgb[] = hexdec($hexStr[$i] . $hexStr[$i]);
            }
            break;
            case 6:
            for($i = 0; $i < 6; $i += 2) {
                $rgb[] = hexdec(substr($hexStr, $i, 2));
            }
            break;
            default:
            throw new Exception("Invalid format");
        }

        if (is_string($alpha)) {
            $alpha = floatval($alpha);
        }

        $alpha = min([1.0, $alpha]);
        $alpha = strval($alpha);
        $alpha = trim($alpha, '0');
        $alpha = rtrim($alpha, '.');
        return sprintf("rgba(%d, %d, %d, %s)", $rgb[0], $rgb[1], $rgb[2], $alpha);
    }

    // Agrega 0's si el número ingresado no es de longitud 6
    function SetHexFormat($hexStr) {
        $left = 6 - strlen($hexStr);
        $Add = "";
        if ($left > 0) {
            for ($i = 0; $i < $left; $i++)
                $Add .= "0";
        }

        return $Add . $hexStr;
    }

    function mres($value)
    {
        $search = array("\\",  "\x00", "\n",  "\r",  "'",  '"', "\x1a");
        $replace = array("\\\\","\\0","\\n", "\\r", "\'", '\"', "\\Z");

        return str_replace($search, $replace, $value);
    }

    // Función para convertir la fecha (de codigo) a tiempo actual hablado
    public static function GetTime($valor)
    {
        // FORMATOS:
        // segundos    desde 1970 (función time())        hace_tiempo('12313214');
        // defecto (variable $formato_defecto)        hace_tiempo('12:01:02 04-12-1999');
        // tu propio formato                        hace_tiempo('04-12-1999 12:01:02 [n.j.Y H:i:s]');

        $formato_defecto="H:i:s j-n-Y";

        // j,d = día
        // n,m = mes
        // Y = año
        // G,H = hora
        // i = minutos
        // s = segundos

        if(stristr($valor,'-') || stristr($valor,':') || stristr($valor,'.') || stristr($valor,','))
        {

            if(stristr($valor,'['))
            {
                $explotar_valor=explode('[',$valor);
                $valor=trim($explotar_valor[0]);
                $formato=str_replace(']','',$explotar_valor[1]);
            }
            else
            {
                $formato=$formato_defecto;
            }

            $valor = str_replace("-"," ",$valor);
            $valor = str_replace(":"," ",$valor);
            $valor = str_replace("."," ",$valor);
            $valor = str_replace(","," ",$valor);

            $numero = explode(" ",$valor);

            $formato = str_replace("-"," ",$formato);
            $formato = str_replace(":"," ",$formato);
            $formato = str_replace("."," ",$formato);
            $formato = str_replace(","," ",$formato);

            $formato = str_replace("d","j",$formato);
            $formato = str_replace("m","n",$formato);
            $formato = str_replace("G","H",$formato);

            $letra = explode(" ",$formato);

            $relacion[$letra[0]]=$numero[0];
            $relacion[$letra[1]]=$numero[1];
            $relacion[$letra[2]]=$numero[2];
            $relacion[$letra[3]]=$numero[3];
            $relacion[$letra[4]]=$numero[4];
            $relacion[$letra[5]]=$numero[5];

            $valor = mktime($relacion['H'],$relacion['i'],$relacion['s'],$relacion['n'],$relacion['j'],$relacion['Y']);

        }

        $ht = time()-$valor;
        if($ht>=2116800)
        {
            $dia = date('d',$valor);
            $mes = date('n',$valor);
            $año = date('Y',$valor);
            $hora = date('H',$valor);
            $minuto = date('i',$valor);
            $mesarray = array('','Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');
            $fecha = "El $dia de $mesarray[$mes] del $año";
        }
        if($ht<30242054.045)
        {
            $hc=round($ht/2629743.83);if($hc>1){$s="es";}else{$s = "";}$fecha="Hace $hc mes".$s;
        }
        if($ht<2116800)
        {
            $hc=round($ht/604800);if($hc>1){$s="s";}else{$s = "";}$fecha="Hace $hc semana".$s;
        }
        if($ht<561600)
        {
            $hc=round($ht/86400);if($hc==1){$fecha="Ayer";}if($hc==2){$fecha="Antier";}if($hc>2)$fecha="Hace $hc d&iacute;as";
        }
        if($ht<84600)
        {
            $hc=round($ht/3600);if($hc>1){$s="s";}else{$s = "";}$fecha="Hace $hc hora".$s;if($ht>4200 && $ht<5400){$fecha="Hace m&aacute;s de una hora";}}
        if($ht<3570)
        {
            $hc=round($ht/60);if($hc>1){$s="s";}else{$s = "";}$fecha="Hace $hc minuto".$s;
        }
        if($ht<60)
        {
            $fecha="Hace $ht segundos";
        }
        if($ht<=3)
        {
            $fecha="Ahora mismo";
        }

        return $fecha;
    }

    // Función para cortar una cadena de texto sin romper el html visualmente
    function html_cut($text, $max_length)
    {
        $tags   = array();
        $result = "";

        $is_open   = false;
        $grab_open = false;
        $is_close  = false;
        $in_double_quotes = false;
        $in_single_quotes = false;
        $tag = "";

        $i = 0;
        $stripped = 0;

        $stripped_text = strip_tags($text);

        while ($i < strlen($text) && $stripped < strlen($stripped_text) && $stripped < $max_length)
        {
            $symbol  = $text{$i};
            $result .= $symbol;

            switch ($symbol)
            {
            case '<':
                    $is_open   = true;
                    $grab_open = true;
                    break;

            case '"':
                if ($in_double_quotes)
                    $in_double_quotes = false;
                else
                    $in_double_quotes = true;

                break;

                case "'":
                if ($in_single_quotes)
                    $in_single_quotes = false;
                else
                    $in_single_quotes = true;

                break;

                case '/':
                    if ($is_open && !$in_double_quotes && !$in_single_quotes)
                    {
                        $is_close  = true;
                        $is_open   = false;
                        $grab_open = false;
                    }

                    break;

                case ' ':
                    if ($is_open)
                        $grab_open = false;
                    else
                        $stripped++;

                    break;

                case '>':
                    if ($is_open)
                    {
                        $is_open   = false;
                        $grab_open = false;
                        array_push($tags, $tag);
                        $tag = "";
                    }
                    else if ($is_close)
                    {
                        $is_close = false;
                        array_pop($tags);
                        $tag = "";
                    }

                    break;

                default:
                    if ($grab_open || $is_close)
                        $tag .= $symbol;

                    if (!$is_open && !$is_close)
                        $stripped++;
            }

            $i++;
        }

        while ($tags)
            $result .= "</".array_pop($tags).">";

        $points = (strlen($text) > strlen($result)) ? '...' : '';
        return trim($result) . $points;
    }

    // Convertir las entidades en formato html a texto plano (Usado en Footer para mostrar la descripción de propiedades sin formato html)
    function htmlToPlainText($str){
        $str = str_replace('&nbsp;', ' ', $str);
        $str = html_entity_decode($str, ENT_QUOTES | ENT_COMPAT , 'UTF-8');
        $str = html_entity_decode($str, ENT_HTML5, 'UTF-8');
        $str = html_entity_decode($str);
        $str = htmlspecialchars_decode($str);
        $str = strip_tags($str);
    
        return $str;
    }
}
?>