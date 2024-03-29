

//Timeline automated control
//tracks are set to play one after the other here

var appKey = "0";
var userName;
var uid = "1";
var afterProsody = [];

var audioTL;
var playlist;
var tracks;
var current;
var selectedPath;

var prosodyArrSize = 0;

selectedToEdit = null;

init();


$('#pause').click(function () {
    $('#audio').get(0).pause();
});


$('#selVoice').change(function(){
    uid = $("#selVoice option:selected").attr("data-id");
    //$(this).append("<option data-id='55'>Kum</option>");
});


//remove button
$('#playlist').on("click", "button", function () {
    $(this).parent().remove();
    tracks = playlist.find('li a');
    len = tracks.length;

    $('#opt').html("Current " + current + "<br>No of tracks " + len);
});


$('#setPitch').click(function(){

    var pitch = "";
    var timing = "";
    var path = selectedPath;
    var filename = path.split("/");
    var changedFile = "";
    var exit = false;

    if(sliderp.bootstrapSlider('getValue') == "1")
        pitch = "L";
    if(sliderp.bootstrapSlider('getValue') == "2")
        pitch = "N";
    if(sliderp.bootstrapSlider('getValue') == "3")
        pitch = "H";

    var sendObj = {
        "filename": filename[2],
        "pitch": pitch,
        "appk": appKey
    };

    changePitch(sendObj, pitch, timing);

/*
    var checkFile = "";
    checkFile = (pitch != "N" ? pitch+"-" : "") + (timing != "N" ? timing+"-" : "") + filename[2];

    $.ajax({
        url:"http://localhost:8088/voiceprofiles/1/"+checkFile,
        type: 'HEAD',
        error: function(data){
            console.log("NO FILE");
            var sendObj = {
                "filename": filename[2],
                "pitch": pitch,
                "timing": timing
            };
            //changeProsody(sendObj);
        },
        success: function(data){
            console.log("YES FILE");
        }
    });
*/
});


$('#setTime').click(function(){

    var pitch = "";
    var timing = "";
    var path = selectedPath;
    var filename = path.split("/");
    var changedFile = "";
    var exit = false;

    if(slidert.bootstrapSlider('getValue') == "1")
        timing = "ST";
    if(slidert.bootstrapSlider('getValue') == "2")
        timing = "N";
    if(slidert.bootstrapSlider('getValue') == "3")
        timing = "LT";

    var sendObj = {
        "filename": filename[2],
        "timing": timing,
        "appk": appKey
    };

    changeTiming(sendObj, pitch, timing);
});


function changePitch(sendObj, pitch, timing){
    console.log(sendObj);
    $.get(
          'http://localhost:8080/prosody/changeprosody',
          sendObj,
          function(data,status){
              console.log(data);
              if(data == "needLogin"){
                  alert("You need to login to do this");
                  return;
              }

              changedFile = data;
              console.log("Spring server returned : "+status);
              selectedToEdit.attr("data", "voiceprofiles/1/"+changedFile);
              selectedToEdit.attr("data-pitch", pitch);
              //selectedToEdit.attr("data-time", timing);
          });
}


function changeTiming(sendObj, pitch, timing){
    console.log(sendObj);
    $.get(
          'http://localhost:8080/prosody/changetiming',
          sendObj,
          function(data,status){
              console.log(data);
              if(data == "needLogin"){
                  alert("You need to login to do this");
                  return;
              }

              changedFile = data;
              console.log("Spring server returned : "+status);
              selectedToEdit.attr("data", "voiceprofiles/1/"+changedFile);
              //selectedToEdit.attr("data-pitch", pitch);
              selectedToEdit.attr("data-time", timing);
          });
}


