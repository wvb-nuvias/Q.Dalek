<?php
$q=$_REQUEST["q"];

switch ($q) {
    case "exterminate":
        shell_exec("playwav html/qdalek/sounds/exterminate.wav");        
        echo "{result : 'ok'}";
        break;        

}


?>