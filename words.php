<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Listen to Words</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
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
                <a class="navbar-brand" href="#">Sinhala Speech Therapy Application</a>
           

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
                        <a href="drag.php">Game</a>
                    </li>			
					
                </ul>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
           
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
	
		<div class="col-lg-6 text-left">
              <!-- Page Content start -->
		
	<legend>Select Words</legend>
		 <table class="table table-bordered" >
			  <thead>
				<th>ID</th>
				<th>Sinhala Name</th>
				<th>Word Name</th>
				
				<th>Image</th>
			   
				
			  
			  </thead>
			  <tbody>
			  
			  <?php
					mysql_connect("localhost", "root", "") or die(mysql_error());
					
					mysql_select_db("sinhala") or die(mysql_error());
					
					$sql = mysql_query("SELECT * FROM words order by id DESC")
					or die(mysql_error());  
					
					while($row = mysql_fetch_array($sql)){
					
					echo '<tr>';
					echo '<td>'.$row['id'].'</td>';
					echo '<td style="color:red;font-size:30px">'.$row['sname'].'</td>';
					echo '<td>'.$row['name'].'</td>';
				
					echo '<td><img src="images/'.$row['image'].'" width="100px" height="100px"</td>';
				
				?>
				
	
				
				
				
				<?php
				
				
			
				
					echo '<td><a class="btn btn-danger"  href="words.php?name='.$row['name'].'">Select</a>';
					
					
					
					
					
					}
					
					
					
					
					
			  
			  ?>
			  </tr>
			  </tbody>
			  </table>				
			  
			 <!-- Page Content end --> 
            </div>
          
		  
		  
		  
		  
		  <div class="col-lg-6 text-left">
              <!-- Page Content start -->
		
	<legend>Play Words</legend>
				

      <p hidden class="js-api-support">API not supported</p>

     
      <form action="" method="get">
         <label for="text" hidden>Text:</label>
		 
		 <?php
		 if(isset($_GET['name'])){
		 $name=$_GET['name'];
		 
		?> 
		 
         <textarea id="text" class="form-control"><?php echo $name;?></textarea>
		 
		 
		 <?php
		 }
		 
		 ?>
         <div class="field-wrapper">
            <label for="voice" hidden>Voice:</label>
            <select  id="voice" hidden></select>
         </div>
         <div class="field-wrapper" hidden>
            <label for="rate">Rate (0.1 - 10):</label>
            <input type="number" id="rate" min="0.1" max="10" value="1" step="any" class="form-control" / hidden>
         </div>
         <div class="field-wrapper" hidden>
            <label for="pitch">Pitch (0.1 - 2):</label>
            <input type="number" id="pitch" min="0.1" max="2" value="1" step="any" class="form-control" / hidden>
         </div>
		 </br>
         <div class="buttons-wrapper">
            <a href="#" type="button" id="button-speak"  class="btn btn-primary">Speak</a>
            <button type="button" id="button-stop" class="button" hidden>Stop</button>
            <button type="button" id="button-pause" class="button" hidden>Pause</button>
            <button type="button" id="button-resume" class="button" hidden>Resume</button>
         </div>
      </form>

      <h2 hidden>Log</h2>
      <div id="log" class="log" hidden></div>
      <button id="clear-all" class="button" hidden>Clear log</button>

    		
			  
			 <!-- Page Content end --> 
            </div>
			
			
			
			 <script>
         function injectVoices(voicesElement, voices) {
            voicesElement.innerHTML = voices
               .map(function(voice) {
                  var option = document.createElement('option');

                  option.value = voice.lang;
                  option.textContent = voice.name + (voice.default ? ' (default)' : '');
                  option.setAttribute('data-voice-uri', voice.voiceURI);

                  return option;
               })
               .map(function(option) {
                  return option.outerHTML;
               })
               .join('');
         }

         function logEvent(string) {
            var log = document.getElementById('log');

            log.innerHTML = string + '<br />' + log.innerHTML;
         }

         if (!('SpeechSynthesisUtterance' in window)) {
            document.querySelector('.js-api-support').removeAttribute('hidden');
            [].forEach.call(document.querySelectorAll('form button'), function(button) {
               button.setAttribute('disabled', '');
            });
         } else {
            var text = document.getElementById('text');
            var voices = document.getElementById('voice');
            var rate = document.getElementById('rate');
            var pitch = document.getElementById('pitch');

            injectVoices(voices, speechSynthesis.getVoices());

            speechSynthesis.addEventListener('voiceschanged', function onVoiceChanged() {
               speechSynthesis.removeEventListener('voiceschanged', onVoiceChanged);

               injectVoices(voices, speechSynthesis.getVoices());
            });

            document.getElementById('button-speak').addEventListener('click', function() {
               var selectedOption = voices.options[6];
               var selectedVoice = speechSynthesis
                  .getVoices()
                  .filter(function(voice) {
                     return voice.voiceURI === selectedOption.getAttribute('data-voice-uri');
                  })
                  .pop();

               // Create the utterance object setting the chosen parameters
               var utterance = new SpeechSynthesisUtterance();
               utterance.text = text.value;
               utterance.voice = selectedVoice;
               utterance.lang = selectedVoice.lang;
               utterance.rate = rate.value;
               utterance.pitch = pitch.value;

               utterance.addEventListener('start', function() {
                  logEvent('Speaker started');
               });
               utterance.addEventListener('end', function() {
                  logEvent('Speaker finished');
               });

               speechSynthesis.speak(utterance);
            });

            document.getElementById('button-stop').addEventListener('click', function() {
               speechSynthesis.cancel();
               logEvent('Speaker stopped');
            });

            document.getElementById('button-pause').addEventListener('click', function() {
               speechSynthesis.pause();
               logEvent('Speaker paused');
            });

            document.getElementById('button-resume').addEventListener('click', function() {
               speechSynthesis.resume();
               logEvent('Speaker resumed');
            });

            document.getElementById('clear-all').addEventListener('click', function() {
               document.getElementById('log').textContent = '';
            });
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
