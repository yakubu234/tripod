<?php
include "connect.php";
$search  = array('$', '!', ' ','  ','/');
$replace = array('-', '-', '-', '', '-');
$conn = DB();
switch ($_GET['datas']) {
	case 'Edit':
	editData();
		# code...
	break;
	case 'Delete':
	deleteData();
	break;
	case 'Edituser':
	deleteData();
	break;
	case 'DeleteUser':
	DeleteUser();
	break;
	case 'AddUser':
	AddUser();
	break;
	case 'editUser':
	editUserIn();
	break;
	case 'newPost':
	newPost();
	break;
}

function newPost(){
	global $conn; 

	if(isset($_FILES['image'])){

	 	 // get details of the uploaded file
		$fileTmpPath = $_FILES['image']['tmp_name'];
		$fileName = $_FILES['image']['name'];
		$fileSize = $_FILES['image']['size'];
		$fileType = $_FILES['image']['type'];
		$fileNameCmps = explode(".", $fileName);
		$fileExtension = strtolower(end($fileNameCmps));

    // sanitize file-name
		$newFileName = md5(time() . $fileName) . '.' . $fileExtension;


      // directory in which the uploaded file will be moved
		$uploadFileDir = './../uploads/';
		$dest_path = $uploadFileDir . $newFileName;
		move_uploaded_file($fileTmpPath, $dest_path);
		$newFileName = $newFileName;     

	}else{
		$newFileName = 'dummy news.jpg';
	}

	$heading = $_POST['heading'];
	$name = $_POST['name'];
	$category = $_POST['category'];
	$location = $_POST['location'];
	$editor_content = $_POST['editor_content'];
	$fullname = $_POST['fullname'];
	$seemail = $_POST['email'];
	$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
	$link = substr(str_shuffle($permitted_chars), 0, 10);
	$replacement = str_replace($search, $replace,$heading);
	
	$data = [
		'category' => $category,
		'heading' => $heading,
		'location' => $location,
		'news' => $editor_content,
		'actor' =>$name,
		'image' => $newFileName,
		'comments' => '',
		'link' => $link,
		'role' => '',
		'Name' => $fullname,
		'email' => $seemail
	];
	try {
		$ins = "INSERT INTO NewsPost (category, heading, location, news, actor, image, comments, link, role, Name, email) VALUES (:category, :heading, :location, :news, :actor, :image, :comments, :link, :role, :Name, :email)";
		$stmt = $conn->prepare($ins);
		$stmt->execute($data);
		$insid = $conn->lastInsertId();
			echo "<script>
			alert('News Added successfully.');
			</script>";
			$data2 = [
				'dataID' => $insid,
				'read' => $replacement,
			];
			$_SESSION['link'] = $data2;
			$_SESSION['datagetUp'] = $data;
			header('Refresh:0; url=../news.php');
		
	} catch(PDOException $e) {
		if ($e->getCode() == 23000) {
			echo "<script>alert('dupplicate email')</script>";
      // echo $ins . "<br>" . $e->getMessage();
			header('refresh:0;url=dashboard.php');
		} else {
        // echo $ins . "<br>" . $e->getMessage();
		}
	}    
	$conn = null;
}

function fetcher(){
	global $conn;
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

function fetcherAdmin(){
	global $conn;
	$userr;
	try {		
		$stmt2 = $conn->query("SELECT * FROM admin ORDER BY id DESC");
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
	global $conn;
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

function editData(){
	$id = $_GET['id'];
}

function deleteData(){
	$id = $_GET['id'];
	global $conn;
	try {		
		$stmt2 = $conn->prepare("DELETE FROM NewsPost WHERE id=? ");
		$stmt2->execute([$id]); 
		$he = $stmt2->rowCount(); 
		if ($he > 0) {
			echo "<script>alert('deleted !!!')</script>";
			header('refresh:0;url=dashboard.php');
		}
	} catch(PDOException $e) {
		echo $conn . "<br>" . $e->getMessage();		
	}	
}

function DeleteUser(){
	$id = $_GET['id'];
	global $conn;
	try {		
		$stmt2 = $conn->prepare("DELETE FROM admin WHERE id=? ");
		$stmt2->execute([$id]); 
		$he = $stmt2->rowCount(); 
		if ($he > 0) {
			echo "<script>alert('deleted !!!')</script>";
			header('refresh:0;url=users.php');
		}
	} catch(PDOException $e) {
		echo $conn . "<br>" . $e->getMessage();		
	}	
}

function AddUser(){
	global $conn; 
	$data = [
		'fullname' => $_POST["name"],
		'email' => $_POST["email"],
		'password' => MD5($_POST["password"]),
		'phone' => $_POST["phone"],
		'gender' => $_POST["gender"],
		'type' => 'slave',
		'status' => $_POST["password"],
	];
	try {
		$ins = "INSERT INTO admin (fullname, email, password, phone, gender, type, status) VALUES (:fullname, :email, :password, :phone, :gender, :type, :status)";
		$stmt = $conn->prepare($ins);
		if ($stmt->execute($data) > 0) {
			echo "<script>
			alert('registration successful. you can now login');
			</script>";
			header('Refresh:0; url=dashboard.php');
		}else{

			header('Location:dashboard.php');
		}
	} catch(PDOException $e) {
		if ($e->getCode() == 23000) {
			echo "<script>alert('dupplicate email')</script>";
      // echo $ins . "<br>" . $e->getMessage();
			header('refresh:0;url=dashboard.php');
		} else {
        // echo $ins . "<br>" . $e->getMessage();
		}
	}    
	$conn = null;
}

function editUserIn(){
	global $conn; 
	$data = [
		'fullname' => $_POST["name"],
		'email' => $_POST["email"],
		'password' => MD5($_POST["password"]),
		'gender' => $_POST["gender"],
		'status' => $_POST["password"],
		'id' => $_POST["stuid"],
	];
	try {
		$stmt = $conn->prepare("UPDATE admin SET fullname = :fullname, email = :email, password = :password, gender = :gender, status = :status  WHERE id  = :id");
		$stmt->execute($data);
		if($stmt->rowCount() == 0){$msg = "Please Login First";header('Location:dashboard.php');}
		echo "<script>
		alert('Update Successful, you will be redirected now');
		</script>";
		header('Refresh: 0; url=dashboard.php?parser='.microtime());
	} catch(PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
		echo "<script>
		alert('your link has corrupt, You will be redirected to request for new activation key');
		</script>";
		header('Refresh: 0; url=dashboard.php');
	}
	$conn = null;
}
?>