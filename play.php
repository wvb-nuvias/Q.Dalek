<?php
$q=$_REQUEST["q"];

switch ($q) {
    case "exterminate":
        shell_exec("/usr/local/bin/playwav html/qdalek/sounds/exterminate.wav");        
        echo "{result : 'ok'}";
        break;        

}


?>