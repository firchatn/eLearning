<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">

<title>Admin</title>
<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
h3 {
	color : white;
	background-color : pink;
	text-align : center;
	border : solid;
	border-color : pink;
	border-radius : 25px;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #ffffcc;
	margin-top:-10px;	
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
	<li><a href="profil.php">Profil</a></li>
	<li><a href="contact.html">Contacter</a></li>
	<li><a href="encadrement.html">Encadrement</a></li>
	<li><a href="publier.html">Publier document</a></li>
	<li><a href="listformation.php">List etudiant</a></li>
	<li><a href="index.php">Deconnection</a></li>
</ul>
</div>
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

					if($resultat=mysqli_query($conn,"select distinct name from formation;")){
				echo "<h3>Formation</h3>";
				echo "<center> <table  id='customers'>";
				while($ligne=mysqli_fetch_row($resultat)){
					
					$name=$ligne[0];
					
					
					echo "<tr><td>$name</td><td> <a href='chercher.php?id=$name'><i class='fa fa-search' aria-hidden='true'></i></a></td><tr>";
					
		}
			}
			
?>
</body>
</html>