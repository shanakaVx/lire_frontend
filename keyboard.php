<!DOCTYPE html>
<html lang="en">

<head>





    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sinhala Speech Therapy Application</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>

<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
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
                <a class="navbar-brand" href="#">Sinhala Speech Therapy Application</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
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
                        <a href="drag.php">Game</a>
                    </li>
					
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
		<!--Main keys -->
	
			
			<script>
			var pa;
$(document).ready(function(){
    $("select.form-control").change(function(){
        var selectedCountry = $(".form-control option:selected").val();
		pa=selectedCountry;
        //alert("You have selected the form-control - " + selectedCountry);
    });
});




var bflat = new Audio();
//bflat.src = "sounds/vowel/a.wav";
function onClick(di,a) {
//alert(pa);
var path;
if(pa=='1'){

path="voice/sounds_child";

}
else if(pa=='2'){
path="voice/sounds1";
}
else if(pa=='3'){
path="voice/sounds";

}
bflat.src = path+"/"+di+"/"+a+".wav";
    bflat.play();
	
}
</script>
		<form action="" method="POST">
            <div class="col-lg-6 text-left">
			<form >
		  <select class="form-control">
		  <option value="0">Please Select Sound Profile</option>
            <option value="1">voice 1</option>
            <option value="2">voice 2</option>
            <option value="3">voice 3</option>
        </select>
			</form>
			
			</div>
		<div class="col-lg-6 text-left">
			<a href="http://localhost/new/keyboard.php" class="btn btn-danger">Reset Page</a>
			</br>	</br>
			</div>
			</form>
			
			
			
            <div class="col-lg-6 text-left">
              <!-- Page Content start -->
			
			<table  class="table table-bordered">
               <tr style='font-weight:bold;'>
                    <td>ka</td>
                    <td>kha</td>
                    <td>ga</td>
                    <td>gha</td>
                    <td>nga</td>
                    <td>nnga</td>
                </tr>
                <tr>
                    <td><input   class="btn btn-primary" style="font-size:30px;width:80px" type="button" value="ක" onclick="onClick('consonent', '3482');showDiv1()"/></td>
                    <td><input  class="btn btn-primary" style="font-size:30px;width:80px" type="button" value="ඛ" onclick="onClick('consonent', '3483');showDiv2()"/></td>
                    <td><input  class="btn btn-primary" style="font-size:30px;width:80px" type="button" value="ග" onclick="onClick('consonent', '3484');showDiv3()"/></td>
                    <td><input  class="btn btn-primary" style="font-size:30px;width:80px" type="button" value="ඝ" onclick="onClick('consonent', '3485');showDiv4()"/></td>
                    <td><input  class="btn btn-primary" style="font-size:30px;width:80px" type="button" value="ඞ" onclick="onClick('consonent', '3486');showDiv5()"/></td>
                    <td><input  class="btn btn-primary" style="font-size:30px;width:80px" type="button" value="ඟ" onclick="onClick('consonent', '3487');showDiv6()"/></td>
                </tr>
                 <tr style='font-weight:bold;'>
                    <td>ca</td>
                    <td>cha</td>
                    <td>ja</td>
                    <td>jha</td>
                    <td>kna</td>
                    <td>ñja</td>
                </tr>
                <tr>
                    <td><input class="btn btn-primary" style="font-size:30px;width:80px" type="button" value="ච" onclick="onClick('consonent', '3488');showDiv7()"/></td>
                    <td><input class="btn btn-primary" style="font-size:30px;width:80px" type="button" value="ඡ" onclick="onClick('consonent', '3489');showDiv8()"/></td>
                    <td><input class="btn btn-primary" style="font-size:30px;width:80px" type="button" value="ජ" onclick="onClick('consonent', '3490');showDiv9()"/></td>
                    <td><input class="btn btn-primary" style="font-size:30px;width:80px" type="button" value="ඣ" onclick="onClick('consonent', '3491');showDiv10()"/></td>
                    <td><input class="btn btn-primary" style="font-size:30px;width:80px" type="button" value="ඤ" onclick="onClick('consonent', '3492');showDiv11()"/></td>
                    <td><input class="btn btn-primary" style="font-size:30px;width:80px" type="button" value="ඦ" onclick="onClick('consonent', '3493');showDiv12()"/></td>
                </tr>
                <tr style='font-weight:bold;'>
                    <td>Ṭa</td>
                    <td>Ṭha</td>
                    <td>Ḍa</td>
                    <td>Ḍha</td>
                    <td>Ṇa</td>
                    <td>ṆḌa</td>
                </tr>
                <tr>
                    <td><input class="btn btn-primary" style="font-size:30px;width:80px" type="button" value="ට" onclick="onClick('consonent', '3495');showDiv13()"/></td>
                    <td><input class="btn btn-primary" style="font-size:30px;width:80px" type="button" value="ඨ" onclick="onClick('consonent', '3496');showDiv1()14"/></td>
                    <td><input class="btn btn-primary" style="font-size:30px;width:80px" type="button" value="ඩ" onclick="onClick('consonent', '3497');showDiv15()"/></td>
                    <td><input class="btn btn-primary" style="font-size:30px;width:80px" type="button" value="ඪ" onclick="onClick('consonent', '3498');showDiv16()"/></td>
                    <td><input class="btn btn-primary" style="font-size:30px;width:80px" type="button" value="ණ" onclick="onClick('consonent', '3499');showDiv17()"/></td>
                    <td><input class="btn btn-primary" style="font-size:30px;width:80px" type="button" value="ඬ" onclick="onClick('consonent', '3500');showDiv18()"/></td>
                </tr>
                  <tr style='font-weight:bold;'>
                    <td>ta</td>
                    <td>tha</td>
                    <td>da</td>
                    <td>dha</td>
                    <td>na</td>
                    <td>nda</td>
                </tr>
                <tr>
                    <td><input class="btn btn-primary" style="font-size:30px;width:80px" type="button" value="ත" onclick="onClick('consonent', '3501');showDiv19()"/></td>
                    <td><input class="btn btn-primary" style="font-size:30px;width:80px" type="button" value="ථ" onclick="onClick('consonent', '3502');showDiv20()"/></td>
                    <td><input class="btn btn-primary" style="font-size:30px;width:80px" type="button" value="ද" onclick="onClick('consonent', '3503');showDiv21()"/></td>
                    <td><input class="btn btn-primary" style="font-size:30px;width:80px" type="button" value="ධ" onclick="onClick('consonent', '3504');showDiv22()"/></td>
                    <td><input class="btn btn-primary" style="font-size:30px;width:80px" type="button" value="න" onclick="onClick('consonent', '3505');showDiv23()"/></td>
                    <td><input class="btn btn-primary" style="font-size:30px;width:80px" type="button" value="ඳ" onclick="onClick('consonent', '3507');showDiv24()"/></td>
                </tr>
                   <tr style='font-weight:bold;'>
                    <td>pa</td>
                    <td>pha</td>
                    <td>ba</td>
                    <td>bha</td>
                    <td>ma</td>
                    <td>mda</td>
                </tr>
                <tr>
                    <td><input class="btn btn-primary" style="font-size:30px;width:80px" type="button" value="ප" onclick="onClick('consonent', '3508');showDiv25()"/></td>
                    <td><input class="btn btn-primary" style="font-size:30px;width:80px" type="button" value="ඵ" onclick="onClick('consonent', '3509');showDiv26()"/></td>
                    <td><input class="btn btn-primary" style="font-size:30px;width:80px" type="button" value="බ" onclick="onClick('consonent', '3510');showDiv27()"/></td>
                    <td><input class="btn btn-primary" style="font-size:30px;width:80px"type="button" value="භ" onclick="onClick('consonent', '3511');showDiv28()"/></td>
                    <td><input class="btn btn-primary" style="font-size:30px;width:80px" type="button" value="ම" onclick="onClick('consonent', '3512');showDiv29()"/></td>
                    <td><input class="btn btn-primary" style="font-size:30px;width:80px" type="button" value="ඹ" onclick="onClick('consonent', '3513');showDiv30()"/></td>
                </tr>
                  <tr style='font-weight:bold;'>
                    <td>ya</td>
                    <td>ra</td>
                    <td>la</td>
                    <td>va</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><input class="btn btn-primary" style="font-size:30px;width:80px" type="button" value="ය" onclick="onClick('consonent', '3514');showDiv31()"/></td>
                    <td><input class="btn btn-primary" style="font-size:30px;width:80px" type="button" value="ර" onclick="onClick('consonent', '3515');showDiv32()"/></td>
                    <td><input class="btn btn-primary" style="font-size:30px;width:80px" type="button" value="ල" onclick="onClick('consonent', '3517');showDiv33()"/></td>
                    <td><input class="btn btn-primary" style="font-size:30px;width:80px" type="button" value="ව" onclick="onClick('consonent', '3520');showDiv34()"/></td>
                    <td></td>
                    <td></td>
                </tr>
                   <tr style='font-weight:bold;'>
                    <td>śa</td>
                    <td>Ṣa</td>
                    <td>sa</td>
                    <td>ha</td>
                    <td>la</td>
                    <td>fa</td>
                </tr>
                <tr>
                    <td><input class="btn btn-primary" style="font-size:30px;width:80px" type="button" value="ශ" onclick="onClick('consonent', '3521');showDiv35()"/></td>
                    <td><input class="btn btn-primary" style="font-size:30px;width:80px" type="button" value="ෂ" onclick="onClick('consonent', '3522');showDiv36()"/></td>
                    <td><input class="btn btn-primary" style="font-size:30px;width:80px" type="button" value="ස" onclick="onClick('consonent', '3523');showDiv37()"/></td>
                    <td><input class="btn btn-primary" style="font-size:30px;width:80px" type="button" value="හ" onclick="onClick('consonent', '3524');showDiv38()"/></td>
                    <td><input class="btn btn-primary" style="font-size:30px;width:80px" type="button" value="ළ" onclick="onClick('consonent', '3525');showDiv39()"/></td>
                    <td><input class="btn btn-primary" style="font-size:30px;width:80px" type="button" value="ෆ" onclick="onClick('consonent', '3526')showDiv40()"/></td>
                </tr>
            </table>
			  
			  
			  
			  
			  
			 <!-- Page Content end --> 
            </div>
			
			
			<!--Ayanna Ayanna -->
			
			
			
			 <div class="col-lg-6 text-left" id="welcomeDiv"  style="display:block;">
			 <table  class="table table-bordered">
    <tr style='font-weight:bold;'>
        <td>a</td>
        <td>ā</td>
        <td>æ</td>
        <td>ǣ</td>
        <td>i</td>
        <td>ī</td>
    </tr>
    <tr>
        <td><input class="btn btn-success" style="font-size:30px;width:80px" type="button" value="අ" onclick="onClick('vowel', '3461')"/></td>
        <td><input class="btn btn-success" style="font-size:30px;width:80px" type="button" value="ආ" onclick="onClick('vowel', '3462')"/></td>
        <td><input class="btn btn-success" style="font-size:30px;width:80px" type="button" value="ඇ" onclick="onClick('vowel', '3463')"/></td>
        <td><input class="btn btn-success" style="font-size:30px;width:80px" type="button" value="ඈ" onclick="onClick('vowel', '3464')"/></td>
        <td><input class="btn btn-success" style="font-size:30px;width:80px" type="button" value="ඉ" onclick="onClick('vowel', '3465')"/></td>
        <td><input class="btn btn-success" style="font-size:30px;width:80px" type="button" value="ඊ" onclick="onClick('vowel', '3466')" /></td>
    </tr>
    <tr style='font-weight:bold;'>
        <td>u</td>
        <td>ū</td>
        <td>ru</td>
        <td>rū</td>
        <td>li</td>
        <td>lī</td>
    </tr>
    <tr>
        <td><input class="btn btn-success" style="font-size:30px;width:80px" type="button" value="උ" onclick="onClick('vowel', '3467')" /></td>
        <td><input class="btn btn-success" style="font-size:30px;width:80px" type="button" value="ඌ" onclick="onClick('vowel', '3468')" /></td>
        <td><input class="btn btn-success" style="font-size:30px;width:80px" type="button" value="ඍ" onclick="onClick('vowel', '3469')" /></td>
        <td><input class="btn btn-success" style="font-size:30px;width:80px" type="button" value="ඎ" onclick="onClick('vowel', '3470')" /></td>
        <td><input class="btn btn-success" style="font-size:30px;width:80px" type="button" value="ඏ" onclick="onClick('vowel', 'li')" /></td>
        <td><input class="btn btn-success" style="font-size:30px;width:80px" type="button" value="ඐ" onclick="onClick('vowel', 'lī')" /></td>
    </tr>
    <tr style='font-weight:bold;'>
        <td>e</td>
        <td>ē</td>
        <td>ai</td>
        <td>o</td>
        <td>ō</td>
        <td>au</td>
    </tr>
    <tr>
        <td><input class="btn btn-success" style="font-size:30px;width:80px" type="button" value="එ" onclick="onClick('vowel', '3473')"/></td>
        <td><input class="btn btn-success" style="font-size:30px;width:80px" type="button" value="ඒ" onclick="onClick('vowel', '3474')"/></td>
        <td><input class="btn btn-success" style="font-size:30px;width:80px" type="button" value="ඓ" onclick="onClick('vowel', '3475')"/></td>
        <td><input class="btn btn-success" style="font-size:30px;width:80px" type="button" value="ඔ" onclick="onClick('vowel', '3476')"/></td>
        <td><input class="btn btn-success" style="font-size:30px;width:80px" type="button" value="ඕ" onclick="onClick('vowel', '3477')"/></td>
        <td><input class="btn btn-success" style="font-size:30px;width:80px" type="button" value="ඖ" onclick="onClick('vowel', '3478')"/></td>
    </tr>
   <!-- <tr style="margin-top:50px;">
        <td><input class="btn btn-success" style="font-size:30px;width:80px" type="button" value="ං" /></td>
        <td><input class="btn btn-success" style="font-size:30px;width:80px" type="button" value="ඃ" /></td>
    </tr>-->
</table>
			 
			 
			 </div>
			
			
			<!--Kayanna Kayanna -->
			
			  <div class="col-lg-6 text-left" id="welcomeDiv1"  style="display:none;">
			 <table class="table table-bordered">
    <tr style='font-weight:bold;'>
        <td>ka</td>
        <td>kā</td>
        <td>kæ</td>
        <td>kǣ</td>
        <td>ki</td>
        <td>kī</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px"  type="button" value="3482" onclick="onClick('consonent', 'ka')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="කා" onclick="onClick('vowel', '3482-3535')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="කැ" onclick="onClick('vowel', '3482-3536')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="කෑ" onclick="onClick('vowel', '3482-3537')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="කි" onclick="onClick('vowel', '3482-3538')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="කී" onclick="onClick('vowel', '3482-3539')" /></td>
    </tr>
    <tr style='font-weight:bold;'>
        <td>ku</td>
        <td>kū</td>
        <td>kru</td>
        <td>krū</td>
       <!-- <td>li</td>
        <td>lī</td>-->
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="කු" onclick="onClick('vowel', '3482-3540')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="කූ" onclick="onClick('vowel', '3482-3542')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="කෘ" onclick="onClick('vowel', 'kru')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="කෲ" onclick="onClick('vowel', 'kau')" /></td>
        <!--<td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඏ" onclick="onClick('vowel', 'li')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඐ" onclick="onClick('vowel', 'lī')" /></td>-->
    </tr>
    <tr style='font-weight:bold;'>
        <td>ke</td>
        <td>kē</td>
        <td>kai</td>
        <td>ko</td>
        <td>kō</td>
        <td>kau</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="කෙ" onclick="onClick('vowel', 'kea')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="කේ" onclick="onClick('vowel', 'kea')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="කෛ" onclick="onClick('vowel', 'kai')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="කො" onclick="onClick('vowel', 'ko')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="කෝ" onclick="onClick('vowel', 'koo')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="කෞ" onclick="onClick('vowel', 'krue')"/></td>
    </tr>
   <!-- <tr style="margin-top:50px;">
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="කං" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="කඃ" /></td>
    </tr>-->
