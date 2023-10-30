<?php include "../header.php";?>
<div class="flex w-screen h-screen p-<?=$margin?> flex-col gap-<?=$margin?>">     
    <div class="rounded-md bg-blue-200 <?=$titlesize?> flex items-center justify-center h-24">
        Speech Settings
    </div>
    <div class="grid grid-flow-col grid-cols-4 grid-rows-3 gap-<?=$margin?> h-full">
        <div onclick="" class="rounded-md bg-purple-400 col-span-4 p-<?=$margin?>">
            <input id="minmax-range" type="range" min="0" max="30" value="5" class="w-full h-2 bg-purple-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">

            <div class="flex flex-col gap-<?=$itemmargin?>">
                <div class="h-4/5 <?=$iconsize?> fa-solid"></div>
                <div class="h-1/5 <?=$textsize?>"></div>
            </div>
        </div>
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

        <!--
        <button onclick="" class="rounded-md bg-gray-400">
            <div class="flex flex-col gap-<?=$itemmargin?>">
                <div class="h-4/5 <?=$iconsize?> fa-solid"></div>
                <div class="h-1/5 <?=$textsize?>"></div>
            </div>
        </button>
        -->
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

        <!--
        <button onclick="" class="rounded-md bg-yellow-400">
            <div class="flex flex-col gap-<?=$itemmargin?>">
                <div class="h-4/5 <?=$iconsize?> fa-solid"></div>
                <div class="h-1/5 <?=$textsize?>"></div>
            </div>
        </button>
        -->
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
        
        <!--
        <button onclick="" class="rounded-md bg-blue-400">
            <div class="flex flex-col gap-<?=$itemmargin?>">
                <div class="h-4/5 <?=$iconsize?> fa-solid"></div>
                <div class="h-1/5 <?=$textsize?>"></div>
            </div>
        </button>
        -->
        <button onclick="" class="rounded-md bg-blue-300">
            <div class="flex flex-col gap-<?=$itemmargin?>">
                <div class="h-4/5 <?=$iconsize?> fa-solid"></div>
                <div class="h-1/5 <?=$textsize?>"></div>
            </div>
        </button>
        <button onclick="backsettings()" class="rounded-md bg-blue-200">
            <div class="flex flex-col gap-<?=$itemmargin?>">
                <div class="h-4/5 <?=$iconsize?> fa-solid fa-house"></div>
                <div class="h-1/5 <?=$textsize?>">Back</div>
            </div>
        </button>
    </div>
</div>
<?php include "../footer.php";?>