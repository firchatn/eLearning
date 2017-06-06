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
$v = $_GET['id'];
$sql = "select * from confteacher where id = $v;";
$resultat = $conn->query($sql);
				while($ligne=mysqli_fetch_row($resultat)){
					
					
$name = $ligne[1];
$lastname = $ligne[2];
$password = $ligne[3];
$email = $ligne[4];
$city = $ligne[6];
$tel = $ligne[5];
				}
	
				
						




$sql = "INSERT INTO teacher ( name, lastname, password, email, city,tel)
VALUES ( '$name' ,'$lastname', '$password','$email','$city','$tel')";




if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql2 = "delete from confteacher where id = $v";
$conn->query($sql2)



?>
