<?php
$link = mysql_connect('localhost', 'root', 'root');
if (!$link) {
die('Could not connect: ' . mysql_error());
}
$sql = 'CREATE DATABASE appel';
if (mysql_query($sql, $link)) {
echo "Database my_db created successfully\n";
} else {
echo 'Error creating database: ' . mysql_error() . "\n";
}
if (!mysql_select_db('appel')){
die('Could not select database: ' . mysql_error());
}
else{
	echo "bd";
}
$req = "CREATE TABLE IF NOT EXISTS `admin` (
 `id` varchar(20) DEFAULT NULL,
 `username` varchar(20) DEFAULT NULL,
 `password` varchar(50) DEFAULT NULL,
 `email` varchar(50) DEFAULT NULL,
 UNIQUE KEY (`id`)
);";
mysql_query($req);


?>