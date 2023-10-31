<?php
include "functions.php";

header('Content-Type: application/json');
$cmd=$_REQUEST["cmd"];

switch($cmd) {
    case "reboot":        
        shell_exec("sudo systemctl reboot");
        $data=["result" => "ok", "message" => "rebooting..."];
        break;
    case "update":        
        shell_Exec("sudo su ".$cfg["masteruser"]." -c /usr/local/bin/update");
        $data=["result" => "ok", "message" => "updating..."];
        break;
    case "getvol":
        $ret=shell_Exec("sudo su ".$cfg["masteruser"]." -c /usr/local/bin/getvol");
        $data=["result" => "ok", "message" => "getting volume...", "volume" => $ret];
        break;        
    case "setvol":
        $volume=$_REQUEST["volume"];
        $ret=shell_Exec("sudo su ".$cfg["masteruser"]." -c \"/usr/local/bin/setvol ".$volume."%\"");
        $data=["result" => "ok", "message" => "setting volume...", "volume" => $volume];
        break;
    case "getlastchange":
        $ret=shell_Exec("sudo su ".$cfg["masteruser"]." -c \"git log -1 --pretty=\"format:%ci\" ".$path."\"");
        $data=["result" => "ok", "message" => "getting git change...", "lastchange" => $ret];
        break;
    case "getlastchangeid":
        $ret=shell_Exec("sudo su ".$cfg["masteruser"]." -c \"git log -1 --pretty=\"format:%H\" ".$path."\"");
        $data=["result" => "ok", "message" => "getting git change id...", "lastid" => $ret];
        break;
    case "getremotelastid":        
        $ret=shell_Exec("sudo su ".$cfg["masteruser"]." -c \"git ls-remote --heads ".$cfg["git_source"]."\"");
        $dat=explode("\t",$ret);        
        $data=["result" => "ok", "message" => "getting git remote change id...", "lastid" => $dat[0]];
        break;
    case "speechsettingssave":
        $pitch=$_REQUEST["pitch"];
        $modulate=$_REQUEST["modulate"];
        $speed=$_REQUEST["speed"];
        $amplitude=$_REQUEST["amplitude"];

        $cfg["speak_pitch"]=$pitch;
        $cfg["speak_modulate"]=$modulate;
        $cfg["speak_speed"]=$speed;
        $cfg["speak_amplitude"]=$amplitude;

        $json=json_encode($cfg);
        file_put_contents($configfile,$json);

        $data=["result" => "ok", "message" => "Saved config file."];
        break;
    case "speak": 
        $text=$_REQUEST["text"];
        $chk=str_replace(" ","_",$text);
        $chkfile=$cfg["installpath"]."/speech/".$chk.".wav";
        $retfile="speech/".$chk.".wav";
        
        if (!file_exists($chkfile)) {            
            $cmdline="speak \"".$text."\" -ven+m6 -p".$cfg["speak_pitch"]." -g".$cfg["speak_wordsgap"]." -k".$cfg["speak_capitals"]." -s".$cfg["speak_speed"]." -r".$cfg["speak_modulate"]." -a".$cfg["speak_amplitude"]." -w ".$chkfile;       
            shell_Exec($cmdline);
            //TODO add sox echo ? -- sox original.wav new.wav echo 0.8 0.88 100.0 0.4
        }
        
        $data=["result" => "ok", "message" => "speaking...", "file" => $retfile];
        break;
    case "speaktest": 
        $text="The Dahlek Are Strong and Undefeated";
        $pitch=$_REQUEST["pitch"];
        $modulate=$_REQUEST["modulate"];
        $speed=$_REQUEST["speed"];
        $amplitude=$_REQUEST["amplitude"];
        $chk=str_replace(" ","_",$text);
        $chkfile=$cfg["installpath"]."/speech/".$chk.".wav";
        $retfile="../speech/".$chk.".wav";
                
        $cmdline="speak \"".$text."\" -ven+m6 -p".$pitch." -g".$cfg["speak_wordsgap"]." -k".$cfg["speak_capitals"]." -s".$speed." -r".$modulate." -a".$amplitude." -w ".$chkfile;       
        shell_Exec($cmdline);
        //TODO add sox echo ? -- sox original.wav new.wav echo 0.8 0.88 100.0 0.4
                
        $data=["result" => "ok", "message" => "speaking...", "file" => $retfile];
        break;
}

echo json_encode($data);
?>