function upload(blob) {
  var xhr=new XMLHttpRequest();
  xhr.onload=function(e) {
      if(this.readyState === 4) {
          console.log("Server returned: ",e.target.responseText);
      }
  };
  var fd=new FormData();
  fd.append("that_random_filename.wav",blob);
  xhr.open("POST","<url>",true);
  xhr.send(fd);
}


//Runtime.getRuntime().exec("path\\to\\ffmpeg\\ffmpeg-20160517-git-af3e944-win64-static\\bin\\ffmpeg -i C:\\Users\\vcaldsh\\Desktop\\Voice_222.m4a -af silenceremove=1:0:-30dB:0:1:-30dB outPut222.m4a");