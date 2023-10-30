<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
    include "../functions.php";
?>
<html>
    <head>
        <script src="https://kit.fontawesome.com/06b2b4d018.js" crossorigin="anonymous"></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

        <script>            
            
            function back() {
                document.location.href="/settings.php";
            }
        </script>
    </head>
    <body style="font-family: tahoma; user-select: none">
        <div class="grid grid-flow-col grid-cols-4 grid-rows-3 gap-<?=$margin?> w-screen h-screen p-<?=$margin?>">
        <button onclick="" class="rounded-md bg-pink-400">
                <div class="flex flex-col gap-<?=$itemmargin?>">
                    <div class="h-4/5 <?=$iconsize?> fa-solid"></div>
                    <div class="h-1/5 <?=$textsize?>"></div>
                </div>
            </button>
            <button onclick="" class="rounded-md bg-pink-300">
                <div class="flex flex-col gap-<?=$itemmargin?>">
                    <div class="h-4/5 <?=$iconsize?> fa-solid"></div>
                    <div class="h-1/5 <?=$textsize?>"></div>
                </div>
            </button>
            <button onclick="" class="rounded-md bg-pink-200">
                <div class="flex flex-col gap-<?=$itemmargin?>">
                    <div class="h-4/5 <?=$iconsize?> fa-solid"></div>
                    <div class="h-1/5 <?=$textsize?>"></div>
                </div>
            </button>

            <button onclick="" class="rounded-md bg-yellow-400">
                <div class="flex flex-col gap-<?=$itemmargin?>">
                    <div class="h-4/5 <?=$iconsize?> fa-solid"></div>
                    <div class="h-1/5 <?=$textsize?>"></div>
                </div>
            </button>
            <button onclick="" class="rounded-md bg-yellow-300">
                <div class="flex flex-col gap-<?=$itemmargin?>">
                    <div class="h-4/5 <?=$iconsize?> fa-solid"></div>
                    <div class="h-1/5 <?=$textsize?>"></div>
                </div>
            </button>
            <button onclick="" class="rounded-md bg-yellow-200">
                <div class="flex flex-col gap-<?=$itemmargin?>">
                    <div class="h-4/5 <?=$iconsize?> fa-solid"></div>
                    <div class="h-1/5 <?=$textsize?>"></div>
                </div>
            </button>

            <button onclick="" class="rounded-md bg-gray-400">
                <div class="flex flex-col gap-<?=$itemmargin?>">
                    <div class="h-4/5 <?=$iconsize?> fa-solid"></div>
                    <div class="h-1/5 <?=$textsize?>"></div>
                </div>
            </button>
            <button onclick="" class="rounded-md bg-gray-300">
                <div class="flex flex-col gap-<?=$itemmargin?>">
                    <div class="h-4/5 <?=$iconsize?> fa-solid"></div>
                    <div class="h-1/5 <?=$textsize?>"></div>
                </div>
            </button>
            <button onclick="" class="rounded-md bg-gray-200">
                <div class="flex flex-col gap-<?=$itemmargin?>">
                    <div class="h-4/5 <?=$iconsize?> fa-solid"></div>
                    <div class="h-1/5 <?=$textsize?>"></div>
                </div>
            </button>
            
            <button onclick="" class="rounded-md bg-green-400">
                <div class="flex flex-col gap-<?=$itemmargin?>">
                    <div class="h-4/5 <?=$iconsize?> fa-solid"></div>
                    <div class="h-1/5 <?=$textsize?>"></div>
                </div>
            </button>
            <button onclick="" class="rounded-md bg-green-300">
                <div class="flex flex-col gap-<?=$itemmargin?>">
                    <div class="h-4/5 <?=$iconsize?> fa-solid"></div>
                    <div class="h-1/5 <?=$textsize?>"></div>
                </div>
            </button>
            <button onclick="back()" class="rounded-md bg-green-200">
                <div class="flex flex-col gap-<?=$itemmargin?>">
                    <div class="h-4/5 <?=$iconsize?> fa-solid fa-house"></div>
                    <div class="h-1/5 <?=$textsize?>">Back</div>
                </div>
            </button>
        </div>
    </body>
</html>