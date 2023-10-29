<html>
    <head>
        <script>
            function exterminate() {
                document.getElementById('sound_exterminate').play();;
            }
        </script>
    </head>
    <body style="font-family: tahoma">
        
        <a onclick="exterminate()" href="#">Exterminate</a>        
        

        <audio id="sound_exterminate">
            <source src="sounds/exterminate.wav" type="audio/wav">
        </audio>
    </body>
</html>