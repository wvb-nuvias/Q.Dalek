<html>
    <head>
        <script>
            function exterminate() {
                document.getElementById('sound_exterminate').play();
            }

            function reboot() {
                
            }
        </script>
    </head>
    <body style="font-family: tahoma">        
        <a onclick="exterminate()" href="#">Exterminate</a>        
        <br><br><br>
        <a href="commands.php?cmd=reboot" href="#">Reboot</a>        
        <br><br><br>
        <a href="commands.php?cmd=update" href="#">Update</a>        
        
        <audio id="sound_exterminate">
            <source src="sounds/exterminate.wav" type="audio/wav">
        </audio>
    </body>
</html>