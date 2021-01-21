<?php
$dataView = "next time here";
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = 'tripodm2_news';
function DB(){	
	global $servername;
	global $username;
	global $password;
	global $dbname;	
	$conn;
	try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Connected successfully";
	} catch(PDOException $e) {
		echo "Connection failed: " . $e->getMessage();
	}
	return $conn;
	$conn = null;
}
?>