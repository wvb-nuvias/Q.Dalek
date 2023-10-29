<?php
header('Content-Type: application/json');

$cmd=$_REQUEST["cmd"];

switch($cmd) {
    case "reboot":        
        shell_exec("sudo systemctl reboot");
        $data=["result" => "ok", "message" => "rebooting..."];
        break;
    case "update":        
        shell_Exec("sudo su wouter -c /usr/local/bin/update");
        $data=["result" => "ok", "message" => "updating..."];
        break;
    case "speak": 
        $text=$_REQUEST["text"];
        $cmdline="speak \"".$text."\" -ven+m6 -g6 -k30 -s150 -r35 -a250 -w /var/www/html/tmp/output.wav";       
        shell_Exec($cmdline);
        $data=["result" => "ok", "message" => "speaking..."];
        break;
}

echo json_encode($data);
?>