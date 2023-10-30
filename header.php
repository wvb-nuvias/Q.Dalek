<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
    $path=dirname(realpath("commands.php"));
    include $path."/functions.php";
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