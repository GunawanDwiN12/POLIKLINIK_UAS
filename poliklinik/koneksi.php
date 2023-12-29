<?php 
$databaseHost = 'localhost';
$databaseName = 'poliklinik';
$databaseUsername = 'root';
$databasePassword = '';
$sname= "localhost";
$unmae= "root";
$password = "";
$db_name = "poliklinik";

$mysqli = mysqli_connect($databaseHost, 
    $databaseUsername, $databasePassword, $databaseName,);
	
$conn = mysqli_connect($sname, $unmae, $password, $db_name);
	
	if (!$conn) {
		echo "Connection failed!";
	}
