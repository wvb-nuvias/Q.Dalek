<?php header('Access-Control-Allow-Origin: *'); ?>
<html>
    <head>
        <script src="https://kit.fontawesome.com/06b2b4d018.js" crossorigin="anonymous"></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

        <script>
            function exterminate() {
                document.getElementById('sound_exterminate').play();
            }

            function reboot() {                
                $.getJSON('commands.php?cmd=reboot')
                .done(function(data) {
                    console.log(data.message);                
                });                
            }

            function update() {
                $.getJSON('commands.php?cmd=update')
                .done(function(data) {
                    console.log(data.message);
                    document.location.reload();
                });                
            }
        </script>
    </head>
    <body style="font-family: tahoma; user-select: none">
        <!-- TODO get sound commands from database somehow -->
        <!-- TODO interface to add sounds? upload? -->        
        <!-- TODO soundboard page -->

        <div class="grid grid-flow-col grid-cols-3 grid-rows-3 justify-items-stretch gap-4 w-full h-full p-4">
            <button onclick="exterminate()" class="rounded-md bg-gray-400">
                <div class="flex flex-col">
                    <div class="h-4/5 text-9xl fa-solid fa-2xl fa-skull"></div>
                    <div class="h-1/5">Exterminate</div>
                </div>
            </button>
            <button onclick="update()" class="rounded-md bg-green-400">
                <div class="flex flex-col">
                    <div class="h-4/5 text-9xl fa-solid fa-2xl fa-refresh"></div>
                    <div class="h-1/5">Update</div>
                </div>
            </button>
            <button onclick="reboot()" class="rounded-md bg-red-400">
                <div class="flex flex-col">
                    <div class="h-4/5 text-9xl fa-solid fa-2xl fa-power-off"></div>
                    <div class="h-1/5">Reboot</div>
                </div>
            </button>

        </div>
        
        <audio id="sound_exterminate">
            <source src="sounds/exterminate.wav" type="audio/wav">
        </audio>
    </body>
</html>