<?php
// Simple PHP Upload Script:  http://coursesweb.net/php-mysql/

$uploadpath = 'upload/';      // directory to store the uploaded files
$max_size = 30000;          // maximum file size, in KiloBytes
$alwidth = 900;            // maximum allowed width, in pixels
$alheight = 800;           // maximum allowed height, in pixels
$allowtype = array('wav', 'mp3', 'm4a');        // allowed extensions

if(isset($_FILES['fileup']) && strlen($_FILES['fileup']['name']) > 1) {
  $uploadpath = $uploadpath . basename( $_FILES['fileup']['name']);       // gets the file name
  $sepext = explode('.', strtolower($_FILES['fileup']['name']));
  $type = end($sepext);       // gets extension
  list($width, $height) = getimagesize($_FILES['fileup']['tmp_name']);     // gets image width and height
  $err = '';         // to store the errors

  // Checks if the file has allowed type, size, width and height (for images)
  if(!in_array($type, $allowtype)) $err .= 'The file: <b>'. $_FILES['fileup']['name']. '</b> not has the allowed extension type.';
  if($_FILES['fileup']['size'] > $max_size*1000) $err .= '<br/>Maximum file size must be: '. $max_size. ' KB.';
  if(isset($width) && isset($height) && ($width >= $alwidth || $height >= $alheight)) $err .= '<br/>The maximum Width x Height must be: '. $alwidth. ' x '. $alheight;
  
  
  $fname=	$_FILES['fileup']['name'];
	 $newsave='ac/'.$fname;
  
  
  if (file_exists($uploadpath)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;                }
  
  else{
  

  // If no errors, upload the image, else, output the errors
  if($err == '') {
    if(move_uploaded_file($_FILES['fileup']['tmp_name'], $uploadpath)) { 
      echo 'File: <b>'. basename( $_FILES['fileup']['name']). '</b> successfully uploaded:';
	  
	  /*
exec('/ffmpeg/bin/ffmpeg -i' .$_FILES['fileup']['name']. '-af silenceremove=1:0:-30dB:0:1:-30dB '.$uploadpath.'');
echo exec("path\\to\\ffmpeg\\bin\\ffmpeg -i C:\\wamp\\www\\script\\Re_DB\\php\\upload\\ooo.wav -af silenceremove=1:0:-30dB:0:1:-30dB a.wav");*/

  //$convert= 'ac/'.$uploadpath;
	 
	  
	echo "<br/> Starting ffmpeg...\n\n<br>";
	$cmd = "C:\\ffmpeg\\bin\\ffmpeg -i ".$uploadpath." -af silenceremove=1:0:-30dB:0:1:-30dB ".$newsave.""; 
	shell_exec($cmd);
	
	
	
	
	  
	  
	  
      echo '<br/>File type: <b>'. $_FILES['fileup']['type'] .'</b>';
      echo '<br />Size: <b>'. number_format($_FILES['fileup']['size']/1024, 3, '.', '') .'</b> KB';
      if(isset($width) && isset($height)) echo '<br/>Image Width x Height: '. $width. ' x '. $height;
	  
	  
	}
	  
	  /*
      echo '<br/><br/>uploaded address: <b>http://'.$_SERVER['HTTP_HOST'].rtrim(dirname($_SERVER['REQUEST_URI']), '\\\\/').'/'.$uploadpath.'</b>';*/
	  
	
/*	  
echo "<br/> Starting ffmpeg...\n\n<br>";
$cmd = "ffmpeg\\bin\\ffmpeg -i C:\\wamp\\www\\script\\Re_DB\\php\\upload\\ooo.wav -af silenceremove=1:0:-30dB:0:1:-30dB yu.wav"; 
 shell_exec($cmd);*/
	
	
	
	
	  
    }
    else echo '<b>Unable to upload the file.</b>';
  }
  //else echo $err;
}
?> 

</div>