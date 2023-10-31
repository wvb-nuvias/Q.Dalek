<?php
$path=dirname(realpath("commands.php"));

$configfile = "/var/www/html/qdalek/config.json";
if (file_exists($configfile)) {
    $json = file_get_contents($configfile); 
    $cfg = json_decode($json,true);
} else {
    $cfg = [
        "git_source" => "git@github.com:wvb-nuvias/Q.Dalek.git",
        "installpath" => "/var/www/html/qdalek",
        "masteruser" => "wouter",
        "speak_pitch" => "100",
        "speak_modulate" => "25",
        "speak_speed" => "140",
        "speak_amplitude" => "200",
        "speak_capitals" => "30",
        "speak_wordsgap" => "6",
        "iconsize" => "text-8xl",
        "iconsizesmall" => "text-6xl",
        "textsize" => "text-4xl",
        "titlesize" => "text-5xl",
        "margin" => "2",
        "itemmargin" => "1"
    ];
}

$git_source=$cfg["git_source"];
$installpath=$cfg["installpath"];
$masteruser=$cfg["masteruser"];
$speak_pitch=$cfg["speak_pitch"];
$speak_modulate=$cfg["speak_modulate"];
$speak_speed=$cfg["speak_speed"];
$speak_amplitude=$cfg["speak_amplitude"];
$speak_capitals=$cfg["speak_capitals"];
$speak_wordsgap=$cfg["speak_wordsgap"];
$iconsize=$cfg["iconsize"];
$iconsizesmall=$cfg["iconsizesmall"];
$textsize=$cfg["textsize"];
$titlesize=$cfg["titlesize"];
$margin=$cfg["margin"];           
$itemmargin=$cfg["itemmargin"];

$internet_test=@fsockopen("www.office.com", 443);
if ($internet_test){
    fclose($internet_test);
    $internet_connected=true;
} else {
    $internet_connected=false;
}

?>