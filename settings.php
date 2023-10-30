<?php header('Access-Control-Allow-Origin: *'); ?>
<html>
    <head>
        <script src="https://kit.fontawesome.com/06b2b4d018.js" crossorigin="anonymous"></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

        <script>        
            var volume=0;
            var lastchanged="";
            var lastchangedid="";

            $.getJSON('commands.php?cmd=getvol')
            .done(function(data) {
                console.log(data.message + " - " + data.volume);
                volume=parseInt(data.volume);
                updatevolumetext();
            });    
            
            $.getJSON('commands.php?cmd=getlastchange')
            .done(function(data) {
                console.log(data.message + " - " + data.lastchange);
                lastchanged=data.lastchange;                               
            }); 

            $.getJSON('commands.php?cmd=getlastchangeid')
            .done(function(data) {
                console.log(data.message + " - " + data.lastid);                                
                lastchangedid=data.lastid;
            }); 

            $.getJSON('commands.php?cmd=getremotelastid')
            .done(function(data) {
                console.log(data.message + " - " + data.lastid);                                
                //lastchangedid=data.lastid;
            }); 
                                
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

            function updatevolumetext() {
                $("#increasevolume_button").removeClass("opacity-20");
                $("#decreasevolume_button").removeClass("opacity-20");                
                if (volume===0) {
                    $("#togglevolume_text").text("Muted");
                    $("#togglevolume_icon").removeClass("fa-volume-off");
                    $("#togglevolume_icon").addClass("fa-volume-xmark");
                } else {
                    $("#togglevolume_text").text(volume + "%");
                    $("#togglevolume_icon").removeClass("fa-volume-xmark");
                    $("#togglevolume_icon").addClass("fa-volume-off");
                }
                if (volume<=0) {
                    $("#decreasevolume_button").addClass("opacity-20");                    
                }
                if (volume>=100) {
                    $("#increasevolume_button").addClass("opacity-20");                    
                }
            }

            function togglevolume() {                
                if (volume!=0) {
                    volume=0;                    
                } else {
                    volume=60;                
                }
                $.getJSON('commands.php?cmd=setvol&volume=' + volume)
                .done(function(data) {
                    console.log(data.message + " - " + data.volume);                   
                    updatevolumetext();
                });
            }

            function increasevolume() {
                if (volume<100) {
                    volume=volume+10;
                    
                    $.getJSON('commands.php?cmd=setvol&volume=' + volume)
                    .done(function(data) {
                        console.log(data.message + " - " + data.volume);                   
                        updatevolumetext();
                    });
                }
            }

            function decreasevolume() {
                if (volume>0) {
                    volume=volume-10;

                    $.getJSON('commands.php?cmd=setvol&volume=' + volume)
                    .done(function(data) {
                        console.log(data.message + " - " + data.volume);                   
                        updatevolumetext();
                    });
                }
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
            
            <button onclick="update()" class="rounded-md bg-yellow-400">
                <div class="flex flex-col gap-<?=$itemmargin?>">
                    <div class="h-4/5 <?=$iconsize?> fa-solid fa-refresh"></div>
                    <div class="h-1/5 <?=$textsize?>">Update</div>
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
        
        <audio id="sound_exterminate">
            <source src="sounds/exterminate.wav" type="audio/wav">
        </audio>
    </body>
</html>