<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Heroic Features - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/heroic-features.css" rel="stylesheet">

    
<style>

.caption{
margin-left:100px;
margin-top:-20px;
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
                <a class="navbar-brand" href="#">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="newteacher.html">Teacher</a>
                    </li>
                    <li>
                        <a href="newstudent.html">Student</a>
                    </li>
					<li>
                        <a href="login.html">Login</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
	<div class="swiper-slide">
<div class="slider-item" data-bg-src="/img/slide3.jpg">
<div class="slider-item" data-bg-src="/img/slide4.jpg">
<div class="container">
<div class="vertical-middle">
<div class="vertical-middle-inner">
<div class="item-header-wrapper">


</div>
</div>
</div>
</div>
</div>
</div>
    
        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <center><h3>Formation </h3></center>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
		
		<?php
		
		$servername = "localhost";
$username = "root";
$password = "";
$dbname = "appel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "select * from formation;";
$resultat = $conn->query($sql);
while($ligne=mysqli_fetch_row($resultat)){
	$img=$ligne[3];
	$name=$ligne[1];
	$desc=$ligne[6];
	$duree=$ligne[5];
		
        echo"<div class='col-sm-4'>

            <div class='col-md-3 col-sm-6 hero-feature'>
                <div class='thumbnail'>
                    <img src='upload/$img' alt=''>
                    <div class='caption'>
                        <h3>$name</h3>
                        <p>$desc</p>
						<p>$duree</p>
                  
                    </div>
                </div>
            </div>
			
        </div>
		
		";
}
		?>
        <!-- /.row -->

        <hr>

 

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
