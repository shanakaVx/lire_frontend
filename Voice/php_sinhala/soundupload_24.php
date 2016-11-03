<?php
// PHP Upload Script

$uploadpath = 'Direct_upload//24/';      // directory to store the uploaded files
$max_size = 20000;          // maximum file size, in KiloBytes

$allowtype = array('wav');        // allowed extensions

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
//	 $newsave='Affter_ffmpeg//UVProfileSinhala/'.$fname;
  
  
  if (file_exists($uploadpath)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;                }
  
  else{
  

  // If no errors, upload the wav, else, output the errors
  if($err == '') {
    if(move_uploaded_file($_FILES['fileup']['tmp_name'], $uploadpath)) { 
      echo 'File: <b>'. basename( $_FILES['fileup']['name']). '</b> successfully uploaded:';
	 
	 
	  
//	echo "<br/> Starting ffmpeg...\n\n<br>";
//	$cmd = "C:\\ffmpeg\\bin\\ffmpeg -i ".$uploadpath." -af silenceremove=1:0:-30dB:0:1:-30dB ".$newsave.""; 
//	shell_exec($cmd);
	
	
	  
      echo '<br/>File type: <b>'. $_FILES['fileup']['type'] .'</b>';
      echo '<br />Size: <b>'. number_format($_FILES['fileup']['size']/1024, 3, '.', '') .'</b> KB';
      if(isset($width) && isset($height)) echo '<br/>Image Width x Height: '. $width. ' x '. $height;
	  
	  
	}
	  
	 
	  
    }
    else echo '<b>Unable to upload the file, check file type! Is it wav.</b>';
  }
  //else echo $err;
}
?> 

</div>