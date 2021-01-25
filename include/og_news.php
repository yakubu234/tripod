<?php
if(!empty($og_graph)){
	foreach ($_SESSION['news'] as $key => $value) {
		$date = $value['time'];
		$actor = $value['actor'];
		$news = $value['news'];
		$category = $value['category'];
		$heading = $value['heading'];
		$img = $value['image'];
		$id = $value['id'];
	}
	$paramstype = $category . "News By tripod times";
	$paramsSummary = $heading;
	$paramsTitle = $heading;
	$paramsImage = $img;
	$paramsLink = rawurldecode('https://www.tripodmedia.org/news.php?read='.$heading.'&a='.$id);
	$paramsDescription = $heading; 
}else{header('Location: index.php');}
?>
<!doctype html>
<html lang="zxx">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Tripod Media Company| <?php echo $page." | ".$dataView; ?> </title>
	<link rel="icon" type="image/png" href="assets/img/TRIPODMEDIALOGO.png">
	<meta name="description" content="<?php echo $paramsDescription ;?>"/>
	<meta name="keywords" content="<?php echo $paramsSummary ?>"/>
	<meta name="author" content="TripodTimes"/>

	<!-- twitter card starts from here, if you don't need remove this section -->
	<meta name="twitter:card" content="<?php echo $paramsDescription ;?>"/>
	<meta name="twitter:site" content="@grandrubicon"/>
	<meta name="twitter:creator" content="@grandrubicon"/>
	<meta name="twitter:url" content="http://twitter.com"/>
	<meta name="twitter:title" content="<?php echo $paramsTitle ;?>"/> <!-- maximum 140 char -->
	<meta name="twitter:description" content="<?php echo $paramsTitle ;?>"/> <!-- maximum 140 char -->
	<meta name="twitter:image" content="uploads/<?php echo $paramsImage;?>"/>  <!-- when you post this page url in twitter , this image will be shown -->
	<!-- twitter card ends here -->

	<!-- facebook open graph starts from here, if you don't need then delete open graph related  -->
	<meta property="og:title" content="<?php echo $paramsTitle ;?>"/>
	<meta property="og:url" content="<?php echo $paramsLink;?>"/>
	<meta property="og:locale" content="en_US"/>
	<meta property="og:site_name" content="Tripod Times"/>
	<!--meta property="fb:admins" content="" /-->  <!-- use this if you have  -->
	<meta property="og:type" content="<?php echo $paramsDescription;?>"/> <!-- 'article' for single page  -->
	<meta property="og:image" content="uploads/<?php echo $paramsImage;?>"/> <!-- when you post this page url in facebook , this image will be shown -->
	<!-- facebook open graph ends here -->

	<!-- desktop bookmark -->
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="assets/img/TRIPODMEDIALOGO.png">
	<meta name="theme-color" content="#ffffff">
