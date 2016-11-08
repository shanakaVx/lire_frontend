    
 <?php
   session_start();
			   
			   $x=rand();
			   $y=$x/300000000;
			   $y = (int)$y;
			   //echo $y;
			   $color1;
			   $color2;
			   $color3;
			   $color4;
			   $color5;
			   $color6;
			   $color7;
			   $color8;
			   $color9;
			   $color10;
			   
			   $url;
			   
			   
			   
			   ?>
			   
			   
			   <?php if($y==1){
			   $url='images/slider/home-cover-1.jpg';
				$colorname='blue';
				$color1='red';
				$color2='blue';
				$color3='green';
				$color4='purple';
				$color5='orange';
				$color6='pink';
				$color7='lightgreen';
				$color8='brown';
				$color9='yellow';
				$color10='ash';
				
			
				}
				
				if($y==2){
			   $url='images/slider/home-cover-3.jpg';
				$colorname='red';
				$color1='red';
				$color2='blue';
				$color3='brown';
				$color4='purple';
				$color5='yellow';
				$color6='pink';
				$color7='lightgreen';
				$color8='green';
				$color9='orange';
				$color10='ash';
				
			
				}
				if($y==3){
			   $url='images/slider/home-cover-2.jpg';
				$colorname='pink';
				$color1='brown';
				$color2='lightgreen';
				$color3='pink';
				$color4='purple';
				$color5='ash';
				$color6='blue';
				$color7='red';
				$color8='green';
				$color9='orange';
				$color10='yellow';
				
			
				}
				
				if($y==4){
			   $url='images/slider/home-cover-7.jpg';
				$colorname='orange';
				$color1='purple';
				$color2='lightgreen';
				$color3='brown';
				$color4='orange';
				$color5='blue';
				$color6='pink';
				$color7='red';
				$color8='green';
				$color9='pink';
				$color10='yellow';
				
			
				}
				
				if($y==5){
			   $url='images/slider/home-cover-6.jpg';
				$colorname='ash';
				$color1='orange';
				$color2='pink';
				$color3='yellow';
				$color4='blue';
				$color5='ash';
				$color6='pink';
				$color7='red';
				$color8='green';
				$color9='lightgreen';
				$color10='brown';
				
			
				}
				if($y==6){
			   $url='images/slider/home-cover-5.jpg';
				$colorname='purple';
				$color1='yellow';
				$color2='pink';
				$color3='orange';
				$color4='ash';
				$color5='brown';
				$color6='purple';
				$color7='green';
				$color8='red';
				$color9='lightgreen';
				$color10='blue';
				
			
				}
				if($y==7){
			   $url='images/slider/home-cover-4.jpg';
				$colorname='green';
				$color1='brown';
				$color2='red';
				$color3='orange';
				$color4='ash';
				$color5='yellow';
				$color6='pink';
				$color7='green';
				$color8='pink';
				$color9='blue';
				$color10='lightgreen';
				
			
				}
				
				if($y==8){
			   $url='images/slider/home-cover-3.jpg';
				$colorname='brown';
				$color1='green';
				$color2='lightgreen';
				$color3='orange';
				$color4='ash';
				$color5='yellow';
				$color6='pink';
				$color7='pink';
				$color8='brown';
				$color9='blue';
				$color10='red';
				
			
				}
				
				if($y==9){
			   $url='images/slider/home-cover-2.jpg';
				$colorname='yellow';
				$color1='pink';
				$color2='lightgreen';
				$color3='blue';
				$color4='ash';
				$color5='red';
				$color6='pink';
				$color7='brown';
				$color8='green';
				$color9='yellow';
				$color10='orange';
				
			
				}
				
				if($y==10 || $y==0){
			   $url='images/slider/home-cover-1.jpg';
			   $colorname='lightgreen';
				$color1='blue';
				$color2='pink';
				$color3='yellow';
				$color4='orange';
				$color5='red';
				$color6='pink';
				$color7='brown';
				$color8='green';
				$color9='ash';
				$color10='lightgreen';
				
			
				}
				
				
				
				
	
				
				
				
				
				?>

