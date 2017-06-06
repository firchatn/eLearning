<!DOCTYPE html>
<html>
<head>
<title>Admin</title>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
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
	<li><a href="listStudent.php">liste apprenant</a></li>
	<li><a href="listTeacher.php">liste enseignant</a></li>
	<li><a href="listformation.php">liste formation</a></li>
	<li><a href="confirmTeacher.php">Confirmer enseignant</a></li>
	<li><a href="ajouterformation.html">Ajouter Formation</a></li>
		<li><a href="addens.php">Affecter formation</a></li>

	<li><a href="login.html">Deconnection</a></li>
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

			echo "<h3>Teachers </h3>";
			if($resultat=mysqli_query($conn,"select * from confteacher;")){
			
				echo "<center> <table  id='customers'>";
				while($ligne=mysqli_fetch_row($resultat)){
					$id=$ligne[0];
					$nom=$ligne[1];
					$prenom=$ligne[2];
					$password=$ligne[3];
					$email=$ligne[4];
					$city=$ligne[5];
					$tel=$ligne[6];
					echo "<tr><td>$id</td><td>$nom</td><td>$prenom</td><td>$email</td><td>$password</td><td>$city</td><td>$tel</td><td><a href='addteacher.php?id=$id'> <i class='fa fa-check' aria-hidden='true'></i></a></td><td><a href='deleteteacher2.php?id=$id'><i class='fa fa-trash-o' aria-hidden='true'></i></a></td><tr>";
			
		}
			}
		echo "</table> </center>";
?>
</body>
</html>