<?php header('Access-Control-Allow-Origin: *'); ?>
<html>
    <head>
        <script src="https://kit.fontawesome.com/06b2b4d018.js" crossorigin="anonymous"></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

        <script>    
            function speak(text) {

            }
            
            function back() {
                document.location.href="/index.php";
            }
        </script>
    </head>
    <body style="font-family: tahoma; user-select: none">
        <!-- TODO read volume setting on load of this page -->
        <?php
            $iconsize="text-8xl";
            $textsize="text-4xl";
            $margin="2";            
            $itemmargin="1";
        ?>

        <div class="grid grid-flow-col grid-cols-4 grid-rows-3 gap-<?=$margin?> w-screen h-screen p-<?=$margin?>">
            <button onclick="" class="rounded-md bg-green-300 col-span-3">
                <div class="flex flex-col gap-<?=$itemmargin?>">
                    <div id="decreasevolume_icon" class="h-4/5 <?=$iconsize?> fa-solid "></div>
                    <div class="h-1/5 <?=$textsize?>">Exterminate</div>
                </div>
            </button>
            <button onclick="" class="rounded-md bg-purple-300 col-span-3">
                <div class="flex flex-col gap-<?=$itemmargin?>">
                    <div id="togglevolume_icon" class="h-4/5 <?=$iconsize?> fa-solid "></div>
                    <div class="h-1/5 <?=$textsize?>"></div>
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
    </body>
</html>