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


$sql2 = "delete from student where id = $v";
$conn->query($sql2);
	header("Location: listStudent.php", true, 301);



?>
