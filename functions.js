var volume=0;
var lastchanged="";
var lastchangedid="";
var lastremotechangedid="";
var internet_connected=0;
var installpath="";

//only do the following, when in settings page
if ($("#update_button").length) {
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

        //console.log("Is Internet Connected=" + internet_connected);

        $("#update_button").removeClass("opacity-20");
        if (internet_connected) {
            $.getJSON('commands.php?cmd=getremotelastid')
            .done(function(data) {                    
                lastremotechangedid=data.lastid;
                console.log(data.message + " - " + lastremotechangedid);                                
                
                if (lastremotechangedid==lastchangedid) {
                    $("#update_button").addClass("opacity-20");
                    $("#update_text").text("No Update");
                } else {
                    $("#update_text").text("Update");
                }
                $("#update_icon").removeClass("fa-spin");
            }); 
        } else {
            $("#update_button").addClass("opacity-20");
            $("#update_text").text("No Internet!");
            $("#update_icon").removeClass("fa-spin");
        }
    });            
}
                    
function reboot() {                
    $.getJSON('commands.php?cmd=reboot')
    .done(function(data) {
        console.log(data.message);                
    });                
}

function update() {
    if (lastremotechangedid!=lastchangedid) {
        $("#update_text").text("Updating...");
        $("#update_icon").addClass("fa-spin");
        $.getJSON('commands.php?cmd=update')
        .done(function(data) {
            console.log(data.message);
            document.location.reload();
        });                
    }
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

function play(sound) {
    var objname='sound_' + sound;
    document.getElementById(objname).play();
}

function speak(text) {                
    $.getJSON('commands.php?cmd=speak&text=' + text)
    .done(function(data) {
        console.log(data.message); 
        console.log(data.file); 
        document.getElementById("output").src=data.file;
        document.getElementById("output").play();                   
    });                            
}

function generalsettings() {
    document.location.href="/settings/general.php";
}

function speechsettings() {
    document.location.href="/settings/speech.php";
}

function databasesettings() {
    document.location.href="/settings/database.php";
}

function dome() {
    document.location.href="/dome.php";
}

function middle() {
    document.location.href="/middle.php";
}

function skirt() {
    document.location.href="/skirt.php";
}

function fender() {
    document.location.href="/fender.php";
}

function sounds() {
    document.location.href="/sounds.php";
}

function speech() {
    document.location.href="/speech.php";
}

function effects() {
    document.location.href="/effects.php";
}

function settings() {
    document.location.href="/settings.php";
}

function back() {
    document.location.href="/index.php";
}

function backsettings() {
    document.location.href="/settings.php";
}