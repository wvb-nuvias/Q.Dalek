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
    case "getvol":
        $ret=shell_Exec("/usr/local/bin/getvol");
        $data=["result" => "ok", "message" => "getting volume...", "volume" => $ret];
        break;
    case "speak": 
        $text=$_REQUEST["text"];
        $chk=str_replace(" ","_",$text);
        $chkfile="/var/www/html/qdalek/speech/".$chk.".wav";
        $retfile="speech/".$chk.".wav";

        if (file_exists($chkfile)) {
            
        } else {
            $cmdline="speak \"".$text."\" -ven+m6 -g6 -k30 -s150 -r35 -a250 -w ".$chkfile;       
            shell_Exec($cmdline);
        }
        
        $data=["result" => "ok", "message" => "speaking...", "file" => $retfile];
        break;
}

echo json_encode($data);
?>