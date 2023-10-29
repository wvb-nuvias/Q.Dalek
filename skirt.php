<?php header('Access-Control-Allow-Origin: *'); ?>
<html>
    <head>
        <script src="https://kit.fontawesome.com/06b2b4d018.js" crossorigin="anonymous"></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

        <script>            
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
            <button onclick="decreasevolume()" class="rounded-md bg-gray-400">
                <div class="flex flex-col gap-<?=$itemmargin?>">
                    <div class="h-4/5 <?=$iconsize?> fa-solid fa-volume-low"></div>
                    <div class="h-1/5 <?=$textsize?>">Volume +</div>
                </div>
            </button>
            <button onclick="togglevolume()" class="rounded-md bg-green-400">
                <div class="flex flex-col gap-<?=$itemmargin?>">
                    <div class="h-4/5 <?=$iconsize?> fa-solid fa-volume-xmark"></div>
                    <div class="h-1/5 <?=$textsize?>">Mute</div>
                </div>
            </button>
            <button onclick="increasevolume()" class="rounded-md bg-red-400">
                <div class="flex flex-col gap-<?=$itemmargin?>">
                    <div class="h-4/5 <?=$iconsize?> fa-solid fa-volume-high"></div>
                    <div class="h-1/5 <?=$textsize?>">Volume -</div>
                </div>
            </button>

            <button onclick="exterminate()" class="rounded-md bg-gray-400">
                <div class="flex flex-col gap-<?=$itemmargin?>">
                    <div class="h-4/5 <?=$iconsize?> fa-solid fa-skull"></div>
                    <div class="h-1/5 <?=$textsize?>">Exterminate</div>
                </div>
            </button>
            <button onclick="update()" class="rounded-md bg-green-400">
                <div class="flex flex-col gap-<?=$itemmargin?>">
                    <div class="h-4/5 <?=$iconsize?> fa-solid fa-refresh"></div>
                    <div class="h-1/5 <?=$textsize?>">Update</div>
                </div>
            </button>
            <button onclick="reboot()" class="rounded-md bg-red-400">
                <div class="flex flex-col gap-<?=$itemmargin?>">
                    <div class="h-4/5 <?=$iconsize?> fa-solid fa-power-off"></div>
                    <div class="h-1/5 <?=$textsize?>">Reboot</div>
                </div>
            </button>

            <button onclick="exterminate()" class="rounded-md bg-gray-400">
                <div class="flex flex-col gap-<?=$itemmargin?>">
                    <div class="h-4/5 <?=$iconsize?> fa-solid fa-skull"></div>
                    <div class="h-1/5 <?=$textsize?>">Exterminate</div>
                </div>
            </button>
            <button onclick="update()" class="rounded-md bg-green-400">
                <div class="flex flex-col gap-<?=$itemmargin?>">
                    <div class="h-4/5 <?=$iconsize?> fa-solid fa-refresh"></div>
                    <div class="h-1/5 <?=$textsize?>">Update</div>
                </div>
            </button>
            <button onclick="reboot()" class="rounded-md bg-red-400">
                <div class="flex flex-col gap-<?=$itemmargin?>">
                    <div class="h-4/5 <?=$iconsize?> fa-solid fa-power-off"></div>
                    <div class="h-1/5 <?=$textsize?>">Reboot</div>
                </div>
            </button>
            
            <button onclick="update()" class="rounded-md bg-green-400">
                <div class="flex flex-col gap-<?=$itemmargin?>">
                    <div class="h-4/5 <?=$iconsize?> fa-solid fa-refresh"></div>
                    <div class="h-1/5 <?=$textsize?>">Update</div>
                </div>
            </button>
            <button onclick="reboot()" class="rounded-md bg-red-400">
                <div class="flex flex-col gap-<?=$itemmargin?>">
                    <div class="h-4/5 <?=$iconsize?> fa-solid fa-power-off"></div>
                    <div class="h-1/5 <?=$textsize?>">Reboot</div>
                </div>
            </button>
            <button onclick="back()" class="rounded-md bg-yellow-400">
                <div class="flex flex-col gap-<?=$itemmargin?>">
                    <div class="h-4/5 <?=$iconsize?> fa-solid fa-house"></div>
                    <div class="h-1/5 <?=$textsize?>">Back</div>
                </div>
            </button>
        </div>
    </body>
</html>