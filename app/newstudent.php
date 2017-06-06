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
$birthday = $_POST['birthday'];


$sql = "INSERT INTO student ( name, lastname, password, email, city,tel, birthday)
VALUES ( '$name' ,'$lastname', '$password','$email','$city','$tel' , '$birthday')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: index.php", true, 301);
?>