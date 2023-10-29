<?php
$q=$_REQUEST["q"];

switch ($q) {
    case "exterminate":
        shell_exec("/usr/bin/aplay sounds/exterminate.wav");        
        echo "{result : 'ok'}";
        break;        

}


?>