</table>
			  
			  </div>
			  
			  
			  <!--Kha-->
			  
			  
			   <div class="col-lg-6 text-left" id="welcomeDiv2"  style="display:none;">
			 <table class="table table-bordered">
    <tr style='font-weight:bold;'>
        <td>kha</td>
        <td>khā</td>
        <td>khæ</td>
        <td>khǣ</td>
        <td>khi</td>
        <td>khī</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px"  type="button" value="ඛ" onclick="onClick('vowel', 'a')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඛා" onclick="onClick('vowel', 'ā')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඛැ" onclick="onClick('vowel', 'æ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඛෑ" onclick="onClick('vowel', 'ǣ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඛි" onclick="onClick('vowel', 'i')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඛී" onclick="onClick('vowel', 'ī')" /></td>
    </tr>
    <tr style='font-weight:bold;'>
        <td>khu</td>
        <td>khū</td>
        <td>khru</td>
        <td>khrū</td>
       <!-- <td>li</td>
        <td>lī</td>-->
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඛු" onclick="onClick('vowel', 'u')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඛූ" onclick="onClick('vowel', 'ū')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඛෘ" onclick="onClick('vowel', 'ru')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඛෲ" onclick="onClick('vowel', 'rū')" /></td>
       <!-- <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඏ" onclick="onClick('vowel', 'li')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඐ" onclick="onClick('vowel', 'lī')" /></td>-->
    </tr>
    <tr style='font-weight:bold;'>
        <td>khe</td>
        <td>khē</td>
        <td>khai</td>
        <td>kho</td>
        <td>khō</td>
        <td>khau</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඛෙ" onclick="onClick('vowel', 'e')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඛේ" onclick="onClick('vowel', 'ē')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඛෛ" onclick="onClick('vowel', 'ai')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඛො" onclick="onClick('vowel', 'o')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඛෝ" onclick="onClick('vowel', 'ō')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඛෞ" onclick="onClick('vowel', 'au')"/></td>
    </tr>
   <!-- <tr style="margin-top:50px;">
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඛං" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඛඃ" /></td>
    </tr>-->
</table>
			  
			  </div>
			  
			  <!--Ga -->
			
			  
	
			   
			      <div class="col-lg-6 text-left" id="welcomeDiv3"  style="display:none;">
				<table class="table table-bordered">
    <tr style='font-weight:bold;'>
        <td>ga</td>
        <td>gā</td>
        <td>gæ</td>
        <td>gǣ</td>
        <td>gi</td>
        <td>gī</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ග" onclick="onClick('vowel', 'a')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ගා" onclick="onClick('vowel', 'ā')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ගැ" onclick="onClick('vowel', 'æ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ගෑ" onclick="onClick('vowel', 'ǣ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ගි" onclick="onClick('vowel', 'i')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ගී" onclick="onClick('vowel', 'ī')" /></td>
    </tr>
    <tr style='font-weight:bold;'>
        <td>gu</td>
        <td>gū</td>
        <td>gru</td>
        <td>grū</td>
        <!--<td>li</td>
        <td>lī</td>-->
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ගු" onclick="onClick('vowel', 'u')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ගූ" onclick="onClick('vowel', 'ū')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ගෘ" onclick="onClick('vowel', 'ru')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ගෲ" onclick="onClick('vowel', 'rū')" /></td>
        <!--<td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඏ" onclick="onClick('vowel', 'li')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඐ" onclick="onClick('vowel', 'lī')" /></td>-->
    </tr>
    <tr style='font-weight:bold;'>
        <td>ge</td>
        <td>gē</td>
        <td>gai</td>
        <td>go</td>
        <td>gō</td>
        <td>gau</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ගෙ" onclick="onClick('vowel', 'e')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ගේ" onclick="onClick('vowel', 'ē')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ගෛ" onclick="onClick('vowel', 'ai')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ගො" onclick="onClick('vowel', 'o')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ගෝ" onclick="onClick('vowel', 'ō')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ගෞ" onclick="onClick('vowel', 'au')"/></td>
    </tr>
   <!-- <tr style="margin-top:50px;">
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ගං" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ගඃ" /></td>
    </tr>-->
</table>
				  </div>
			   
			    <!--Gha -->
			   
			      <div class="col-lg-6 text-left" id="welcomeDiv4"  style="display:none;">
			 <table class="table table-bordered">
    <tr style='font-weight:bold;'>
        <td>a</td>
        <td>ā</td>
        <td>æ</td>
        <td>ǣ</td>
        <td>i</td>
        <td>ī</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px"  type="button" value="ඝ" onclick="onClick('vowel', 'a')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඝා" onclick="onClick('vowel', 'ā')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඝැ" onclick="onClick('vowel', 'æ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඝෑ" onclick="onClick('vowel', 'ǣ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඝි" onclick="onClick('vowel', 'i')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඝී" onclick="onClick('vowel', 'ī')" /></td>
    </tr>
    <tr style='font-weight:bold;'>
        <td>u</td>
        <td>ū</td>
        <td>ru</td>
        <td>rū</td>
        <td>li</td>
        <td>lī</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඝු" onclick="onClick('vowel', 'u')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඝූ" onclick="onClick('vowel', 'ū')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඝෘ" onclick="onClick('vowel', 'ru')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඝෲ" onclick="onClick('vowel', 'rū')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඏ" onclick="onClick('vowel', 'li')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඐ" onclick="onClick('vowel', 'lī')" /></td>
    </tr>
    <tr style='font-weight:bold;'>
        <td>e</td>
        <td>ē</td>
        <td>ai</td>
        <td>o</td>
        <td>ō</td>
        <td>au</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඝෙ" onclick="onClick('vowel', 'e')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඝේ" onclick="onClick('vowel', 'ē')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඝෛ" onclick="onClick('vowel', 'ai')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඝො" onclick="onClick('vowel', 'o')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඝෝ" onclick="onClick('vowel', 'ō')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඝෞ" onclick="onClick('vowel', 'au')"/></td>
    </tr>
    <tr style="margin-top:50px;">
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඝං" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඝඃ" /></td>
    </tr>
</table>
			  
			  </div>
			   
									    <!--nGha -->
			   
			      <div class="col-lg-6 text-left" id="welcomeDiv5"  style="display:none;">
			 <table class="table table-bordered">
    <tr style='font-weight:bold;'>
        <td>nga</td>
        <td>ngā</td>
        <td>ngæ</td>
        <td>ngǣ</td>
        <td>ngi</td>
        <td>ngī</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px"  type="button" value="ඞ" onclick="onClick('vowel', 'a')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඞා" onclick="onClick('vowel', 'ā')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඞැ" onclick="onClick('vowel', 'æ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඞෑ" onclick="onClick('vowel', 'ǣ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඞි" onclick="onClick('vowel', 'i')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඞී" onclick="onClick('vowel', 'ī')" /></td>
    </tr>
    <tr style='font-weight:bold;'>
        <td>ngu</td>
        <td>ngū</td>
        <td>ngru</td>
        <td>ngrū</td>
        <td>ngli</td>
        <td>nglī</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඞු" onclick="onClick('vowel', 'u')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඞූ" onclick="onClick('vowel', 'ū')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඞෘ" onclick="onClick('vowel', 'ru')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඞෲ" onclick="onClick('vowel', 'rū')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඏ" onclick="onClick('vowel', 'li')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඐ" onclick="onClick('vowel', 'lī')" /></td>
    </tr>
    <tr style='font-weight:bold;'>
        <td>nge</td>
        <td>ngē</td>
        <td>ngai</td>
        <td>ngo</td>
        <td>ngō</td>
        <td>ngau</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඞෙ" onclick="onClick('vowel', 'e')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඞේ" onclick="onClick('vowel', 'ē')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඞෛ" onclick="onClick('vowel', 'ai')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඞො" onclick="onClick('vowel', 'o')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඞෝ" onclick="onClick('vowel', 'ō')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඞෞ" onclick="onClick('vowel', 'au')"/></td>
    </tr>
    <tr style="margin-top:50px;">
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඞං" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඞඃ" /></td>
    </tr>
</table>
			  
			  </div>	   
			   
			   
			       <!--nnGha -->
			   
			      <div class="col-lg-6 text-left" id="welcomeDiv6"  style="display:none;">
			 <table class="table table-bordered">
    <tr style='font-weight:bold;'>
        <td>nnga</td>
        <td>nngā</td>
        <td>nngæ</td>
        <td>nngǣ</td>
        <td>nngi</td>
        <td>nngī</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px"  type="button" value="ඟ" onclick="onClick('vowel', 'a')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඟා" onclick="onClick('vowel', 'ā')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඟැ" onclick="onClick('vowel', 'æ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඟෑ" onclick="onClick('vowel', 'ǣ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඟි" onclick="onClick('vowel', 'i')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඟී" onclick="onClick('vowel', 'ī')" /></td>
    </tr>
    <tr style='font-weight:bold;'>
        <td>nngu</td>
        <td>nngū</td>
        <td>nngru</td>
        <td>nngrū</td>
        <td>nngli</td>
        <td>nnglī</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඟු" onclick="onClick('vowel', 'u')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඟූ" onclick="onClick('vowel', 'ū')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඟෘ" onclick="onClick('vowel', 'ru')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඟෲ" onclick="onClick('vowel', 'rū')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඏ" onclick="onClick('vowel', 'li')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඐ" onclick="onClick('vowel', 'lī')" /></td>
    </tr>
    <tr style='font-weight:bold;'>
        <td>nnge</td>
        <td>nngē</td>
        <td>nngai</td>
        <td>nngo</td>
        <td>nngō</td>
        <td>nngau</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඟෙ" onclick="onClick('vowel', 'e')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඟේ" onclick="onClick('vowel', 'ē')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඟෛ" onclick="onClick('vowel', 'ai')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඟො" onclick="onClick('vowel', 'o')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඟෝ" onclick="onClick('vowel', 'ō')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඟෞ" onclick="onClick('vowel', 'au')"/></td>
    </tr>
    <tr style="margin-top:50px;">
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඟං" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඟඃ" /></td>
    </tr>
</table>
			  
			  </div>	

			   <!--ca -->
			   
			      <div class="col-lg-6 text-left" id="welcomeDiv7"  style="display:none;">
			 <table class="table table-bordered">
    <tr style='font-weight:bold;'>
        <td>ca</td>
        <td>cā</td>
        <td>cæ</td>
        <td>cǣ</td>
        <td>ci</td>
        <td>cī</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px"  type="button" value="ච" onclick="onClick('vowel', 'a')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="චා" onclick="onClick('vowel', 'ā')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="චැ" onclick="onClick('vowel', 'æ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="චෑ" onclick="onClick('vowel', 'ǣ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="චි" onclick="onClick('vowel', 'i')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="චී" onclick="onClick('vowel', 'ī')" /></td>
    </tr>
    <tr style='font-weight:bold;'>
        <td>cu</td>
        <td>cū</td>
        <td>cru</td>
        <td>crū</td>
        <td>cli</td>
        <td>clī</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="චු" onclick="onClick('vowel', 'u')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="චූ" onclick="onClick('vowel', 'ū')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="චෘ" onclick="onClick('vowel', 'ru')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="චෲ" onclick="onClick('vowel', 'rū')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඏ" onclick="onClick('vowel', 'li')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඐ" onclick="onClick('vowel', 'lī')" /></td>
    </tr>
    <tr style='font-weight:bold;'>
        <td>ce</td>
        <td>cē</td>
        <td>cai</td>
        <td>co</td>
        <td>cō</td>
        <td>cau</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="චෙ" onclick="onClick('vowel', 'e')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="චේ" onclick="onClick('vowel', 'ē')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="චෛ" onclick="onClick('vowel', 'ai')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="චො" onclick="onClick('vowel', 'o')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="චෝ" onclick="onClick('vowel', 'ō')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="චෞ" onclick="onClick('vowel', 'au')"/></td>
    </tr>
    <tr style="margin-top:50px;">
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="චං" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="චඃ" /></td>
    </tr>
</table>
			  
			  </div>


			   <!--cha -->
			   
			      <div class="col-lg-6 text-left" id="welcomeDiv8"  style="display:none;">
			 <table class="table table-bordered">
    <tr style='font-weight:bold;'>
        <td>cha</td>
        <td>chā</td>
        <td>chæ</td>
        <td>chǣ</td>
        <td>chi</td>
        <td>chī</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px"  type="button" value="ඡ" onclick="onClick('vowel', 'a')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඡා" onclick="onClick('vowel', 'ā')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඡැ" onclick="onClick('vowel', 'æ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඡෑ" onclick="onClick('vowel', 'ǣ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඡි" onclick="onClick('vowel', 'i')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඡී" onclick="onClick('vowel', 'ī')" /></td>
    </tr>
    <tr style='font-weight:bold;'>
        <td>chu</td>
        <td>chū</td>
        <td>chru</td>
        <td>chrū</td>
        <td>chli</td>
        <td>chlī</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඡු" onclick="onClick('vowel', 'u')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඡූ" onclick="onClick('vowel', 'ū')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඡෘ" onclick="onClick('vowel', 'ru')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඡෲ" onclick="onClick('vowel', 'rū')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඏ" onclick="onClick('vowel', 'li')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඐ" onclick="onClick('vowel', 'lī')" /></td>
    </tr>
    <tr style='font-weight:bold;'>
        <td>che</td>
        <td>chē</td>
        <td>chai</td>
        <td>cho</td>
        <td>chō</td>
        <td>chau</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඡෙ" onclick="onClick('vowel', 'e')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඡේ" onclick="onClick('vowel', 'ē')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඡෛ" onclick="onClick('vowel', 'ai')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඡො" onclick="onClick('vowel', 'o')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඡෝ" onclick="onClick('vowel', 'ō')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඡෞ" onclick="onClick('vowel', 'au')"/></td>
    </tr>
    <tr style="margin-top:50px;">
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඡං" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඡඃ" /></td>
    </tr>
</table>
			  
			  </div>

			  
			    <!--ja -->
			   
			      <div class="col-lg-6 text-left" id="welcomeDiv9"  style="display:none;">
			 <table class="table table-bordered">
    <tr style='font-weight:bold;'>
        <td>ja</td>
        <td>jā</td>
        <td>jæ</td>
        <td>jǣ</td>
        <td>ji</td>
        <td>jī</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px"  type="button" value="ජ" onclick="onClick('vowel', 'a')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ජා" onclick="onClick('vowel', 'ā')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ජැ" onclick="onClick('vowel', 'æ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ජෑ" onclick="onClick('vowel', 'ǣ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ජි" onclick="onClick('vowel', 'i')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ජී" onclick="onClick('vowel', 'ī')" /></td>
    </tr>
    <tr style='font-weight:bold;'>
        <td>ju</td>
        <td>jū</td>
        <td>jru</td>
        <td>jrū</td>
        <td>jli</td>
        <td>jlī</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ජු" onclick="onClick('vowel', 'u')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ජූ" onclick="onClick('vowel', 'ū')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ජෘ" onclick="onClick('vowel', 'ru')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ජෲ" onclick="onClick('vowel', 'rū')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඏ" onclick="onClick('vowel', 'li')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඐ" onclick="onClick('vowel', 'lī')" /></td>
    </tr>
    <tr style='font-weight:bold;'>
        <td>je</td>
        <td>jē</td>
        <td>jai</td>
        <td>jo</td>
        <td>jō</td>
        <td>jau</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ජෙ" onclick="onClick('vowel', 'e')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ජේ" onclick="onClick('vowel', 'ē')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ජෛ" onclick="onClick('vowel', 'ai')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ජො" onclick="onClick('vowel', 'o')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ජෝ" onclick="onClick('vowel', 'ō')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ජෞ" onclick="onClick('vowel', 'au')"/></td>
    </tr>
    <tr style="margin-top:50px;">
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ජං" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ජඃ" /></td>
    </tr>
</table>
			  
			  </div>


			   <!--jha -->
			   
			      <div class="col-lg-6 text-left" id="welcomeDiv10"  style="display:none;">
			 <table class="table table-bordered">
    <tr style='font-weight:bold;'>
        <td>jha</td>
        <td>jhā</td>
        <td>jhæ</td>
        <td>jhǣ</td>
        <td>jhi</td>
        <td>jhī</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px"  type="button" value="ඣ" onclick="onClick('vowel', 'a')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඣා" onclick="onClick('vowel', 'ā')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඣැ" onclick="onClick('vowel', 'æ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඣෑ" onclick="onClick('vowel', 'ǣ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඣි" onclick="onClick('vowel', 'i')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඣී" onclick="onClick('vowel', 'ī')" /></td>
    </tr>
    <tr style='font-weight:bold;'>
        <td>jhu</td>
        <td>jhū</td>
        <td>jhru</td>
        <td>jhrū</td>
        <td>jhli</td>
        <td>jhlī</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඣු" onclick="onClick('vowel', 'u')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඣූ" onclick="onClick('vowel', 'ū')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඣෘ" onclick="onClick('vowel', 'ru')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඣෲ" onclick="onClick('vowel', 'rū')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඏ" onclick="onClick('vowel', 'li')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඐ" onclick="onClick('vowel', 'lī')" /></td>
    </tr>
    <tr style='font-weight:bold;'>
        <td>jhe</td>
        <td>jhē</td>
        <td>jhai</td>
        <td>jho</td>
        <td>jhō</td>
        <td>jhau</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඣෙ" onclick="onClick('vowel', 'e')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඣේ" onclick="onClick('vowel', 'ē')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඣෛ" onclick="onClick('vowel', 'ai')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඣො" onclick="onClick('vowel', 'o')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඣෝ" onclick="onClick('vowel', 'ō')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඣෞ" onclick="onClick('vowel', 'au')"/></td>
    </tr>
    <tr style="margin-top:50px;">
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඣං" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඣඃ" /></td>
    </tr>
</table>
			  
			  </div>

			  
			     <!--kna -->
			   
			      <div class="col-lg-6 text-left" id="welcomeDiv11"  style="display:none;">
			 <table class="table table-bordered">
    <tr style='font-weight:bold;'>
        <td>kna</td>
        <td>knā</td>
        <td>knæ</td>
        <td>knǣ</td>
        <td>kni</td>
        <td>knī</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px"  type="button" value="ඤ" onclick="onClick('vowel', 'a')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඤා" onclick="onClick('vowel', 'ā')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඤැ" onclick="onClick('vowel', 'æ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඤෑ" onclick="onClick('vowel', 'ǣ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඤි" onclick="onClick('vowel', 'i')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඤී" onclick="onClick('vowel', 'ī')" /></td>
    </tr>
    <tr style='font-weight:bold;'>
        <td>knu</td>
        <td>knū</td>
        <td>knru</td>
        <td>knrū</td>
        <td>knli</td>
        <td>knlī</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඤු" onclick="onClick('vowel', 'u')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඤූ" onclick="onClick('vowel', 'ū')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඤෘ" onclick="onClick('vowel', 'ru')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඤෲ" onclick="onClick('vowel', 'rū')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඏ" onclick="onClick('vowel', 'li')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඐ" onclick="onClick('vowel', 'lī')" /></td>
    </tr>
    <tr style='font-weight:bold;'>
        <td>kne</td>
        <td>knē</td>
        <td>knai</td>
        <td>kno</td>
        <td>knō</td>
        <td>knau</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඤෙ" onclick="onClick('vowel', 'e')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඤේ" onclick="onClick('vowel', 'ē')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඤෛ" onclick="onClick('vowel', 'ai')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඤො" onclick="onClick('vowel', 'o')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඤෝ" onclick="onClick('vowel', 'ō')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඤෞ" onclick="onClick('vowel', 'au')"/></td>
    </tr>
    <tr style="margin-top:50px;">
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඤං" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඤඃ" /></td>
    </tr>
</table>
			  
			  </div>

			  
			    <!--nja -->
			   
			      <div class="col-lg-6 text-left" id="welcomeDiv12"  style="display:none;">
			 <table class="table table-bordered">
    <tr style='font-weight:bold;'>
        <td>nja</td>
        <td>njā</td>
        <td>njæ</td>
        <td>njǣ</td>
        <td>nji</td>
        <td>njī</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px"  type="button" value="ඦ" onclick="onClick('vowel', 'a')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඦා" onclick="onClick('vowel', 'ā')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඦැ" onclick="onClick('vowel', 'æ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඦෑ" onclick="onClick('vowel', 'ǣ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඦි" onclick="onClick('vowel', 'i')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඦී" onclick="onClick('vowel', 'ī')" /></td>
    </tr>
    <tr style='font-weight:bold;'>
        <td>nju</td>
        <td>njū</td>
        <td>njru</td>
        <td>njrū</td>
        <td>njli</td>
        <td>njlī</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඦු" onclick="onClick('vowel', 'u')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඦූ" onclick="onClick('vowel', 'ū')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඦෘ" onclick="onClick('vowel', 'ru')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඦෲ" onclick="onClick('vowel', 'rū')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඏ" onclick="onClick('vowel', 'li')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඐ" onclick="onClick('vowel', 'lī')" /></td>
    </tr>
    <tr style='font-weight:bold;'>
        <td>nje</td>
        <td>njē</td>
        <td>njai</td>
        <td>njo</td>
        <td>njō</td>
        <td>njau</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඦෙ" onclick="onClick('vowel', 'e')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඦේ" onclick="onClick('vowel', 'ē')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඦෛ" onclick="onClick('vowel', 'ai')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඦො" onclick="onClick('vowel', 'o')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඦෝ" onclick="onClick('vowel', 'ō')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඦෞ" onclick="onClick('vowel', 'au')"/></td>
    </tr>
    <tr style="margin-top:50px;">
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඦං" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඦඃ" /></td>
    </tr>
</table>
			  
			  </div>
			  
			  
			  			    <!--ta -->
			   
			      <div class="col-lg-6 text-left" id="welcomeDiv13"  style="display:none;">
			 <table class="table table-bordered">
    <tr style='font-weight:bold;'>
        <td>ta</td>
        <td>tā</td>
        <td>tæ</td>
        <td>tǣ</td>
        <td>ti</td>
        <td>tī</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px"  type="button" value="ට" onclick="onClick('vowel', 'a')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ටා" onclick="onClick('vowel', 'ā')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ටැ" onclick="onClick('vowel', 'æ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ටෑ" onclick="onClick('vowel', 'ǣ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ටි" onclick="onClick('vowel', 'i')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ටී" onclick="onClick('vowel', 'ī')" /></td>
    </tr>
    <tr style='font-weight:bold;'>
        <td>tu</td>
        <td>tū</td>
        <td>tru</td>
        <td>trū</td>
        <td>tli</td>
        <td>tlī</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ටු" onclick="onClick('vowel', 'u')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ටූ" onclick="onClick('vowel', 'ū')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ටෘ" onclick="onClick('vowel', 'ru')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ටෲ" onclick="onClick('vowel', 'rū')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඏ" onclick="onClick('vowel', 'li')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඐ" onclick="onClick('vowel', 'lī')" /></td>
    </tr>
    <tr style='font-weight:bold;'>
        <td>te</td>
        <td>tē</td>
        <td>tai</td>
        <td>to</td>
        <td>tō</td>
        <td>tau</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ටෙ" onclick="onClick('vowel', 'e')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ටේ" onclick="onClick('vowel', 'ē')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ටෛ" onclick="onClick('vowel', 'ai')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ටො" onclick="onClick('vowel', 'o')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ටෝ" onclick="onClick('vowel', 'ō')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ටෞ" onclick="onClick('vowel', 'au')"/></td>
    </tr>
    <tr style="margin-top:50px;">
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ටං" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ටඃ" /></td>
    </tr>
</table>
			  
			  </div>
			  
			  
			     <!--tha -->
			   
			      <div class="col-lg-6 text-left" id="welcomeDiv14"  style="display:none;">
			 <table class="table table-bordered">
    <tr style='font-weight:bold;'>
        <td>tha</td>
        <td>thā</td>
        <td>thæ</td>
        <td>thǣ</td>
        <td>thi</td>
        <td>thī</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px"  type="button" value="ඨ" onclick="onClick('vowel', 'a')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඨා" onclick="onClick('vowel', 'ā')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඨැ" onclick="onClick('vowel', 'æ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඨෑ" onclick="onClick('vowel', 'ǣ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඨි" onclick="onClick('vowel', 'i')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඨී" onclick="onClick('vowel', 'ī')" /></td>
    </tr>
    <tr style='font-weight:bold;'>
        <td>thu</td>
        <td>thū</td>
        <td>thru</td>
        <td>thrū</td>
        <td>thli</td>
        <td>thlī</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඨු" onclick="onClick('vowel', 'u')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඨූ" onclick="onClick('vowel', 'ū')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඨෘ" onclick="onClick('vowel', 'ru')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඨෲ" onclick="onClick('vowel', 'rū')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඏ" onclick="onClick('vowel', 'li')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඐ" onclick="onClick('vowel', 'lī')" /></td>
    </tr>
    <tr style='font-weight:bold;'>
        <td>the</td>
        <td>thē</td>
        <td>thai</td>
        <td>tho</td>
        <td>thō</td>
        <td>thau</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඨෙ" onclick="onClick('vowel', 'e')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඨේ" onclick="onClick('vowel', 'ē')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඨෛ" onclick="onClick('vowel', 'ai')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඨො" onclick="onClick('vowel', 'o')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඨෝ" onclick="onClick('vowel', 'ō')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඨෞ" onclick="onClick('vowel', 'au')"/></td>
    </tr>
    <tr style="margin-top:50px;">
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඨං" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඨඃ" /></td>
    </tr>
</table>
			  
			  </div>
			  
			  
			     <!--da -->
			   
			      <div class="col-lg-6 text-left" id="welcomeDiv15"  style="display:none;">
			 <table class="table table-bordered">
    <tr style='font-weight:bold;'>
        <td>da</td>
        <td>dā</td>
        <td>dæ</td>
        <td>dǣ</td>
        <td>di</td>
        <td>dī</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px"  type="button" value="ඩ" onclick="onClick('vowel', 'a')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඩා" onclick="onClick('vowel', 'ā')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඩැ" onclick="onClick('vowel', 'æ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඩෑ" onclick="onClick('vowel', 'ǣ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඩි" onclick="onClick('vowel', 'i')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඩී" onclick="onClick('vowel', 'ī')" /></td>
    </tr>
    <tr style='font-weight:bold;'>
        <td>du</td>
        <td>dū</td>
        <td>dru</td>
        <td>drū</td>
        <td>dli</td>
        <td>dlī</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඩු" onclick="onClick('vowel', 'u')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඩූ" onclick="onClick('vowel', 'ū')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඩෘ" onclick="onClick('vowel', 'ru')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඩෲ" onclick="onClick('vowel', 'rū')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඏ" onclick="onClick('vowel', 'li')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඐ" onclick="onClick('vowel', 'lī')" /></td>
    </tr>
    <tr style='font-weight:bold;'>
        <td>de</td>
        <td>dē</td>
        <td>dai</td>
        <td>do</td>
        <td>dō</td>
        <td>dau</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඩෙ" onclick="onClick('vowel', 'e')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඩේ" onclick="onClick('vowel', 'ē')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඩෛ" onclick="onClick('vowel', 'ai')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඩො" onclick="onClick('vowel', 'o')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඩෝ" onclick="onClick('vowel', 'ō')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඩෞ" onclick="onClick('vowel', 'au')"/></td>
    </tr>
    <tr style="margin-top:50px;">
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඩං" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඩඃ" /></td>
    </tr>
</table>
			  
			  </div>
			  
			  
			  		     <!--dha -->
			   
			      <div class="col-lg-6 text-left" id="welcomeDiv16"  style="display:none;">
			 <table class="table table-bordered">
    <tr style='font-weight:bold;'>
        <td>dha</td>
        <td>dhā</td>
        <td>dhæ</td>
        <td>dhǣ</td>
        <td>dhi</td>
        <td>dhī</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px"  type="button" value="ඪ" onclick="onClick('vowel', 'a')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඪා" onclick="onClick('vowel', 'ā')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඪැ" onclick="onClick('vowel', 'æ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඪෑ" onclick="onClick('vowel', 'ǣ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඪි" onclick="onClick('vowel', 'i')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඪී" onclick="onClick('vowel', 'ī')" /></td>
    </tr>
    <tr style='font-weight:bold;'>
        <td>dhu</td>
        <td>dhū</td>
        <td>dhru</td>
        <td>dhrū</td>
      <!--  <td>dhli</td>
        <td>dhlī</td>-->
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඪු" onclick="onClick('vowel', 'u')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඪූ" onclick="onClick('vowel', 'ū')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඪෘ" onclick="onClick('vowel', 'ru')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඪෲ" onclick="onClick('vowel', 'rū')" /></td>
        <!--<td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඏ" onclick="onClick('vowel', 'li')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඐ" onclick="onClick('vowel', 'lī')" /></td>-->
    </tr>
    <tr style='font-weight:bold;'>
        <td>dhe</td>
        <td>dhē</td>
        <td>dhai</td>
        <td>dho</td>
        <td>dhō</td>
        <td>dhau</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඪෙ" onclick="onClick('vowel', 'e')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඪේ" onclick="onClick('vowel', 'ē')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඪෛ" onclick="onClick('vowel', 'ai')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඪො" onclick="onClick('vowel', 'o')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඪෝ" onclick="onClick('vowel', 'ō')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඪෞ" onclick="onClick('vowel', 'au')"/></td>
    </tr>
   <!-- <tr style="margin-top:50px;">
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඪං" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඪඃ" /></td>
    </tr>-->
</table>
			  
			  </div>
			  
		

		  
			  		     <!--na -->
			   
			      <div class="col-lg-6 text-left" id="welcomeDiv17"  style="display:none;">
			 <table class="table table-bordered">
    <tr style='font-weight:bold;'>
        <td>na</td>
        <td>nā</td>
        <td>næ</td>
        <td>nǣ</td>
        <td>ni</td>
        <td>nī</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px"  type="button" value="ණ" onclick="onClick('vowel', 'a')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ණා" onclick="onClick('vowel', 'ā')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ණැ" onclick="onClick('vowel', 'æ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ණෑ" onclick="onClick('vowel', 'ǣ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ණි" onclick="onClick('vowel', 'i')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ණී" onclick="onClick('vowel', 'ī')" /></td>
    </tr>
    <tr style='font-weight:bold;'>
        <td>nu</td>
        <td>nū</td>
        <td>nru</td>
        <td>nrū</td>
        <!--<td>nli</td>
        <td>nlī</td>-->
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ණු" onclick="onClick('vowel', 'u')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ණූ" onclick="onClick('vowel', 'ū')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ණෘ" onclick="onClick('vowel', 'ru')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ණෲ" onclick="onClick('vowel', 'rū')" /></td>
       <!-- <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඏ" onclick="onClick('vowel', 'li')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඐ" onclick="onClick('vowel', 'lī')" /></td>-->
    </tr>
    <tr style='font-weight:bold;'>
        <td>ne</td>
        <td>nē</td>
        <td>nai</td>
        <td>no</td>
        <td>nō</td>
        <td>nau</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ණෙ" onclick="onClick('vowel', 'e')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ණේ" onclick="onClick('vowel', 'ē')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ණෛ" onclick="onClick('vowel', 'ai')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ණො" onclick="onClick('vowel', 'o')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ණෝ" onclick="onClick('vowel', 'ō')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ණෞ" onclick="onClick('vowel', 'au')"/></td>
    </tr>
   <!-- <tr style="margin-top:50px;">
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ණං" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ණඃ" /></td>
    </tr>-->
</table>
			  
			  </div>
			  		
					
					
			  		     <!--nda -->
			   
			      <div class="col-lg-6 text-left" id="welcomeDiv18"  style="display:none;">
			 <table class="table table-bordered">
    <tr style='font-weight:bold;'>
        <td>nda</td>
        <td>ndā</td>
        <td>ndæ</td>
        <td>ndǣ</td>
        <td>ndi</td>
        <td>ndī</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px"  type="button" value="ඬ" onclick="onClick('vowel', 'a')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඬා" onclick="onClick('vowel', 'ā')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඬැ" onclick="onClick('vowel', 'æ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඬෑ" onclick="onClick('vowel', 'ǣ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඬි" onclick="onClick('vowel', 'i')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඬී" onclick="onClick('vowel', 'ī')" /></td>
    </tr>
    <tr style='font-weight:bold;'>
        <td>ndu</td>
        <td>ndū</td>
        <td>ndru</td>
        <td>ndrū</td>
       <!-- <td>ndli</td>
        <td>ndlī</td>-->
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඬු" onclick="onClick('vowel', 'u')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඬූ" onclick="onClick('vowel', 'ū')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඬෘ" onclick="onClick('vowel', 'ru')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඬෲ" onclick="onClick('vowel', 'rū')" /></td>
        <!--<td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඏ" onclick="onClick('vowel', 'li')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඐ" onclick="onClick('vowel', 'lī')" /></td>-->
    </tr>
    <tr style='font-weight:bold;'>
        <td>nde</td>
        <td>ndē</td>
        <td>ndai</td>
        <td>ndo</td>
        <td>ndō</td>
        <td>ndau</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඬෙ" onclick="onClick('vowel', 'e')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඬේ" onclick="onClick('vowel', 'ē')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඬෛ" onclick="onClick('vowel', 'ai')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඬො" onclick="onClick('vowel', 'o')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඬෝ" onclick="onClick('vowel', 'ō')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඬෞ" onclick="onClick('vowel', 'au')"/></td>
    </tr>
   <!-- <tr style="margin-top:50px;">
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඬං" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඬඃ" /></td>
    </tr>-->
</table>
			  
			  </div>
					
					
							  		     <!--ta -->
			   
			      <div class="col-lg-6 text-left" id="welcomeDiv19"  style="display:none;">
			 <table class="table table-bordered">
    <tr style='font-weight:bold;'>
        <td>ta</td>
        <td>tā</td>
        <td>tæ</td>
        <td>tǣ</td>
        <td>ti</td>
        <td>tī</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px"  type="button" value="ත" onclick="onClick('vowel', 'a')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="තා" onclick="onClick('vowel', 'ā')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="තැ" onclick="onClick('vowel', 'æ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="තෑ" onclick="onClick('vowel', 'ǣ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ති" onclick="onClick('vowel', 'i')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="තී" onclick="onClick('vowel', 'ī')" /></td>
    </tr>
    <tr style='font-weight:bold;'>
        <td>tu</td>
        <td>tū</td>
        <td>tru</td>
        <td>trū</td>
       <!-- <td>tli</td>
        <td>tlī</td>-->
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="තු" onclick="onClick('vowel', 'u')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="තූ" onclick="onClick('vowel', 'ū')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="තෘ" onclick="onClick('vowel', 'ru')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="තෲ" onclick="onClick('vowel', 'rū')" /></td>
       <!-- <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඏ" onclick="onClick('vowel', 'li')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඐ" onclick="onClick('vowel', 'lī')" /></td>-->
    </tr>
    <tr style='font-weight:bold;'>
        <td>te</td>
        <td>tē</td>
        <td>tai</td>
        <td>to</td>
        <td>tō</td>
        <td>tau</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="තෙ" onclick="onClick('vowel', 'e')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="තේ" onclick="onClick('vowel', 'ē')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="තෛ" onclick="onClick('vowel', 'ai')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="තො" onclick="onClick('vowel', 'o')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="තෝ" onclick="onClick('vowel', 'ō')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="තෞ" onclick="onClick('vowel', 'au')"/></td>
    </tr>
   <!-- <tr style="margin-top:50px;">
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="තං" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="තඃ" /></td>
    </tr>-->
</table>
			  
			  </div>
					
											  		     <!--tha -->
			   
			      <div class="col-lg-6 text-left" id="welcomeDiv20"  style="display:none;">
			 <table class="table table-bordered">
    <tr style='font-weight:bold;'>
        <td>tha</td>
        <td>thā</td>
        <td>thæ</td>
        <td>thǣ</td>
        <td>thi</td>
        <td>thī</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px"  type="button" value="ථ" onclick="onClick('vowel', 'a')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ථා" onclick="onClick('vowel', 'ā')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ථැ" onclick="onClick('vowel', 'æ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ථෑ" onclick="onClick('vowel', 'ǣ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ථි" onclick="onClick('vowel', 'i')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ථී" onclick="onClick('vowel', 'ī')" /></td>
    </tr>
    <tr style='font-weight:bold;'>
        <td>thu</td>
        <td>thū</td>
        <td>thru</td>
        <td>thrū</td>
       <!-- <td>thli</td>
        <td>thlī</td>-->
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ථු" onclick="onClick('vowel', 'u')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ථූ" onclick="onClick('vowel', 'ū')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ථෘ" onclick="onClick('vowel', 'ru')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ථෲ" onclick="onClick('vowel', 'rū')" /></td>
       <!-- <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඏ" onclick="onClick('vowel', 'li')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඐ" onclick="onClick('vowel', 'lī')" /></td>-->
    </tr>
    <tr style='font-weight:bold;'>
        <td>the</td>
        <td>thē</td>
        <td>thai</td>
        <td>tho</td>
        <td>thō</td>
        <td>thau</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ථෙ" onclick="onClick('vowel', 'e')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ථේ" onclick="onClick('vowel', 'ē')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ථෛ" onclick="onClick('vowel', 'ai')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ථො" onclick="onClick('vowel', 'o')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ථෝ" onclick="onClick('vowel', 'ō')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ථෞ" onclick="onClick('vowel', 'au')"/></td>
    </tr>
    <!--<tr style="margin-top:50px;">
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ථං" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ථඃ" /></td>
    </tr>-->
</table>
			  
			  </div>
					
					
												  		     <!--da -->
			   
			      <div class="col-lg-6 text-left" id="welcomeDiv21"  style="display:none;">
			 <table class="table table-bordered">
    <tr style='font-weight:bold;'>
        <td>da</td>
        <td>dā</td>
        <td>dæ</td>
        <td>dǣ</td>
        <td>di</td>
        <td>dī</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px"  type="button" value="ද" onclick="onClick('vowel', 'a')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="දා" onclick="onClick('vowel', 'ā')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="දැ" onclick="onClick('vowel', 'æ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="දෑ" onclick="onClick('vowel', 'ǣ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="දි" onclick="onClick('vowel', 'i')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="දී" onclick="onClick('vowel', 'ī')" /></td>
    </tr>
    <tr style='font-weight:bold;'>
        <td>du</td>
        <td>dū</td>
        <td>dru</td>
        <td>drū</td>
      <!--  <td>dli</td>
        <td>dlī</td>-->
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="දු" onclick="onClick('vowel', 'u')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="දූ" onclick="onClick('vowel', 'ū')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="දෘ" onclick="onClick('vowel', 'ru')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="දෲ" onclick="onClick('vowel', 'rū')" /></td>
      <!--  <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඏ" onclick="onClick('vowel', 'li')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඐ" onclick="onClick('vowel', 'lī')" /></td>-->
    </tr>
    <tr style='font-weight:bold;'>
        <td>de</td>
        <td>dē</td>
        <td>dai</td>
        <td>do</td>
        <td>dō</td>
        <td>dau</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="දෙ" onclick="onClick('vowel', 'e')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="දේ" onclick="onClick('vowel', 'ē')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="දෛ" onclick="onClick('vowel', 'ai')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="දො" onclick="onClick('vowel', 'o')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="දෝ" onclick="onClick('vowel', 'ō')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="දෞ" onclick="onClick('vowel', 'au')"/></td>
    </tr>
   <!-- <tr style="margin-top:50px;">
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="දං" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="දඃ" /></td>
    </tr>-->
</table>
			  
			  </div>			
					
							
					
												  		     <!--dha -->
			   
			      <div class="col-lg-6 text-left" id="welcomeDiv22"  style="display:none;">
			 <table class="table table-bordered">
    <tr style='font-weight:bold;'>
        <td>dha</td>
        <td>dhā</td>
        <td>dhæ</td>
        <td>dhǣ</td>
        <td>dhi</td>
        <td>dhī</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px"  type="button" value="ධ" onclick="onClick('vowel', 'a')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ධා" onclick="onClick('vowel', 'ā')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ධැ" onclick="onClick('vowel', 'æ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ධෑ" onclick="onClick('vowel', 'ǣ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ධි" onclick="onClick('vowel', 'i')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ධී" onclick="onClick('vowel', 'ī')" /></td>
    </tr>
    <tr style='font-weight:bold;'>
        <td>dhu</td>
        <td>dhū</td>
        <td>dhru</td>
        <td>dhrū</td>
        <!--<td>dhli</td>
        <td>dhlī</td>-->
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ධු" onclick="onClick('vowel', 'u')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ධූ" onclick="onClick('vowel', 'ū')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ධෘ" onclick="onClick('vowel', 'ru')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ධෲ" onclick="onClick('vowel', 'rū')" /></td>
       <!-- <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඏ" onclick="onClick('vowel', 'li')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඐ" onclick="onClick('vowel', 'lī')" /></td>-->
    </tr>
    <tr style='font-weight:bold;'>
        <td>dhe</td>
        <td>dhē</td>
        <td>dhai</td>
        <td>dho</td>
        <td>dhō</td>
        <td>dhau</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ධෙ" onclick="onClick('vowel', 'e')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ධේ" onclick="onClick('vowel', 'ē')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ධෛ" onclick="onClick('vowel', 'ai')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ධො" onclick="onClick('vowel', 'o')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ධෝ" onclick="onClick('vowel', 'ō')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ධෞ" onclick="onClick('vowel', 'au')"/></td>
    </tr>
   <!-- <tr style="margin-top:50px;">
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ධං" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ධඃ" /></td>
    </tr>-->
</table>
			  
			  </div>	
		

						
												  		     <!--na -->
			   
			      <div class="col-lg-6 text-left" id="welcomeDiv23"  style="display:none;">
			 <table class="table table-bordered">
    <tr style='font-weight:bold;'>
        <td>na</td>
        <td>nā</td>
        <td>næ</td>
        <td>nǣ</td>
        <td>ni</td>
        <td>nī</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px"  type="button" value="න" onclick="onClick('vowel', 'a')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="නා" onclick="onClick('vowel', 'ā')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="නැ" onclick="onClick('vowel', 'æ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="නෑ" onclick="onClick('vowel', 'ǣ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="නි" onclick="onClick('vowel', 'i')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="නී" onclick="onClick('vowel', 'ī')" /></td>
    </tr>
    <tr style='font-weight:bold;'>
        <td>nu</td>
        <td>nū</td>
        <td>nru</td>
        <td>nrū</td>
       <!-- <td>nli</td>
        <td>nlī</td>-->
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="නු" onclick="onClick('vowel', 'u')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="නූ" onclick="onClick('vowel', 'ū')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="නෘ" onclick="onClick('vowel', 'ru')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="නෲ" onclick="onClick('vowel', 'rū')" /></td>
        <!--<td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඏ" onclick="onClick('vowel', 'li')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඐ" onclick="onClick('vowel', 'lī')" /></td>-->
    </tr>
    <tr style='font-weight:bold;'>
        <td>ne</td>
        <td>nē</td>
        <td>nai</td>
        <td>no</td>
        <td>nō</td>
        <td>nau</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="නෙ" onclick="onClick('vowel', 'e')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="නේ" onclick="onClick('vowel', 'ē')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="නෛ" onclick="onClick('vowel', 'ai')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="නො" onclick="onClick('vowel', 'o')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="නෝ" onclick="onClick('vowel', 'ō')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="නෞ" onclick="onClick('vowel', 'au')"/></td>
    </tr>
   <!-- <tr style="margin-top:50px;">
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="නං" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="නඃ" /></td>
    </tr>-->
</table>
			  
			  </div>	



						
												  		     <!--nda -->
			   
			      <div class="col-lg-6 text-left" id="welcomeDiv24"  style="display:none;">
			 <table class="table table-bordered">
    <tr style='font-weight:bold;'>
        <td>nda</td>
        <td>ndā</td>
        <td>ndæ</td>
        <td>ndǣ</td>
        <td>ndi</td>
        <td>ndī</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px"  type="button" value="ඳ" onclick="onClick('vowel', 'a')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඳා" onclick="onClick('vowel', 'ā')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඳැ" onclick="onClick('vowel', 'æ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඳෑ" onclick="onClick('vowel', 'ǣ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඳි" onclick="onClick('vowel', 'i')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඳී" onclick="onClick('vowel', 'ī')" /></td>
    </tr>
    <tr style='font-weight:bold;'>
        <td>ndu</td>
        <td>ndū</td>
        <td>ndru</td>
        <td>ndrū</td>
       <!-- <td>ndli</td>
        <td>ndlī</td>-->
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඳු" onclick="onClick('vowel', 'u')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඳූ" onclick="onClick('vowel', 'ū')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඳෘ" onclick="onClick('vowel', 'ru')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඳෲ" onclick="onClick('vowel', 'rū')" /></td>
       <!-- <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඏ" onclick="onClick('vowel', 'li')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඐ" onclick="onClick('vowel', 'lī')" /></td>-->
    </tr>
    <tr style='font-weight:bold;'>
        <td>nde</td>
        <td>ndē</td>
        <td>ndai</td>
        <td>ndo</td>
        <td>ndō</td>
        <td>ndau</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඳෙ" onclick="onClick('vowel', 'e')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඳේ" onclick="onClick('vowel', 'ē')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඳෛ" onclick="onClick('vowel', 'ai')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඳො" onclick="onClick('vowel', 'o')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඳෝ" onclick="onClick('vowel', 'ō')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඳෞ" onclick="onClick('vowel', 'au')"/></td>
    </tr>
   <!-- <tr style="margin-top:50px;">
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඳං" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඳඃ" /></td>
    </tr>-->
</table>
			  
			  </div>	


			  
			  						
												  		     <!--pa -->
			   
			      <div class="col-lg-6 text-left" id="welcomeDiv25"  style="display:none;">
			 <table class="table table-bordered">
    <tr style='font-weight:bold;'>
        <td>pa</td>
        <td>pā</td>
        <td>pæ</td>
        <td>pǣ</td>
        <td>pi</td>
        <td>pī</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px"  type="button" value="ප" onclick="onClick('vowel', 'a')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="පා" onclick="onClick('vowel', 'ā')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="පැ" onclick="onClick('vowel', 'æ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="පෑ" onclick="onClick('vowel', 'ǣ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="පි" onclick="onClick('vowel', 'i')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="පී" onclick="onClick('vowel', 'ī')" /></td>
    </tr>
    <tr style='font-weight:bold;'>
        <td>pu</td>
        <td>pū</td>
        <td>pru</td>
        <td>prū</td>
       <!-- <td>pli</td>
        <td>plī</td>-->
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="පු" onclick="onClick('vowel', 'u')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="පූ" onclick="onClick('vowel', 'ū')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="පෘ" onclick="onClick('vowel', 'ru')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="පෲ" onclick="onClick('vowel', 'rū')" /></td>
        <!--<td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඏ" onclick="onClick('vowel', 'li')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඐ" onclick="onClick('vowel', 'lī')" /></td>-->
    </tr>
    <tr style='font-weight:bold;'>
        <td>pe</td>
        <td>pē</td>
        <td>pai</td>
        <td>po</td>
        <td>pō</td>
        <td>pau</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="පෙ" onclick="onClick('vowel', 'e')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="පේ" onclick="onClick('vowel', 'ē')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="පෛ" onclick="onClick('vowel', 'ai')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="පො" onclick="onClick('vowel', 'o')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="පෝ" onclick="onClick('vowel', 'ō')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="පෞ" onclick="onClick('vowel', 'au')"/></td>
    </tr>
   <!-- <tr style="margin-top:50px;">
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="පං" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="පඃ" /></td>
    </tr>-->
</table>
			  
			  </div>



			  
			  						
												  		     <!--pha -->
			   
			      <div class="col-lg-6 text-left" id="welcomeDiv26"  style="display:none;">
			 <table class="table table-bordered">
    <tr style='font-weight:bold;'>
        <td>pha</td>
        <td>phā</td>
        <td>phæ</td>
        <td>phǣ</td>
        <td>phi</td>
        <td>phī</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px"  type="button" value="ඵ" onclick="onClick('vowel', 'a')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඵා" onclick="onClick('vowel', 'ā')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඵැ" onclick="onClick('vowel', 'æ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඵෑ" onclick="onClick('vowel', 'ǣ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඵි" onclick="onClick('vowel', 'i')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඵී" onclick="onClick('vowel', 'ī')" /></td>
    </tr>
    <tr style='font-weight:bold;'>
        <td>phu</td>
        <td>phū</td>
        <td>phru</td>
        <td>phrū</td>
       <!-- <td>phli</td>
        <td>phlī</td>-->
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඵු" onclick="onClick('vowel', 'u')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඵූ" onclick="onClick('vowel', 'ū')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඵෘ" onclick="onClick('vowel', 'ru')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඵෲ" onclick="onClick('vowel', 'rū')" /></td>
        <!--<td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඏ" onclick="onClick('vowel', 'li')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඐ" onclick="onClick('vowel', 'lī')" /></td>-->
    </tr>
    <tr style='font-weight:bold;'>
        <td>phe</td>
        <td>phē</td>
        <td>phai</td>
        <td>pho</td>
        <td>phō</td>
        <td>phau</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඵෙ" onclick="onClick('vowel', 'e')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඵේ" onclick="onClick('vowel', 'ē')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඵෛ" onclick="onClick('vowel', 'ai')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඵො" onclick="onClick('vowel', 'o')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඵෝ" onclick="onClick('vowel', 'ō')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඵෞ" onclick="onClick('vowel', 'au')"/></td>
    </tr>
   <!-- <tr style="margin-top:50px;">
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඵං" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඵඃ" /></td>
    </tr>-->
</table>
			  
			  </div>
		
			  						
												  		     <!--ba -->
			   
			      <div class="col-lg-6 text-left" id="welcomeDiv27"  style="display:none;">
			 <table class="table table-bordered">
    <tr style='font-weight:bold;'>
        <td>ba</td>
        <td>bā</td>
        <td>bæ</td>
        <td>bǣ</td>
        <td>bi</td>
        <td>bī</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px"  type="button" value="බ" onclick="onClick('vowel', 'ba')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="බා" onclick="onClick('vowel', 'ba')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="බැ" onclick="onClick('vowel', 'be')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="බෑ" onclick="onClick('vowel', 'bee')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="බි" onclick="onClick('vowel', 'bi')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="බී" onclick="onClick('vowel', 'bii')" /></td>
    </tr>
    <tr style='font-weight:bold;'>
        <td>bu</td>
        <td>bū</td>
        <td>bru</td>
        <td>brū</td>
       <!-- <td>bli</td>
        <td>blī</td>-->
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="බු" onclick="onClick('vowel', 'bu')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="බූ" onclick="onClick('vowel', 'buu')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="බෘ" onclick="onClick('vowel', 'bru')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="බෲ" onclick="onClick('vowel', 'bru')" /></td>
      <!--  <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඏ" onclick="onClick('vowel', 'li')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඐ" onclick="onClick('vowel', 'lī')" /></td>-->
    </tr>
    <tr style='font-weight:bold;'>
        <td>be</td>
        <td>bē</td>
        <td>bai</td>
        <td>bo</td>
        <td>bō</td>
        <td>bau</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="බෙ" onclick="onClick('vowel', 'bay')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="බේ" onclick="onClick('vowel', 'bayi')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="බෛ" onclick="onClick('vowel', 'bau')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="බො" onclick="onClick('vowel', 'bo')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="බෝ" onclick="onClick('vowel', 'bo')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="බෞ" onclick="onClick('vowel', 'bur')"/></td>
    </tr>
   <!-- <tr style="margin-top:50px;">
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="බං" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="බඃ" /></td>
    </tr>-->
</table>
			  
			  </div>
		
		
			  						
												  		     <!--bha -->
			   
			      <div class="col-lg-6 text-left" id="welcomeDiv28"  style="display:none;">
			 <table class="table table-bordered">
    <tr style='font-weight:bold;'>
        <td>bha</td>
        <td>bhā</td>
        <td>bhæ</td>
        <td>bhǣ</td>
        <td>bhi</td>
        <td>bhī</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px"  type="button" value="භ" onclick="onClick('vowel', 'a')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="භා" onclick="onClick('vowel', 'ā')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="භැ" onclick="onClick('vowel', 'æ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="භෑ" onclick="onClick('vowel', 'ǣ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="භි" onclick="onClick('vowel', 'i')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="භී" onclick="onClick('vowel', 'ī')" /></td>
    </tr>
    <tr style='font-weight:bold;'>
        <td>bhu</td>
        <td>bhū</td>
        <td>bhru</td>
        <td>bhrū</td>
       <!-- <td>bhli</td>
        <td>bhlī</td>-->
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="භු" onclick="onClick('vowel', 'u')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="භූ" onclick="onClick('vowel', 'ū')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="භෘ" onclick="onClick('vowel', 'ru')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="භෲ" onclick="onClick('vowel', 'rū')" /></td>
       <!-- <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඏ" onclick="onClick('vowel', 'li')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඐ" onclick="onClick('vowel', 'lī')" /></td>-->
    </tr>
    <tr style='font-weight:bold;'>
        <td>bhe</td>
        <td>bhē</td>
        <td>bhai</td>
        <td>bho</td>
        <td>bhō</td>
        <td>bhau</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="භෙ" onclick="onClick('vowel', 'e')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="භේ" onclick="onClick('vowel', 'ē')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="භෛ" onclick="onClick('vowel', 'ai')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="භො" onclick="onClick('vowel', 'o')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="භෝ" onclick="onClick('vowel', 'ō')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="භෞ" onclick="onClick('vowel', 'au')"/></td>
    </tr>
   <!-- <tr style="margin-top:50px;">
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="භං" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="භඃ" /></td>
    </tr>-->
</table>
			  
			  </div>
		
	
		  						
												  		     <!--ma -->
			   
			      <div class="col-lg-6 text-left" id="welcomeDiv29"  style="display:none;">
			 <table class="table table-bordered">
    <tr style='font-weight:bold;'>
        <td>ma</td>
        <td>mā</td>
        <td>mæ</td>
        <td>mǣ</td>
        <td>mi</td>
        <td>mī</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px"  type="button" value="ම" onclick="onClick('vowel', 'a')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="මා" onclick="onClick('vowel', 'ā')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="මැ" onclick="onClick('vowel', 'æ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="මෑ" onclick="onClick('vowel', 'ǣ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="මි" onclick="onClick('vowel', 'i')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="මී" onclick="onClick('vowel', 'ī')" /></td>
    </tr>
    <tr style='font-weight:bold;'>
        <td>mu</td>
        <td>mū</td>
        <td>mru</td>
        <td>mrū</td>
        <!--<td>mli</td>
        <td>mlī</td>-->
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="මු" onclick="onClick('vowel', 'u')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="මූ" onclick="onClick('vowel', 'ū')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="මෘ" onclick="onClick('vowel', 'ru')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="මෲ" onclick="onClick('vowel', 'rū')" /></td>
        <!--<td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඏ" onclick="onClick('vowel', 'li')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඐ" onclick="onClick('vowel', 'lī')" /></td>-->
    </tr>
    <tr style='font-weight:bold;'>
        <td>me</td>
        <td>mē</td>
        <td>mai</td>
        <td>mo</td>
        <td>mō</td>
        <td>mau</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="මෙ" onclick="onClick('vowel', 'e')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="මේ" onclick="onClick('vowel', 'ē')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="මෛ" onclick="onClick('vowel', 'ai')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="මො" onclick="onClick('vowel', 'o')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="මෝ" onclick="onClick('vowel', 'ō')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="මෞ" onclick="onClick('vowel', 'au')"/></td>
    </tr>
  <!--  <tr style="margin-top:50px;">
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="මං" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="මඃ" /></td>
    </tr>-->
</table>
			  
			  </div>	
		
		
		
													  		     <!--mda -->
			   
			      <div class="col-lg-6 text-left" id="welcomeDiv30"  style="display:none;">
			 <table class="table table-bordered">
    <tr style='font-weight:bold;'>
        <td>mda</td>
        <td>mdā</td>
        <td>mdæ</td>
        <td>mdǣ</td>
        <td>mdi</td>
        <td>mdī</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px"  type="button" value="ඹ" onclick="onClick('vowel', 'a')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඹා" onclick="onClick('vowel', 'ā')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඹැ" onclick="onClick('vowel', 'æ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඹෑ" onclick="onClick('vowel', 'ǣ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඹි" onclick="onClick('vowel', 'i')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඹී" onclick="onClick('vowel', 'ī')" /></td>
    </tr>
    <tr style='font-weight:bold;'>
        <td>mdu</td>
        <td>mdū</td>
        <td>mdru</td>
        <td>mdrū</td>
       <!-- <td>mdli</td>
        <td>mdlī</td>-->
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඹු" onclick="onClick('vowel', 'u')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඹූ" onclick="onClick('vowel', 'ū')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඹෘ" onclick="onClick('vowel', 'ru')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඹෲ" onclick="onClick('vowel', 'rū')" /></td>
       <!-- <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඏ" onclick="onClick('vowel', 'li')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඐ" onclick="onClick('vowel', 'lī')" /></td>-->
    </tr>
    <tr style='font-weight:bold;'>
        <td>mde</td>
        <td>mdē</td>
        <td>mdai</td>
        <td>mdo</td>
        <td>mdō</td>
        <td>mdau</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඹෙ" onclick="onClick('vowel', 'e')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඹේ" onclick="onClick('vowel', 'ē')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඹෛ" onclick="onClick('vowel', 'ai')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඹො" onclick="onClick('vowel', 'o')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඹෝ" onclick="onClick('vowel', 'ō')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඹෞ" onclick="onClick('vowel', 'au')"/></td>
    </tr>
   <!-- <tr style="margin-top:50px;">
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඹං" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඹඃ" /></td>
    </tr>-->
</table>
			  
			  </div>	
		
		
		
													  		     <!--ya -->
			   
			      <div class="col-lg-6 text-left" id="welcomeDiv31"  style="display:none;">
			 <table class="table table-bordered">
    <tr style='font-weight:bold;'>
        <td>ya</td>
        <td>yā</td>
        <td>yæ</td>
        <td>yǣ</td>
        <td>yi</td>
        <td>yī</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px"  type="button" value="ය" onclick="onClick('vowel', 'a')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="යා" onclick="onClick('vowel', 'ā')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="යැ" onclick="onClick('vowel', 'æ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="යෑ" onclick="onClick('vowel', 'ǣ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="යි" onclick="onClick('vowel', 'i')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="යී" onclick="onClick('vowel', 'ī')" /></td>
    </tr>
    <tr style='font-weight:bold;'>
        <td>yu</td>
        <td>yū</td>
        <td>yru</td>
        <td>yrū</td>
       <!-- <td>yli</td>
        <td>ylī</td>-->
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="යු" onclick="onClick('vowel', 'u')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="යූ" onclick="onClick('vowel', 'ū')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="යෘ" onclick="onClick('vowel', 'ru')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="යෲ" onclick="onClick('vowel', 'rū')" /></td>
       <!-- <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඏ" onclick="onClick('vowel', 'li')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඐ" onclick="onClick('vowel', 'lī')" /></td>-->
    </tr>
    <tr style='font-weight:bold;'>
        <td>ye</td>
        <td>yē</td>
        <td>yai</td>
        <td>yo</td>
        <td>yō</td>
        <td>yau</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="යෙ" onclick="onClick('vowel', 'e')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="යේ" onclick="onClick('vowel', 'ē')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="යෛ" onclick="onClick('vowel', 'ai')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="යො" onclick="onClick('vowel', 'o')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="යෝ" onclick="onClick('vowel', 'ō')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="යෞ" onclick="onClick('vowel', 'au')"/></td>
    </tr>
   <!-- <tr style="margin-top:50px;">
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="යං" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="යඃ" /></td>
    </tr>-->
</table>
			  
			  </div>	
		
		
		
													  		     <!--ra -->
			   
			      <div class="col-lg-6 text-left" id="welcomeDiv32"  style="display:none;">
			 <table class="table table-bordered">
    <tr style='font-weight:bold;'>
        <td>ra</td>
        <td>rā</td>
        <td>ræ</td>
        <td>rǣ</td>
        <td>ri</td>
        <td>rī</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px"  type="button" value="ර" onclick="onClick('vowel', 'a')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="රා" onclick="onClick('vowel', 'ā')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="රැ" onclick="onClick('vowel', 'æ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="රෑ" onclick="onClick('vowel', 'ǣ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="රි" onclick="onClick('vowel', 'i')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="රී" onclick="onClick('vowel', 'ī')" /></td>
    </tr>
    <tr style='font-weight:bold;'>
        <td>ru</td>
        <td>rū</td>
        <td>rru</td>
        <td>rrū</td>
       <!-- <td>rli</td>
        <td>rlī</td>-->
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="රු" onclick="onClick('vowel', 'u')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="රූ" onclick="onClick('vowel', 'ū')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="රෘ" onclick="onClick('vowel', 'ru')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="රෲ" onclick="onClick('vowel', 'rū')" /></td>
       <!-- <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඏ" onclick="onClick('vowel', 'li')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඐ" onclick="onClick('vowel', 'lī')" /></td>-->
    </tr>
    <tr style='font-weight:bold;'>
        <td>re</td>
        <td>rē</td>
        <td>rai</td>
        <td>ro</td>
        <td>rō</td>
        <td>rau</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="රෙ" onclick="onClick('vowel', 'e')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="රේ" onclick="onClick('vowel', 'ē')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="රෛ" onclick="onClick('vowel', 'ai')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="රො" onclick="onClick('vowel', 'o')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="රෝ" onclick="onClick('vowel', 'ō')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="රෞ" onclick="onClick('vowel', 'au')"/></td>
    </tr>
   <!-- <tr style="margin-top:50px;">
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="රං" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="රඃ" /></td>
    </tr>-->
</table>
			  
			  </div>	
		
														  		     <!--la -->
			   
			      <div class="col-lg-6 text-left" id="welcomeDiv33"  style="display:none;">
			 <table class="table table-bordered">
    <tr style='font-weight:bold;'>
        <td>la</td>
        <td>lā</td>
        <td>læ</td>
        <td>lǣ</td>
        <td>li</td>
        <td>lī</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px"  type="button" value="ල" onclick="onClick('vowel', 'a')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ලා" onclick="onClick('vowel', 'ā')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ලැ" onclick="onClick('vowel', 'æ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ලෑ" onclick="onClick('vowel', 'ǣ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ලි" onclick="onClick('vowel', 'i')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ලී" onclick="onClick('vowel', 'ī')" /></td>
    </tr>
    <tr style='font-weight:bold;'>
        <td>lu</td>
        <td>lū</td>
        <td>lru</td>
        <td>lrū</td>
       <!-- <td>lli</td>
        <td>llī</td>-->
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ලු" onclick="onClick('vowel', 'u')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ලූ" onclick="onClick('vowel', 'ū')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ලෘ" onclick="onClick('vowel', 'ru')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ලෲ" onclick="onClick('vowel', 'rū')" /></td>
       <!-- <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඏ" onclick="onClick('vowel', 'li')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඐ" onclick="onClick('vowel', 'lī')" /></td>-->
    </tr>
    <tr style='font-weight:bold;'>
        <td>le</td>
        <td>lē</td>
        <td>lai</td>
        <td>lo</td>
        <td>lō</td>
        <td>lau</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ලෙ" onclick="onClick('vowel', 'e')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ලේ" onclick="onClick('vowel', 'ē')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ලෛ" onclick="onClick('vowel', 'ai')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ලො" onclick="onClick('vowel', 'o')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ලෝ" onclick="onClick('vowel', 'ō')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ලෞ" onclick="onClick('vowel', 'au')"/></td>
    </tr>
  <!--  <tr style="margin-top:50px;">
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ලං" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ලඃ" /></td>
    </tr>-->
</table>
			  
			  </div>
		
																  		     <!--va -->
			   
			      <div class="col-lg-6 text-left" id="welcomeDiv34"  style="display:none;">
			 <table class="table table-bordered">
    <tr style='font-weight:bold;'>
        <td>va</td>
        <td>vā</td>
        <td>væ</td>
        <td>vǣ</td>
        <td>vi</td>
        <td>vī</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px"  type="button" value="ව" onclick="onClick('vowel', 'a')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="වා" onclick="onClick('vowel', 'ā')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="වැ" onclick="onClick('vowel', 'æ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="වෑ" onclick="onClick('vowel', 'ǣ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="වි" onclick="onClick('vowel', 'i')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="වී" onclick="onClick('vowel', 'ī')" /></td>
    </tr>
    <tr style='font-weight:bold;'>
        <td>vu</td>
        <td>vū</td>
        <td>vru</td>
        <td>vrū</td>
      <!--  <td>vli</td>
        <td>vlī</td>-->
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="වු" onclick="onClick('vowel', 'u')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="වූ" onclick="onClick('vowel', 'ū')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="වෘ" onclick="onClick('vowel', 'ru')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="වෲ" onclick="onClick('vowel', 'rū')" /></td>
       <!-- <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඏ" onclick="onClick('vowel', 'li')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඐ" onclick="onClick('vowel', 'lī')" /></td>-->
    </tr>
    <tr style='font-weight:bold;'>
        <td>ve</td>
        <td>vē</td>
        <td>vai</td>
        <td>vo</td>
        <td>vō</td>
        <td>vau</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="වෙ" onclick="onClick('vowel', 'e')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="වේ" onclick="onClick('vowel', 'ē')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="වෛ" onclick="onClick('vowel', 'ai')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="වො" onclick="onClick('vowel', 'o')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="වෝ" onclick="onClick('vowel', 'ō')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="වෞ" onclick="onClick('vowel', 'au')"/></td>
    </tr>
   <!-- <tr style="margin-top:50px;">
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="වං" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="වඃ" /></td>
    </tr>-->
</table>
			  
			  </div>
		
			
																  		     <!--sa -->
			   
			      <div class="col-lg-6 text-left" id="welcomeDiv35"  style="display:none;">
				  
			 <table class="table table-bordered">
    <tr style='font-weight:bold;'>
        <td>sa</td>
        <td>sā</td>
        <td>sæ</td>
        <td>sǣ</td>
        <td>si</td>
        <td>sī</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px"  type="button" value="ශ" onclick="onClick('vowel', 'a')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ශා" onclick="onClick('vowel', 'ā')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ශැ" onclick="onClick('vowel', 'æ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ශෑ" onclick="onClick('vowel', 'ǣ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ශි" onclick="onClick('vowel', 'i')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ශී" onclick="onClick('vowel', 'ī')" /></td>
    </tr>
    <tr style='font-weight:bold;'>
        <td>su</td>
        <td>sū</td>
        <td>sru</td>
        <td>srū</td>
        <!--<td>sli</td>
        <td>slī</td>-->
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ශු" onclick="onClick('vowel', 'u')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ශූ" onclick="onClick('vowel', 'ū')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ශෘ" onclick="onClick('vowel', 'ru')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ශෲ" onclick="onClick('vowel', 'rū')" /></td>
      <!--  <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඏ" onclick="onClick('vowel', 'li')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඐ" onclick="onClick('vowel', 'lī')" /></td>-->
    </tr>
    <tr style='font-weight:bold;'>
        <td>se</td>
        <td>sē</td>
        <td>sai</td>
        <td>so</td>
        <td>sō</td>
        <td>sau</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ශෙ" onclick="onClick('vowel', 'e')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ශේ" onclick="onClick('vowel', 'ē')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ශෛ" onclick="onClick('vowel', 'ai')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ශො" onclick="onClick('vowel', 'o')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ශෝ" onclick="onClick('vowel', 'ō')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ශෞ" onclick="onClick('vowel', 'au')"/></td>
    </tr>
   <!-- <tr style="margin-top:50px;">
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ශං" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ශඃ" /></td>
    </tr>-->
</table>
			  
			  </div>
		
		
		
																		  		     <!--Sa -->
			   
			      <div class="col-lg-6 text-left" id="welcomeDiv36"  style="display:none;">
			 <table class="table table-bordered">
    <tr style='font-weight:bold;'>
        <td>Sa</td>
        <td>Sā</td>
        <td>Sæ</td>
        <td>Sǣ</td>
        <td>Si</td>
        <td>Sī</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px"  type="button" value="ෂ" onclick="onClick('vowel', 'a')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ෂා" onclick="onClick('vowel', 'ā')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ෂැ" onclick="onClick('vowel', 'æ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ෂෑ" onclick="onClick('vowel', 'ǣ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ෂි" onclick="onClick('vowel', 'i')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ෂී" onclick="onClick('vowel', 'ī')" /></td>
    </tr>
    <tr style='font-weight:bold;'>
        <td>Su</td>
        <td>Sū</td>
        <td>Sru</td>
        <td>Srū</td>
     <!--   <td>Sli</td>
        <td>Slī</td>-->
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ෂු" onclick="onClick('vowel', 'u')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ෂූ" onclick="onClick('vowel', 'ū')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ෂෘ" onclick="onClick('vowel', 'ru')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ෂෲ" onclick="onClick('vowel', 'rū')" /></td>
        <!--<td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඏ" onclick="onClick('vowel', 'li')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඐ" onclick="onClick('vowel', 'lī')" /></td>-->
    </tr>
    <tr style='font-weight:bold;'>
        <td>Se</td>
        <td>Sē</td>
        <td>Sai</td>
        <td>So</td>
        <td>Sō</td>
        <td>Sau</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ෂෙ" onclick="onClick('vowel', 'e')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ෂේ" onclick="onClick('vowel', 'ē')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ෂෛ" onclick="onClick('vowel', 'ai')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ෂො" onclick="onClick('vowel', 'o')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ෂෝ" onclick="onClick('vowel', 'ō')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ෂෞ" onclick="onClick('vowel', 'au')"/></td>
    </tr>
   <!-- <tr style="margin-top:50px;">
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ෂං" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ෂඃ" /></td>
    </tr>-->
</table>
			  
			  </div>
		
		
		
																		  		     <!--Sa -->
			   
			      <div class="col-lg-6 text-left" id="welcomeDiv37"  style="display:none;">
			 <table class="table table-bordered">
    <tr style='font-weight:bold;'>
        <td>Sa</td>
        <td>Sā</td>
        <td>Sæ</td>
        <td>Sǣ</td>
        <td>Si</td>
        <td>Sī</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px"  type="button" value="ස" onclick="onClick('vowel', 'a')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="සා" onclick="onClick('vowel', 'ā')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="සැ" onclick="onClick('vowel', 'æ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="සෑ" onclick="onClick('vowel', 'ǣ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="සි" onclick="onClick('vowel', 'i')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="සී" onclick="onClick('vowel', 'ī')" /></td>
    </tr>
    <tr style='font-weight:bold;'>
        <td>Su</td>
        <td>Sū</td>
        <td>Sru</td>
        <td>Srū</td>
       <!-- <td>Sli</td>
        <td>Slī</td>-->
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="සු" onclick="onClick('vowel', 'u')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="සූ" onclick="onClick('vowel', 'ū')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="සෘ" onclick="onClick('vowel', 'ru')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="සෲ" onclick="onClick('vowel', 'rū')" /></td>
       <!-- <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඏ" onclick="onClick('vowel', 'li')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඐ" onclick="onClick('vowel', 'lī')" /></td>-->
    </tr>
    <tr style='font-weight:bold;'>
        <td>Se</td>
        <td>Sē</td>
        <td>Sai</td>
        <td>So</td>
        <td>Sō</td>
        <td>Sau</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="සෙ" onclick="onClick('vowel', 'e')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="සේ" onclick="onClick('vowel', 'ē')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="සෛ" onclick="onClick('vowel', 'ai')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="සො" onclick="onClick('vowel', 'o')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="සෝ" onclick="onClick('vowel', 'ō')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="සෞ" onclick="onClick('vowel', 'au')"/></td>
    </tr>
   <!-- <tr style="margin-top:50px;">
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="සං" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="සඃ" /></td>
    </tr>-->
</table>
			  
			  </div>
		
		
																			  		     <!--ha -->
			   
			      <div class="col-lg-6 text-left" id="welcomeDiv38"  style="display:none;">
			 <table class="table table-bordered">
    <tr style='font-weight:bold;'>
        <td>ha</td>
        <td>hā</td>
        <td>hæ</td>
        <td>hǣ</td>
        <td>hi</td>
        <td>hī</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px"  type="button" value="හ" onclick="onClick('vowel', 'a')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="හා" onclick="onClick('vowel', 'ā')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="හැ" onclick="onClick('vowel', 'æ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="හෑ" onclick="onClick('vowel', 'ǣ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="හි" onclick="onClick('vowel', 'i')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="හී" onclick="onClick('vowel', 'ī')" /></td>
    </tr>
    <tr style='font-weight:bold;'>
        <td>hu</td>
        <td>hū</td>
        <td>hru</td>
        <td>hrū</td>
      <!--  <td>hli</td>
        <td>hlī</td>-->
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="හු" onclick="onClick('vowel', 'u')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="හූ" onclick="onClick('vowel', 'ū')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="හෘ" onclick="onClick('vowel', 'ru')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="හෲ" onclick="onClick('vowel', 'rū')" /></td>
      <!--  <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඏ" onclick="onClick('vowel', 'li')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඐ" onclick="onClick('vowel', 'lī')" /></td>-->
    </tr>
    <tr style='font-weight:bold;'>
        <td>he</td>
        <td>hē</td>
        <td>hai</td>
        <td>ho</td>
        <td>hō</td>
        <td>hau</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="හෙ" onclick="onClick('vowel', 'e')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="හේ" onclick="onClick('vowel', 'ē')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="හෛ" onclick="onClick('vowel', 'ai')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="හො" onclick="onClick('vowel', 'o')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="හෝ" onclick="onClick('vowel', 'ō')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="හෞ" onclick="onClick('vowel', 'au')"/></td>
    </tr>
   <!-- <tr style="margin-top:50px;">
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="හං" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="හඃ" /></td>-->
    </tr>
</table>
			  
			  </div>
			  
																						  		     <!--la -->
			   
			      <div class="col-lg-6 text-left" id="welcomeDiv39"  style="display:none;">
			 <table class="table table-bordered">
    <tr style='font-weight:bold;'>
        <td>la</td>
        <td>lā</td>
        <td>læ</td>
        <td>lǣ</td>
        <td>li</td>
        <td>lī</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px"  type="button" value="ළ" onclick="onClick('vowel', 'a')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ළා" onclick="onClick('vowel', 'ā')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ළැ" onclick="onClick('vowel', 'æ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ළෑ" onclick="onClick('vowel', 'ǣ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ළි" onclick="onClick('vowel', 'i')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ළී" onclick="onClick('vowel', 'ī')" /></td>
    </tr>
    <tr style='font-weight:bold;'>
        <td>lu</td>
        <td>lū</td>
        <td>lru</td>
        <td>lrū</td>
        <!--<td>lli</td>
        <td>llī</td>-->
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ළු" onclick="onClick('vowel', 'u')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ළූ" onclick="onClick('vowel', 'ū')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ළෘ" onclick="onClick('vowel', 'ru')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ළෲ" onclick="onClick('vowel', 'rū')" /></td>
      <!--  <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඏ" onclick="onClick('vowel', 'li')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඐ" onclick="onClick('vowel', 'lī')" /></td>-->
    </tr>
    <tr style='font-weight:bold;'>
        <td>le</td>
        <td>lē</td>
        <td>lai</td>
        <td>lo</td>
        <td>lō</td>
        <td>lau</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ළෙ" onclick="onClick('vowel', 'e')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ළේ" onclick="onClick('vowel', 'ē')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ළෛ" onclick="onClick('vowel', 'ai')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ළො" onclick="onClick('vowel', 'o')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ළෝ" onclick="onClick('vowel', 'ō')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ළෞ" onclick="onClick('vowel', 'au')"/></td>
    </tr>
  <!--  <tr style="margin-top:50px;">
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ළං" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ළඃ" /></td>
    </tr>-->
</table>
			  
			  </div>  
			  
			    <div class="col-lg-6 text-left" id="welcomeDiv40"  style="display:none;">
			 <table class="table table-bordered">
    <tr style='font-weight:bold;'>
        <td>faa</td>
        <td>faā</td>
        <td>faæ</td>
        <td>faǣ</td>
        <td>fai</td>
        <td>faī</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px"  type="button" value="ෆ" onclick="onClick('vowel', 'a')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ෆා" onclick="onClick('vowel', 'ā')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ෆැ" onclick="onClick('vowel', 'æ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ෆෑ" onclick="onClick('vowel', 'ǣ')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ෆි" onclick="onClick('vowel', 'i')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ෆී" onclick="onClick('vowel', 'ī')" /></td>
    </tr>
    <tr style='font-weight:bold;'>
        <td>fau</td>
        <td>faū</td>
        <td>faru</td>
        <td>farū</td>
       <!-- <td>fali</td>
        <td>falī</td>-->
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ෆු" onclick="onClick('vowel', 'u')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ෆූ" onclick="onClick('vowel', 'ū')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ෆෘ" onclick="onClick('vowel', 'ru')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ෆෲ" onclick="onClick('vowel', 'rū')" /></td>
      <!--  <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඏ" onclick="onClick('vowel', 'li')" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ඐ" onclick="onClick('vowel', 'lī')" /></td>-->
    </tr>
    <tr style='font-weight:bold;'>
        <td>fae</td>
        <td>faē</td>
        <td>faai</td>
        <td>fao</td>
        <td>faō</td>
        <td>faau</td>
    </tr>
    <tr>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ෆෙ" onclick="onClick('vowel', 'e')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ෆේ" onclick="onClick('vowel', 'ē')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ෆෛ" onclick="onClick('vowel', 'ai')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ෆො" onclick="onClick('vowel', 'o')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ෆෝ" onclick="onClick('vowel', 'ō')"/></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ෆෞ" onclick="onClick('vowel', 'au')"/></td>
    </tr>
  <!--  <tr style="margin-top:50px;">
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ෆං" /></td>
        <td><input class="btn btn-warning" style="font-size:30px;width:80px" type="button" value="ෆඃ" /></td>
    </tr>-->
</table>
			  
			  </div>     
			   
			  <script>
function showDiv1() {
    document.getElementById('welcomeDiv').style.display = "none";
    document.getElementById('welcomeDiv1').style.display = "block";
    document.getElementById('welcomeDiv3').style.display = "none";
	document.getElementById('welcomeDiv2').style.display = "none";
	document.getElementById('welcomeDiv4').style.display = "none";
	document.getElementById('welcomeDiv5').style.display = "none";
	document.getElementById('welcomeDiv6').style.display = "none";
    document.getElementById('welcomeDiv7').style.display = "none";
	document.getElementById('welcomeDiv8').style.display = "none";
	document.getElementById('welcomeDiv9').style.display = "none";
	document.getElementById('welcomeDiv10').style.display = "none";
	document.getElementById('welcomeDiv11').style.display = "none";
			  
	document.getElementById('welcomeDiv12').style.display = "none";
	document.getElementById('welcomeDiv13').style.display = "none";
	document.getElementById('welcomeDiv14').style.display = "none";
    document.getElementById('welcomeDiv15').style.display = "none";
	document.getElementById('welcomeDiv16').style.display = "none";
	document.getElementById('welcomeDiv17').style.display = "none";
	document.getElementById('welcomeDiv18').style.display = "none";
	document.getElementById('welcomeDiv19').style.display = "none";
	document.getElementById('welcomeDiv20').style.display = "none";
    document.getElementById('welcomeDiv21').style.display = "none";
	document.getElementById('welcomeDiv22').style.display = "none";
	document.getElementById('welcomeDiv23').style.display = "none";
			  
	document.getElementById('welcomeDiv24').style.display = "none";
	document.getElementById('welcomeDiv25').style.display = "none";
	document.getElementById('welcomeDiv26').style.display = "none";
	document.getElementById('welcomeDiv27').style.display = "none";
	document.getElementById('welcomeDiv28').style.display = "none";
	document.getElementById('welcomeDiv29').style.display = "none";
    document.getElementById('welcomeDiv30').style.display = "none";
    document.getElementById('welcomeDiv31').style.display = "none";
	document.getElementById('welcomeDiv32').style.display = "none";
	document.getElementById('welcomeDiv33').style.display = "none";
	document.getElementById('welcomeDiv34').style.display = "none";
	document.getElementById('welcomeDiv35').style.display = "none";
			  
	document.getElementById('welcomeDiv36').style.display = "none";
	document.getElementById('welcomeDiv37').style.display = "none";
	document.getElementById('welcomeDiv38').style.display = "none";
	document.getElementById('welcomeDiv39').style.display = "none";
	document.getElementById('welcomeDiv40').style.display = "none";
	   
  
}
function showDiv2() {
   document.getElementById('welcomeDiv').style.display = "none";
   document.getElementById('welcomeDiv1').style.display = "none";
   document.getElementById('welcomeDiv2').style.display = "block";
     document.getElementById('welcomeDiv3').style.display = "none";
	  document.getElementById('welcomeDiv4').style.display = "none";
	  document.getElementById('welcomeDiv5').style.display = "none";
	  document.getElementById('welcomeDiv6').style.display = "none";
	     document.getElementById('welcomeDiv7').style.display = "none";
	document.getElementById('welcomeDiv8').style.display = "none";
	document.getElementById('welcomeDiv9').style.display = "none";
	document.getElementById('welcomeDiv10').style.display = "none";
	document.getElementById('welcomeDiv11').style.display = "none";
			  
	document.getElementById('welcomeDiv12').style.display = "none";
	document.getElementById('welcomeDiv13').style.display = "none";
	document.getElementById('welcomeDiv14').style.display = "none";
    document.getElementById('welcomeDiv15').style.display = "none";
	document.getElementById('welcomeDiv16').style.display = "none";
	document.getElementById('welcomeDiv17').style.display = "none";
	document.getElementById('welcomeDiv18').style.display = "none";
	document.getElementById('welcomeDiv19').style.display = "none";
	document.getElementById('welcomeDiv20').style.display = "none";
    document.getElementById('welcomeDiv21').style.display = "none";
	document.getElementById('welcomeDiv22').style.display = "none";
	document.getElementById('welcomeDiv23').style.display = "none";
			  
	document.getElementById('welcomeDiv24').style.display = "none";
	document.getElementById('welcomeDiv25').style.display = "none";
	document.getElementById('welcomeDiv26').style.display = "none";
	document.getElementById('welcomeDiv27').style.display = "none";
	document.getElementById('welcomeDiv28').style.display = "none";
	document.getElementById('welcomeDiv29').style.display = "none";
    document.getElementById('welcomeDiv30').style.display = "none";
    document.getElementById('welcomeDiv31').style.display = "none";
	document.getElementById('welcomeDiv32').style.display = "none";
	document.getElementById('welcomeDiv33').style.display = "none";
	document.getElementById('welcomeDiv34').style.display = "none";
	document.getElementById('welcomeDiv35').style.display = "none";
			  
	document.getElementById('welcomeDiv36').style.display = "none";
	document.getElementById('welcomeDiv37').style.display = "none";
	document.getElementById('welcomeDiv38').style.display = "none";
	document.getElementById('welcomeDiv39').style.display = "none";
	document.getElementById('welcomeDiv40').style.display = "none";
  
}
function showDiv3() {
 document.getElementById('welcomeDiv').style.display = "none";
   document.getElementById('welcomeDiv1').style.display = "none";
    document.getElementById('welcomeDiv3').style.display = "block";
	 document.getElementById('welcomeDiv2').style.display = "none";
	  document.getElementById('welcomeDiv4').style.display = "none";
	  document.getElementById('welcomeDiv5').style.display = "none";
	  document.getElementById('welcomeDiv6').style.display = "none";

}
function showDiv4() {
 document.getElementById('welcomeDiv').style.display = "none";
   document.getElementById('welcomeDiv1').style.display = "none";
    document.getElementById('welcomeDiv3').style.display = "none";
	 document.getElementById('welcomeDiv2').style.display = "none";
	  document.getElementById('welcomeDiv4').style.display = "block";
document.getElementById('welcomeDiv5').style.display = "none";
	  document.getElementById('welcomeDiv6').style.display = "none";
	     document.getElementById('welcomeDiv7').style.display = "none";
	document.getElementById('welcomeDiv8').style.display = "none";
	document.getElementById('welcomeDiv9').style.display = "none";
	document.getElementById('welcomeDiv10').style.display = "none";
	document.getElementById('welcomeDiv11').style.display = "none";
			  
	document.getElementById('welcomeDiv12').style.display = "none";
	document.getElementById('welcomeDiv13').style.display = "none";
	document.getElementById('welcomeDiv14').style.display = "none";
    document.getElementById('welcomeDiv15').style.display = "none";
	document.getElementById('welcomeDiv16').style.display = "none";
	document.getElementById('welcomeDiv17').style.display = "none";
	document.getElementById('welcomeDiv18').style.display = "none";
	document.getElementById('welcomeDiv19').style.display = "none";
	document.getElementById('welcomeDiv20').style.display = "none";
    document.getElementById('welcomeDiv21').style.display = "none";
	document.getElementById('welcomeDiv22').style.display = "none";
	document.getElementById('welcomeDiv23').style.display = "none";
			  
	document.getElementById('welcomeDiv24').style.display = "none";
	document.getElementById('welcomeDiv25').style.display = "none";
	document.getElementById('welcomeDiv26').style.display = "none";
	document.getElementById('welcomeDiv27').style.display = "none";
	document.getElementById('welcomeDiv28').style.display = "none";
	document.getElementById('welcomeDiv29').style.display = "none";
    document.getElementById('welcomeDiv30').style.display = "none";
    document.getElementById('welcomeDiv31').style.display = "none";
	document.getElementById('welcomeDiv32').style.display = "none";
	document.getElementById('welcomeDiv33').style.display = "none";
	document.getElementById('welcomeDiv34').style.display = "none";
	document.getElementById('welcomeDiv35').style.display = "none";
			  
	document.getElementById('welcomeDiv36').style.display = "none";
	document.getElementById('welcomeDiv37').style.display = "none";
	document.getElementById('welcomeDiv38').style.display = "none";
	document.getElementById('welcomeDiv39').style.display = "none";
	document.getElementById('welcomeDiv40').style.display = "none";
}

function showDiv5() {
 document.getElementById('welcomeDiv').style.display = "none";
   document.getElementById('welcomeDiv1').style.display = "none";
    document.getElementById('welcomeDiv3').style.display = "none";
	 document.getElementById('welcomeDiv2').style.display = "none";
	  document.getElementById('welcomeDiv4').style.display = "none";
	  document.getElementById('welcomeDiv5').style.display = "block";
  document.getElementById('welcomeDiv6').style.display = "none";
     document.getElementById('welcomeDiv7').style.display = "none";
	document.getElementById('welcomeDiv8').style.display = "none";
	document.getElementById('welcomeDiv9').style.display = "none";
	document.getElementById('welcomeDiv10').style.display = "none";
	document.getElementById('welcomeDiv11').style.display = "none";
			  
	document.getElementById('welcomeDiv12').style.display = "none";
	document.getElementById('welcomeDiv13').style.display = "none";
	document.getElementById('welcomeDiv14').style.display = "none";
    document.getElementById('welcomeDiv15').style.display = "none";
	document.getElementById('welcomeDiv16').style.display = "none";
	document.getElementById('welcomeDiv17').style.display = "none";
	document.getElementById('welcomeDiv18').style.display = "none";
	document.getElementById('welcomeDiv19').style.display = "none";
	document.getElementById('welcomeDiv20').style.display = "none";
    document.getElementById('welcomeDiv21').style.display = "none";
	document.getElementById('welcomeDiv22').style.display = "none";
	document.getElementById('welcomeDiv23').style.display = "none";
			  
	document.getElementById('welcomeDiv24').style.display = "none";
	document.getElementById('welcomeDiv25').style.display = "none";
	document.getElementById('welcomeDiv26').style.display = "none";
	document.getElementById('welcomeDiv27').style.display = "none";
	document.getElementById('welcomeDiv28').style.display = "none";
	document.getElementById('welcomeDiv29').style.display = "none";
    document.getElementById('welcomeDiv30').style.display = "none";
    document.getElementById('welcomeDiv31').style.display = "none";
	document.getElementById('welcomeDiv32').style.display = "none";
	document.getElementById('welcomeDiv33').style.display = "none";
	document.getElementById('welcomeDiv34').style.display = "none";
	document.getElementById('welcomeDiv35').style.display = "none";
			  
	document.getElementById('welcomeDiv36').style.display = "none";
	document.getElementById('welcomeDiv37').style.display = "none";
	document.getElementById('welcomeDiv38').style.display = "none";
	document.getElementById('welcomeDiv39').style.display = "none";
	document.getElementById('welcomeDiv40').style.display = "none";
}

function showDiv6() {
 document.getElementById('welcomeDiv').style.display = "none";
   document.getElementById('welcomeDiv1').style.display = "none";
    document.getElementById('welcomeDiv3').style.display = "none";
	 document.getElementById('welcomeDiv2').style.display = "none";
	  document.getElementById('welcomeDiv4').style.display = "none";
	  document.getElementById('welcomeDiv5').style.display = "none";
	  document.getElementById('welcomeDiv6').style.display = "block";
	     document.getElementById('welcomeDiv7').style.display = "none";
	document.getElementById('welcomeDiv8').style.display = "none";
	document.getElementById('welcomeDiv9').style.display = "none";
	document.getElementById('welcomeDiv10').style.display = "none";
	document.getElementById('welcomeDiv11').style.display = "none";
			  
	document.getElementById('welcomeDiv12').style.display = "none";
	document.getElementById('welcomeDiv13').style.display = "none";
	document.getElementById('welcomeDiv14').style.display = "none";
    document.getElementById('welcomeDiv15').style.display = "none";
	document.getElementById('welcomeDiv16').style.display = "none";
	document.getElementById('welcomeDiv17').style.display = "none";
	document.getElementById('welcomeDiv18').style.display = "none";
	document.getElementById('welcomeDiv19').style.display = "none";
	document.getElementById('welcomeDiv20').style.display = "none";
    document.getElementById('welcomeDiv21').style.display = "none";
	document.getElementById('welcomeDiv22').style.display = "none";
	document.getElementById('welcomeDiv23').style.display = "none";
			  
	document.getElementById('welcomeDiv24').style.display = "none";
	document.getElementById('welcomeDiv25').style.display = "none";
	document.getElementById('welcomeDiv26').style.display = "none";
	document.getElementById('welcomeDiv27').style.display = "none";
	document.getElementById('welcomeDiv28').style.display = "none";
	document.getElementById('welcomeDiv29').style.display = "none";
    document.getElementById('welcomeDiv30').style.display = "none";
    document.getElementById('welcomeDiv31').style.display = "none";
	document.getElementById('welcomeDiv32').style.display = "none";
	document.getElementById('welcomeDiv33').style.display = "none";
	document.getElementById('welcomeDiv34').style.display = "none";
	document.getElementById('welcomeDiv35').style.display = "none";
			  
	document.getElementById('welcomeDiv36').style.display = "none";
	document.getElementById('welcomeDiv37').style.display = "none";
	document.getElementById('welcomeDiv38').style.display = "none";
	document.getElementById('welcomeDiv39').style.display = "none";
	document.getElementById('welcomeDiv40').style.display = "none";

}


function showDiv7() {
 document.getElementById('welcomeDiv').style.display = "none";
   document.getElementById('welcomeDiv1').style.display = "none";
    document.getElementById('welcomeDiv3').style.display = "none";
document.getElementById('welcomeDiv2').style.display = "none";
	document.getElementById('welcomeDiv4').style.display = "none";
	document.getElementById('welcomeDiv5').style.display = "none";
	document.getElementById('welcomeDiv6').style.display = "none";
	document.getElementById('welcomeDiv7').style.display = "block";
	document.getElementById('welcomeDiv8').style.display = "none";
	document.getElementById('welcomeDiv9').style.display = "none";
	document.getElementById('welcomeDiv10').style.display = "none";
	document.getElementById('welcomeDiv11').style.display = "none";
			  
	document.getElementById('welcomeDiv12').style.display = "none";
	document.getElementById('welcomeDiv13').style.display = "none";
	document.getElementById('welcomeDiv14').style.display = "none";
    document.getElementById('welcomeDiv15').style.display = "none";
	document.getElementById('welcomeDiv16').style.display = "none";
	document.getElementById('welcomeDiv17').style.display = "none";
	document.getElementById('welcomeDiv18').style.display = "none";
	document.getElementById('welcomeDiv19').style.display = "none";
	document.getElementById('welcomeDiv20').style.display = "none";
    document.getElementById('welcomeDiv21').style.display = "none";
	document.getElementById('welcomeDiv22').style.display = "none";
	document.getElementById('welcomeDiv23').style.display = "none";
			  
	document.getElementById('welcomeDiv24').style.display = "none";
	document.getElementById('welcomeDiv25').style.display = "none";
	document.getElementById('welcomeDiv26').style.display = "none";
	document.getElementById('welcomeDiv27').style.display = "none";
	document.getElementById('welcomeDiv28').style.display = "none";
	document.getElementById('welcomeDiv29').style.display = "none";
    document.getElementById('welcomeDiv30').style.display = "none";
    document.getElementById('welcomeDiv31').style.display = "none";
	document.getElementById('welcomeDiv32').style.display = "none";
	document.getElementById('welcomeDiv33').style.display = "none";
	document.getElementById('welcomeDiv34').style.display = "none";
	document.getElementById('welcomeDiv35').style.display = "none";
			  
	document.getElementById('welcomeDiv36').style.display = "none";
	document.getElementById('welcomeDiv37').style.display = "none";
	document.getElementById('welcomeDiv38').style.display = "none";
	document.getElementById('welcomeDiv39').style.display = "none";
	document.getElementById('welcomeDiv40').style.display = "none";

}


function showDiv8() {
 document.getElementById('welcomeDiv').style.display = "none";
   document.getElementById('welcomeDiv1').style.display = "none";
    document.getElementById('welcomeDiv3').style.display = "none";
document.getElementById('welcomeDiv2').style.display = "none";
	document.getElementById('welcomeDiv4').style.display = "none";
	document.getElementById('welcomeDiv5').style.display = "none";
	document.getElementById('welcomeDiv6').style.display = "none";
	document.getElementById('welcomeDiv7').style.display = "none";
	document.getElementById('welcomeDiv8').style.display = "block";
	document.getElementById('welcomeDiv9').style.display = "none";
	document.getElementById('welcomeDiv10').style.display = "none";
	document.getElementById('welcomeDiv11').style.display = "none";
			  
	document.getElementById('welcomeDiv12').style.display = "none";
	document.getElementById('welcomeDiv13').style.display = "none";
	document.getElementById('welcomeDiv14').style.display = "none";
    document.getElementById('welcomeDiv15').style.display = "none";
	document.getElementById('welcomeDiv16').style.display = "none";
	document.getElementById('welcomeDiv17').style.display = "none";
	document.getElementById('welcomeDiv18').style.display = "none";
	document.getElementById('welcomeDiv19').style.display = "none";
	document.getElementById('welcomeDiv20').style.display = "none";
    document.getElementById('welcomeDiv21').style.display = "none";
	document.getElementById('welcomeDiv22').style.display = "none";
	document.getElementById('welcomeDiv23').style.display = "none";
			  
	document.getElementById('welcomeDiv24').style.display = "none";
	document.getElementById('welcomeDiv25').style.display = "none";
	document.getElementById('welcomeDiv26').style.display = "none";
	document.getElementById('welcomeDiv27').style.display = "none";
	document.getElementById('welcomeDiv28').style.display = "none";
	document.getElementById('welcomeDiv29').style.display = "none";
    document.getElementById('welcomeDiv30').style.display = "none";
    document.getElementById('welcomeDiv31').style.display = "none";
	document.getElementById('welcomeDiv32').style.display = "none";
	document.getElementById('welcomeDiv33').style.display = "none";
	document.getElementById('welcomeDiv34').style.display = "none";
	document.getElementById('welcomeDiv35').style.display = "none";
			  
	document.getElementById('welcomeDiv36').style.display = "none";
	document.getElementById('welcomeDiv37').style.display = "none";
	document.getElementById('welcomeDiv38').style.display = "none";
	document.getElementById('welcomeDiv39').style.display = "none";
	document.getElementById('welcomeDiv40').style.display = "none";

}


function showDiv9() {
 document.getElementById('welcomeDiv').style.display = "none";
   document.getElementById('welcomeDiv1').style.display = "none";
    document.getElementById('welcomeDiv3').style.display = "none";
document.getElementById('welcomeDiv2').style.display = "none";
	document.getElementById('welcomeDiv4').style.display = "none";
	document.getElementById('welcomeDiv5').style.display = "none";
	document.getElementById('welcomeDiv6').style.display = "none";
	document.getElementById('welcomeDiv7').style.display = "none";
	document.getElementById('welcomeDiv8').style.display = "none";
	document.getElementById('welcomeDiv9').style.display = "block";
	document.getElementById('welcomeDiv10').style.display = "none";
	document.getElementById('welcomeDiv11').style.display = "none";
			  
	document.getElementById('welcomeDiv12').style.display = "none";
	document.getElementById('welcomeDiv13').style.display = "none";
	document.getElementById('welcomeDiv14').style.display = "none";
    document.getElementById('welcomeDiv15').style.display = "none";
	document.getElementById('welcomeDiv16').style.display = "none";
	document.getElementById('welcomeDiv17').style.display = "none";
	document.getElementById('welcomeDiv18').style.display = "none";
	document.getElementById('welcomeDiv19').style.display = "none";
	document.getElementById('welcomeDiv20').style.display = "none";
    document.getElementById('welcomeDiv21').style.display = "none";
	document.getElementById('welcomeDiv22').style.display = "none";
	document.getElementById('welcomeDiv23').style.display = "none";
			  
	document.getElementById('welcomeDiv24').style.display = "none";
	document.getElementById('welcomeDiv25').style.display = "none";
	document.getElementById('welcomeDiv26').style.display = "none";
	document.getElementById('welcomeDiv27').style.display = "none";
	document.getElementById('welcomeDiv28').style.display = "none";
	document.getElementById('welcomeDiv29').style.display = "none";
    document.getElementById('welcomeDiv30').style.display = "none";
    document.getElementById('welcomeDiv31').style.display = "none";
	document.getElementById('welcomeDiv32').style.display = "none";
	document.getElementById('welcomeDiv33').style.display = "none";
	document.getElementById('welcomeDiv34').style.display = "none";
	document.getElementById('welcomeDiv35').style.display = "none";
			  
	document.getElementById('welcomeDiv36').style.display = "none";
	document.getElementById('welcomeDiv37').style.display = "none";
	document.getElementById('welcomeDiv38').style.display = "none";
	document.getElementById('welcomeDiv39').style.display = "none";
	document.getElementById('welcomeDiv40').style.display = "none";

}


function showDiv10() {
 document.getElementById('welcomeDiv').style.display = "none";
   document.getElementById('welcomeDiv1').style.display = "none";
    document.getElementById('welcomeDiv3').style.display = "none";
document.getElementById('welcomeDiv2').style.display = "none";
	document.getElementById('welcomeDiv4').style.display = "none";
	document.getElementById('welcomeDiv5').style.display = "none";
	document.getElementById('welcomeDiv6').style.display = "none";
	document.getElementById('welcomeDiv7').style.display = "none";
	document.getElementById('welcomeDiv8').style.display = "none";
	document.getElementById('welcomeDiv9').style.display = "none";
	document.getElementById('welcomeDiv10').style.display = "block";
	document.getElementById('welcomeDiv11').style.display = "none";
			  
	document.getElementById('welcomeDiv12').style.display = "none";
	document.getElementById('welcomeDiv13').style.display = "none";
	document.getElementById('welcomeDiv14').style.display = "none";
    document.getElementById('welcomeDiv15').style.display = "none";
	document.getElementById('welcomeDiv16').style.display = "none";
	document.getElementById('welcomeDiv17').style.display = "none";
	document.getElementById('welcomeDiv18').style.display = "none";
	document.getElementById('welcomeDiv19').style.display = "none";
	document.getElementById('welcomeDiv20').style.display = "none";
    document.getElementById('welcomeDiv21').style.display = "none";
	document.getElementById('welcomeDiv22').style.display = "none";
	document.getElementById('welcomeDiv23').style.display = "none";
			  
	document.getElementById('welcomeDiv24').style.display = "none";
	document.getElementById('welcomeDiv25').style.display = "none";
	document.getElementById('welcomeDiv26').style.display = "none";
	document.getElementById('welcomeDiv27').style.display = "none";
	document.getElementById('welcomeDiv28').style.display = "none";
	document.getElementById('welcomeDiv29').style.display = "none";
    document.getElementById('welcomeDiv30').style.display = "none";
    document.getElementById('welcomeDiv31').style.display = "none";
	document.getElementById('welcomeDiv32').style.display = "none";
	document.getElementById('welcomeDiv33').style.display = "none";
	document.getElementById('welcomeDiv34').style.display = "none";
	document.getElementById('welcomeDiv35').style.display = "none";
			  
	document.getElementById('welcomeDiv36').style.display = "none";
	document.getElementById('welcomeDiv37').style.display = "none";
	document.getElementById('welcomeDiv38').style.display = "none";
	document.getElementById('welcomeDiv39').style.display = "none";
	document.getElementById('welcomeDiv40').style.display = "none";

}



function showDiv11() {
 document.getElementById('welcomeDiv').style.display = "none";
   document.getElementById('welcomeDiv1').style.display = "none";
    document.getElementById('welcomeDiv3').style.display = "none";
document.getElementById('welcomeDiv2').style.display = "none";
	document.getElementById('welcomeDiv4').style.display = "none";
	document.getElementById('welcomeDiv5').style.display = "none";
	document.getElementById('welcomeDiv6').style.display = "none";
	document.getElementById('welcomeDiv7').style.display = "none";
	document.getElementById('welcomeDiv8').style.display = "none";
	document.getElementById('welcomeDiv9').style.display = "none";
	document.getElementById('welcomeDiv10').style.display = "none";
	document.getElementById('welcomeDiv11').style.display = "block";
			  
	document.getElementById('welcomeDiv12').style.display = "none";
	document.getElementById('welcomeDiv13').style.display = "none";
	document.getElementById('welcomeDiv14').style.display = "none";
    document.getElementById('welcomeDiv15').style.display = "none";
	document.getElementById('welcomeDiv16').style.display = "none";
	document.getElementById('welcomeDiv17').style.display = "none";
	document.getElementById('welcomeDiv18').style.display = "none";
	document.getElementById('welcomeDiv19').style.display = "none";
	document.getElementById('welcomeDiv20').style.display = "none";
    document.getElementById('welcomeDiv21').style.display = "none";
	document.getElementById('welcomeDiv22').style.display = "none";
	document.getElementById('welcomeDiv23').style.display = "none";
			  
	document.getElementById('welcomeDiv24').style.display = "none";
	document.getElementById('welcomeDiv25').style.display = "none";
	document.getElementById('welcomeDiv26').style.display = "none";
	document.getElementById('welcomeDiv27').style.display = "none";
	document.getElementById('welcomeDiv28').style.display = "none";
	document.getElementById('welcomeDiv29').style.display = "none";
    document.getElementById('welcomeDiv30').style.display = "none";
    document.getElementById('welcomeDiv31').style.display = "none";
	document.getElementById('welcomeDiv32').style.display = "none";
	document.getElementById('welcomeDiv33').style.display = "none";
	document.getElementById('welcomeDiv34').style.display = "none";
	document.getElementById('welcomeDiv35').style.display = "none";
			  
	document.getElementById('welcomeDiv36').style.display = "none";
	document.getElementById('welcomeDiv37').style.display = "none";
	document.getElementById('welcomeDiv38').style.display = "none";
	document.getElementById('welcomeDiv39').style.display = "none";
	document.getElementById('welcomeDiv40').style.display = "none";

}



function showDiv12() {
 document.getElementById('welcomeDiv').style.display = "none";
   document.getElementById('welcomeDiv1').style.display = "none";
    document.getElementById('welcomeDiv3').style.display = "none";
document.getElementById('welcomeDiv2').style.display = "none";
	document.getElementById('welcomeDiv4').style.display = "none";
	document.getElementById('welcomeDiv5').style.display = "none";
	document.getElementById('welcomeDiv6').style.display = "none";
	document.getElementById('welcomeDiv7').style.display = "none";
	document.getElementById('welcomeDiv8').style.display = "none";
	document.getElementById('welcomeDiv9').style.display = "none";
	document.getElementById('welcomeDiv10').style.display = "none";
	document.getElementById('welcomeDiv11').style.display = "none";
			  
	document.getElementById('welcomeDiv12').style.display = "block";
	document.getElementById('welcomeDiv13').style.display = "none";
	document.getElementById('welcomeDiv14').style.display = "none";
    document.getElementById('welcomeDiv15').style.display = "none";
	document.getElementById('welcomeDiv16').style.display = "none";
	document.getElementById('welcomeDiv17').style.display = "none";
	document.getElementById('welcomeDiv18').style.display = "none";
	document.getElementById('welcomeDiv19').style.display = "none";
	document.getElementById('welcomeDiv20').style.display = "none";
    document.getElementById('welcomeDiv21').style.display = "none";
	document.getElementById('welcomeDiv22').style.display = "none";
	document.getElementById('welcomeDiv23').style.display = "none";
			  
	document.getElementById('welcomeDiv24').style.display = "none";
	document.getElementById('welcomeDiv25').style.display = "none";
	document.getElementById('welcomeDiv26').style.display = "none";
	document.getElementById('welcomeDiv27').style.display = "none";
	document.getElementById('welcomeDiv28').style.display = "none";
	document.getElementById('welcomeDiv29').style.display = "none";
    document.getElementById('welcomeDiv30').style.display = "none";
    document.getElementById('welcomeDiv31').style.display = "none";
	document.getElementById('welcomeDiv32').style.display = "none";
	document.getElementById('welcomeDiv33').style.display = "none";
	document.getElementById('welcomeDiv34').style.display = "none";
	document.getElementById('welcomeDiv35').style.display = "none";
			  
	document.getElementById('welcomeDiv36').style.display = "none";
	document.getElementById('welcomeDiv37').style.display = "none";
	document.getElementById('welcomeDiv38').style.display = "none";
	document.getElementById('welcomeDiv39').style.display = "none";
	document.getElementById('welcomeDiv40').style.display = "none";

}


function showDiv13() {
 document.getElementById('welcomeDiv').style.display = "none";
   document.getElementById('welcomeDiv1').style.display = "none";
    document.getElementById('welcomeDiv3').style.display = "none";
document.getElementById('welcomeDiv2').style.display = "none";
	document.getElementById('welcomeDiv4').style.display = "none";
	document.getElementById('welcomeDiv5').style.display = "none";
	document.getElementById('welcomeDiv6').style.display = "none";
	document.getElementById('welcomeDiv7').style.display = "none";
	document.getElementById('welcomeDiv8').style.display = "none";
	document.getElementById('welcomeDiv9').style.display = "none";
	document.getElementById('welcomeDiv10').style.display = "none";
	document.getElementById('welcomeDiv11').style.display = "none";
			  
	document.getElementById('welcomeDiv12').style.display = "none";
	document.getElementById('welcomeDiv13').style.display = "block";
	document.getElementById('welcomeDiv14').style.display = "none";
    document.getElementById('welcomeDiv15').style.display = "none";
	document.getElementById('welcomeDiv16').style.display = "none";
	document.getElementById('welcomeDiv17').style.display = "none";
	document.getElementById('welcomeDiv18').style.display = "none";
	document.getElementById('welcomeDiv19').style.display = "none";
	document.getElementById('welcomeDiv20').style.display = "none";
    document.getElementById('welcomeDiv21').style.display = "none";
	document.getElementById('welcomeDiv22').style.display = "none";
	document.getElementById('welcomeDiv23').style.display = "none";
			  
	document.getElementById('welcomeDiv24').style.display = "none";
	document.getElementById('welcomeDiv25').style.display = "none";
	document.getElementById('welcomeDiv26').style.display = "none";
	document.getElementById('welcomeDiv27').style.display = "none";
	document.getElementById('welcomeDiv28').style.display = "none";
	document.getElementById('welcomeDiv29').style.display = "none";
    document.getElementById('welcomeDiv30').style.display = "none";
    document.getElementById('welcomeDiv31').style.display = "none";
	document.getElementById('welcomeDiv32').style.display = "none";
	document.getElementById('welcomeDiv33').style.display = "none";
	document.getElementById('welcomeDiv34').style.display = "none";
	document.getElementById('welcomeDiv35').style.display = "none";
			  
	document.getElementById('welcomeDiv36').style.display = "none";
	document.getElementById('welcomeDiv37').style.display = "none";
	document.getElementById('welcomeDiv38').style.display = "none";
	document.getElementById('welcomeDiv39').style.display = "none";
	document.getElementById('welcomeDiv40').style.display = "none";

}

function showDiv14() {
 document.getElementById('welcomeDiv').style.display = "none";
   document.getElementById('welcomeDiv1').style.display = "none";
    document.getElementById('welcomeDiv3').style.display = "none";
document.getElementById('welcomeDiv2').style.display = "none";
	document.getElementById('welcomeDiv4').style.display = "none";
	document.getElementById('welcomeDiv5').style.display = "none";
	document.getElementById('welcomeDiv6').style.display = "none";
	document.getElementById('welcomeDiv7').style.display = "none";
	document.getElementById('welcomeDiv8').style.display = "none";
	document.getElementById('welcomeDiv9').style.display = "none";
	document.getElementById('welcomeDiv10').style.display = "none";
	document.getElementById('welcomeDiv11').style.display = "none";
			  
	document.getElementById('welcomeDiv12').style.display = "none";
	document.getElementById('welcomeDiv13').style.display = "none";
	document.getElementById('welcomeDiv14').style.display = "block";
    document.getElementById('welcomeDiv15').style.display = "none";
	document.getElementById('welcomeDiv16').style.display = "none";
	document.getElementById('welcomeDiv17').style.display = "none";
	document.getElementById('welcomeDiv18').style.display = "none";
	document.getElementById('welcomeDiv19').style.display = "none";
	document.getElementById('welcomeDiv20').style.display = "none";
    document.getElementById('welcomeDiv21').style.display = "none";
	document.getElementById('welcomeDiv22').style.display = "none";
	document.getElementById('welcomeDiv23').style.display = "none";
			  
	document.getElementById('welcomeDiv24').style.display = "none";
	document.getElementById('welcomeDiv25').style.display = "none";
	document.getElementById('welcomeDiv26').style.display = "none";
	document.getElementById('welcomeDiv27').style.display = "none";
	document.getElementById('welcomeDiv28').style.display = "none";
	document.getElementById('welcomeDiv29').style.display = "none";
    document.getElementById('welcomeDiv30').style.display = "none";
    document.getElementById('welcomeDiv31').style.display = "none";
	document.getElementById('welcomeDiv32').style.display = "none";
	document.getElementById('welcomeDiv33').style.display = "none";
	document.getElementById('welcomeDiv34').style.display = "none";
	document.getElementById('welcomeDiv35').style.display = "none";
			  
	document.getElementById('welcomeDiv36').style.display = "none";
	document.getElementById('welcomeDiv37').style.display = "none";
	document.getElementById('welcomeDiv38').style.display = "none";
	document.getElementById('welcomeDiv39').style.display = "none";
	document.getElementById('welcomeDiv40').style.display = "none";

}

function showDiv15() {
 document.getElementById('welcomeDiv').style.display = "none";
   document.getElementById('welcomeDiv1').style.display = "none";
    document.getElementById('welcomeDiv3').style.display = "none";
document.getElementById('welcomeDiv2').style.display = "none";
	document.getElementById('welcomeDiv4').style.display = "none";
	document.getElementById('welcomeDiv5').style.display = "none";
	document.getElementById('welcomeDiv6').style.display = "none";
	document.getElementById('welcomeDiv7').style.display = "none";
	document.getElementById('welcomeDiv8').style.display = "none";
	document.getElementById('welcomeDiv9').style.display = "none";
	document.getElementById('welcomeDiv10').style.display = "none";
	document.getElementById('welcomeDiv11').style.display = "none";
			  
	document.getElementById('welcomeDiv12').style.display = "none";
	document.getElementById('welcomeDiv13').style.display = "none";
	document.getElementById('welcomeDiv14').style.display = "none";
    document.getElementById('welcomeDiv15').style.display = "block";
	document.getElementById('welcomeDiv16').style.display = "none";
	document.getElementById('welcomeDiv17').style.display = "none";
	document.getElementById('welcomeDiv18').style.display = "none";
	document.getElementById('welcomeDiv19').style.display = "none";
	document.getElementById('welcomeDiv20').style.display = "none";
    document.getElementById('welcomeDiv21').style.display = "none";
	document.getElementById('welcomeDiv22').style.display = "none";
	document.getElementById('welcomeDiv23').style.display = "none";
			  
	document.getElementById('welcomeDiv24').style.display = "none";
	document.getElementById('welcomeDiv25').style.display = "none";
	document.getElementById('welcomeDiv26').style.display = "none";
	document.getElementById('welcomeDiv27').style.display = "none";
	document.getElementById('welcomeDiv28').style.display = "none";
	document.getElementById('welcomeDiv29').style.display = "none";
    document.getElementById('welcomeDiv30').style.display = "none";
    document.getElementById('welcomeDiv31').style.display = "none";
	document.getElementById('welcomeDiv32').style.display = "none";
	document.getElementById('welcomeDiv33').style.display = "none";
	document.getElementById('welcomeDiv34').style.display = "none";
	document.getElementById('welcomeDiv35').style.display = "none";
			  
	document.getElementById('welcomeDiv36').style.display = "none";
	document.getElementById('welcomeDiv37').style.display = "none";
	document.getElementById('welcomeDiv38').style.display = "none";
	document.getElementById('welcomeDiv39').style.display = "none";
	document.getElementById('welcomeDiv40').style.display = "none";

}


function showDiv16() {
 document.getElementById('welcomeDiv').style.display = "none";
   document.getElementById('welcomeDiv1').style.display = "none";
    document.getElementById('welcomeDiv3').style.display = "none";
document.getElementById('welcomeDiv2').style.display = "none";
	document.getElementById('welcomeDiv4').style.display = "none";
	document.getElementById('welcomeDiv5').style.display = "none";
	document.getElementById('welcomeDiv6').style.display = "none";
	document.getElementById('welcomeDiv7').style.display = "none";
	document.getElementById('welcomeDiv8').style.display = "none";
	document.getElementById('welcomeDiv9').style.display = "none";
	document.getElementById('welcomeDiv10').style.display = "none";
	document.getElementById('welcomeDiv11').style.display = "none";
			  
	document.getElementById('welcomeDiv12').style.display = "none";
	document.getElementById('welcomeDiv13').style.display = "none";
	document.getElementById('welcomeDiv14').style.display = "none";
    document.getElementById('welcomeDiv15').style.display = "none";
	document.getElementById('welcomeDiv16').style.display = "block";
	document.getElementById('welcomeDiv17').style.display = "none";
	document.getElementById('welcomeDiv18').style.display = "none";
	document.getElementById('welcomeDiv19').style.display = "none";
	document.getElementById('welcomeDiv20').style.display = "none";
    document.getElementById('welcomeDiv21').style.display = "none";
	document.getElementById('welcomeDiv22').style.display = "none";
	document.getElementById('welcomeDiv23').style.display = "none";
			  
	document.getElementById('welcomeDiv24').style.display = "none";
	document.getElementById('welcomeDiv25').style.display = "none";
	document.getElementById('welcomeDiv26').style.display = "none";
	document.getElementById('welcomeDiv27').style.display = "none";
	document.getElementById('welcomeDiv28').style.display = "none";
	document.getElementById('welcomeDiv29').style.display = "none";
    document.getElementById('welcomeDiv30').style.display = "none";
    document.getElementById('welcomeDiv31').style.display = "none";
	document.getElementById('welcomeDiv32').style.display = "none";
	document.getElementById('welcomeDiv33').style.display = "none";
	document.getElementById('welcomeDiv34').style.display = "none";
	document.getElementById('welcomeDiv35').style.display = "none";
			  
	document.getElementById('welcomeDiv36').style.display = "none";
	document.getElementById('welcomeDiv37').style.display = "none";
	document.getElementById('welcomeDiv38').style.display = "none";
	document.getElementById('welcomeDiv39').style.display = "none";
	document.getElementById('welcomeDiv40').style.display = "none";

}

function showDiv17() {
 document.getElementById('welcomeDiv').style.display = "none";
   document.getElementById('welcomeDiv1').style.display = "none";
    document.getElementById('welcomeDiv3').style.display = "none";
document.getElementById('welcomeDiv2').style.display = "none";
	document.getElementById('welcomeDiv4').style.display = "none";
	document.getElementById('welcomeDiv5').style.display = "none";
	document.getElementById('welcomeDiv6').style.display = "none";
	document.getElementById('welcomeDiv7').style.display = "none";
	document.getElementById('welcomeDiv8').style.display = "none";
	document.getElementById('welcomeDiv9').style.display = "none";
	document.getElementById('welcomeDiv10').style.display = "none";
	document.getElementById('welcomeDiv11').style.display = "none";
			  
	document.getElementById('welcomeDiv12').style.display = "none";
	document.getElementById('welcomeDiv13').style.display = "none";
	document.getElementById('welcomeDiv14').style.display = "none";
    document.getElementById('welcomeDiv15').style.display = "none";
	document.getElementById('welcomeDiv16').style.display = "none";
	document.getElementById('welcomeDiv17').style.display = "block";
	document.getElementById('welcomeDiv18').style.display = "none";
	document.getElementById('welcomeDiv19').style.display = "none";
	document.getElementById('welcomeDiv20').style.display = "none";
    document.getElementById('welcomeDiv21').style.display = "none";
	document.getElementById('welcomeDiv22').style.display = "none";
	document.getElementById('welcomeDiv23').style.display = "none";
			  
	document.getElementById('welcomeDiv24').style.display = "none";
	document.getElementById('welcomeDiv25').style.display = "none";
	document.getElementById('welcomeDiv26').style.display = "none";
	document.getElementById('welcomeDiv27').style.display = "none";
	document.getElementById('welcomeDiv28').style.display = "none";
	document.getElementById('welcomeDiv29').style.display = "none";
    document.getElementById('welcomeDiv30').style.display = "none";
    document.getElementById('welcomeDiv31').style.display = "none";
	document.getElementById('welcomeDiv32').style.display = "none";
	document.getElementById('welcomeDiv33').style.display = "none";
	document.getElementById('welcomeDiv34').style.display = "none";
	document.getElementById('welcomeDiv35').style.display = "none";
			  
	document.getElementById('welcomeDiv36').style.display = "none";
	document.getElementById('welcomeDiv37').style.display = "none";
	document.getElementById('welcomeDiv38').style.display = "none";
	document.getElementById('welcomeDiv39').style.display = "none";
	document.getElementById('welcomeDiv40').style.display = "none";

}

function showDiv18() {
 document.getElementById('welcomeDiv').style.display = "none";
   document.getElementById('welcomeDiv1').style.display = "none";
    document.getElementById('welcomeDiv3').style.display = "none";
document.getElementById('welcomeDiv2').style.display = "none";
	document.getElementById('welcomeDiv4').style.display = "none";
	document.getElementById('welcomeDiv5').style.display = "none";
	document.getElementById('welcomeDiv6').style.display = "none";
	document.getElementById('welcomeDiv7').style.display = "none";
	document.getElementById('welcomeDiv8').style.display = "none";
	document.getElementById('welcomeDiv9').style.display = "none";
	document.getElementById('welcomeDiv10').style.display = "none";
	document.getElementById('welcomeDiv11').style.display = "none";
			  
	document.getElementById('welcomeDiv12').style.display = "none";
	document.getElementById('welcomeDiv13').style.display = "none";
	document.getElementById('welcomeDiv14').style.display = "none";
    document.getElementById('welcomeDiv15').style.display = "none";
	document.getElementById('welcomeDiv16').style.display = "none";
	document.getElementById('welcomeDiv17').style.display = "none";
	document.getElementById('welcomeDiv18').style.display = "block";
	document.getElementById('welcomeDiv19').style.display = "none";
	document.getElementById('welcomeDiv20').style.display = "none";
    document.getElementById('welcomeDiv21').style.display = "none";
	document.getElementById('welcomeDiv22').style.display = "none";
	document.getElementById('welcomeDiv23').style.display = "none";
			  
	document.getElementById('welcomeDiv24').style.display = "none";
	document.getElementById('welcomeDiv25').style.display = "none";
	document.getElementById('welcomeDiv26').style.display = "none";
	document.getElementById('welcomeDiv27').style.display = "none";
	document.getElementById('welcomeDiv28').style.display = "none";
	document.getElementById('welcomeDiv29').style.display = "none";
    document.getElementById('welcomeDiv30').style.display = "none";
    document.getElementById('welcomeDiv31').style.display = "none";
	document.getElementById('welcomeDiv32').style.display = "none";
	document.getElementById('welcomeDiv33').style.display = "none";
	document.getElementById('welcomeDiv34').style.display = "none";
	document.getElementById('welcomeDiv35').style.display = "none";
			  
	document.getElementById('welcomeDiv36').style.display = "none";
	document.getElementById('welcomeDiv37').style.display = "none";
	document.getElementById('welcomeDiv38').style.display = "none";
	document.getElementById('welcomeDiv39').style.display = "none";
	document.getElementById('welcomeDiv40').style.display = "none";

}

function showDiv19() {
 document.getElementById('welcomeDiv').style.display = "none";
   document.getElementById('welcomeDiv1').style.display = "none";
    document.getElementById('welcomeDiv3').style.display = "none";
document.getElementById('welcomeDiv2').style.display = "none";
	document.getElementById('welcomeDiv4').style.display = "none";
	document.getElementById('welcomeDiv5').style.display = "none";
	document.getElementById('welcomeDiv6').style.display = "none";
	document.getElementById('welcomeDiv7').style.display = "none";
	document.getElementById('welcomeDiv8').style.display = "none";
	document.getElementById('welcomeDiv9').style.display = "none";
	document.getElementById('welcomeDiv10').style.display = "none";
	document.getElementById('welcomeDiv11').style.display = "none";
			  
	document.getElementById('welcomeDiv12').style.display = "none";
	document.getElementById('welcomeDiv13').style.display = "none";
	document.getElementById('welcomeDiv14').style.display = "none";
    document.getElementById('welcomeDiv15').style.display = "none";
	document.getElementById('welcomeDiv16').style.display = "none";
	document.getElementById('welcomeDiv17').style.display = "none";
	document.getElementById('welcomeDiv18').style.display = "none";
	document.getElementById('welcomeDiv19').style.display = "block";
	document.getElementById('welcomeDiv20').style.display = "none";
    document.getElementById('welcomeDiv21').style.display = "none";
	document.getElementById('welcomeDiv22').style.display = "none";
	document.getElementById('welcomeDiv23').style.display = "none";
			  
	document.getElementById('welcomeDiv24').style.display = "none";
	document.getElementById('welcomeDiv25').style.display = "none";
	document.getElementById('welcomeDiv26').style.display = "none";
	document.getElementById('welcomeDiv27').style.display = "none";
	document.getElementById('welcomeDiv28').style.display = "none";
	document.getElementById('welcomeDiv29').style.display = "none";
    document.getElementById('welcomeDiv30').style.display = "none";
    document.getElementById('welcomeDiv31').style.display = "none";
	document.getElementById('welcomeDiv32').style.display = "none";
	document.getElementById('welcomeDiv33').style.display = "none";
	document.getElementById('welcomeDiv34').style.display = "none";
	document.getElementById('welcomeDiv35').style.display = "none";
			  
	document.getElementById('welcomeDiv36').style.display = "none";
	document.getElementById('welcomeDiv37').style.display = "none";
	document.getElementById('welcomeDiv38').style.display = "none";
	document.getElementById('welcomeDiv39').style.display = "none";
	document.getElementById('welcomeDiv40').style.display = "none";

}


function showDiv20() {
 document.getElementById('welcomeDiv').style.display = "none";
   document.getElementById('welcomeDiv1').style.display = "none";
    document.getElementById('welcomeDiv3').style.display = "none";
document.getElementById('welcomeDiv2').style.display = "none";
	document.getElementById('welcomeDiv4').style.display = "none";
	document.getElementById('welcomeDiv5').style.display = "none";
	document.getElementById('welcomeDiv6').style.display = "none";
	document.getElementById('welcomeDiv7').style.display = "none";
	document.getElementById('welcomeDiv8').style.display = "none";
	document.getElementById('welcomeDiv9').style.display = "none";
	document.getElementById('welcomeDiv10').style.display = "none";
	document.getElementById('welcomeDiv11').style.display = "none";
			  
	document.getElementById('welcomeDiv12').style.display = "none";
	document.getElementById('welcomeDiv13').style.display = "none";
	document.getElementById('welcomeDiv14').style.display = "none";
    document.getElementById('welcomeDiv15').style.display = "none";
	document.getElementById('welcomeDiv16').style.display = "none";
	document.getElementById('welcomeDiv17').style.display = "none";
	document.getElementById('welcomeDiv18').style.display = "none";
	document.getElementById('welcomeDiv19').style.display = "none";
	document.getElementById('welcomeDiv20').style.display = "block";
    document.getElementById('welcomeDiv21').style.display = "none";
	document.getElementById('welcomeDiv22').style.display = "none";
	document.getElementById('welcomeDiv23').style.display = "none";
			  
	document.getElementById('welcomeDiv24').style.display = "none";
	document.getElementById('welcomeDiv25').style.display = "none";
	document.getElementById('welcomeDiv26').style.display = "none";
	document.getElementById('welcomeDiv27').style.display = "none";
	document.getElementById('welcomeDiv28').style.display = "none";
	document.getElementById('welcomeDiv29').style.display = "none";
    document.getElementById('welcomeDiv30').style.display = "none";
    document.getElementById('welcomeDiv31').style.display = "none";
	document.getElementById('welcomeDiv32').style.display = "none";
	document.getElementById('welcomeDiv33').style.display = "none";
	document.getElementById('welcomeDiv34').style.display = "none";
	document.getElementById('welcomeDiv35').style.display = "none";
			  
	document.getElementById('welcomeDiv36').style.display = "none";
	document.getElementById('welcomeDiv37').style.display = "none";
	document.getElementById('welcomeDiv38').style.display = "none";
	document.getElementById('welcomeDiv39').style.display = "none";
	document.getElementById('welcomeDiv40').style.display = "none";

}

function showDiv21() {
 document.getElementById('welcomeDiv').style.display = "none";
   document.getElementById('welcomeDiv1').style.display = "none";
    document.getElementById('welcomeDiv3').style.display = "none";
document.getElementById('welcomeDiv2').style.display = "none";
	document.getElementById('welcomeDiv4').style.display = "none";
	document.getElementById('welcomeDiv5').style.display = "none";
	document.getElementById('welcomeDiv6').style.display = "none";
	document.getElementById('welcomeDiv7').style.display = "none";
	document.getElementById('welcomeDiv8').style.display = "none";
	document.getElementById('welcomeDiv9').style.display = "none";
	document.getElementById('welcomeDiv10').style.display = "none";
	document.getElementById('welcomeDiv11').style.display = "none";
			  
	document.getElementById('welcomeDiv12').style.display = "none";
	document.getElementById('welcomeDiv13').style.display = "none";
	document.getElementById('welcomeDiv14').style.display = "none";
    document.getElementById('welcomeDiv15').style.display = "none";
	document.getElementById('welcomeDiv16').style.display = "none";
	document.getElementById('welcomeDiv17').style.display = "none";
	document.getElementById('welcomeDiv18').style.display = "none";
	document.getElementById('welcomeDiv19').style.display = "none";
	document.getElementById('welcomeDiv20').style.display = "none";
    document.getElementById('welcomeDiv21').style.display = "block";
	document.getElementById('welcomeDiv22').style.display = "none";
	document.getElementById('welcomeDiv23').style.display = "none";
			  
	document.getElementById('welcomeDiv24').style.display = "none";
	document.getElementById('welcomeDiv25').style.display = "none";
	document.getElementById('welcomeDiv26').style.display = "none";
	document.getElementById('welcomeDiv27').style.display = "none";
	document.getElementById('welcomeDiv28').style.display = "none";
	document.getElementById('welcomeDiv29').style.display = "none";
    document.getElementById('welcomeDiv30').style.display = "none";
    document.getElementById('welcomeDiv31').style.display = "none";
	document.getElementById('welcomeDiv32').style.display = "none";
	document.getElementById('welcomeDiv33').style.display = "none";
	document.getElementById('welcomeDiv34').style.display = "none";
	document.getElementById('welcomeDiv35').style.display = "none";
			  
	document.getElementById('welcomeDiv36').style.display = "none";
	document.getElementById('welcomeDiv37').style.display = "none";
	document.getElementById('welcomeDiv38').style.display = "none";
	document.getElementById('welcomeDiv39').style.display = "none";
	document.getElementById('welcomeDiv40').style.display = "none";

}

function showDiv22() {
 document.getElementById('welcomeDiv').style.display = "none";
   document.getElementById('welcomeDiv1').style.display = "none";
    document.getElementById('welcomeDiv3').style.display = "none";
document.getElementById('welcomeDiv2').style.display = "none";
	document.getElementById('welcomeDiv4').style.display = "none";
	document.getElementById('welcomeDiv5').style.display = "none";
	document.getElementById('welcomeDiv6').style.display = "none";
	document.getElementById('welcomeDiv7').style.display = "none";
	document.getElementById('welcomeDiv8').style.display = "none";
	document.getElementById('welcomeDiv9').style.display = "none";
	document.getElementById('welcomeDiv10').style.display = "none";
	document.getElementById('welcomeDiv11').style.display = "none";
			  
	document.getElementById('welcomeDiv12').style.display = "none";
	document.getElementById('welcomeDiv13').style.display = "none";
	document.getElementById('welcomeDiv14').style.display = "none";
    document.getElementById('welcomeDiv15').style.display = "none";
	document.getElementById('welcomeDiv16').style.display = "none";
	document.getElementById('welcomeDiv17').style.display = "none";
	document.getElementById('welcomeDiv18').style.display = "none";
	document.getElementById('welcomeDiv19').style.display = "none";
	document.getElementById('welcomeDiv20').style.display = "none";
    document.getElementById('welcomeDiv21').style.display = "none";
	document.getElementById('welcomeDiv22').style.display = "block";
	document.getElementById('welcomeDiv23').style.display = "none";
			  
	document.getElementById('welcomeDiv24').style.display = "none";
	document.getElementById('welcomeDiv25').style.display = "none";
	document.getElementById('welcomeDiv26').style.display = "none";
	document.getElementById('welcomeDiv27').style.display = "none";
	document.getElementById('welcomeDiv28').style.display = "none";
	document.getElementById('welcomeDiv29').style.display = "none";
    document.getElementById('welcomeDiv30').style.display = "none";
    document.getElementById('welcomeDiv31').style.display = "none";
	document.getElementById('welcomeDiv32').style.display = "none";
	document.getElementById('welcomeDiv33').style.display = "none";
	document.getElementById('welcomeDiv34').style.display = "none";
	document.getElementById('welcomeDiv35').style.display = "none";
			  
	document.getElementById('welcomeDiv36').style.display = "none";
	document.getElementById('welcomeDiv37').style.display = "none";
	document.getElementById('welcomeDiv38').style.display = "none";
	document.getElementById('welcomeDiv39').style.display = "none";
	document.getElementById('welcomeDiv40').style.display = "none";

}


function showDiv23() {
 document.getElementById('welcomeDiv').style.display = "none";
   document.getElementById('welcomeDiv1').style.display = "none";
    document.getElementById('welcomeDiv3').style.display = "none";
document.getElementById('welcomeDiv2').style.display = "none";
	document.getElementById('welcomeDiv4').style.display = "none";
	document.getElementById('welcomeDiv5').style.display = "none";
	document.getElementById('welcomeDiv6').style.display = "none";
	document.getElementById('welcomeDiv7').style.display = "none";
	document.getElementById('welcomeDiv8').style.display = "none";
	document.getElementById('welcomeDiv9').style.display = "none";
	document.getElementById('welcomeDiv10').style.display = "none";
	document.getElementById('welcomeDiv11').style.display = "none";
			  
	document.getElementById('welcomeDiv12').style.display = "none";
	document.getElementById('welcomeDiv13').style.display = "none";
	document.getElementById('welcomeDiv14').style.display = "none";
    document.getElementById('welcomeDiv15').style.display = "none";
	document.getElementById('welcomeDiv16').style.display = "none";
	document.getElementById('welcomeDiv17').style.display = "none";
	document.getElementById('welcomeDiv18').style.display = "none";
	document.getElementById('welcomeDiv19').style.display = "none";
	document.getElementById('welcomeDiv20').style.display = "none";
    document.getElementById('welcomeDiv21').style.display = "none";
	document.getElementById('welcomeDiv22').style.display = "none";
	document.getElementById('welcomeDiv23').style.display = "block";
			  
	document.getElementById('welcomeDiv24').style.display = "none";
	document.getElementById('welcomeDiv25').style.display = "none";
	document.getElementById('welcomeDiv26').style.display = "none";
	document.getElementById('welcomeDiv27').style.display = "none";
	document.getElementById('welcomeDiv28').style.display = "none";
	document.getElementById('welcomeDiv29').style.display = "none";
    document.getElementById('welcomeDiv30').style.display = "none";
    document.getElementById('welcomeDiv31').style.display = "none";
	document.getElementById('welcomeDiv32').style.display = "none";
	document.getElementById('welcomeDiv33').style.display = "none";
	document.getElementById('welcomeDiv34').style.display = "none";
	document.getElementById('welcomeDiv35').style.display = "none";
			  
	document.getElementById('welcomeDiv36').style.display = "none";
	document.getElementById('welcomeDiv37').style.display = "none";
	document.getElementById('welcomeDiv38').style.display = "none";
	document.getElementById('welcomeDiv39').style.display = "none";
	document.getElementById('welcomeDiv40').style.display = "none";

}


function showDiv24() {
 document.getElementById('welcomeDiv').style.display = "none";
   document.getElementById('welcomeDiv1').style.display = "none";
    document.getElementById('welcomeDiv3').style.display = "none";
document.getElementById('welcomeDiv2').style.display = "none";
	document.getElementById('welcomeDiv4').style.display = "none";
	document.getElementById('welcomeDiv5').style.display = "none";
	document.getElementById('welcomeDiv6').style.display = "none";
	document.getElementById('welcomeDiv7').style.display = "none";
	document.getElementById('welcomeDiv8').style.display = "none";
	document.getElementById('welcomeDiv9').style.display = "none";
	document.getElementById('welcomeDiv10').style.display = "none";
	document.getElementById('welcomeDiv11').style.display = "none";
			  
	document.getElementById('welcomeDiv12').style.display = "none";
	document.getElementById('welcomeDiv13').style.display = "none";
	document.getElementById('welcomeDiv14').style.display = "none";
    document.getElementById('welcomeDiv15').style.display = "none";
	document.getElementById('welcomeDiv16').style.display = "none";
	document.getElementById('welcomeDiv17').style.display = "none";
	document.getElementById('welcomeDiv18').style.display = "none";
	document.getElementById('welcomeDiv19').style.display = "none";
	document.getElementById('welcomeDiv20').style.display = "none";
    document.getElementById('welcomeDiv21').style.display = "none";
	document.getElementById('welcomeDiv22').style.display = "none";
	document.getElementById('welcomeDiv23').style.display = "none";
			  
	document.getElementById('welcomeDiv24').style.display = "block";
	document.getElementById('welcomeDiv25').style.display = "none";
	document.getElementById('welcomeDiv26').style.display = "none";
	document.getElementById('welcomeDiv27').style.display = "none";
	document.getElementById('welcomeDiv28').style.display = "none";
	document.getElementById('welcomeDiv29').style.display = "none";
    document.getElementById('welcomeDiv30').style.display = "none";
    document.getElementById('welcomeDiv31').style.display = "none";
	document.getElementById('welcomeDiv32').style.display = "none";
	document.getElementById('welcomeDiv33').style.display = "none";
	document.getElementById('welcomeDiv34').style.display = "none";
	document.getElementById('welcomeDiv35').style.display = "none";
			  
	document.getElementById('welcomeDiv36').style.display = "none";
	document.getElementById('welcomeDiv37').style.display = "none";
	document.getElementById('welcomeDiv38').style.display = "none";
	document.getElementById('welcomeDiv39').style.display = "none";
	document.getElementById('welcomeDiv40').style.display = "none";

}

function showDiv25() {
 document.getElementById('welcomeDiv').style.display = "none";
   document.getElementById('welcomeDiv1').style.display = "none";
    document.getElementById('welcomeDiv3').style.display = "none";
document.getElementById('welcomeDiv2').style.display = "none";
	document.getElementById('welcomeDiv4').style.display = "none";
	document.getElementById('welcomeDiv5').style.display = "none";
	document.getElementById('welcomeDiv6').style.display = "none";
	document.getElementById('welcomeDiv7').style.display = "none";
	document.getElementById('welcomeDiv8').style.display = "none";
	document.getElementById('welcomeDiv9').style.display = "none";
	document.getElementById('welcomeDiv10').style.display = "none";
	document.getElementById('welcomeDiv11').style.display = "none";
			  
	document.getElementById('welcomeDiv12').style.display = "none";
	document.getElementById('welcomeDiv13').style.display = "none";
	document.getElementById('welcomeDiv14').style.display = "none";
    document.getElementById('welcomeDiv15').style.display = "none";
	document.getElementById('welcomeDiv16').style.display = "none";
	document.getElementById('welcomeDiv17').style.display = "none";
	document.getElementById('welcomeDiv18').style.display = "none";
	document.getElementById('welcomeDiv19').style.display = "none";
	document.getElementById('welcomeDiv20').style.display = "none";
    document.getElementById('welcomeDiv21').style.display = "none";
	document.getElementById('welcomeDiv22').style.display = "none";
	document.getElementById('welcomeDiv23').style.display = "none";
			  
	document.getElementById('welcomeDiv24').style.display = "none";
	document.getElementById('welcomeDiv25').style.display = "block";
	document.getElementById('welcomeDiv26').style.display = "none";
	document.getElementById('welcomeDiv27').style.display = "none";
	document.getElementById('welcomeDiv28').style.display = "none";
	document.getElementById('welcomeDiv29').style.display = "none";
    document.getElementById('welcomeDiv30').style.display = "none";
    document.getElementById('welcomeDiv31').style.display = "none";
	document.getElementById('welcomeDiv32').style.display = "none";
	document.getElementById('welcomeDiv33').style.display = "none";
	document.getElementById('welcomeDiv34').style.display = "none";
	document.getElementById('welcomeDiv35').style.display = "none";
			  
	document.getElementById('welcomeDiv36').style.display = "none";
	document.getElementById('welcomeDiv37').style.display = "none";
	document.getElementById('welcomeDiv38').style.display = "none";
	document.getElementById('welcomeDiv39').style.display = "none";
	document.getElementById('welcomeDiv40').style.display = "none";

}


function showDiv26() {
 document.getElementById('welcomeDiv').style.display = "none";
   document.getElementById('welcomeDiv1').style.display = "none";
    document.getElementById('welcomeDiv3').style.display = "none";
document.getElementById('welcomeDiv2').style.display = "none";
	document.getElementById('welcomeDiv4').style.display = "none";
	document.getElementById('welcomeDiv5').style.display = "none";
	document.getElementById('welcomeDiv6').style.display = "none";
	document.getElementById('welcomeDiv7').style.display = "none";
	document.getElementById('welcomeDiv8').style.display = "none";
	document.getElementById('welcomeDiv9').style.display = "none";
	document.getElementById('welcomeDiv10').style.display = "none";
	document.getElementById('welcomeDiv11').style.display = "none";
			  
	document.getElementById('welcomeDiv12').style.display = "none";
	document.getElementById('welcomeDiv13').style.display = "none";
	document.getElementById('welcomeDiv14').style.display = "none";
    document.getElementById('welcomeDiv15').style.display = "none";
	document.getElementById('welcomeDiv16').style.display = "none";
	document.getElementById('welcomeDiv17').style.display = "none";
	document.getElementById('welcomeDiv18').style.display = "none";
	document.getElementById('welcomeDiv19').style.display = "none";
	document.getElementById('welcomeDiv20').style.display = "none";
    document.getElementById('welcomeDiv21').style.display = "none";
	document.getElementById('welcomeDiv22').style.display = "none";
	document.getElementById('welcomeDiv23').style.display = "none";
			  
	document.getElementById('welcomeDiv24').style.display = "none";
	document.getElementById('welcomeDiv25').style.display = "none";
	document.getElementById('welcomeDiv26').style.display = "block";
	document.getElementById('welcomeDiv27').style.display = "none";
	document.getElementById('welcomeDiv28').style.display = "none";
	document.getElementById('welcomeDiv29').style.display = "none";
    document.getElementById('welcomeDiv30').style.display = "none";
    document.getElementById('welcomeDiv31').style.display = "none";
	document.getElementById('welcomeDiv32').style.display = "none";
	document.getElementById('welcomeDiv33').style.display = "none";
	document.getElementById('welcomeDiv34').style.display = "none";
	document.getElementById('welcomeDiv35').style.display = "none";
			  
	document.getElementById('welcomeDiv36').style.display = "none";
	document.getElementById('welcomeDiv37').style.display = "none";
	document.getElementById('welcomeDiv38').style.display = "none";
	document.getElementById('welcomeDiv39').style.display = "none";
	document.getElementById('welcomeDiv40').style.display = "none";

}


function showDiv27() {
 document.getElementById('welcomeDiv').style.display = "none";
   document.getElementById('welcomeDiv1').style.display = "none";
    document.getElementById('welcomeDiv3').style.display = "none";
document.getElementById('welcomeDiv2').style.display = "none";
	document.getElementById('welcomeDiv4').style.display = "none";
	document.getElementById('welcomeDiv5').style.display = "none";
	document.getElementById('welcomeDiv6').style.display = "none";
	document.getElementById('welcomeDiv7').style.display = "none";
	document.getElementById('welcomeDiv8').style.display = "none";
	document.getElementById('welcomeDiv9').style.display = "none";
	document.getElementById('welcomeDiv10').style.display = "none";
	document.getElementById('welcomeDiv11').style.display = "none";
			  
	document.getElementById('welcomeDiv12').style.display = "none";
	document.getElementById('welcomeDiv13').style.display = "none";
	document.getElementById('welcomeDiv14').style.display = "none";
    document.getElementById('welcomeDiv15').style.display = "none";
	document.getElementById('welcomeDiv16').style.display = "none";
	document.getElementById('welcomeDiv17').style.display = "none";
	document.getElementById('welcomeDiv18').style.display = "none";
	document.getElementById('welcomeDiv19').style.display = "none";
	document.getElementById('welcomeDiv20').style.display = "none";
    document.getElementById('welcomeDiv21').style.display = "none";
	document.getElementById('welcomeDiv22').style.display = "none";
	document.getElementById('welcomeDiv23').style.display = "none";
			  
	document.getElementById('welcomeDiv24').style.display = "none";
	document.getElementById('welcomeDiv25').style.display = "none";
	document.getElementById('welcomeDiv26').style.display = "none";
	document.getElementById('welcomeDiv27').style.display = "block";
	document.getElementById('welcomeDiv28').style.display = "none";
	document.getElementById('welcomeDiv29').style.display = "none";
    document.getElementById('welcomeDiv30').style.display = "none";
    document.getElementById('welcomeDiv31').style.display = "none";
	document.getElementById('welcomeDiv32').style.display = "none";
	document.getElementById('welcomeDiv33').style.display = "none";
	document.getElementById('welcomeDiv34').style.display = "none";
	document.getElementById('welcomeDiv35').style.display = "none";
			  
	document.getElementById('welcomeDiv36').style.display = "none";
	document.getElementById('welcomeDiv37').style.display = "none";
	document.getElementById('welcomeDiv38').style.display = "none";
	document.getElementById('welcomeDiv39').style.display = "none";
	document.getElementById('welcomeDiv40').style.display = "none";

}


function showDiv28() {
 document.getElementById('welcomeDiv').style.display = "none";
   document.getElementById('welcomeDiv1').style.display = "none";
    document.getElementById('welcomeDiv3').style.display = "none";
document.getElementById('welcomeDiv2').style.display = "none";
	document.getElementById('welcomeDiv4').style.display = "none";
	document.getElementById('welcomeDiv5').style.display = "none";
	document.getElementById('welcomeDiv6').style.display = "none";
	document.getElementById('welcomeDiv7').style.display = "none";
	document.getElementById('welcomeDiv8').style.display = "none";
	document.getElementById('welcomeDiv9').style.display = "none";
	document.getElementById('welcomeDiv10').style.display = "none";
	document.getElementById('welcomeDiv11').style.display = "none";
			  
	document.getElementById('welcomeDiv12').style.display = "none";
	document.getElementById('welcomeDiv13').style.display = "none";
	document.getElementById('welcomeDiv14').style.display = "none";
    document.getElementById('welcomeDiv15').style.display = "none";
	document.getElementById('welcomeDiv16').style.display = "none";
	document.getElementById('welcomeDiv17').style.display = "none";
	document.getElementById('welcomeDiv18').style.display = "none";
	document.getElementById('welcomeDiv19').style.display = "none";
	document.getElementById('welcomeDiv20').style.display = "none";
    document.getElementById('welcomeDiv21').style.display = "none";
	document.getElementById('welcomeDiv22').style.display = "none";
	document.getElementById('welcomeDiv23').style.display = "none";
			  
	document.getElementById('welcomeDiv24').style.display = "none";
	document.getElementById('welcomeDiv25').style.display = "none";
	document.getElementById('welcomeDiv26').style.display = "none";
	document.getElementById('welcomeDiv27').style.display = "none";
	document.getElementById('welcomeDiv28').style.display = "block";
	document.getElementById('welcomeDiv29').style.display = "none";
    document.getElementById('welcomeDiv30').style.display = "none";
    document.getElementById('welcomeDiv31').style.display = "none";
	document.getElementById('welcomeDiv32').style.display = "none";
	document.getElementById('welcomeDiv33').style.display = "none";
	document.getElementById('welcomeDiv34').style.display = "none";
	document.getElementById('welcomeDiv35').style.display = "none";
			  
	document.getElementById('welcomeDiv36').style.display = "none";
	document.getElementById('welcomeDiv37').style.display = "none";
	document.getElementById('welcomeDiv38').style.display = "none";
	document.getElementById('welcomeDiv39').style.display = "none";
	document.getElementById('welcomeDiv40').style.display = "none";

}

function showDiv29() {
 document.getElementById('welcomeDiv').style.display = "none";
   document.getElementById('welcomeDiv1').style.display = "none";
    document.getElementById('welcomeDiv3').style.display = "none";
document.getElementById('welcomeDiv2').style.display = "none";
	document.getElementById('welcomeDiv4').style.display = "none";
	document.getElementById('welcomeDiv5').style.display = "none";
	document.getElementById('welcomeDiv6').style.display = "none";
	document.getElementById('welcomeDiv7').style.display = "none";
	document.getElementById('welcomeDiv8').style.display = "none";
	document.getElementById('welcomeDiv9').style.display = "none";
	document.getElementById('welcomeDiv10').style.display = "none";
	document.getElementById('welcomeDiv11').style.display = "none";
			  
	document.getElementById('welcomeDiv12').style.display = "none";
	document.getElementById('welcomeDiv13').style.display = "none";
	document.getElementById('welcomeDiv14').style.display = "none";
    document.getElementById('welcomeDiv15').style.display = "none";
	document.getElementById('welcomeDiv16').style.display = "none";
	document.getElementById('welcomeDiv17').style.display = "none";
	document.getElementById('welcomeDiv18').style.display = "none";
	document.getElementById('welcomeDiv19').style.display = "none";
	document.getElementById('welcomeDiv20').style.display = "none";
    document.getElementById('welcomeDiv21').style.display = "none";
	document.getElementById('welcomeDiv22').style.display = "none";
	document.getElementById('welcomeDiv23').style.display = "none";
			  
	document.getElementById('welcomeDiv24').style.display = "none";
	document.getElementById('welcomeDiv25').style.display = "none";
	document.getElementById('welcomeDiv26').style.display = "none";
	document.getElementById('welcomeDiv27').style.display = "none";
	document.getElementById('welcomeDiv28').style.display = "none";
	document.getElementById('welcomeDiv29').style.display = "block";
    document.getElementById('welcomeDiv30').style.display = "none";
    document.getElementById('welcomeDiv31').style.display = "none";
	document.getElementById('welcomeDiv32').style.display = "none";
	document.getElementById('welcomeDiv33').style.display = "none";
	document.getElementById('welcomeDiv34').style.display = "none";
	document.getElementById('welcomeDiv35').style.display = "none";
			  
	document.getElementById('welcomeDiv36').style.display = "none";
	document.getElementById('welcomeDiv37').style.display = "none";
	document.getElementById('welcomeDiv38').style.display = "none";
	document.getElementById('welcomeDiv39').style.display = "none";
	document.getElementById('welcomeDiv40').style.display = "none";

}


function showDiv30() {
 document.getElementById('welcomeDiv').style.display = "none";
   document.getElementById('welcomeDiv1').style.display = "none";
    document.getElementById('welcomeDiv3').style.display = "none";
document.getElementById('welcomeDiv2').style.display = "none";
	document.getElementById('welcomeDiv4').style.display = "none";
	document.getElementById('welcomeDiv5').style.display = "none";
	document.getElementById('welcomeDiv6').style.display = "none";
	document.getElementById('welcomeDiv7').style.display = "none";
	document.getElementById('welcomeDiv8').style.display = "none";
	document.getElementById('welcomeDiv9').style.display = "none";
	document.getElementById('welcomeDiv10').style.display = "none";
	document.getElementById('welcomeDiv11').style.display = "none";
			  
	document.getElementById('welcomeDiv12').style.display = "none";
	document.getElementById('welcomeDiv13').style.display = "none";
	document.getElementById('welcomeDiv14').style.display = "none";
    document.getElementById('welcomeDiv15').style.display = "none";
	document.getElementById('welcomeDiv16').style.display = "none";
	document.getElementById('welcomeDiv17').style.display = "none";
	document.getElementById('welcomeDiv18').style.display = "none";
	document.getElementById('welcomeDiv19').style.display = "none";
	document.getElementById('welcomeDiv20').style.display = "none";
    document.getElementById('welcomeDiv21').style.display = "none";
	document.getElementById('welcomeDiv22').style.display = "none";
	document.getElementById('welcomeDiv23').style.display = "none";
			  
	document.getElementById('welcomeDiv24').style.display = "none";
	document.getElementById('welcomeDiv25').style.display = "none";
	document.getElementById('welcomeDiv26').style.display = "none";
	document.getElementById('welcomeDiv27').style.display = "none";
	document.getElementById('welcomeDiv28').style.display = "none";
	document.getElementById('welcomeDiv29').style.display = "none";
    document.getElementById('welcomeDiv30').style.display = "block";
    document.getElementById('welcomeDiv31').style.display = "none";
	document.getElementById('welcomeDiv32').style.display = "none";
	document.getElementById('welcomeDiv33').style.display = "none";
	document.getElementById('welcomeDiv34').style.display = "none";
	document.getElementById('welcomeDiv35').style.display = "none";
			  
	document.getElementById('welcomeDiv36').style.display = "none";
	document.getElementById('welcomeDiv37').style.display = "none";
	document.getElementById('welcomeDiv38').style.display = "none";
	document.getElementById('welcomeDiv39').style.display = "none";
	document.getElementById('welcomeDiv40').style.display = "none";

}


function showDiv31() {
 document.getElementById('welcomeDiv').style.display = "none";
   document.getElementById('welcomeDiv1').style.display = "none";
    document.getElementById('welcomeDiv3').style.display = "none";
document.getElementById('welcomeDiv2').style.display = "none";
	document.getElementById('welcomeDiv4').style.display = "none";
	document.getElementById('welcomeDiv5').style.display = "none";
	document.getElementById('welcomeDiv6').style.display = "none";
	document.getElementById('welcomeDiv7').style.display = "none";
	document.getElementById('welcomeDiv8').style.display = "none";
	document.getElementById('welcomeDiv9').style.display = "none";
	document.getElementById('welcomeDiv10').style.display = "none";
	document.getElementById('welcomeDiv11').style.display = "none";
			  
	document.getElementById('welcomeDiv12').style.display = "none";
	document.getElementById('welcomeDiv13').style.display = "none";
	document.getElementById('welcomeDiv14').style.display = "none";
    document.getElementById('welcomeDiv15').style.display = "none";
	document.getElementById('welcomeDiv16').style.display = "none";
	document.getElementById('welcomeDiv17').style.display = "none";
	document.getElementById('welcomeDiv18').style.display = "none";
	document.getElementById('welcomeDiv19').style.display = "none";
	document.getElementById('welcomeDiv20').style.display = "none";
    document.getElementById('welcomeDiv21').style.display = "none";
	document.getElementById('welcomeDiv22').style.display = "none";
	document.getElementById('welcomeDiv23').style.display = "none";
			  
	document.getElementById('welcomeDiv24').style.display = "none";
	document.getElementById('welcomeDiv25').style.display = "none";
	document.getElementById('welcomeDiv26').style.display = "none";
	document.getElementById('welcomeDiv27').style.display = "none";
	document.getElementById('welcomeDiv28').style.display = "none";
	document.getElementById('welcomeDiv29').style.display = "none";
    document.getElementById('welcomeDiv30').style.display = "none";
    document.getElementById('welcomeDiv31').style.display = "block";
	document.getElementById('welcomeDiv32').style.display = "none";
	document.getElementById('welcomeDiv33').style.display = "none";
	document.getElementById('welcomeDiv34').style.display = "none";
	document.getElementById('welcomeDiv35').style.display = "none";
			  
	document.getElementById('welcomeDiv36').style.display = "none";
	document.getElementById('welcomeDiv37').style.display = "none";
	document.getElementById('welcomeDiv38').style.display = "none";
	document.getElementById('welcomeDiv39').style.display = "none";
	document.getElementById('welcomeDiv40').style.display = "none";

}


function showDiv32() {
 document.getElementById('welcomeDiv').style.display = "none";
   document.getElementById('welcomeDiv1').style.display = "none";
    document.getElementById('welcomeDiv3').style.display = "none";
document.getElementById('welcomeDiv2').style.display = "none";
	document.getElementById('welcomeDiv4').style.display = "none";
	document.getElementById('welcomeDiv5').style.display = "none";
	document.getElementById('welcomeDiv6').style.display = "none";
	document.getElementById('welcomeDiv7').style.display = "none";
	document.getElementById('welcomeDiv8').style.display = "none";
	document.getElementById('welcomeDiv9').style.display = "none";
	document.getElementById('welcomeDiv10').style.display = "none";
	document.getElementById('welcomeDiv11').style.display = "none";
			  
	document.getElementById('welcomeDiv12').style.display = "none";
	document.getElementById('welcomeDiv13').style.display = "none";
	document.getElementById('welcomeDiv14').style.display = "none";
    document.getElementById('welcomeDiv15').style.display = "none";
	document.getElementById('welcomeDiv16').style.display = "none";
	document.getElementById('welcomeDiv17').style.display = "none";
	document.getElementById('welcomeDiv18').style.display = "none";
	document.getElementById('welcomeDiv19').style.display = "none";
	document.getElementById('welcomeDiv20').style.display = "none";
    document.getElementById('welcomeDiv21').style.display = "none";
	document.getElementById('welcomeDiv22').style.display = "none";
	document.getElementById('welcomeDiv23').style.display = "none";
			  
	document.getElementById('welcomeDiv24').style.display = "none";
	document.getElementById('welcomeDiv25').style.display = "none";
	document.getElementById('welcomeDiv26').style.display = "none";
	document.getElementById('welcomeDiv27').style.display = "none";
	document.getElementById('welcomeDiv28').style.display = "none";
	document.getElementById('welcomeDiv29').style.display = "none";
    document.getElementById('welcomeDiv30').style.display = "none";
    document.getElementById('welcomeDiv31').style.display = "none";
	document.getElementById('welcomeDiv32').style.display = "block";
	document.getElementById('welcomeDiv33').style.display = "none";
	document.getElementById('welcomeDiv34').style.display = "none";
	document.getElementById('welcomeDiv35').style.display = "none";
			  
	document.getElementById('welcomeDiv36').style.display = "none";
	document.getElementById('welcomeDiv37').style.display = "none";
	document.getElementById('welcomeDiv38').style.display = "none";
	document.getElementById('welcomeDiv39').style.display = "none";
	document.getElementById('welcomeDiv40').style.display = "none";

}


function showDiv33() {
 document.getElementById('welcomeDiv').style.display = "none";
   document.getElementById('welcomeDiv1').style.display = "none";
    document.getElementById('welcomeDiv3').style.display = "none";
document.getElementById('welcomeDiv2').style.display = "none";
	document.getElementById('welcomeDiv4').style.display = "none";
	document.getElementById('welcomeDiv5').style.display = "none";
	document.getElementById('welcomeDiv6').style.display = "none";
	document.getElementById('welcomeDiv7').style.display = "none";
	document.getElementById('welcomeDiv8').style.display = "none";
	document.getElementById('welcomeDiv9').style.display = "none";
	document.getElementById('welcomeDiv10').style.display = "none";
	document.getElementById('welcomeDiv11').style.display = "none";
			  
	document.getElementById('welcomeDiv12').style.display = "none";
	document.getElementById('welcomeDiv13').style.display = "none";
	document.getElementById('welcomeDiv14').style.display = "none";
    document.getElementById('welcomeDiv15').style.display = "none";
	document.getElementById('welcomeDiv16').style.display = "none";
	document.getElementById('welcomeDiv17').style.display = "none";
	document.getElementById('welcomeDiv18').style.display = "none";
	document.getElementById('welcomeDiv19').style.display = "none";
	document.getElementById('welcomeDiv20').style.display = "none";
    document.getElementById('welcomeDiv21').style.display = "none";
	document.getElementById('welcomeDiv22').style.display = "none";
	document.getElementById('welcomeDiv23').style.display = "none";
			  
	document.getElementById('welcomeDiv24').style.display = "none";
	document.getElementById('welcomeDiv25').style.display = "none";
	document.getElementById('welcomeDiv26').style.display = "none";
	document.getElementById('welcomeDiv27').style.display = "none";
	document.getElementById('welcomeDiv28').style.display = "none";
	document.getElementById('welcomeDiv29').style.display = "none";
    document.getElementById('welcomeDiv30').style.display = "none";
    document.getElementById('welcomeDiv31').style.display = "none";
	document.getElementById('welcomeDiv32').style.display = "none";
	document.getElementById('welcomeDiv33').style.display = "block";
	document.getElementById('welcomeDiv34').style.display = "none";
	document.getElementById('welcomeDiv35').style.display = "none";
			  
	document.getElementById('welcomeDiv36').style.display = "none";
	document.getElementById('welcomeDiv37').style.display = "none";
	document.getElementById('welcomeDiv38').style.display = "none";
	document.getElementById('welcomeDiv39').style.display = "none";
	document.getElementById('welcomeDiv40').style.display = "none";

}

function showDiv34() {
 document.getElementById('welcomeDiv').style.display = "none";
   document.getElementById('welcomeDiv1').style.display = "none";
    document.getElementById('welcomeDiv3').style.display = "none";
document.getElementById('welcomeDiv2').style.display = "none";
	document.getElementById('welcomeDiv4').style.display = "none";
	document.getElementById('welcomeDiv5').style.display = "none";
	document.getElementById('welcomeDiv6').style.display = "none";
	document.getElementById('welcomeDiv7').style.display = "none";
	document.getElementById('welcomeDiv8').style.display = "none";
	document.getElementById('welcomeDiv9').style.display = "none";
	document.getElementById('welcomeDiv10').style.display = "none";
	document.getElementById('welcomeDiv11').style.display = "none";
			  
	document.getElementById('welcomeDiv12').style.display = "none";
	document.getElementById('welcomeDiv13').style.display = "none";
	document.getElementById('welcomeDiv14').style.display = "none";
    document.getElementById('welcomeDiv15').style.display = "none";
	document.getElementById('welcomeDiv16').style.display = "none";
	document.getElementById('welcomeDiv17').style.display = "none";
	document.getElementById('welcomeDiv18').style.display = "none";
	document.getElementById('welcomeDiv19').style.display = "none";
	document.getElementById('welcomeDiv20').style.display = "none";
    document.getElementById('welcomeDiv21').style.display = "none";
	document.getElementById('welcomeDiv22').style.display = "none";
	document.getElementById('welcomeDiv23').style.display = "none";
			  
	document.getElementById('welcomeDiv24').style.display = "none";
	document.getElementById('welcomeDiv25').style.display = "none";
	document.getElementById('welcomeDiv26').style.display = "none";
	document.getElementById('welcomeDiv27').style.display = "none";
	document.getElementById('welcomeDiv28').style.display = "none";
	document.getElementById('welcomeDiv29').style.display = "none";
    document.getElementById('welcomeDiv30').style.display = "none";
    document.getElementById('welcomeDiv31').style.display = "none";
	document.getElementById('welcomeDiv32').style.display = "none";
	document.getElementById('welcomeDiv33').style.display = "none";
	document.getElementById('welcomeDiv34').style.display = "block";
	document.getElementById('welcomeDiv35').style.display = "none";
			  
	document.getElementById('welcomeDiv36').style.display = "none";
	document.getElementById('welcomeDiv37').style.display = "none";
	document.getElementById('welcomeDiv38').style.display = "none";
	document.getElementById('welcomeDiv39').style.display = "none";
	document.getElementById('welcomeDiv40').style.display = "none";

}


function showDiv35() {
 document.getElementById('welcomeDiv').style.display = "none";
   document.getElementById('welcomeDiv1').style.display = "none";
    document.getElementById('welcomeDiv3').style.display = "none";
document.getElementById('welcomeDiv2').style.display = "none";
	document.getElementById('welcomeDiv4').style.display = "none";
	document.getElementById('welcomeDiv5').style.display = "none";
	document.getElementById('welcomeDiv6').style.display = "none";
	document.getElementById('welcomeDiv7').style.display = "none";
	document.getElementById('welcomeDiv8').style.display = "none";
	document.getElementById('welcomeDiv9').style.display = "none";
	document.getElementById('welcomeDiv10').style.display = "none";
	document.getElementById('welcomeDiv11').style.display = "none";
			  
	document.getElementById('welcomeDiv12').style.display = "none";
	document.getElementById('welcomeDiv13').style.display = "none";
	document.getElementById('welcomeDiv14').style.display = "none";
    document.getElementById('welcomeDiv15').style.display = "none";
	document.getElementById('welcomeDiv16').style.display = "none";
	document.getElementById('welcomeDiv17').style.display = "none";
	document.getElementById('welcomeDiv18').style.display = "none";
	document.getElementById('welcomeDiv19').style.display = "none";
	document.getElementById('welcomeDiv20').style.display = "none";
    document.getElementById('welcomeDiv21').style.display = "none";
	document.getElementById('welcomeDiv22').style.display = "none";
	document.getElementById('welcomeDiv23').style.display = "none";
			  
	document.getElementById('welcomeDiv24').style.display = "none";
	document.getElementById('welcomeDiv25').style.display = "none";
	document.getElementById('welcomeDiv26').style.display = "none";
	document.getElementById('welcomeDiv27').style.display = "none";
	document.getElementById('welcomeDiv28').style.display = "none";
	document.getElementById('welcomeDiv29').style.display = "none";
    document.getElementById('welcomeDiv30').style.display = "none";
    document.getElementById('welcomeDiv31').style.display = "none";
	document.getElementById('welcomeDiv32').style.display = "none";
	document.getElementById('welcomeDiv33').style.display = "none";
	document.getElementById('welcomeDiv34').style.display = "none";
	document.getElementById('welcomeDiv35').style.display = "block";
			  
	document.getElementById('welcomeDiv36').style.display = "none";
	document.getElementById('welcomeDiv37').style.display = "none";
	document.getElementById('welcomeDiv38').style.display = "none";
	document.getElementById('welcomeDiv39').style.display = "none";
	document.getElementById('welcomeDiv40').style.display = "none";

}

function showDiv36() {
 document.getElementById('welcomeDiv').style.display = "none";
   document.getElementById('welcomeDiv1').style.display = "none";
    document.getElementById('welcomeDiv3').style.display = "none";
document.getElementById('welcomeDiv2').style.display = "none";
	document.getElementById('welcomeDiv4').style.display = "none";
	document.getElementById('welcomeDiv5').style.display = "none";
	document.getElementById('welcomeDiv6').style.display = "none";
	document.getElementById('welcomeDiv7').style.display = "none";
	document.getElementById('welcomeDiv8').style.display = "none";
	document.getElementById('welcomeDiv9').style.display = "none";
	document.getElementById('welcomeDiv10').style.display = "none";
	document.getElementById('welcomeDiv11').style.display = "none";
			  
	document.getElementById('welcomeDiv12').style.display = "none";
	document.getElementById('welcomeDiv13').style.display = "none";
	document.getElementById('welcomeDiv14').style.display = "none";
    document.getElementById('welcomeDiv15').style.display = "none";
	document.getElementById('welcomeDiv16').style.display = "none";
	document.getElementById('welcomeDiv17').style.display = "none";
	document.getElementById('welcomeDiv18').style.display = "none";
	document.getElementById('welcomeDiv19').style.display = "none";
	document.getElementById('welcomeDiv20').style.display = "none";
    document.getElementById('welcomeDiv21').style.display = "none";
	document.getElementById('welcomeDiv22').style.display = "none";
	document.getElementById('welcomeDiv23').style.display = "none";
			  
	document.getElementById('welcomeDiv24').style.display = "none";
	document.getElementById('welcomeDiv25').style.display = "none";
	document.getElementById('welcomeDiv26').style.display = "none";
	document.getElementById('welcomeDiv27').style.display = "none";
	document.getElementById('welcomeDiv28').style.display = "none";
	document.getElementById('welcomeDiv29').style.display = "none";
    document.getElementById('welcomeDiv30').style.display = "none";
    document.getElementById('welcomeDiv31').style.display = "none";
	document.getElementById('welcomeDiv32').style.display = "none";
	document.getElementById('welcomeDiv33').style.display = "none";
	document.getElementById('welcomeDiv34').style.display = "none";
	document.getElementById('welcomeDiv35').style.display = "none";
			  
	document.getElementById('welcomeDiv36').style.display = "block";
	document.getElementById('welcomeDiv37').style.display = "none";
	document.getElementById('welcomeDiv38').style.display = "none";
	document.getElementById('welcomeDiv39').style.display = "none";
	document.getElementById('welcomeDiv40').style.display = "none";

}

function showDiv37() {
 document.getElementById('welcomeDiv').style.display = "none";
   document.getElementById('welcomeDiv1').style.display = "none";
    document.getElementById('welcomeDiv3').style.display = "none";
document.getElementById('welcomeDiv2').style.display = "none";
	document.getElementById('welcomeDiv4').style.display = "none";
	document.getElementById('welcomeDiv5').style.display = "none";
	document.getElementById('welcomeDiv6').style.display = "none";
	document.getElementById('welcomeDiv7').style.display = "none";
	document.getElementById('welcomeDiv8').style.display = "none";
	document.getElementById('welcomeDiv9').style.display = "none";
	document.getElementById('welcomeDiv10').style.display = "none";
	document.getElementById('welcomeDiv11').style.display = "none";
			  
	document.getElementById('welcomeDiv12').style.display = "none";
	document.getElementById('welcomeDiv13').style.display = "none";
	document.getElementById('welcomeDiv14').style.display = "none";
    document.getElementById('welcomeDiv15').style.display = "none";
	document.getElementById('welcomeDiv16').style.display = "none";
	document.getElementById('welcomeDiv17').style.display = "none";
	document.getElementById('welcomeDiv18').style.display = "none";
	document.getElementById('welcomeDiv19').style.display = "none";
	document.getElementById('welcomeDiv20').style.display = "none";
    document.getElementById('welcomeDiv21').style.display = "none";
	document.getElementById('welcomeDiv22').style.display = "none";
	document.getElementById('welcomeDiv23').style.display = "none";
			  
	document.getElementById('welcomeDiv24').style.display = "none";
	document.getElementById('welcomeDiv25').style.display = "none";
	document.getElementById('welcomeDiv26').style.display = "none";
	document.getElementById('welcomeDiv27').style.display = "none";
	document.getElementById('welcomeDiv28').style.display = "none";
	document.getElementById('welcomeDiv29').style.display = "none";
    document.getElementById('welcomeDiv30').style.display = "none";
    document.getElementById('welcomeDiv31').style.display = "none";
	document.getElementById('welcomeDiv32').style.display = "none";
	document.getElementById('welcomeDiv33').style.display = "none";
	document.getElementById('welcomeDiv34').style.display = "none";
	document.getElementById('welcomeDiv35').style.display = "none";
			  
	document.getElementById('welcomeDiv36').style.display = "none";
	document.getElementById('welcomeDiv37').style.display = "block";
	document.getElementById('welcomeDiv38').style.display = "none";
	document.getElementById('welcomeDiv39').style.display = "none";
	document.getElementById('welcomeDiv40').style.display = "none";

}



function showDiv38() {
 document.getElementById('welcomeDiv').style.display = "none";
   document.getElementById('welcomeDiv1').style.display = "none";
    document.getElementById('welcomeDiv3').style.display = "none";
document.getElementById('welcomeDiv2').style.display = "none";
	document.getElementById('welcomeDiv4').style.display = "none";
	document.getElementById('welcomeDiv5').style.display = "none";
	document.getElementById('welcomeDiv6').style.display = "none";
	document.getElementById('welcomeDiv7').style.display = "none";
	document.getElementById('welcomeDiv8').style.display = "none";
	document.getElementById('welcomeDiv9').style.display = "none";
	document.getElementById('welcomeDiv10').style.display = "none";
	document.getElementById('welcomeDiv11').style.display = "none";
			  
	document.getElementById('welcomeDiv12').style.display = "none";
	document.getElementById('welcomeDiv13').style.display = "none";
	document.getElementById('welcomeDiv14').style.display = "none";
    document.getElementById('welcomeDiv15').style.display = "none";
	document.getElementById('welcomeDiv16').style.display = "none";
	document.getElementById('welcomeDiv17').style.display = "none";
	document.getElementById('welcomeDiv18').style.display = "none";
	document.getElementById('welcomeDiv19').style.display = "none";
	document.getElementById('welcomeDiv20').style.display = "none";
    document.getElementById('welcomeDiv21').style.display = "none";
	document.getElementById('welcomeDiv22').style.display = "none";
	document.getElementById('welcomeDiv23').style.display = "none";
			  
	document.getElementById('welcomeDiv24').style.display = "none";
	document.getElementById('welcomeDiv25').style.display = "none";
	document.getElementById('welcomeDiv26').style.display = "none";
	document.getElementById('welcomeDiv27').style.display = "none";
	document.getElementById('welcomeDiv28').style.display = "none";
	document.getElementById('welcomeDiv29').style.display = "none";
    document.getElementById('welcomeDiv30').style.display = "none";
    document.getElementById('welcomeDiv31').style.display = "none";
	document.getElementById('welcomeDiv32').style.display = "none";
	document.getElementById('welcomeDiv33').style.display = "none";
	document.getElementById('welcomeDiv34').style.display = "none";
	document.getElementById('welcomeDiv35').style.display = "none";
			  
	document.getElementById('welcomeDiv36').style.display = "none";
	document.getElementById('welcomeDiv37').style.display = "none";
	document.getElementById('welcomeDiv38').style.display = "block";
	document.getElementById('welcomeDiv39').style.display = "none";
	document.getElementById('welcomeDiv40').style.display = "none";

}


function showDiv39() {
 document.getElementById('welcomeDiv').style.display = "none";
   document.getElementById('welcomeDiv1').style.display = "none";
    document.getElementById('welcomeDiv3').style.display = "none";
document.getElementById('welcomeDiv2').style.display = "none";
	document.getElementById('welcomeDiv4').style.display = "none";
	document.getElementById('welcomeDiv5').style.display = "none";
	document.getElementById('welcomeDiv6').style.display = "none";
	document.getElementById('welcomeDiv7').style.display = "none";
	document.getElementById('welcomeDiv8').style.display = "none";
	document.getElementById('welcomeDiv9').style.display = "none";
	document.getElementById('welcomeDiv10').style.display = "none";
	document.getElementById('welcomeDiv11').style.display = "none";
			  
	document.getElementById('welcomeDiv12').style.display = "none";
	document.getElementById('welcomeDiv13').style.display = "none";
	document.getElementById('welcomeDiv14').style.display = "none";
    document.getElementById('welcomeDiv15').style.display = "none";
	document.getElementById('welcomeDiv16').style.display = "none";
	document.getElementById('welcomeDiv17').style.display = "none";
	document.getElementById('welcomeDiv18').style.display = "none";
	document.getElementById('welcomeDiv19').style.display = "none";
	document.getElementById('welcomeDiv20').style.display = "none";
    document.getElementById('welcomeDiv21').style.display = "none";
	document.getElementById('welcomeDiv22').style.display = "none";
	document.getElementById('welcomeDiv23').style.display = "none";
			  
	document.getElementById('welcomeDiv24').style.display = "none";
	document.getElementById('welcomeDiv25').style.display = "none";
	document.getElementById('welcomeDiv26').style.display = "none";
	document.getElementById('welcomeDiv27').style.display = "none";
	document.getElementById('welcomeDiv28').style.display = "none";
	document.getElementById('welcomeDiv29').style.display = "none";
    document.getElementById('welcomeDiv30').style.display = "none";
    document.getElementById('welcomeDiv31').style.display = "none";
	document.getElementById('welcomeDiv32').style.display = "none";
	document.getElementById('welcomeDiv33').style.display = "none";
	document.getElementById('welcomeDiv34').style.display = "none";
	document.getElementById('welcomeDiv35').style.display = "none";
			  
	document.getElementById('welcomeDiv36').style.display = "none";
	document.getElementById('welcomeDiv37').style.display = "none";
	document.getElementById('welcomeDiv38').style.display = "none";
	document.getElementById('welcomeDiv39').style.display = "block";
	document.getElementById('welcomeDiv40').style.display = "none";

}


function showDiv40() {
 document.getElementById('welcomeDiv').style.display = "none";
   document.getElementById('welcomeDiv1').style.display = "none";
    document.getElementById('welcomeDiv3').style.display = "none";
document.getElementById('welcomeDiv2').style.display = "none";
	document.getElementById('welcomeDiv4').style.display = "none";
	document.getElementById('welcomeDiv5').style.display = "none";
	document.getElementById('welcomeDiv6').style.display = "none";
	document.getElementById('welcomeDiv7').style.display = "none";
	document.getElementById('welcomeDiv8').style.display = "none";
	document.getElementById('welcomeDiv9').style.display = "none";
	document.getElementById('welcomeDiv10').style.display = "none";
	document.getElementById('welcomeDiv11').style.display = "none";
			  
	document.getElementById('welcomeDiv12').style.display = "none";
	document.getElementById('welcomeDiv13').style.display = "none";
	document.getElementById('welcomeDiv14').style.display = "none";
    document.getElementById('welcomeDiv15').style.display = "none";
	document.getElementById('welcomeDiv16').style.display = "none";
	document.getElementById('welcomeDiv17').style.display = "none";
	document.getElementById('welcomeDiv18').style.display = "none";
	document.getElementById('welcomeDiv19').style.display = "none";
	document.getElementById('welcomeDiv20').style.display = "none";
    document.getElementById('welcomeDiv21').style.display = "none";
	document.getElementById('welcomeDiv22').style.display = "none";
	document.getElementById('welcomeDiv23').style.display = "none";
			  
	document.getElementById('welcomeDiv24').style.display = "none";
	document.getElementById('welcomeDiv25').style.display = "none";
	document.getElementById('welcomeDiv26').style.display = "none";
	document.getElementById('welcomeDiv27').style.display = "none";
	document.getElementById('welcomeDiv28').style.display = "none";
	document.getElementById('welcomeDiv29').style.display = "none";
    document.getElementById('welcomeDiv30').style.display = "none";
    document.getElementById('welcomeDiv31').style.display = "none";
	document.getElementById('welcomeDiv32').style.display = "none";
	document.getElementById('welcomeDiv33').style.display = "none";
	document.getElementById('welcomeDiv34').style.display = "none";
	document.getElementById('welcomeDiv35').style.display = "none";
			  
	document.getElementById('welcomeDiv36').style.display = "none";
	document.getElementById('welcomeDiv37').style.display = "none";
	document.getElementById('welcomeDiv38').style.display = "none";
	document.getElementById('welcomeDiv39').style.display = "none";
	document.getElementById('welcomeDiv40').style.display = "block";

}

</script>
			  
			  
			  
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
