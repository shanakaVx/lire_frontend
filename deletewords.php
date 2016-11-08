<?php

if(isset($_GET['id'])){

$id=$_GET['id'];

mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('sinhala') or die(mysql_error());
 
$query=mysql_query
("DELETE FROM words WHERE id='".$id."'")
or die(mysql_error());

if($query){

header('Location:manage_words.php');

}

}


?>