<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Online Word Game</title>
<link rel="stylesheet" href="../../dist/leaflet.css" />

	<link rel="stylesheet" href="../../../dist/leaflet.css" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="../../css/screen.css" />

	<script type="text/javascript" src="../../../build/deps.js"></script>
	<script src="../../leaflet-include.js"></script>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>

<style type="text/css">
.drag,.drag2{
width:40%;
color:White;
margin:10px 2%;

}

.selected {
			background-color: Yellow;
			color: Black;
		}
		
		.drop {
			background-color: Blue;
			color: White;
			margin: 3px;
			padding: 10px;
			-moz-border-radius: 1em;
			-webkit-border-radius: 1em;
			border-radius: 1em;
		}
		.active {
			background-color: orange;
			cursor: crosshair;
		}
		


</style>


</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Sinhala Keyboard</a>
           

		   </div>
		     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li>
                        <a href="keyboard.php">Key Board</a>
                    </li>
                    <li>
                        <a href="addword.php">Add Words</a>
                    </li>
                    <li>
                        <a href="words.php">Listen Words</a>
                    </li>
					 <li>
                        <a href="manage_words.php">Manage Words</a>
                    </li>
		 <li>
                        <a href="drag.php">Drag Game</a>
                    </li>			
                   
                </ul>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
           
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	<?php session_start();?>
<script>

function submitform(xxx)
   {
       var inputs = document.getElementsByClassName("inputs");
       var formdata = new FormData();
       for(var i=0; i<inputs.length; i++)
       {
           formdata.append(inputs[i].name, inputs[i].value);
       }
       var xmlhttp;
       if(window.XMLHttpRequest)
       {
           xmlhttp = new XMLHttpRequest;
       }
       else
       {
           xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
       }
       xmlhttp.onreadystatechange = function()
       {
          if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
          {

          }
       }
      
	    
	  if(xxx=='GA' || xxx=='SA' || xxx=='LAA' || xxx=='A' || xxx=='U' || xxx=='E' || xxx=='OR' || xxx=='LA'){
	   
	   //alert('ok');
	   xmlhttp.open("POST", "test1.php?cha="+xxx);
       xmlhttp.send(formdata);
	   

	 }
	    
	   else{
	  setTimeout(function(){alert("Your Answer is Wrong!!")}, 6000);
	  
   }
   
  
   
   
   
}




</script>
    <!-- Page Content -->
    <div class="container">
  <form action="" method="POST">
              
        <div class="row">
	
<form name="foo" action="" method="POST" id="foo">
<img src="images/star.jpg"/>
<div class="drop mobiledraganddrop1drop mobiledraganddrop2drop" onclick="refresh();"   id="drop2">
<div style="clear: both;"><p>You can drop Characters here.</p></div>
</div>

	


			</br>
			 <div class="col-lg-6 text-left" id="welcomeDiv"  style="display:block;">
			 <table  class="table table-bordered">
  
    <tr>
        <td><input class="drag mobiledraganddrop1drag" id="drag" style="font-size:30px;width:80px;background-color:black" type="button" value="අ" onclick="submitform('A'); return false;"/></td>
        <td><input class="drag mobiledraganddrop1drag" id="drag1" style="font-size:30px;width:80px;background-color:black" type="button" value="උ" onclick="submitform('U'); return false;"/></td>
        <td><input class="drag mobiledraganddrop1drag" id="drag2" style="font-size:30px;width:80px;background-color:black" type="button" value="එ" onclick="submitform('E'); return false;"/></td>
        <td><input class="drag mobiledraganddrop1drag" id="drag3" style="font-size:30px;width:80px;background-color:black" type="button" value="ඔ" onclick="submitform('O'); return false;"/></td>
        <td><input class="drag mobiledraganddrop1drag" id="drag4" style="font-size:30px;width:80px;background-color:black" type="button" value="ඊ" onclick="submitform('RR'); return false;"/></td>
        <td><input class="drag mobiledraganddrop1drag" id="drag5" style="font-size:30px;width:80px;background-color:black" type="button" value="ග" onclick="submitform('G'); return false;"/></td>
         <td><input class="drag mobiledraganddrop1drag" id="drag6" style="font-size:30px;width:80px;background-color:black" type="button" value="රු" onclick="submitform('RU'); return false;"/></td>
        
		 <td><input class="drag mobiledraganddrop1drag" id="drag7" style="font-size:30px;width:80px;background-color:black" type="button" value="ල" onclick="submitform('LA'); return false;"/></td>
        
		 <td><input class="drag mobiledraganddrop1drag" id="drag8" style="font-size:30px;width:80px;background-color:black" type="button" value="රේ" onclick="submitform('RE'); return false;"/></td>
        
		 <td><input class="drag mobiledraganddrop1drag" id="drag9" style="font-size:30px;width:80px;background-color:black" type="button" value="ව" onclick="submitform('VA'); return false;"/></td>
        
		 <td><input class="drag mobiledraganddrop1drag" id="drag10" style="font-size:30px;width:80px;background-color:black" type="button" value="රැ" onclick="submitform('RUU'); return false;"/></td>
         <td><input class="drag mobiledraganddrop1drag" id="drag11" style="font-size:30px;width:80px;background-color:black" type="button" value="වෙ" onclick="submitform('WE'); return false;"/></td>
        
		
    </tr>
  
   
</table>

			
			 
			 </div>	
			
			</div>
			
			
	
			
          </form>
		  
		  <form action="" method="POST">
		  <input type="submit" value="Submit Your Answer" name="btnnext" class="btn btn-primary"/>
		  
		  </form>
		  <?php
			
			if(isset($_POST['btnnext'])){
		mysql_connect("localhost", "root", "") or die(mysql_error());
					
					mysql_select_db("sinhala") or die(mysql_error());
					
					$result1 = mysql_query("SELECT * FROM game")
					or die(mysql_error()); 
					
		while($row2 = mysql_fetch_array($result1)){
		if($row2['w1']=='G' && $row1['w2']=='S' && $row1['w3']=='NULL'){
		
		
		
		echo "<script>var snd1 = new Audio('gasa.mp3');";

echo "snd1.play(); alert('Hello!.. Your Answer Is Correct');</script>";
		
	//header('Location=drag1.php');
		
		}else{
		
		echo "<script> alert('Hello!.. Your Answer Is Wrong..Please Try Again!!');</script>";
		
		
		}



		
		
		
		
		
		
		}
			
			}
			
			?>
		    
        </div>
		
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="./Mobile Drag And Drop Example_files/jquery.min.js"></script>
<script type="text/javascript" src="./Mobile Drag And Drop Example_files/jquery.mobiledragdrop.js"></script>
<script type="text/javascript">
		$(document).ready(function() {
			$(".drag").mobiledraganddrop({ targets: ".drop", status: "#status"});
			$(".drag2").mobiledraganddrop({ targets: "#drop2", status: "#status"});
		
		});
	</script>
</body>

</html>
