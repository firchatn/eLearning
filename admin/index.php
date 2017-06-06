<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
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
<body background="admin1.jpg">

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

?>

</body>
</html>