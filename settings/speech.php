<?php include "../header.php";?>
<script>
    speak_pitch_test=parseInt(speak_pitch);
    speak_modulate_test=parseInt(speak_modulate);
    speak_speed_test=parseInt(speak_speed);
    speak_amplitude_test=parseInt(speak_amplitude);
</script>
<div id="speechsettingspage" class="flex w-screen h-screen p-<?=$margin?> flex-col gap-<?=$margin?>">     
    <div class="rounded-md bg-blue-200 <?=$titlesize?> flex items-center justify-center h-24">
        Speech Settings
    </div>
    <div class="grid grid-flow-col grid-cols-4 grid-rows-6 gap-<?=$margin?> h-full">
        <button id="speechsetting_pitch_down" onclick="down('pitch')" class="rounded-md bg-purple-400 page1">
            <div class="flex flex-col gap-<?=$itemmargin?>">
                <div class="h-4/5 <?=$iconsizesmall?> fa-solid fa-chevron-left"></div>
                <div class="h-1/5 <?=$textsize?>"></div>
            </div>
        </button>        
        <button id="speechsetting_modulate_down" onclick="down('modulate')" class="rounded-md bg-purple-300 page1">
            <div class="flex flex-col gap-<?=$itemmargin?>">
                <div class="h-4/5 <?=$iconsizesmall?> fa-solid fa-chevron-left"></div>
                <div class="h-1/5 <?=$textsize?>"></div>
            </div>
        </button>
        <button id="speechsetting_speed_down" onclick="down('speed')" class="rounded-md bg-purple-400 page1">
            <div class="flex flex-col gap-<?=$itemmargin?>">
                <div class="h-4/5 <?=$iconsizesmall?> fa-solid fa-chevron-left"></div>
                <div class="h-1/5 <?=$textsize?>"></div>
            </div>
        </button>
        <button id="speechsetting_amplitude_down" onclick="down('amplitude')" class="rounded-md bg-purple-300 page1">
            <div class="flex flex-col gap-<?=$itemmargin?>">
                <div class="h-4/5 <?=$iconsizesmall?> fa-solid fa-chevron-left"></div>
                <div class="h-1/5 <?=$textsize?>"></div>
            </div>
        </button>
        
        <!-- page2 column1 -->
        <button id="speechsetting_echo_down" onclick="down('echo')" class="rounded-md bg-purple-400 page2 hidden">
            <div class="flex flex-col gap-<?=$itemmargin?>">
                <div class="h-4/5 <?=$iconsizesmall?> fa-solid fa-chevron-left"></div>
                <div class="h-1/5 <?=$textsize?>"></div>
            </div>
        </button>
        <button id="" onclick="" class="rounded-md bg-purple-300 page2 hidden">
            <div class="flex flex-col gap-<?=$itemmargin?>">
                <div class="h-4/5 <?=$iconsizesmall?> fa-solid "></div>
                <div class="h-1/5 <?=$textsize?>"></div>
            </div>
        </button>
        <button id="" onclick="" class="rounded-md bg-purple-400 page2 hidden">
            <div class="flex flex-col gap-<?=$itemmargin?>">
                <div class="h-4/5 <?=$iconsizesmall?> fa-solid "></div>
                <div class="h-1/5 <?=$textsize?>"></div>
            </div>
        </button>
        <button id="" onclick="" class="rounded-md bg-purple-300 page2 hidden">
            <div class="flex flex-col gap-<?=$itemmargin?>">
                <div class="h-4/5 <?=$iconsizesmall?> fa-solid "></div>
                <div class="h-1/5 <?=$textsize?>"></div>
            </div>
        </button>
        <!-- end page2 column1 -->

        <button onclick="speechsettings_more()" class="rounded-md bg-purple-200 row-span-2">
            <div class="flex flex-col gap-<?=$itemmargin?>">
                <div class="h-4/5 <?=$iconsize?> fa-solid fa-repeat"></div>
                <div class="h-1/5 <?=$textsize?>">More</div>
            </div>
        </button>

        
        <button onclick="" class="rounded-md bg-green-400 col-span-2 page1">
            <div class="flex flex-row gap-<?=$itemmargin?> items-center justify-center">                
                <div class="<?=$iconsizesmall?> fa-solid fa-mound"></div>
                <div class="<?=$textsize?> w-64">Pitch</div>            
                <div class="<?=$textsize?> w-8">-</div>
                <div id="speechsetting_pitch_text" class="<?=$textsize?> w-20"><?=$speak_pitch?></div>
            </div>
        </button>        
        <button onclick="" class="rounded-md bg-green-300 col-span-2">
            <div class="flex flex-row gap-<?=$itemmargin?> items-center justify-center page1">                
                <div class="<?=$iconsizesmall?> fa-solid fa-blender"></div>
                <div class="<?=$textsize?> w-64">Modulate</div>            
                <div class="<?=$textsize?> w-8">-</div>
                <div id="speechsetting_modulate_text" class="<?=$textsize?> w-20"><?=$speak_modulate?></div>
            </div>
        </button>
        <button onclick="" class="rounded-md bg-green-400 col-span-2">
            <div class="flex flex-row gap-<?=$itemmargin?> items-center justify-center page1">                
                <div class="<?=$iconsizesmall?> fa-solid fa-gauge"></div>
                <div class="<?=$textsize?> w-64">Speed</div>            
                <div class="<?=$textsize?> w-8">-</div>
                <div id="speechsetting_speed_text" class="<?=$textsize?> w-20"><?=$speak_speed?></div>
            </div>
        </button>        
        <button onclick="" class="rounded-md bg-green-300 col-span-2">
            <div class="flex flex-row gap-<?=$itemmargin?> items-center justify-center page1">                
                <div class="<?=$iconsizesmall?> fa-solid fa-tornado"></div>
                <div class="<?=$textsize?> w-64">Amplitude</div>            
                <div class="<?=$textsize?> w-8">-</div>
                <div id="speechsetting_amplitude_text" class="<?=$textsize?> w-20"><?=$speak_amplitude?></div>
            </div>
        </button>

        <!-- page2 column2 -->
        <button onclick="" class="rounded-md bg-green-400 col-span-2 page2 hidden">
            <div class="flex flex-row gap-<?=$itemmargin?> items-center justify-center">                
                <div class="<?=$iconsizesmall?> fa-solid fa-ear-listen"></div>
                <div class="<?=$textsize?> w-64">Echo</div>            
                <div class="<?=$textsize?> w-8">-</div>
                <div id="speechsetting_echo_text" class="<?=$textsize?> w-20"><?=$speak_echo?></div>
            </div>
        </button>        
        <button onclick="" class="rounded-md bg-green-300 col-span-2">
            <div class="flex flex-row gap-<?=$itemmargin?> items-center justify-center page2 hidden">                
                
            </div>
        </button>
        <button onclick="" class="rounded-md bg-green-400 col-span-2">
            <div class="flex flex-row gap-<?=$itemmargin?> items-center justify-center page2 hidden">                
                
            </div>
        </button>        
        <button onclick="" class="rounded-md bg-green-300 col-span-2">
            <div class="flex flex-row gap-<?=$itemmargin?> items-center justify-center page2 hidden">                
                
            </div>
        </button>
        <!-- end page2 column2 -->

        <button onclick="speaktest()" class="rounded-md bg-gray-200 row-span-2">
            <div class="flex flex-col gap-<?=$itemmargin?>">
                <div class="h-4/5 <?=$iconsize?> fa-solid fa-comment"></div>
                <div class="h-1/5 <?=$textsize?>">Test</div>
            </div>
        </button>
       
        
        <button onclick="speechsettings_save()" class="rounded-md bg-yellow-200 row-span-2">
            <div class="flex flex-col gap-<?=$itemmargin?>">
                <div class="h-4/5 <?=$iconsize?> fa-solid fa-sd-card"></div>
                <div class="h-1/5 <?=$textsize?>">Save</div>
            </div>
        </button>
        
        
        <button id="speechsetting_pitch_up" onclick="up('pitch')" class="rounded-md bg-blue-400 page1">
            <div class="flex flex-col gap-<?=$itemmargin?>">
                <div class="h-4/5 <?=$iconsizesmall?> fa-solid fa-chevron-right"></div>
                <div class="h-1/5 <?=$textsize?>"></div>
            </div>
        </button>        
        <button id="speechsetting_modulate_up" onclick="up('modulate')" class="rounded-md bg-blue-300 page1">
            <div class="flex flex-col gap-<?=$itemmargin?>">
                <div class="h-4/5 <?=$iconsizesmall?> fa-solid fa-chevron-right"></div>
                <div class="h-1/5 <?=$textsize?>"></div>
            </div>
        </button>
        <button id="speechsetting_speed_up" onclick="up('speed')" class="rounded-md bg-blue-400 page1">
            <div class="flex flex-col gap-<?=$itemmargin?>">
                <div class="h-4/5 <?=$iconsizesmall?> fa-solid fa-chevron-right"></div>
                <div class="h-1/5 <?=$textsize?>"></div>
            </div>
        </button>        
        <button id="speechsetting_amplitude_up" onclick="up('amplitude')" class="rounded-md bg-blue-300 page1">
            <div class="flex flex-col gap-<?=$itemmargin?>">
                <div class="h-4/5 <?=$iconsizesmall?> fa-solid fa-chevron-right"></div>
                <div class="h-1/5 <?=$textsize?>"></div>
            </div>
        </button>

        <!-- page2 column3 -->
        <button id="speechsetting_echo_up" onclick="up('echo')" class="rounded-md bg-blue-400 page2 hidden">
            <div class="flex flex-col gap-<?=$itemmargin?>">
                <div class="h-4/5 <?=$iconsizesmall?> fa-solid fa-chevron-right"></div>
                <div class="h-1/5 <?=$textsize?>"></div>
            </div>
        </button>        
        <button id="" onclick="" class="rounded-md bg-blue-300 page2 hidden">
            <div class="flex flex-col gap-<?=$itemmargin?>">
                <div class="h-4/5 <?=$iconsizesmall?> fa-solid "></div>
                <div class="h-1/5 <?=$textsize?>"></div>
            </div>
        </button>
        <button id="" onclick="" class="rounded-md bg-blue-400 page2 hidden">
            <div class="flex flex-col gap-<?=$itemmargin?>">
                <div class="h-4/5 <?=$iconsizesmall?> fa-solid "></div>
                <div class="h-1/5 <?=$textsize?>"></div>
            </div>
        </button>        
        <button id="" onclick="" class="rounded-md bg-blue-300 page2 hidden">
            <div class="flex flex-col gap-<?=$itemmargin?>">
                <div class="h-4/5 <?=$iconsizesmall?> fa-solid "></div>
                <div class="h-1/5 <?=$textsize?>"></div>
            </div>
        </button>
        <!-- end page2 column3 -->

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