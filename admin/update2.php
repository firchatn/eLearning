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


$name = $_POST['name'];
$lastname = $_POST['lastname'];
$password = $_POST['password'];
$email = $_POST['email'];
$city = $_POST['city'];
$tel = $_POST['tel'];
$v = $_GET['id'];

$sql = "UPDATE teacher SET name='$name' , lastname='$lastname' , password='$password' , email= '$email' , city= '$city' , tel = '$tel' WHERE id = $v";


if ($conn->query($sql) === TRUE) {
    echo "New record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	header("Location: listTeacher.php", true, 301);

$conn->close();
?>