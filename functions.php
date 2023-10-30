<?php
$path=dirname(realpath("commands.php"));

$configfile = $path."/config.json";
if (file_exists($configfile)) {
    $json = file_get_contents($configfile); 
    $cfg = json_decode($json,true);
} else {
    $cfg = [
        "git_source" => "git@github.com:wvb-nuvias/Q.Dalek.git",
        "installpath" => "/var/www/html/qdalek",
        "masteruser" => "wouter",
        "speak_pitch" => "50",
        "speak_modulate" => "35",
        "speak_speed" => "150",
        "speak_amplitude" => "250",
        "speak_capitals" => "30",
        "speak_wordsgap" => "6"
    ];
    $json = json_encode($cfg);
    file_put_contents($configfile,$json);
}

$iconsize="text-8xl";
$textsize="text-4xl";
$margin="4";            
$itemmargin="1";
?>