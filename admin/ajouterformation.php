
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
			
			$nomPhoto=$_FILES['img']['name'];
			$file_tmp_name=$_FILES['img']['tmp_name'];
			
			$duree= $_POST['duree'];
			$desc= $_POST['desc'];

$sql = "INSERT INTO `formation`(`name`, `img`, `duree`, `desc`) VALUES ('$name','$nomPhoto','$duree','$desc');";
$conn->query($sql);
$dirpath = realpath(dirname(getcwd()));

move_uploaded_file($file_tmp_name,"$dirpath\app\upload/$nomPhoto");
	header("Location: listformation.php", true, 301);



	 ?>
