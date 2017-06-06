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


			$u=$_POST['username'];
			$p=$_POST['password'];
			$test=false;
$sql = "select * from admin;";
$resultat = $conn->query($sql);
				while($ligne=mysqli_fetch_row($resultat)){
					if ($u==$ligne[1] && $p==$ligne[2]){
						$test = true;
						echo " $u welcome";
					}
				}
				if (! $test){
					echo "admin pas trover ! ";
			}
				
						

if ($test==true){
	header("Location: index.php", true, 301);
}





?>
