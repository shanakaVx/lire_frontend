

//Timeline automated control
//tracks are set to play one after the other here


var audioTL;
var playlist;
var tracks;
var current;
var selectedPath;

selectedToEdit = null;

init();


$('#pause').click(function () {
    $('#audio').get(0).pause();
});

//remove button
$('#playlist').on("click", "button", function () {
    $(this).parent().remove();
    tracks = playlist.find('li a');
    len = tracks.length;

    $('#opt').html("Current " + current + "<br>No of tracks " + len);
});


$('#setopt').click(function(){

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

    if(slidert.bootstrapSlider('getValue') == "1")
        timing = "S";
    if(slidert.bootstrapSlider('getValue') == "2")
        timing = "N";
    if(slidert.bootstrapSlider('getValue') == "3")
        timing = "L";

    var sendObj = {
        "filename": filename[2],
        "pitch": pitch,
        "timing": timing
    };

    changeProsody(sendObj, pitch, timing);

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


function changeProsody(sendObj, pitch, timing){
    console.log(sendObj);
    $.get(
          'http://localhost:8080/prosody/changeprosody',
          sendObj,
          function(data,status){
              console.log(data);
              changedFile = data;
              console.log("Spring server returned : "+status);
              selectedToEdit.attr("data", "voiceprofiles/1/"+changedFile);
              selectedToEdit.attr("data-pitch", pitch);
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


$('#tokenize').click(function(){

    var text = $('#inputText').val();
        alert(text);
    
    var sendObj = {
        "text": text
    };
    
    $.get(
          'http://localhost:8080/tokenize/directTokenize',
          sendObj,
          function(data, status){
              console.log(data);
              fillTimeline(data);
          });
    
});


function fillTimeline(data){
    var basePath = "voiceprofiles/01/";
    for(var key in data){
        var arr = data[key][0];
        
        for(var k in arr){
            
            var append = '<li class = "entry">\n\
                                <a data="'+ basePath+arr[k]+'.wav" data-pitch="N" data-time="N">' + arr[k] + '\
                                </a><button id="delete" class="delete">X</button>\n\
                          </li>';
            
            console.log(append);
            $('#playlist').append(append);
            tracks = playlist.find('li a');
            len = tracks.length;
            $('#opt').html("Current " + current + "<br>No of tracks " + len);
        }

    }
}


$('#btnDownload').click(function(){
    var sendObj = [];
    var downPath = "";

    $('#playlist').find('a').each(function(){
        var fname = $(this).attr("data").split("/");
        sendObj.push(fname[2]);
    });
    console.log(sendObj);

    $.ajax({
        url:"URL/URL/URL",
        type: 'POST',
        data: sendObj,
        error: function(data){
            console.log(data);
        },
        success: function(data){
            console.log(data);
            downPath = "voiceprofiles/download/"+data;
            $('#downSec').html('<a href="'+downPath+'" id="btnDownload" class="btn btn-default btn-lg" download>Download as WAV</a>');
        }
    });


    
});
