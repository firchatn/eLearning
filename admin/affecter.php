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



$t = $_POST['teacher'];
$f = $_POST['formation'];

$sql = "UPDATE formation SET  idteacher='$t'  WHERE id = $f";


if ($conn->query($sql) === TRUE) {
    echo "New record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	header("Location: listformation.php", true, 301);

$conn->close();
?>