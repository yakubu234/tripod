<?php
session_start();
ob_start();
include "connect.php";
$conn = DB();
if (isset($_POST['login'])) {
	$Username = $_POST['Username'];
	$Password = MD5($_POST['Password']);
	try {
		$stmt = $conn->prepare('SELECT * FROM admin WHERE email=? AND password = ? ');
		$stmt->execute([$Username, $Password]);
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		$user = $stmt->fetch();
		if($user == false){echo $msg = "Please Activate your Account First, Check your email";header('Location:../login.php?msg='.$msg);}
		echo "<script>
		alert('Login Successful, Redirecting Now');
		</script>";
		$_SESSION["stuData"] = json_encode($user);
		header('Refresh: 0; url=../account/dashboard.php?data='.uniqid());
	} catch(PDOException $e) {
		// echo $sql . "<br>" . $e->getMessage();
		echo "<script>
		alert('error please ensure your username and password is correct');
		</script>";
		header('Refresh: 0; url=../login.php');
	}
	# code...
}
?>