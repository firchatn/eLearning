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



$password = $_POST['password'];
$email = $_POST['email'];
$city = $_POST['city'];
$tel = $_POST['tel'];
//$birthday = $_POST['birthday'];
$v = $_GET['id'];

$sql = "UPDATE student SET  password='$password' , email= '$email' , city= '$city' , tel = '$tel' WHERE id = $v";


if ($conn->query($sql) === TRUE) {
    echo "New record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	header("Location: profil.php", true, 301);

$conn->close();
?>