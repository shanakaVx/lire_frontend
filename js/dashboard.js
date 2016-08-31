/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var audio = $('#audio');

/**
 * @desc
 * @returns
 */
$(function(){
    $("#content").load("alphabet.html");
    $("#keys").load("Sinhala.html");
    $("#lang").change(function() {
        var str = "";
        $("select option:selected").each(function() {
            str = $(this).text() + ".html";
            console.log(str);
            $("#keys").load(str); 
        });
    });             
});

function onClick(type, prefix) {
    var player = audio[0];
    var file = "voiceprofiles/1/01-"+prefix+".wav";
    $('#audio').attr('src', file).trigger("play");
//    audio[0].load();
//    audio[0].play();
}