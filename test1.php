<?php

if(isset($_GET['cha'])){

$v=$_GET['cha'];
session_start();

 $qno=1;
 $con=mysqli_connect("localhost","root","","sinhala");
 
 if($v=='T' || $v=='E' || $v=='O'){
 
 $sql="UPDATE game SET w1='".$v."' WHERE id=1";			
						
						
						if (!mysqli_query($con,$sql)) {
							die('Error: ' . mysqli_error($con));
						}
 
 }
  if($v=='RU' || $v=='RR'){
 
  $sql="UPDATE game SET w2='".$v."' WHERE id=1";			
						
						
						if (!mysqli_query($con,$sql)) {
							die('Error: ' . mysqli_error($con));
						}
 
 }
  if($v=='VA' || $v=='U'){
   $sql="UPDATE game SET w3='".$v."' WHERE id=1";			
						
						
						if (!mysqli_query($con,$sql)) {
							die('Error: ' . mysqli_error($con));
						}
 
 
 
 }
 	
						
						
 //header('Location:basic_color.php');
 
}

?>