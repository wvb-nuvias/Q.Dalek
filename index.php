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

            function sounds() {
                document.location.href="/sounds.php";
            }

            function speech() {
                document.location.href="/speech.php";
            }

            function effects() {
                document.location.href="/effects.php";
            }

            function settings() {
                document.location.href="/settings.php";
            }
        </script>
    </head>
    <body style="font-family: tahoma; user-select: none">        
        <div class="flex w-screen h-screen p-<?=$margin?> flex-col gap-<?=$margin?>">
            <div class="rounded-md bg-purple-200 <?=$titlesize?> flex items-center justify-center h-24">
                Main Menu
            </div>
            <div class="grid grid-flow-col grid-cols-4 grid-rows-3 gap-<?=$margin?> h-full">            
                <button onclick="dome()" class="rounded-md bg-purple-300 row-span-2">
                    <div class="flex flex-col gap-<?=$itemmargin?>">
                        <div><img src="images/dome_active.svg"></div>
                        <div class="<?=$textsize?>">Dome</div>
                    </div>
                </button>            
                <button onclick="sounds()" class="rounded-md bg-purple-400">
                    <div class="flex flex-col gap-<?=$itemmargin?>">
                        <div class="h-4/5 <?=$iconsize?> fa-solid fa-file-audio"></div>
                        <div class="h-1/5 <?=$textsize?>">Sounds</div>
                    </div>
                </button>

                <button onclick="middle()" class="rounded-md bg-blue-300 row-span-2">
                    <div class="flex flex-col gap-<?=$itemmargin?>">
                        <div><img src="images/middle_active.svg"></div>
                        <div class="<?=$textsize?>">Middle</div>
                    </div>
                </button>
                <button onclick="speech()" class="rounded-md bg-blue-400">
                    <div class="flex flex-col gap-<?=$itemmargin?>">
                        <div class="h-4/5 <?=$iconsize?> fa-solid fa-comment"></div>
                        <div class="h-1/5 <?=$textsize?>">Speech</div>
                    </div>
                </button>

                <button onclick="skirt()" class="rounded-md bg-green-300 row-span-2">
                    <div class="flex flex-col gap-<?=$itemmargin?>">
                        <div><img src="images/skirt_active.svg"></div>
                        <div class="<?=$textsize?>">Skirt</div>
                    </div>
                </button>
                <button onclick="effects()" class="rounded-md bg-green-400">
                    <div class="flex flex-col gap-<?=$itemmargin?>">
                        <div class="h-4/5 <?=$iconsize?> fa-solid fa-wand-magic-sparkles"></div>
                        <div class="h-1/5 <?=$textsize?>">Effects</div>
                    </div>
                </button>

                <button onclick="fender()" class="rounded-md bg-pink-300 row-span-3">
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
        </div>
    </body>
</html>