<?php
session_start();
ob_start();
error_reporting(E_ALL);
include "connect.php";
$conn = DB();
switch ($_GET['func']) {
	case "edit":
	EditStudent($_POST);
	break;
	case "Upl oadImage":
	UploadImage();
	break;
}

function type(){
	
}


function fetcher(){
	$conn =DB();
	$userr;
	try {		
		$stmt2 = $conn->query("SELECT * FROM NewsPost ORDER BY id DESC");
		$stmt2->setFetchMode(PDO::FETCH_ASSOC);
		$userr = $stmt2->fetchAll();
		if($stmt2 == false){}
	} catch(PDOException $e) {
		// echo $sql . "<br>" . $e->getMessage();		
	}	
	return $userr;
	$conn = null;
}

function view($data){
	$conn =DB();
	$userr;
	try {		
		$stmt2 = $conn->prepare("SELECT * FROM NewsPost WHERE id=? ");
		$stmt2->execute([$data]); 
		$stmt2->setFetchMode(PDO::FETCH_ASSOC);
		$userr = $stmt2->fetchAll();
	} catch(PDOException $e) {
		// echo $sql . "<br>" . $e->getMessage();		
	}	
	return $userr;
	$conn = null;
}

function fetchType($data){
	global $conn;
	try {		
		$stmt2 = $conn->prepare("SELECT * FROM NewsPost WHERE location=? ORDER BY id DESC");
		$stmt2->execute([$data]); 
		$stmt2->setFetchMode(PDO::FETCH_ASSOC);
		$userr = $stmt2->fetchAll();
		if($userr == false){
		echo "
		<script>alert('oh sorry, the news is not available at this time');</script>
		";
		$stmt2 = $conn->query("SELECT * FROM NewsPost ORDER BY id DESC");
		$stmt2->setFetchMode(PDO::FETCH_ASSOC);
		$userr = $stmt2->fetchAll();
		}
	} catch(PDOException $e) {
		// echo $sql . "<br>" . $e->getMessage();		
	}
	$conn = null;
	return $userr;
}

function fetchTypeCat($data){
	global $conn;
	try {		
		$stmt2 = $conn->prepare("SELECT * FROM NewsPost WHERE category=? ORDER BY id DESC");
		$stmt2->execute([$data]); 
		$stmt2->setFetchMode(PDO::FETCH_ASSOC);
		$userr = $stmt2->fetchAll();
		if($userr == false){
			echo "
		<script>alert('oh sorry, the news is not available at this time');</script>
		";
		$stmt2 = $conn->query("SELECT * FROM NewsPost ORDER BY id DESC");
		$stmt2->setFetchMode(PDO::FETCH_ASSOC);
		$userr = $stmt2->fetchAll();
		}
	} catch(PDOException $e) {
		// echo $sql . "<br>" . $e->getMessage();		
	}
	$conn = null;
	return $userr;
}

function fetchwhereNot($data){
	global $conn;
	try {		
		$stmt2 = $conn->prepare("SELECT * FROM NewsPost WHERE category <> ? ORDER BY id DESC");
		$stmt2->execute([$data]); 
		$stmt2->setFetchMode(PDO::FETCH_ASSOC);
		$userr = $stmt2->fetchAll();
		if($stmt2 == false){}
	} catch(PDOException $e) {
		// echo $sql . "<br>" . $e->getMessage();		
	}
	$conn = null;
	return $userr;
}

function fetchwhereNotLoc($data){
	global $conn;
	try {		
		$stmt2 = $conn->prepare("SELECT * FROM NewsPost WHERE location <> ? ORDER BY id DESC");
		$stmt2->execute([$data]); 
		$stmt2->setFetchMode(PDO::FETCH_ASSOC);
		$userr = $stmt2->fetchAll();
		if($stmt2 == false){}
	} catch(PDOException $e) {
		// echo $sql . "<br>" . $e->getMessage();		
	}
	$conn = null;
	return $userr;
}

function fetchwhereNotID($data){
	global $conn;
	try {		
		$stmt2 = $conn->prepare("SELECT * FROM NewsPost WHERE id <> ? ORDER BY id DESC");
		$stmt2->execute([$data]); 
		$stmt2->setFetchMode(PDO::FETCH_ASSOC);
		$userr = $stmt2->fetchAll();
		if($stmt2 == false){}
	} catch(PDOException $e) {
		// echo $stmt2 . "<br>" . $e->getMessage();		
	}
	$conn = null;
	return $userr;
}

// function fetcher(){
// 	global $conn;
// 	try {		
// 		$stmt2 = $conn->prepare("SELECT * FROM NewsPost WHERE id=? AND membershipNo=?");
// 		$stmt2->execute([$id, $dataGet['memebership']]); 
// 		$stmt2->setFetchMode(PDO::FETCH_ASSOC);
// 		$userr = $stmt2->fetch();
// 		if($stmt2 == false){}
// 	} catch(PDOException $e) {
// 		echo $sql . "<br>" . $e->getMessage();		
// 	}
// 	$conn = null;
// 	return $userr;
// }
?>
