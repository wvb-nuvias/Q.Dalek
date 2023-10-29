<html>
    <head>
        <script>
            function exterminate() {
                fetch('https://localhost/play.php?q=exterminate', {
                    headers: {
                        'Accept': 'application/json'
                    }
                })
                .then(response => response.text())
                .then(text => console.log(text))
            }
        </script>
    </head>
    <body style="font-family: tahoma">
        <a onclick="exterminate()" href="#">Exterminate</a>        
    </body>
</html>