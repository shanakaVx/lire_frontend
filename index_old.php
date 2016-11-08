<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lire</title>

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
		
	<legend>Amin Login</legend>
						<form action="" method="POST">
						<div class="form-group">
						<label>User Name</label>
						<input type="text" name="txtuname" class="form-control"  placeholder="Enter User Name" required/>
						</div>
						<div class="form-group">
						<label>Password</label>
						<input type="password" name="txtpassword" class="form-control"  placeholder="Enter Password" required/>
						</div>
						
						
						<div class="form-group">
						<input type="submit" name="btnlogin" value="Login" class="btn btn-primary"/>
						</div>
						
						</form>
			  <?php
						session_start();
						if(isset($_POST['btnlogin'])){
						
						$uname=$_POST['txtuname'];
						$pword=$_POST['txtpassword'];
						
						mysql_connect('localhost','root','') or die(mysql_error());
						mysql_select_db('sinhala') or die(mysql_error());
						
						$sql=mysql_query("SELECT * FROM admin WHERE username='".$uname."'
						AND password='".$pword."'")or die(mysql_error());
						$res=mysql_fetch_row($sql);
						
						if($res){
						
						$_SESSION['dog']=$uname;
						header('Location:keyboard.php');
						}
						else{
						
						echo '<div class="alert alert-danger">';
						echo '<strong>Danger!</strong>Invalid User Name and Password!!!';
						echo '</div>';
						
						}
						
						
						}
						
						
						?>
			  
			 <!-- Page Content end --> 
            </div>
          
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
