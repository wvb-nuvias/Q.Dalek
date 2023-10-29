<?php
header('Content-Type: application/json');

$cmd=$_REQUEST["cmd"];

switch($cmd) {
    case "reboot":        
        shell_exec("sudo systemctl reboot");
        $data=["result" => "ok", "" => "rebooting..."];
        break;
    case "update":        
        shell_Exec("sudo su wouter -c /usr/local/bin/update");
        $data=["result" => "ok", "" => "updating..."];
        break;
}

echo json_encode($data);
?>