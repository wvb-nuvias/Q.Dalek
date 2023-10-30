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
            function play(sound) {
                var objname='sound_' + sound;
                document.getElementById(objname).play();
            }

            function back() {
                document.location.href="/index.php";
            }
        </script>
    </head>
    <body style="font-family: tahoma; user-select: none">
        <div class="grid grid-flow-col grid-cols-4 grid-rows-3 gap-<?=$margin?> w-screen h-screen p-<?=$margin?>">
            <button onclick="play('exterminate')" class="rounded-md bg-blue-200">
                <div class="flex flex-col gap-<?=$itemmargin?>">
                    <div class="h-4/5 <?=$iconsize?> fa-solid fa-skull"></div>
                    <div class="h-1/5 <?=$textsize?>">Exterminate</div>
                </div>
            </button>
            <button onclick="play('scream')" class="rounded-md bg-blue-300">
                <div class="flex flex-col gap-<?=$itemmargin?>">
                    <div class="h-4/5 <?=$iconsize?> fa-solid fa-biohazard"></div>
                    <div class="h-1/5 <?=$textsize?>">Scream</div>
                </div>
            </button>
            <button onclick="random()" class="rounded-md bg-blue-400">
                <div class="flex flex-col gap-<?=$itemmargin?>">
                    <div class="h-4/5 <?=$iconsize?> fa-solid fa-shuffle"></div>
                    <div class="h-1/5 <?=$textsize?>">Random</div>
                </div>
            </button>

            <button onclick="" class="rounded-md bg-green-200">
                <div class="flex flex-col gap-<?=$itemmargin?>">
                    <div class="h-4/5 <?=$iconsize?> fa-solid "></div>
                    <div class="h-1/5 <?=$textsize?>"></div>
                </div>
            </button>
            <button onclick="" class="rounded-md bg-green-300">
                <div class="flex flex-col gap-<?=$itemmargin?>">
                    <div class="h-4/5 <?=$iconsize?> fa-solid "></div>
                    <div class="h-1/5 <?=$textsize?>"></div>
                </div>
            </button>
            <button onclick="previous()" class="rounded-md bg-green-400">
                <div class="flex flex-col gap-<?=$itemmargin?>">
                    <div class="h-4/5 <?=$iconsize?> fa-solid fa-chevron-left"></div>
                    <div class="h-1/5 <?=$textsize?>">Previous</div>
                </div>
            </button>

            <button onclick="" class="rounded-md bg-red-200">
                <div class="flex flex-col gap-<?=$itemmargin?>">
                    <div class="h-4/5 <?=$iconsize?> fa-solid "></div>
                    <div class="h-1/5 <?=$textsize?>"></div>
                </div>
            </button>
            <button onclick="" class="rounded-md bg-red-300">
                <div class="flex flex-col gap-<?=$itemmargin?>">
                    <div class="h-4/5 <?=$iconsize?> fa-solid "></div>
                    <div class="h-1/5 <?=$textsize?>"></div>
                </div>
            </button>
            <button onclick="next()" class="rounded-md bg-red-400">
                <div class="flex flex-col gap-<?=$itemmargin?>">
                    <div class="h-4/5 <?=$iconsize?> fa-solid fa-chevron-right"></div>
                    <div class="h-1/5 <?=$textsize?>">Next</div>
                </div>
            </button>
            
            <button onclick="" class="rounded-md bg-yellow-200">
                <div class="flex flex-col gap-<?=$itemmargin?>">
                    <div class="h-4/5 <?=$iconsize?> fa-solid "></div>
                    <div class="h-1/5 <?=$textsize?>"></div>
                </div>
            </button>
            <button onclick="" class="rounded-md bg-yellow-300">
                <div class="flex flex-col gap-<?=$itemmargin?>">
                    <div class="h-4/5 <?=$iconsize?> fa-solid "></div>
                    <div class="h-1/5 <?=$textsize?>"></div>
                </div>
            </button>
            <button onclick="back()" class="rounded-md bg-yellow-400">
                <div class="flex flex-col gap-<?=$itemmargin?>">
                    <div class="h-4/5 <?=$iconsize?> fa-solid fa-house"></div>
                    <div class="h-1/5 <?=$textsize?>">Back</div>
                </div>
            </button>
        </div>
        
        <audio id="sound_exterminate">
            <source src="sounds/exterminate.wav" type="audio/wav">
        </audio>
        <audio id="sound_scream">
            <source src="sounds/scream.wav" type="audio/wav">
        </audio>
    </body>
</html>