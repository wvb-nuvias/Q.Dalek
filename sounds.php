<?php include "header.php";?>
<div class="flex w-screen h-screen p-<?=$margin?> flex-col gap-<?=$margin?>">     
    <div class="rounded-md bg-purple-200 <?=$titlesize?> flex items-center justify-center h-24">
        Sounds
    </div>
    <div class="grid grid-flow-col grid-cols-4 grid-rows-3 gap-<?=$margin?> h-full">
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
</div>
        
<audio id="sound_exterminate">
    <source src="sounds/exterminate.wav" type="audio/wav">
</audio>
<audio id="sound_scream">
    <source src="sounds/scream.wav" type="audio/wav">
</audio>

<?php include "footer.php";?>