<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style>
body{padding-top:30px;}

.glyphicon {  margin-bottom: 10px;margin-right: 10px;}

small {
display: block;
line-height: 1.428571429;
color: #999;
}



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
	text-align : 20px;
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
	margin-top:-30px;	
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

<body>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "appel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
$v2= $_SESSION['user'];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$v = $_GET['id'];

if($result=mysql_query("SELECT * from course where name = '$v';")){
while($ligne=mysqli_fetch_row($result)){
					
					$name=$ligne[3];
					
					
					echo "<tr><td>$name</td><tr>";
					
		}
}

		


	 ?>
	 </body>
</html>