//initialize all
function init() {
    current = 0; //current track
    audioTL = $('#audio');
    console.log(audioTL);
    console.log(audioTL[0]);
    playlist = $('#playlist');
    tracks = playlist.find('li a');
    len = tracks.length;

    $('#opt').html("Current " + current + "<br>No of tracks " + len);


    //when clicked on a tone in library

    $('#tones').find('a').click(function (ee) {
        ee.preventDefault();
//        lin = '<li class = "entry">\n\
//                  <a data="' + $(this).attr('href') + '">' + $(this).text() + '\
//                  </a><button id="delete" class="delete">X</button>\n\
//              </li>';
//        $('#playlist').append(lin);
//        //update the number of tracks
//        tracks = playlist.find('li a');
//        len = tracks.length;
//
//        $('#opt').html("Current " + current + "<br>No of tracks " + len);
    });

    //when clicked on a tone in timeline
    $("#playlist").on("click", "a", function () {
        link = $(this);
        console.log(link);
        current = link.parent().index();
        run(link, audioTL[0]);

        $('#opt').html("Current " + current + "<br>No of tracks " + len);

        //$('#options').text("Pitch - "+link.attr("data-pitch")+" timing "+link.attr("data-time"));

        if(link.attr("data-time") == "S")
            slidert.bootstrapSlider('setValue', 1);
        else if(link.attr("data-time") == "N")
            slidert.bootstrapSlider('setValue', 2);
        else if(link.attr("data-time") == "L")
            slidert.bootstrapSlider('setValue', 3);

        if(link.attr("data-pitch") == "L")
            sliderp.bootstrapSlider('setValue', 1);
        else if(link.attr("data-pitch") == "N")
            sliderp.bootstrapSlider('setValue', 2);
        else if(link.attr("data-pitch") == "H")
            sliderp.bootstrapSlider('setValue', 3);

        selectedPath = link.attr("data");
        $('#letterEdit').text(link.text());
        console.log(selectedPath);
        selectedToEdit = link;
    });



    //Wait for a tone to play and finish
    audioTL[0].addEventListener('ended', function (e) {
        current++;
        if (current == len) {
            current = 0;
            link = playlist.find('a')[0];
        } else {
            link = playlist.find('a')[current];
        }
        run($(link), audioTL[0]);

        $('#opt').html("Current " + current + "<br>No of tracks " + len);
    });
}



//play a tone in player
function run(link, player) {
    player.src = link.attr('data');
    par = link.parent();
    //par.fadeOut(5000);
    par.addClass('activetile');
    par.siblings().removeClass('activetile');
    audioTL[0].load();
    audioTL[0].play();

    $('#opt').html("Current " + current + "<br>No of tracks " + len);
}



//drag and drop
$(document).ready(function () {
//    $('.tone').draggable({revert: true,
//        start: function () {
//            tlink = $(this).find('a').attr('href');
//            tname = $(this).text();
//            console.log("dragghinggg");
//        }
//
//    });


    $('#playlist').droppable({accept: '.tone',
        drop: function () {
            //alert(tlink);
            lin = '<li class = "entry">\n\
                  <button id="delete" class="delete">X</button><br>\n\
                  <a data="' + tlink + '.wav" data-pitch="N" data-time="N">' + tname + '\
                  </a>\n\
              </li>';
            $('#playlist').append(lin);
            //update the number of tracks
            tracks = playlist.find('li a');
            len = tracks.length;

            $('#opt').html("Current " + current + "<br>No of tracks " + len);
        }
    });
   
});

 $('#playlist').sortable();



$('#btnTokenizer').click(function(){

    var text = $('#txtTokenize').val();

    var sendObj = {
        "text": text,
        "appk": appKey
    };
    //return;
    console.log(text + lettersObj);
    
    $.get(
          'http://localhost:8080/tokenize/directTokenize',
          sendObj,
          function(data, status){
              console.log(data);
              if(data == ""){
                  alert("Please to login to tokenize more letters");
                  return;
              }
              fillTimeline(data);
          });
});



function fillTimeline(data){
    var basePath = "voiceprofiles/1/";
    var previous = "";
    var pos = 0;
    for(var key in data){
        var arr = data[key][0];
        
        for(var k in arr){
            var pro = "";
            console.log(arr[k]);
            switch (arr[k]){
                case "-46":
                    pro = "P,L";
                    break;
                case "-33":
                    pro = "T,LT";
                    break;
                case "-44":
                    pro = "P,L";
                    break;
                case "-63":
                    pro = "P,H";
                    break; 
            }

            if(pro != ""){
                prosodyArrSize++;
               afterProsody.push({
                    "prosody": pro,
                    "file": previous,
                    "pos": pos
                });

            }
        
            var append = '<li class = "entry">\n\
                                <button id="delete" class="delete">X</button><br>\n\
                                <a data="'+ basePath+'0'+uid+arr[k]+'.wav" data-pitch="N" data-time="N">' + getLetterName(arr[k]) + '</a>\n\
                          </li>';

            previous = '0'+uid+arr[k]+'.wav';
            console.log(append);
            $('#playlist').append(append);
            tracks = playlist.find('li a');
            len = tracks.length;
            $('#opt').html("Current " + current + "<br>No of tracks " + len);
            pos++;
        }

    }

    console.log(afterProsody);
    addProsody(0);
}


