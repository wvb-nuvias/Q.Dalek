<?php include "../header.php";?>
<div class="flex w-screen h-screen p-<?=$margin?> flex-col gap-<?=$margin?>">     
    <div class="rounded-md bg-yellow-200 <?=$titlesize?> flex items-center justify-center h-24">
        Database Settings
    </div>
    <div class="grid grid-flow-col grid-cols-4 grid-rows-3 gap-<?=$margin?> h-full">
        <button onclick="" class="rounded-md bg-red-400">
            <div class="flex flex-col gap-<?=$itemmargin?>">
                <div class="h-4/5 <?=$iconsize?> fa-solid"></div>
                <div class="h-1/5 <?=$textsize?>"></div>
            </div>
        </button>
        <button onclick="" class="rounded-md bg-red-300">
            <div class="flex flex-col gap-<?=$itemmargin?>">
                <div class="h-4/5 <?=$iconsize?> fa-solid"></div>
                <div class="h-1/5 <?=$textsize?>"></div>
            </div>
        </button>
        <button onclick="" class="rounded-md bg-red-200">
            <div class="flex flex-col gap-<?=$itemmargin?>">
                <div class="h-4/5 <?=$iconsize?> fa-solid"></div>
                <div class="h-1/5 <?=$textsize?>"></div>
            </div>
        </button>

        <button onclick="" class="rounded-md bg-purple-400">
            <div class="flex flex-col gap-<?=$itemmargin?>">
                <div class="h-4/5 <?=$iconsize?> fa-solid"></div>
                <div class="h-1/5 <?=$textsize?>"></div>
            </div>
        </button>
        <button onclick="" class="rounded-md bg-purple-300">
            <div class="flex flex-col gap-<?=$itemmargin?>">
                <div class="h-4/5 <?=$iconsize?> fa-solid"></div>
                <div class="h-1/5 <?=$textsize?>"></div>
            </div>
        </button>
        <button onclick="" class="rounded-md bg-purple-200">
            <div class="flex flex-col gap-<?=$itemmargin?>">
                <div class="h-4/5 <?=$iconsize?> fa-solid"></div>
                <div class="h-1/5 <?=$textsize?>"></div>
            </div>
        </button>

        <button onclick="" class="rounded-md bg-blue-400">
            <div class="flex flex-col gap-<?=$itemmargin?>">
                <div class="h-4/5 <?=$iconsize?> fa-solid"></div>
                <div class="h-1/5 <?=$textsize?>"></div>
            </div>
        </button>
        <button onclick="" class="rounded-md bg-blue-300">
            <div class="flex flex-col gap-<?=$itemmargin?>">
                <div class="h-4/5 <?=$iconsize?> fa-solid"></div>
                <div class="h-1/5 <?=$textsize?>"></div>
            </div>
        </button>
        <button onclick="" class="rounded-md bg-blue-200">
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
        <button onclick="backsettings()" class="rounded-md bg-green-200">
            <div class="flex flex-col gap-<?=$itemmargin?>">
                <div class="h-4/5 <?=$iconsize?> fa-solid fa-house"></div>
                <div class="h-1/5 <?=$textsize?>">Back</div>
            </div>
        </button>
    </div>
</div>
<?php include "../footer.php";?>