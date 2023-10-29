<?php
$q=$_REQUEST["q"];

switch ($q) {
    case "exterminate":
        shell_exec("sudo /usr/bin/aplay sounds/exterminate.wav");        
        echo "{result : 'ok'}";
        break;        

}


?>