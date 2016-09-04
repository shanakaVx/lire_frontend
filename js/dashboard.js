/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var audio = $('#audio');
var tlink = "";
var tname = "";
var vmods = "";
var consonants = "";
var userId = 1;

$.getJSON("./letters-si.json",function(data){
    console.log(data);
    vmods = data.vmod;
    consonants = data.consonant;
    
});

$(document).ready(function(){
    $("#content").load("./alphabet.html", function(){
        $('#tonesa input').draggable({
            cancel: false,
            revert: true,
            start: function () {
                tlink = "voiceprofiles/"+userId+"/0"+userId+"-"+$(this).attr('data-fname');
                tname = $(this).attr('value');
                //console.log($(this));
            }
        });
    });
    $("#keys").load("./Sinhala.html");
    $('#content input').draggable({
        cancel: false
    });

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
    var file = "voiceprofiles/"+userId+"/0"+userId+"-"+prefix+".wav";
    var appendhtml = "";

    $('#audio').attr('src', file).trigger("play");
    //audio[0].load();
    //audio[0].play();

    //if the letter is a consonant only load the vowels
    if(type === "consonent"){
        for(var key in consonants){
            if(consonants[key].id == prefix){
                console.log(consonants[key].letter);
                appendhtml = fillVowels(consonants[key].letter, prefix);
            }
        }
        $('#keys').html(appendhtml);

        //activatwe drag and drop
        $('#consa input').draggable({
            cancel: false,
            revert: true,
            start: function () {
                tlink = "voiceprofiles/"+userId+"/0"+userId+"-"+$(this).attr('data-fname');
                tname = $(this).attr('value');
                //console.log($(this));
            }
        });
    }

}




function fillVowels(letter, prefix){
    var append = "<table id='consa' border='0'>\n\
                    <tr>\n\
                        <td>a</td>\n\
                        <td>ā</td>\n\
                        <td>æ</td>\n\
                        <td>ǣ</td>\n\
                        <td>i</td>\n\
                        <td>ī</td>\n\
                    </tr>\n\
                    <tr>";
    var count = 0;
    for(var key in vmods){
        count ++;
        var akura = letter+vmods[key].letter;
        var id = prefix+"-"+vmods[key].id;
        //console.log(akura+" "+id);

        append += "<td><input class='bt tone' type='button' value='"+letter+vmods[key].letter+"' onclick=\"onClick('vowel', '"+id+"')\" data-fname='"+id+"'/></td>";

        if(count == 6){
            append += "</tr>\n\
                            <tr>\n\
                                <td>u</td>\n\
                                <td>ū</td>\n\
                                <td>ru</td>\n\
                                <td>rū</td>\n\
                                <td>li</td>\n\
                                <td>lī</td>\n\
                            </tr>\n\
                            <tr>";
        }
        if(count == 12){
            append += "</tr>\n\
                            <tr>\n\
                                <td>e</td>\n\
                                <td>ē</td>\n\
                                <td>ai</td>\n\
                                <td>o</td>\n\
                                <td>ō</td>\n\
                                <td>au</td>\n\
                            </tr>\n\
                            <tr>";
        }
        
    }
    append += "</tr></table>";
        //activatwe dragg and drop
        $('#consa input').draggable({
            cancel: false,
            revert: true,
            start: function () {
                tlink = "voiceprofiles/"+userId+"/0"+userId+"-"+$(this).attr('data-fname');
                tname = $(this).attr('value');
                //console.log($(this));
            }
        });

    //console.log(append);
    return append;

}