<!DOCTYPE html>
<!-- saved from url=(0070)https://www.stevefenton.co.uk/cmsfiles/assets/file/mobiledragdrop.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

<link rel="stylesheet" type="text/css" href="./Mobile Drag And Drop Example_files/optional.css">
<style type="text/css">.drag,.drag2{float:left;width:21%;background-color:Green;color:White;margin:10px 2%;cursor:move;text-align:center;-moz-border-radius:1em;-webkit-border-radius:1em;border-radius:1em;}.selected{background-color:Yellow;color:Black;}.drop{background-color:Blue;color:White;margin:3px;padding:10px;-moz-border-radius:1em;-webkit-border-radius:1em;border-radius:1em;}.active{background-color:orange;cursor:crosshair;}</style>


<script>
var xmlhttp1;
function getDevice()
{
xmlhttp1 = GetXmlHttpObject();
if(xmlhttp1 == null)
{
alert("Youe browerser dose not support...");
}
xmlhttp1.onreadystatechange = stateChanged1;
xmlhttp1.open("POST","score.php",true);
xmlhttp1.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
xmlhttp1.send();
}
function stateChanged1()
{
if(xmlhttp1.readyState==4)
{
//alert(xmlhttp1.responseText);
if(xmlhttp1.responseText != -1)
{
document.getElementById("device_result").innerHTML = xmlhttp1.responseText;
}
else
{
document.getElementById("device_result").innerHTML = '<br><br><br><div style="width: 200px" class="alert alert-warning">No Any Devices Registered</div>';
}
}
}
function GetXmlHttpObject()
{
if(window.XMLHttpRequest)
{
//for IE7,firefox,Chorm,Opera,Safari
return new XMLHttpRequest();
}
if(window.ActiveXObject)
{
//for IE6,IE5
return new ActiveXObject("Microsoft.XMLHTTP");
}
}
function setMapModal(deviceId){
document.getElementById("device_id").value = deviceId;
$('#modal_message').modal('show')
}
</script>

<style>
#div1 {width:350px;height:70px;padding:10px;border:1px solid #aaaaaa;}
</style>
<script>
function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
}
</script>

<script type="text/javascript" src="scripts/snowfall.jquery.min.js"></script>
    <script type='text/javascript'>     
        $(document).ready(function(){
        	$(document).snowfall({flakeCount : 250});            
        });
     </script>
</head>
<body>
<div id="header-fixed">
    <a class="open-left-sidebar" href="home.php"><i class="fa fa-navicon"></i></a><center><span style="font-size:20px;color:red"><b><div id="device_result"  >Marks</div></b></span>
    <a class="header-logo" href="#"></br></a>
<a class="open-right-sidebar" href="#"><button onclick="document.getElementById('audioPlayer').muted=!document.getElementById('audioPlayer').muted"><span style="color:white;font-size:20px"><i class="fa fa-volume-up"></i></span></button>

	</a>
</div> 
<div id="maincontent">

<div id="how">

<form action="" method="POST">

<button name="btnxxx"><div class="drop mobiledraganddrop1drop mobiledraganddrop2drop" id="drop2">
<div style="clear: both;"><p>You can drop Baloon here.</p></div>
</div></button>

</form>


<div class="drag mobiledraganddrop1drag" id="drag3">
<p>Drag 3</p>
</div>
<div class="drag2 mobiledraganddrop2drag" id="drag4">
<p>Drag 4*</p>
</div>
<img src="images/baloons/red.png" class="drag mobiledraganddrop1drag" id="drag5"/>








<div style="clear: both">&nbsp;</div>
</div>

</div>
<script type="text/javascript" src="./Mobile Drag And Drop Example_files/jquery.min.js"></script>
<script type="text/javascript" src="./Mobile Drag And Drop Example_files/jquery.mobiledragdrop.js"></script>
<script type="text/javascript">
		$(document).ready(function() {
			$(".drag").mobiledraganddrop({ targets: ".drop", status: "#status"});
			$(".drag2").mobiledraganddrop({ targets: "#drop2", status: "#status"});
		});
	</script>

</body></html>