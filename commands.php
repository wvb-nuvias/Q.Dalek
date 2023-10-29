<?php
$cmd=$_REQUEST["cmd"];

switch($cmd) {
    case "reboot":
        echo "rebooting...";
        shell_exec("sudo systemctl reboot");
        break;
    case "update":
        echo "updating...";
        shell_Exec("sudo /usr/local/bin/update");
        
        echo "  <script type=\"text/javascript\"> 
                    window.location.href=\"index.php\"
                </script>";
        break;
}
?>