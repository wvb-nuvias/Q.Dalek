<?php
$q=$_REQUEST["q"];

switch ($q) {
    case "exterminate":
        shell_exec("/usr/bin/aplay /var/www/html/qdalek/sounds/exterminate.wav");        
        echo "{result : 'ok'}";
        break;        

}


?>