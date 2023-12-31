<?php header('Access-Control-Allow-Origin: *'); ?>
<?php    
    include "/var/www/html/qdalek/functions.php";
?>
<html>
    <head>
        <script src="https://kit.fontawesome.com/06b2b4d018.js?random=<?php echo uniqid(); ?>" crossorigin="anonymous"></script>
        <script src="https://cdn.tailwindcss.com?random=<?php echo uniqid(); ?>"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js?random=<?php echo uniqid(); ?>" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.css?random=<?php echo uniqid(); ?>" rel="stylesheet" />
        
        <script src="/functions.js?random=<?php echo uniqid(); ?>"></script>
    </head>
    <body style="font-family: tahoma; user-select: none">
    <script>
        internet_connected=<?=$internet_connected?>;
        installpath="<?=$installpath?>";
        speak_pitch="<?=$speak_pitch?>";
        speak_modulate="<?=$speak_modulate?>";
        speak_speed="<?=$speak_speed?>";
        speak_amplitude="<?=$speak_amplitude?>";
        speak_echo="<?=$speak_echo?>";
        speak_capitals="<?=$speak_capitals?>";
        speak_wordsgap="<?=$speak_wordsgap?>";

        console.log("Installed : "+installpath);
    </script>