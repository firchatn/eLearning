<!DOCTYPE html>
<html>
<head>
<title>Admin</title>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">

<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
</head>
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
$sql = "select * from teacher where id = $v;";
$resultat = $conn->query($sql);
				while($ligne=mysqli_fetch_row($resultat)){
					
					
$name = $ligne[1];
$lastname = $ligne[2];
$password = $ligne[3];
$email = $ligne[4];
$city = $ligne[6];
$tel = $ligne[5];
				}

 echo "<form class='modal-content animate' action='update2.php?id=$v' method='post'>
    <div class='container'>
	  <label><b>Name</b></label>
      <input type='text' value='$name' name='name' required>
	  <br>
	  
	  <label><b>Last Name</b></label>
      <input type='text' value='$lastname' name='lastname' required>
	  
      <label><b>Email</b></label>
      <input type='text' value='email' name='email' required>

      <label><b>Password</b></label>
      <input type='password' value='$password' name='password' required>

	  <label><b>City</b></label>
      <input type='text' value='$city' name='city' required>
	  
	  <label><b>Tel</b></label>
      <input type='text' value='$tel' name='tel' required>
	 
	  <label><b>Birthday</b></label>
	  <input id='date' type='date' name='date'>
	  <br>"
	 ?>
	 
	 <body>
	 <br>
	 <br>
	 <br>
	 <center>
	 <button type="sumbit" >modifier </button> 
	 </center>
	 </body>
	 </html>