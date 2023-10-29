<?php header('Access-Control-Allow-Origin: *'); ?>
<html>
    <head>
        <script src="https://kit.fontawesome.com/06b2b4d018.js" crossorigin="anonymous"></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

        <script>
            function dome() {
                document.location.href="/dome.php";
            }

            function middle() {
                document.location.href="/middle.php";
            }

            function skirt() {
                document.location.href="/skirt.php";
            }

            function fender() {
                document.location.href="/fender.php";
            }


            function settings() {
                document.location.href="/settings.php";
            }

            function sounds() {
                document.location.href="/sounds.php";
            }
        </script>
    </head>
    <body style="font-family: tahoma; user-select: none">
        <!-- TODO get sound commands from database somehow -->
        <!-- TODO interface to add sounds? upload? -->        
        <!-- TODO soundboard page -->
        <?php
            $iconsize="text-8xl";
            $textsize="text-4xl";
            $margin="2";            
            $itemmargin="1";
        ?>

        <div class="grid grid-flow-col grid-cols-4 grid-rows-3 gap-<?=$margin?> w-screen h-screen p-<?=$margin?>">
            <button onclick="dome()" class="rounded-md bg-purple-200 row-span-2">
                <div class="flex flex-col gap-<?=$itemmargin?>">
                    <div><img src="images/dome_active.svg"></div>
                    <div class="<?=$textsize?>">Dome</div>
                </div>
            </button>            
            <button onclick="sounds()" class="rounded-md bg-red-400">
                <div class="flex flex-col gap-<?=$itemmargin?>">
                    <div class="h-4/5 <?=$iconsize?> fa-solid fa-file-audio"></div>
                    <div class="h-1/5 <?=$textsize?>">Sounds</div>
                </div>
            </button>

            <button onclick="middle()" class="rounded-md bg-blue-200 row-span-2">
                <div class="flex flex-col gap-<?=$itemmargin?>">
                    <div><img src="images/middle_active.svg"></div>
                    <div class="<?=$textsize?>">Middle</div>
                </div>
            </button>
            <button onclick="update()" class="rounded-md bg-green-400">
                <div class="flex flex-col gap-<?=$itemmargin?>">
                    <div class="h-4/5 <?=$iconsize?> fa-solid fa-refresh"></div>
                    <div class="h-1/5 <?=$textsize?>">Update</div>
                </div>
            </button>

            <button onclick="skirt()" class="rounded-md bg-green-200 row-span-2">
                <div class="flex flex-col gap-<?=$itemmargin?>">
                    <div><img src="images/skirt_active.svg"></div>
                    <div class="<?=$textsize?>">Skirt</div>
                </div>
            </button>
            <button onclick="update()" class="rounded-md bg-green-400">
                <div class="flex flex-col gap-<?=$itemmargin?>">
                    <div class="h-4/5 <?=$iconsize?> fa-solid fa-refresh"></div>
                    <div class="h-1/5 <?=$textsize?>">Update</div>
                </div>
            </button>

            <button onclick="fender()" class="rounded-md bg-yellow-200 row-span-2">
                <div class="flex flex-col gap-<?=$itemmargin?>">
                    <div><img src="images/bottom_active.svg"></div>
                    <div class="<?=$textsize?>">Fender</div>
                </div>
            </button>
            <button onclick="settings()" class="rounded-md bg-pink-400">
                <div class="flex flex-col gap-<?=$itemmargin?>">
                    <div class="h-4/5 <?=$iconsize?> fa-solid fa-screwdriver-wrench"></div>
                    <div class="h-1/5 <?=$textsize?>">Settings</div>
                </div>
            </button>
        </div>
        
        <audio id="sound_exterminate">
            <source src="sounds/exterminate.wav" type="audio/wav">
        </audio>
    </body>
</html>