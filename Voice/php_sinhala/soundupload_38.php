<?php
// Upload Script

$uploadpath = 'Direct_upload//38/';      // directory to store the uploaded files
$max_size = 6000;          // maximum file size, in KiloBytes

$allowtype = array('wav');        // allowed extensions

if(isset($_FILES['fileup']) && strlen($_FILES['fileup']['name']) > 1) {
  $uploadpath = $uploadpath . basename( $_FILES['fileup']['name']);       // gets the file name
  $sepext = explode('.', strtolower($_FILES['fileup']['name']));
  $type = end($sepext);       // gets extension

  $err = '';         // to store the errors

  // Checks if the file has allowed type
  if(!in_array($type, $allowtype)) $err .= 'The file: <b>'. $_FILES['fileup']['name']. '</b> not has the allowed extension type.';
  if($_FILES['fileup']['size'] > $max_size*1000) $err .= '<br/>Maximum file size must be: '. $max_size. ' KB.';
 
  
  
  $fname=$_FILES['fileup']['name'];
//	 $newsave='Affter_ffmpeg//UVProfileSinhala/'.$fname;
  
  
  if (file_exists($uploadpath)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;                }
  
  else{
  

  // If no errors, upload the image, else, output the errors
  if($err == '') {
    if(move_uploaded_file($_FILES['fileup']['tmp_name'], $uploadpath)) { 
      echo 'File: <b>'. basename( $_FILES['fileup']['name']). '</b> successfully uploaded:';
	 
	  

//************************************************
      
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "lire";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT uid, appKey FROM currentuser";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
       // echo "uid: " . $row["uid"]. "<br>";
        
       //  echo "ud: " . $row["uid"]. " - Name: " . $row["appKey"]. "<br>";
   

 
//  ********************************************
         
     $namefile=$_FILES['fileup']['name'];    
     $url = "http://localhost:8080/recording/record";
     
     $data = array('uid'=>'0'.(string)$row["uid"],'folder'=>'38','fname'=>(string)$namefile,'appk'=>(string)$row["appKey"]);
   //echo "ud: " . $row["uid"]. " - Name: " . $row["appKey"]. "<br>";
     
    function sendPostData($url,$data){
  // Initialize and get the curl handle
  $ch = curl_init();
 
  // Include possible headers in the reply from the server as well
  curl_setopt( $ch, CURLOPT_HEADER, true );
 
  // Return the reply as a string from curl_exec() instead of directly to stdout
  curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
 
  // The URI we want to send the post data to
  curl_setopt($ch, CURLOPT_URL, $url);
 
  // Use the POST method
  curl_setopt($ch, CURLOPT_POST, true);
 
  // All the data to be sent
  curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
 
  $reply = curl_exec ($ch);
 
  curl_close($ch);
  return $reply;
                                    }  
                                    
sendPostData($url, $data);
      }
} else {
    echo "0 results";
} 
      
	  
      echo '<br/>File type: <b>'. $_FILES['fileup']['type'] .'</b>';
      echo '<br />Size: <b>'. number_format($_FILES['fileup']['size']/1024, 3, '.', '') .'</b> KB';
//      if(isset($width) && isset($height)) echo '<br/>Image Width x Height: '. $width. ' x '. $height;
	  
	  
	}
	  	 
    }
    else echo '<b>Unable to upload the file, Max upload file size 5MB, file type should be .wav .</b>';
  }
  //else echo $err;
}
mysqli_close($conn);

?> 

