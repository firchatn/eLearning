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
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #ffffcc;
	margin-top : -70px;
}

li {
    float: left;
}

li a {
    display: block;
    color: #ff6699;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: white;
}
</style>
    

</head>

<body>

<div id="list" style="text-align: left">
<ul>
	<li><a href="profilstudent.php">Profil</a></li>
	<li><a href="test.html">Test</a></li>
	<li><a href="addcourse.php">inscri formation</a></li>
	<li><a href="vuedoc.php">Consulter document</a></li>
	<li><a href="index.php">Deconnection</a></li>
</ul>
</div>
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
		<form action='addco.php?id=$ligne[0]' method='post'>

            <div class='col-md-3 col-sm-6 hero-feature'>
                <div class='thumbnail'>
                    <img src='img/$img' alt=''>
                    <div class='caption'>
                        <h3>$name</h3>
                        <p>$desc</p>
						<p>$duree</p>
                  
                    </div>
                </div>
            </div>
			<button type='submit'> inscri </button>
			</form>
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
