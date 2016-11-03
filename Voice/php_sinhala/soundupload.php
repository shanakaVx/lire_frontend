<?php
// PHP Upload Script

$uploadpath = 'Direct_upload//1/';      // directory to store the uploaded files
$max_size = 6000;          // maximum file size, in KiloBytes
$alwidth = 900;            // maximum allowed width, in pixels
$alheight = 800;           // maximum allowed height, in pixels
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
  

  // If no errors, upload the image, else, output the errors
  if($err == '') {
    if(move_uploaded_file($_FILES['fileup']['tmp_name'], $uploadpath)) { 
      echo 'File: <b>'. basename( $_FILES['fileup']['name']). '</b> successfully uploaded:';
	 
	 
	  
//	echo "<br/> Starting ffmpeg...\n\n<br>";
//	$cmd = "C:\\ffmpeg\\bin\\ffmpeg -i ".$uploadpath." -af silenceremove=1:0:-30dB:0:1:-30dB ".$newsave.""; 
//	shell_exec($cmd);
	
//	exec(" java -jar C:\\wamp\\www\\SilenceDetect\\silenceSplitDetectTrim\\src\\silencesplitdetecttrim\\SilenceSplitDetectTrim.java");
	
      
      //**********************sample1**************************************
//	$field1 = array('uid' =>'10');
//        $field2 = array('folder' =>'1');
//        $field3 = array('fname' =>'2');
////        $response = http_post_fields("http://localhost:8080/recording/record",$field1,$field2,$field3);
//	$response =  file_post_contents('http://localhost:8080/recording/record',$field1,$field2,$field3);
      
      
      // sample2**********************************************
//$url = 'http://localhost:8080/recording/record/';
//$data = array('uid' => '16', 'folder' => '1','fname' => '2');

//function CallAPI($method, $url, $data)
//{
//   $curl = curl_init();
//   $url = 'http://localhost:8080/recording/record/';
//   $data = array('uid' => '16', 'folder' => '1','fname' => '2');
//   
//    switch ($method)
//    {
//        case "POST":
//            curl_setopt($curl, CURLOPT_POST, 1);
//
//            if ($data)
//                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
//            break;
//        case "PUT":
//            curl_setopt($curl, CURLOPT_PUT, 1);
//            break;
//        default:
//            if ($data)
//                $url = sprintf("%s?%s", $url, http_build_query($data));
//    }
//    
//    
//    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
//    curl_setopt($curl, CURLOPT_USERPWD, "username:password");
//
//    curl_setopt($curl, CURLOPT_URL, $url);
//    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
//
//    $result = curl_exec($curl);
//
//    curl_close($curl);
//
//    return $result;
//    
//}
//$response =  file_get_contents('http://localhost:8080/recording/record');
//      
      
     //************************************************************************************** 
      
// $url = 'http://localhost:8080/recording/record?uid=04&folder=1&fname=1';
////$data = array('uid' => '16', 'folder' => '1','fname' => '2'); 
//      
//
//$myvars = array('uid' => '16', 'folder' => '1','fname' => '2'); 
//
//$ch = curl_init( $url );
//curl_setopt( $ch, CURLOPT_POST, 1);
//curl_setopt( $ch, CURLOPT_POSTFIELDS, $myvars);
//curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
//curl_setopt( $ch, CURLOPT_HEADER, 0);
//curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
//
//$response = curl_exec( $ch );
//      
   //*************************************************************************
//$url = 'http://localhost:8080/recording/record?';
//$data = array('uid' => '16', 'folder' => '1','fname' => '2');
//$options = array(
//        'http' => array(
//        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
//        'method'  => 'POST',
//        'content' => http_build_query($data),
//    )
//);
//
//$context  = stream_context_create($options);
//$result = file_get_contents($url, false, $context);
//var_dump($result);
//      
//  ****************************************
     
//set POST variables
//$url = "http://localhost:8080/recording/record?uid=74&folder=1&fname=2";
//$fields = array(
//                        'uid' => '57',
//                        'folder' => '1',
//                        'fname' => '2',
//                        
//                );
//
////url-ify the data for the POST
////foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; } rtrim($fields_string, '&');
//
////open connection
//$ch = curl_init();
//
////set the url, number of POST vars, POST data
//curl_setopt($ch,CURLOPT_URL, $url);
//curl_setopt($ch,CURLOPT_POST, count($fields));
////curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
//
////execute post
//$result = curl_exec($ch);
//
////close connection
//curl_close($ch);
//      
      $url = "http://localhost:8080/recording/record";
      $data = array('uid'=>'16','folder'=>'1','fname'=>'2');
      
   function sendPostData_v1($url, $data) { 
  $opts = array('http' => array(
    'method' => 'POST', 
    'header' => "Content-type: application/x-www-form-urlencoded\r\n"."Content-Length: ".strlen($data)."\r\n",
    'content' => $data)); 
  $stream = stream_context_create($opts); 
  $fp = fopen($url, 'rb', false, $stream); 
//  if (!$fp) { // Some error handling } 
// 
//  // Find out what the page returns as its body 
//  $reply = stream_get_contents($fp); 
//  if ($reply === false) { // Some error handling } 
// 
//  return $reply; 
//} 
//      }
      
   }
      
  function sendPostData_v2($url,$data,$port=8080) { 
  $errno=-1;
  $errstr=''; 
  $fs = fsockopen($url,$port,$errno,$errstr); 
  if( $fs === false ) { // Some error handling } 
 
  $header = "POST $url HTTP/1.0\r\n"; 
  $header .= "Content-Type: application/x-www-form-urlencoded\r\n"; 
  $header .= "Content-Length: " . strlen($data) . "\r\n\r\n"; 
  fputs($fs, $header . $data ); 
 
  // Find out what the page returns as its body 
//  $reply = ''; 
//  while( !feof($fs) ) { 
//    $reply .= fgets($fp,8192); 
//  } 
//  return $reply; 
     }} 
      
     
    function sendPostData_v3($url,$data){
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
 

//sendPostData_v1($url, $data);
sendPostData_v2($url, $data, $port);
sendPostData_v3($url, $data);
      
      
	  
      echo '<br/>File type: <b>'. $_FILES['fileup']['type'] .'</b>';
      echo '<br />Size: <b>'. number_format($_FILES['fileup']['size']/1024, 3, '.', '') .'</b> KB';
      if(isset($width) && isset($height)) echo '<br/>Image Width x Height: '. $width. ' x '. $height;
	  
	  
	}
	  
	 
	  
    }
    else echo '<b>Unable to upload the file, Max upload file size 5MB .</b>';
  }
  //else echo $err;
}
?> 

</div>