
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

if($result=mysql_query("SELECT * from formation where id = '$v';")){
$data=  mysql_fetch_array($result);}

echo "$v2";
echo "$v";
$v1 = $data['idteacher'];
echo "$v1";

if($resultat=mysql_query("select * from formation where id= '$v';")){
	while($ligne=mysql_fetch_row($resultat)){
		if ($ligne[0] == $v){
		$d=$ligne[1];
		}
}}
		

$sql2 = "INSERT INTO `course`( `idstudent`, `idformation`, `name`) VALUES ($v2 , $v,'francais')";
$resultat2 = $conn->query($sql2);					
header("Location: profilstudent.php", true, 301);


	 ?>