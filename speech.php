<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
    include "functions.php";
?>
<html>
    <head>
        <script src="https://kit.fontawesome.com/06b2b4d018.js" crossorigin="anonymous"></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

        <script>    
            function speak(text) {                
                $.getJSON('commands.php?cmd=speak&text=' + text)
                .done(function(data) {
                    console.log(data.message); 
                    console.log(data.file); 
                    document.getElementById("output").src=data.file;
                    document.getElementById("output").play();                   
                });                            
            }
            
            function back() {
                document.location.href="/index.php";
            }
        </script>
    </head>
    <body style="font-family: tahoma; user-select: none">        
        <?php
            //TODO get the texts from the database, add way to add and delete
            //TODO way to do this realtime
            //TODO set pitch etc in settings
        ?>

        <div class="flex w-screen h-screen p-<?=$margin?> flex-col gap-<?=$margin?>">     
            <div class="rounded-md bg-purple-200 <?=$titlesize?> flex items-center justify-center h-24">
                Speech
            </div>
            <div class="grid grid-flow-col grid-cols-4 grid-rows-3 gap-<?=$margin?> h-full">
                <button onclick="speak('I am a Dahlekk')" class="rounded-md bg-green-300 col-span-3">
                    <div class="flex flex-col gap-<?=$itemmargin?>">
                        <div id="decreasevolume_icon" class="h-4/5 <?=$iconsize?> fa-solid "></div>
                        <div class="h-1/5 <?=$textsize?>">I am a Dalek</div>
                    </div>
                </button>
                <button onclick="speak('I am your soldier')" class="rounded-md bg-purple-300 col-span-3">
                    <div class="flex flex-col gap-<?=$itemmargin?>">
                        <div id="togglevolume_icon" class="h-4/5 <?=$iconsize?> fa-solid "></div>
                        <div class="h-1/5 <?=$textsize?>">I am your soldier</div>
                    </div>
                </button>
                <button onclick="" class="rounded-md bg-pink-300 col-span-3">
                    <div class="flex flex-col gap-<?=$itemmargin?>">
                        <div id="increasevolume_icon" class="h-4/5 <?=$iconsize?> fa-solid "></div>
                        <div class="h-1/5 <?=$textsize?>"></div>
                    </div>
                </button>
                            
                <button onclick="previous()" class="rounded-md bg-green-400">
                    <div class="flex flex-col gap-<?=$itemmargin?>">
                        <div class="h-4/5 <?=$iconsize?> fa-solid fa-chevron-left"></div>
                        <div class="h-1/5 <?=$textsize?>">Previous</div>
                    </div>
                </button>
                <button onclick="next()" class="rounded-md bg-purple-400">
                    <div class="flex flex-col gap-<?=$itemmargin?>">
                        <div class="h-4/5 <?=$iconsize?> fa-solid fa-chevron-right"></div>
                        <div class="h-1/5 <?=$textsize?>">Next</div>
                    </div>
                </button>
                <button onclick="back()" class="rounded-md bg-pink-400">
                    <div class="flex flex-col gap-<?=$itemmargin?>">
                        <div class="h-4/5 <?=$iconsize?> fa-solid fa-house"></div>
                        <div class="h-1/5 <?=$textsize?>">Back</div>
                    </div>
                </button>
            </div>
        </div>
        
        <audio id="output">
            <source src="" type="audio/wav">
        </audio>
    </body>
</html>