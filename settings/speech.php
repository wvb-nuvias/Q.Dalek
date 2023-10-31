<?php include "../header.php";?>
<div class="flex w-screen h-screen p-<?=$margin?> flex-col gap-<?=$margin?>">     
    <div class="rounded-md bg-blue-200 <?=$titlesize?> flex items-center justify-center h-24">
        Speech Settings
    </div>
    <div class="grid grid-flow-col grid-cols-4 grid-rows-6 gap-<?=$margin?> h-full">
        <button onclick="" class="rounded-md bg-purple-400">
            <div class="flex flex-col gap-<?=$itemmargin?>">
                <div class="h-4/5 <?=$iconsize?> fa-solid fa-chevron-left"></div>
                <div class="h-1/5 <?=$textsize?>"></div>
            </div>
        </button>
        <button onclick="" class="rounded-md bg-purple-300">
            <div class="flex flex-col gap-<?=$itemmargin?>">
                <div class="h-4/5 <?=$iconsize?> fa-solid fa-chevron-left"></div>
                <div class="h-1/5 <?=$textsize?>"></div>
            </div>
        </button>
        <button onclick="" class="rounded-md bg-purple-400">
            <div class="flex flex-col gap-<?=$itemmargin?>">
                <div class="h-4/5 <?=$iconsize?> fa-solid fa-chevron-left"></div>
                <div class="h-1/5 <?=$textsize?>"></div>
            </div>
        </button>
        <button onclick="" class="rounded-md bg-purple-300">
            <div class="flex flex-col gap-<?=$itemmargin?>">
                <div class="h-4/5 <?=$iconsize?> fa-solid fa-chevron-left"></div>
                <div class="h-1/5 <?=$textsize?>"></div>
            </div>
        </button>
        <button onclick="" class="rounded-md bg-purple-200 row-span-2">
            <div class="flex flex-col gap-<?=$itemmargin?>">
                <div class="h-4/5 <?=$iconsize?> fa-solid fa-recycle"></div>
                <div class="h-1/5 <?=$textsize?>">Defaults</div>
            </div>
        </button>

        
        <button onclick="" class="rounded-md bg-green-400 col-span-2">
            <div class="flex flex-row gap-<?=$itemmargin?> items-center justify-center">                
                <div class="<?=$iconsize?> fa-solid fa-mound"></div>
                <div class="<?=$textsize?> w-64">Pitch</div>            
            </div>
        </button>        
        <button onclick="" class="rounded-md bg-green-300 col-span-2">
            <div class="flex flex-row gap-<?=$itemmargin?> items-center justify-center">                
                <div class="<?=$iconsize?> fa-solid fa-blender"></div>
                <div class="<?=$textsize?> w-64">Modulate</div>            
            </div>
        </button>
        <button onclick="" class="rounded-md bg-green-400 col-span-2">
            <div class="flex flex-row gap-<?=$itemmargin?> items-center justify-center">                
                <div class="<?=$iconsize?> fa-solid fa-gauge"></div>
                <div class="<?=$textsize?> w-64">Speed</div>            
            </div>
        </button>        
        <button onclick="" class="rounded-md bg-green-300 col-span-2">
            <div class="flex flex-row gap-<?=$itemmargin?> items-center justify-center">                
                <div class="<?=$iconsize?> fa-solid fa-tornado"></div>
                <div class="<?=$textsize?> w-64">Amplitude</div>            
            </div>
        </button>
        <button onclick="" class="rounded-md bg-gray-200 row-span-2">
            <div class="flex flex-col gap-<?=$itemmargin?>">
                <div class="h-4/5 <?=$iconsize?> fa-solid fa-comment"></div>
                <div class="h-1/5 <?=$textsize?>">Test</div>
            </div>
        </button>

        
        <button onclick="" class="rounded-md bg-yellow-200 row-span-2">
            <div class="flex flex-col gap-<?=$itemmargin?>">
                <div class="h-4/5 <?=$iconsize?> fa-solid fa-sd-card"></div>
                <div class="h-1/5 <?=$textsize?>">Save</div>
            </div>
        </button>
        
        
        <button onclick="" class="rounded-md bg-blue-400">
            <div class="flex flex-col gap-<?=$itemmargin?>">
                <div class="h-4/5 <?=$iconsize?> fa-solid fa-chevron-right"></div>
                <div class="h-1/5 <?=$textsize?>"></div>
            </div>
        </button>        
        <button onclick="" class="rounded-md bg-blue-300">
            <div class="flex flex-col gap-<?=$itemmargin?>">
                <div class="h-4/5 <?=$iconsize?> fa-solid fa-chevron-right"></div>
                <div class="h-1/5 <?=$textsize?>"></div>
            </div>
        </button>
        <button onclick="" class="rounded-md bg-blue-400">
            <div class="flex flex-col gap-<?=$itemmargin?>">
                <div class="h-4/5 <?=$iconsize?> fa-solid fa-chevron-right"></div>
                <div class="h-1/5 <?=$textsize?>"></div>
            </div>
        </button>        
        <button onclick="" class="rounded-md bg-blue-300">
            <div class="flex flex-col gap-<?=$itemmargin?>">
                <div class="h-4/5 <?=$iconsize?> fa-solid fa-chevron-right"></div>
                <div class="h-1/5 <?=$textsize?>"></div>
            </div>
        </button>
        <button onclick="backsettings()" class="rounded-md bg-blue-200 row-span-2">
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

<?php include "../footer.php";?>