var volume=0;
var lastchanged="";
var lastchangedid="";
var lastremotechangedid="";
var internet_connected=0;
var installpath="";
var speak_pitch=0;
var speak_modulate=0;
var speak_speed=0;
var speak_amplitude=0;
var speak_echo=0;
var speak_capitals=0;
var speak_wordsgap=0;
var min_pitch=0;
var min_modulate=0;
var min_speed=80;
var min_amplitude=0;
var min_echo=0;
var min_capitals=0;
var min_wordsgap=0;
var max_pitch=99;
var max_modulate=8000;
var max_speed=450;
var max_amplitude=200;
var max_echo=100;
var max_capitals=100;
var max_wordsgap=10;
var speak_pitch_test=0;
var speak_modulate_test=0;
var speak_speed_test=0;
var speak_amplitude_test=0;
var speak_echo_test=0;
var speak_capitals_test=0;
var speak_wordsgap_test=0;
var speechsettings_page=1;

//only do the following, when in settings page
$(document).ready(function () {
    if ($("#settingspage").length) {
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

    if ($("#speechsettingspage").length) {
        speechsettings_updatechevrons();
    }
});
    
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

function getRandomInt(max) {
    return Math.floor(Math.random() * max);
}

function speaktest() {                
    document.getElementById("output").src='';
    $.getJSON('../commands.php?cmd=speaktest&pitch=' + speak_pitch_test + '&modulate=' + speak_modulate_test + '&speed='+ speak_speed_test + '&amplitude=' + speak_amplitude_test + '&echo=' + speak_echo_test + '&capitals=' + speak_capitals_test + '&wordsgap=' + speak_wordsgap_test)
    .done(function(data) {
        console.log(data.message); 
        console.log(data.file); 
        document.getElementById("output").src=data.file +'?'+getRandomInt(9999999999999999999999);
        document.getElementById("output").play();                   
    });                            
}

function up(settingtype) {    
    switch (settingtype) {
        case "pitch":            
            if (speak_pitch_test<max_pitch) {                
                speak_pitch_test=speak_pitch_test+5;
            }
            break;
        case "modulate":
            if (speak_modulate_test<max_modulate) {
                speak_modulate_test=speak_modulate_test+5;
            }
            break;
        case "speed":
            if (speak_speed_test<max_speed) {
                speak_speed_test=speak_speed_test+5;
            }
            break;
        case "amplitude":
            if (speak_amplitude_test<max_amplitude) {
                speak_amplitude_test=speak_amplitude_test+5;
            }
            break;
        case "echo":
            if (speak_echo_test<max_echo) {
                speak_echo_test=speak_echo_test+5;
            }
            break;
        case "capitals":
            if (speak_capitals_test<max_capitals) {
                speak_capitals_test=speak_capitals_test+5;
            }
            break;
        case "wordsgap":
            if (speak_wordsgap_test<max_wordsgap) {
                speak_wordsgap_test=speak_wordsgap_test+1;
            }
            break;
    }
    speechsettings_updatechevrons();
}

function down(settingtype) {    
    switch (settingtype) {
        case "pitch":
            if (speak_pitch_test>min_pitch) {
                speak_pitch_test=speak_pitch_test-5;
            }
            break;
        case "modulate":
            if (speak_modulate_test>min_modulate) {
                speak_modulate_test=speak_modulate_test-5;
            }
            break;
        case "speed":
            if (speak_speed_test>min_speed) {
                speak_speed_test=speak_speed_test-5;
            }
            break;
        case "amplitude":
            if (speak_amplitude_test>min_amplitude) {
                speak_amplitude_test=speak_amplitude_test-5;
            }
            break;
        case "echo":
            if (speak_echo_test>min_echo) {
                speak_echo_test=speak_echo_test-5;
            }
            break;
        case "capitals":
            if (speak_capitals_test>min_capitals) {
                speak_capitals_test=speak_capitals_test-5;
            }
            break;
        case "wordsgap":
            if (speak_wordsgap_test>min_wordsgap) {
                speak_wordsgap_test=speak_wordsgap_test-1;
            }
            break;
    }
    speechsettings_updatechevrons();
}

function speechsettings_updatechevrons() {
    $("#speechsetting_pitch_up").removeClass("opacity-20");
    $("#speechsetting_modulate_up").removeClass("opacity-20");
    $("#speechsetting_speed_up").removeClass("opacity-20");
    $("#speechsetting_amplitude_up").removeClass("opacity-20");
    $("#speechsetting_pitch_down").removeClass("opacity-20");
    $("#speechsetting_modulate_down").removeClass("opacity-20");
    $("#speechsetting_speed_down").removeClass("opacity-20");
    $("#speechsetting_amplitude_down").removeClass("opacity-20");
    $("#speechsetting_echo_down").removeClass("opacity-20");
    $("#speechsetting_capitals_down").removeClass("opacity-20");
    $("#speechsetting_wordsgap_down").removeClass("opacity-20");
    $("#speechsetting_echo_up").removeClass("opacity-20");
    $("#speechsetting_capitals_up").removeClass("opacity-20");
    $("#speechsetting_wordsgap_up").removeClass("opacity-20");

    if (speak_pitch_test>=max_pitch) {
        $("#speechsetting_pitch_up").addClass("opacity-20");
    }
    if (speak_pitch_test<=min_pitch) {
        $("#speechsetting_pitch_down").addClass("opacity-20");
    }
    $("#speechsetting_pitch_text").text(speak_pitch_test);

    if (speak_modulate_test>=max_modulate) {
        $("#speechsetting_modulate_up").addClass("opacity-20");
    }
    if (speak_modulate_test<=min_modulate) {
        $("#speechsetting_modulate_down").addClass("opacity-20");
    }
    $("#speechsetting_modulate_text").text(speak_modulate_test);

    if (speak_speed_test>=max_speed) {
        $("#speechsetting_speed_up").addClass("opacity-20");
    }
    if (speak_speed_test<=min_speed) {
        $("#speechsetting_speed_down").addClass("opacity-20");
    }
    $("#speechsetting_speed_text").text(speak_speed_test);

    if (speak_amplitude_test>=max_amplitude) {
        $("#speechsetting_amplitude_up").addClass("opacity-20");
    }
    if (speak_amplitude_test<=min_amplitude) {
        $("#speechsetting_amplitude_down").addClass("opacity-20");
    }
    $("#speechsetting_amplitude_text").text(speak_amplitude_test);

    if (speak_echo_test>=max_echo) {
        $("#speechsetting_echo_up").addClass("opacity-20");
    }
    if (speak_echo_test<=min_echo) {
        $("#speechsetting_echo_down").addClass("opacity-20");
    }
    $("#speechsetting_echo_text").text(speak_echo_test);

    if (speak_capitals_test>=max_capitals) {
        $("#speechsetting_capitals_up").addClass("opacity-20");
    }
    if (speak_capitals_test<=min_capitals) {
        $("#speechsetting_capitals_down").addClass("opacity-20");
    }
    $("#speechsetting_capitals_text").text(speak_capitals_test);

    if (speak_wordsgap_test>=max_wordsgap) {
        $("#speechsetting_wordsgap_up").addClass("opacity-20");
    }
    if (speak_wordsgap_test<=min_wordsgap) {
        $("#speechsetting_wordsgap_down").addClass("opacity-20");
    }
    $("#speechsetting_wordsgap_text").text(speak_wordsgap_test);
}

function speechsettings_save() {    
    $.getJSON('../commands.php?cmd=speechsettingssave&pitch=' + speak_pitch_test + '&modulate=' + speak_modulate_test + '&speed='+ speak_speed_test + '&amplitude=' + speak_amplitude_test)
    .done(function(data) {
        console.log(data.message);                  
    });  
}

function speechsettings_more() {
    if (speechsettings_page==1) {
        $('.page2').each(function() {
            $(this).removeClass('hidden');
        });
        $('.page1').each(function() {
            $(this).addClass('hidden');
        });
        speechsettings_page=2;
    } else {
        $('.page1').each(function() {
            $(this).removeClass('hidden');
        });
        $('.page2').each(function() {
            $(this).addClass('hidden');
        });
        speechsettings_page=1;
    }
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