<?php include "header.php";?>
<div id="settingspage" class="flex w-screen h-screen p-<?=$margin?> flex-col gap-<?=$margin?>">     
    <div class="rounded-md bg-purple-200 <?=$titlesize?> flex items-center justify-center h-24">
        Settings
    </div>
    <div class="grid grid-flow-col grid-cols-4 grid-rows-3 gap-<?=$margin?> h-full">
        <button id="increasevolume_button" onclick="increasevolume()" class="rounded-md bg-blue-400">
            <div class="flex flex-col gap-<?=$itemmargin?>">
                <div class="h-4/5 <?=$iconsize?> fa-solid fa-volume-low"></div>
                <div id="increasevolume_text" class="h-1/5 <?=$textsize?>">Volume +</div>
            </div>
        </button>
        <button onclick="togglevolume()" class="rounded-md bg-blue-300">
            <div class="flex flex-col gap-<?=$itemmargin?>">
                <div id="togglevolume_icon" class="h-4/5 <?=$iconsize?> fa-solid fa-volume-xmark"></div>
                <div id="togglevolume_text" class="h-1/5 <?=$textsize?>"></div>
            </div>
        </button>
        <button id="decreasevolume_button" onclick="decreasevolume()" class="rounded-md bg-blue-200">
            <div class="flex flex-col gap-<?=$itemmargin?>">
                <div class="h-4/5 <?=$iconsize?> fa-solid fa-volume-high"></div>
                <div id="decreasevolume_text" class="h-1/5 <?=$textsize?>">Volume -</div>
            </div>
        </button>

        <button onclick="generalsettings()" class="rounded-md bg-green-400">
            <div class="flex flex-col gap-<?=$itemmargin?>">
                <div class="h-4/5 <?=$iconsize?> fa-solid fa-gear"></div>
                <div class="h-1/5 <?=$textsize?>">General</div>
            </div>
        </button>
        <button onclick="speechsettings()" class="rounded-md bg-green-300">
            <div class="flex flex-col gap-<?=$itemmargin?>">
                <div class="h-4/5 <?=$iconsize?> fa-solid fa-sliders"></div>
                <div class="h-1/5 <?=$textsize?>">Speech</div>
            </div>
        </button>
        <button onclick="databasesettings()" class="rounded-md bg-green-200">
            <div class="flex flex-col gap-<?=$itemmargin?>">
                <div class="h-4/5 <?=$iconsize?> fa-solid fa-database"></div>
                <div class="h-1/5 <?=$textsize?>">Database</div>
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
        
        <button id="update_button" onclick="update()" class="rounded-md bg-yellow-400">
            <div class="flex flex-col gap-<?=$itemmargin?>">
                <div id="update_icon" class="h-4/5 <?=$iconsize?> fa-solid fa-refresh fa-spin"></div>
                <div id="update_text" class="h-1/5 <?=$textsize?>">Checking...</div>
            </div>
        </button>
        <button onclick="reboot()" class="rounded-md bg-yellow-300">
            <div class="flex flex-col gap-<?=$itemmargin?>">
                <div class="h-4/5 <?=$iconsize?> fa-solid fa-power-off"></div>
                <div class="h-1/5 <?=$textsize?>">Reboot</div>
            </div>
        </button>
        <button onclick="back()" class="rounded-md bg-yellow-200">
            <div class="flex flex-col gap-<?=$itemmargin?>">
                <div class="h-4/5 <?=$iconsize?> fa-solid fa-house"></div>
                <div class="h-1/5 <?=$textsize?>">Back</div>
            </div>
        </button>
    </div>
</div>        
<?php include "footer.php";?>