<?php 
include "fetcher.php";
if (isset($_SESSION['stuData'])) {
	$data = json_decode($_SESSION['stuData']);
	$name = $data->fullname;
	$ademail = $data->email;
	$adtype = $data->type;
	$gender = $data->gender;
	$adId = $data->id;
	$status = $data->status;
	if (isset($_SESSION['link'])) {
		$link = $_SESSION['link'];
		$datagetUp = $_SESSION['datagetUp'];
	}else{
		header('refresh:0;url=dashboard.php');
	}
	$insid = $link["dataID"];
	$replacement = $link["read"];
	$news = $datagetUp["news"];
	$category = $datagetUp['category'];
	$heading = $datagetUp['heading'];
	$location = $datagetUp['location'];
	$actor = $datagetUp['actor'];
	$image = $datagetUp['image'];
	$replacement = str_replace($search, $replace,$heading);
	
	$link =  'https://tripodmedia.org/?read='.$replacement.'&dataID='.$insid;

	$linkD =  '<b style="color:black;" >'.$replacement.' </b><br><a style="color:red;" href ="https://tripodmedia.org/news.php?read='.$replacement.'&dataID='.$insid.'" target="_blank" id="p1">https://tripodmedia.org/news.php?read='.$replacement.'&dataID='.$insid.'<a/>';
}else{
	echo "<script> alert('Login First')</script>";
	header('refresh:0;url=../login.php');
}
include "og.php";  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  xmlns:og="http://opengraphprotocol.org/schema/"  xmlns:fb="http://www.facebook.com/2008/fbml" lang="en" xml:lang="en">
<head>
	<meta charset="utf-8">
	<title>Tripod Media Company| <?php echo $page." | ".$dataView; ?> </title>
	<meta prefix="og: http://ogp.me/ns#" data-react-helmet="true" property="og:title" content="<?php echo $heading;?>"/>
	<meta prefix="og: http://ogp.me/ns#" data-react-helmet="true" property="og:type" content="article"/>
	<meta prefix="og: http://ogp.me/ns#" data-react-helmet="true" property="og:url" content="<?php  echo $link;?>"/>
	<meta prefix="og: http://ogp.me/ns#" data-react-helmet="true" property="og:image" content="https://tripodmedia.org/uploads/<?php echo $image;?>"/>
	<meta property="og:image:secure_url" content="https://tripodmedia.org/uploads/<?php echo $image;?>"/>
	<meta prefix="og: http://ogp.me/ns#" data-react-helmet="true" property="og:site_name" content="<?php  echo $link;?>"/>	
	<!-- facebook open graph starts from here, if you don't need then delete open graph related  -->
	<!-- twitter card starts from here, if you don't need remove this section -->
	<meta name="twitter:card" content="<?php echo $heading;?>"/>
	<meta name="twitter:site" content="@grandrubicon"/>
	<meta name="twitter:creator" content="@grandrubicon"/>
	<meta name="twitter:url" content="https://twitter.com"/>
	<meta name="twitter:title" content="<?php echo $heading;?>"/> <!-- maximum 140 char -->
	<meta name="twitter:description" content="<?php echo $heading;?>"/> <!-- maximum 140 char -->
	<meta name="twitter:image" content="https://tripodmedia.org/uploads/<?php echo $image;?>"/>  <!-- when you post this page url in twitter , this image will be shown -->
	<!-- twitter card ends here -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/png" href="../assets/img/TRIPODMEDIALOGO.png">
	<meta name="description" content=" Admin Dashboard;"/>
	<meta name="keywords" content="TripodTimes, Tripod media company limited"/>
	<meta name="author" content="TripodTimes"/>
	<!-- <meta name=“robots” content=“noimageindex,nofollow,nosnippet” > -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/animate.min.css">
	<link rel="stylesheet" href="../assets/css/meanmenu.css">
	<link rel="stylesheet" href="../assets/css/boxicons.min.css">
	<link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="../assets/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="../assets/css/magnific-popup.min.css">
	<link rel="stylesheet" href="../assets/css/nice-select.min.css">
	<link rel="stylesheet" href="../assets/css/style.css">
	<link rel="stylesheet" href="../assets/css/responsive.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../DataTables/datatables.min.css"/>
</head>
<?php include "header2.php";?>
<div class="page-title-area">
	<div class="container">
		<div class="page-title-content">
			<a href="" ><button  class="btn btn-success text-white" >New Post <span class="fa fa-pencil " ></span></button></a>
			<ul>
				<li><a href="../index.html">Home</a></li>
				<li>About us</li>
			</ul>
		</div>
	</div>
</div>
<div class="alert alert-success col-sm-12" >
	<?php echo $linkD."&nbsp;"; ?>
	<button onclick="copyToClipboard('#p1')">Copy Link</button>
</div>
<script type="text/javascript">
	function copyToClipboard(element) {
		var $temp = $("<input>");
		$("body").append($temp);
		$temp.val($(element).text()).select();
		document.execCommand("copy");
		alert("Link Copied:\n" + $temp.val()+"\n Thank you");
		$temp.remove();
	}
</script>
<section class="about-area ptb-50 col-sm-7" style="margin: 0px auto;" >
	<div class="container">
		<div class="about-image">
			<img src="../uploads/<?php echo $image; ?>" alt="image">
		</div>
		<div class="about-content">
			<h3 style="text-align: center;" ><?php echo $heading; ?></h3>
			<p><?php echo $news;?></p>
			<p> <a href=""> Edit this news <span class="fa fa-edit text-success" ></span></a> </p>
		</div>
	</div>
</section>

<?php include "footer.php"; ?>

<script src="../assets/js/jquery.min.js"></script>

<script src="../assets/js/popper.min.js"></script>

<script src="../assets/js/bootstrap.min.js"></script>

<script src="../assets/js/jquery.meanmenu.js"></script>

<script src="../assets/js/owl.carousel.min.js"></script>

<script src="../assets/js/jquery.magnific-popup.min.js"></script>

<script src="../assets/js/nice-select.min.js"></script>

<script src="../assets/js/jquery.ajaxchimp.min.js"></script>

<script src="../assets/js/form-validator.min.js"></script>

<script src="../assets/js/contact-form-script.js"></script>


<script type="text/javascript" src="../DataTables/datatables.min.js"></script>

<script src="../assets/js/wow.min.js"></script>

<script src="../assets/js/main.js"></script>
<script>
	$(document).ready(function() {
		
		$('#example').DataTable();

		var deleteLinks = document.querySelectorAll('.del');

		for (var i = 0; i < deleteLinks.length; i++) {
			deleteLinks[i].addEventListener('click', function(event) {
				event.preventDefault();

				var choice = confirm(this.getAttribute('data-confirm'));

				if (choice) {
					window.location.href = this.getAttribute('href');
				}
			});
		}
	} );

</script>
</body>
</html>