function addProsody(key) {

    if(appKey == "0"){
        alert("You have to login to experience the prosodistic nature of the speech\nJust speech is played for a visitor");
        return;
    } 

    console.log("calling- key = "+key);

    if (key >= prosodyArrSize) {
        selectedToEdit = null;
        console.log("returned");
        return;
    }

    var prosody = afterProsody[key].prosody.split(',');
    selectedToEdit = $("#playlist :nth-child(" + afterProsody[key].pos + ")").find('a');
    console.log("changing = "+selectedToEdit.text());

    if (prosody[0] == "T") {
        //change pitch
        console.log("time changing "+ afterProsody[key].pos);

        var sendObj = {
            "filename": afterProsody[key].file,
            "timing": prosody[1],
            "appk": appKey
        };

        console.log(sendObj);
        $.ajax({
            type: 'GET',
            url: 'http://localhost:8080/prosody/changetiming',
            data: sendObj,
            success: function(data,status){
                console.log(data);
                if(data == "needLogin"){
                    return;
                }

                changedFile = data;
                console.log("Spring server returned with dynamic timing: "+status);
                selectedToEdit.attr("data", "voiceprofiles/1/"+changedFile);
                selectedToEdit.attr("data-time", prosody[1]);
                //on callback
                addProsody(key + 1);
            },
            error: function(){
                console.log("Error callback");
                addProsody(key + 1);
            }
        });
    }

    else if (prosody[0] == "P") {
        //change timing
        console.log("pitch changing "+ afterProsody[key].pos);

        var sendObj = {
            "filename": afterProsody[key].file,
            "pitch": prosody[1],
            "appk": appKey
        };

        console.log(sendObj);
        $.ajax({
            type: 'GET',
            url :'http://localhost:8080/prosody/changeprosody',
            data: sendObj,
            success: function(data,status){
                    console.log(data);
                    if(data == "needLogin"){
                        //alert("You need to login to do this");
                        return;
                    }

                    changedFile = data;
                    console.log("Spring server returned for dynamic pitch: "+status);
                    selectedToEdit.attr("data", "voiceprofiles/1/"+changedFile);
                    selectedToEdit.attr("data-pitch", prosody[1]);
                    //on callback
                    addProsody(key + 1);
                },
            error: function(data){
                console.log("Error callback");
                 addProsody(key + 1);
            }
        });

    }
}

/*
$.ajax({
    type: 'get',
    url: 'manageproducts.do',
    data: 'option=1',
    success: function(data) {

        availableProductNames = data.split(",");

        alert(availableProductNames);

    }
});
*/

$('#btnClear').click(function(){
    clearTimeline();
    //<a id="btnDownload" class="btn btn-default btn-lg">Prepare download</a>
    $('#downSec').html('<a id="btnDownload" class="btn btn-default btn-lg">Prepare download</a>');
});



$('#btnDownload').click(function(){
    var sendObj = "";
    var downPath = "";

    $('#playlist').find('a').each(function(){
        var fname = $(this).attr("data").split("/");
        //sendObj.push(fname[2]);
        sendObj += fname[2]+",";
    });
    console.log(sendObj);

    var send = {
        "tones": sendObj,
        "appk": appKey
    };

    $.ajax({
        url:"http://localhost:8080/download",
        type: 'GET',
        data: send,
        error: function(data){
            console.log(data+" at errorrra");
        },
        success: function(data){
            console.log(data);
            downPath = "voiceprofiles/download/"+data;
            $('#downSec').html('<a href="'+downPath+'" id="btnDownload" class="btn btn-default btn-lg" download>Download as WAV</a>');
        }
    });    
});


function getLetterName(num){
    //01-3461-2230.wav
    var parts = num.split("-");
    var letter = "";

    if((parts[1] >= 3461) && (parts[1] <= 3478)){
        vowels = lettersObj.vowelsSi;
        for(var key in vowels){
            if(vowels[key].id == parts[1])
                letter += vowels[key].letter;
        }
        return letter;
    }

    if(parts.length <= 3){
        for(var key in consonants){
            if(consonants[key].id == parts[1])
                letter += consonants[key].letter;
        }
        for(var key in vmods){
            if(vmods[key].id == parts[2])
                 letter += vmods[key].letter;
        }
        return letter;
    }
    return "";
}

function clearTimeline(){
    $('#playlist').html("");
    tracks = playlist.find('li a');
    len = tracks.length;
    $('#audio').get(0).pause();
}