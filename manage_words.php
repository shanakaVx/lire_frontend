<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Manage Words</title>
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
                        <a href="drag.php">Drag Game</a>
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
					echo '<td style="color:red;font-size:40px">'.$row['sname'].'</td>';
					echo '<td>'.$row['name'].'</td>';
				
					echo '<td><img src="images/'.$row['image'].'" width="100px" height="100px"</td>';
				
				
				
					echo '<td><a class="btn btn-danger" href="deletewords.php?id='.$row['id'].'">D</a>';
					}
					
					
					
					
					
			  
			  ?>
			  </tr>
			  </tbody>
			  </table>
			
			
			
			</div>
			
			
	
			
          </form>
		  
		    
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
