<?php
header('Content-Type: application/json');

$cmd=$_REQUEST["cmd"];

$path=dirname(realpath("commands.php"));

$configfile = $path."/config.json";
if (file_exists($configfile)) {
    $json = file_get_contents($configfile); 
    $cfg = json_decode($json,true);
} else {
    $cfg = [
        "git_source" => "git@github.com:wvb-nuvias/Q.Dalek.git",
        "installpath" => "/var/www/html/qdalek",
        "speak_pitch" => "50",
        "speak_modulate" => "35",
        "speak_speed" => "250",
        "speak_amplitude" => "250",
        "speak_capitals" => "30",
        "speak_wordsgap" => "6"
    ];
    $json = json_encode($cfg);
    file_put_contents($configfile,$json);
}

$data=["configfile" => $configfile, "file exists" => file_exists($configfile)];

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
        $ret=shell_Exec("sudo su wouter -c /usr/local/bin/getvol");
        $data=["result" => "ok", "message" => "getting volume...", "volume" => $ret];
        break;        
    case "setvol":
        $volume=$_REQUEST["volume"];
        $ret=shell_Exec("sudo su wouter -c \"/usr/local/bin/setvol ".$volume."%\"");
        $data=["result" => "ok", "message" => "setting volume...", "volume" => $volume];
        break;
    case "getlastchange":
        $ret=shell_Exec("sudo su wouter -c \"git log -1 --pretty=\"format:%ci\" ".$path."\"");
        $data=["result" => "ok", "message" => "getting git change...", "lastchange" => $ret];
        break;
    case "getlastchangeid":
        $ret=shell_Exec("sudo su wouter -c \"git log -1 --pretty=\"format:%H\" ".$path."\"");
        $data=["result" => "ok", "message" => "getting git change id...", "lastid" => $ret];
        break;
    case "getremotelastid":        
        $ret=shell_Exec("sudo su wouter -c \"git ls-remote --heads ".$cfg["git_source"]."\"");
        $data=["result" => "ok", "message" => "getting git remote change id...", "lastid" => $ret];
        break;
    case "speak": 
        $text=$_REQUEST["text"];
        $chk=str_replace(" ","_",$text);
        $chkfile=$cfg["installpath"]."/speech/".$chk.".wav";
        $retfile="speech/".$chk.".wav";
        
        if (!file_exists($chkfile)) {            
            $cmdline="speak \"".$text."\" -ven+m6 -p".$cfg["speak_pitch"]." -g".$cfg["speak_wordsgap"]." -k".$cfg["speak_capitals"]." -s".$cfg["speak_speed"]." -r".$cfg["speak_modulate"]." -a".$cfg["speak_amplitude"]." -w ".$chkfile;       
            shell_Exec($cmdline);
        }
        
        $data=["result" => "ok", "message" => "speaking...", "file" => $retfile];
        break;
}

echo json_encode($data);
?>