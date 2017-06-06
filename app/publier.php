
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

			$nom = $_POST['name'];		
			$nomSupport=$_FILES['img']['name'];
			$file_tmp_name=$_FILES['img']['tmp_name'];
			

$sql = "update formation set support = '$nomSupport' where name = '$nom'  ;";
$conn->query($sql);



$dirpath = realpath(dirname(getcwd()));

move_uploaded_file($file_tmp_name,"$dirpath\app\upload/$nomPhoto");
	header("Location: listformation.php", true, 301);

	 ?>
