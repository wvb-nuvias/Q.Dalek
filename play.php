<?php
$q=$_REQUEST["q"];

switch ($q) {
    case "exterminate":
        shell_exec("/usr/bin/aplay /home/wouter/exterminate.wav");        
        echo "{result : 'ok'}";
        break;        

}


?>