<?php
$params = array();
if(empty($og_graph)){
	// defaults
	$params['type'] = "News Website";
	$params['summary'] = "Tripod Times is an online news medium established to deliver professional journalism";
	$params['title'] = "Flash News From Tripod Times";
	$params['image'] = "dummynews.jpg";
	$params['link'] = "https://www.tripodmedia.org";
	$params['description'] = "Tripod Timesis an online news medium established to deliver professional journalism devoid of sensationalism for the purpose of fostering Nigeria's unity, peace, progress and greatness";
}else{
	foreach ($_SESSION['news'] as $key => $value) {
		$date = $value['time'];
		$actor = $value['actor'];
		$news = $value['news'];
		$category = $value['category'];
		$heading = $value['heading'];
		$img = $value['image'];
		$id = $value['id'];
	}
	$params['type'] = $category . "News By tripod times";
	$params['summary'] = $heading;
	$params['title'] = $heading;
	$params['image'] = $img;
	$params['link'] = rawurldecode('https://www.tripodmedia.org/news.php?read='.$heading.'&a='.$id);
	$params['description'] = $heading;    
}
?>
<!doctype html>
<html lang="zxx">
<head>
	<meta charset="utf-8">
	<title>Tripod Media Company| <?php echo $page." | ".$dataView; ?> </title>
	<!-- facebook open graph starts from here, if you don't need then delete open graph related  -->
	<meta property="og:title" content="<?php echo $params['title'] ;?>"/>
	<meta property="og:url" content="<?php echo $params['link'] ;?>"/>
	<meta property="og:locale" content="en_US"/>
	<meta property="og:site_name" content="Tripod Times"/>
	<!--meta property="fb:admins" content="" /-->  <!-- use this if you have  -->
	<meta property="og:type" content="<?php echo $params['description'] ;?>"/> <!-- 'article' for single page  -->
	<meta property="og:image" content="https://tripodmedia.org/uploads/<?php echo $params['image'] ;?>"/> <!-- when you post this page url in facebook , this image will be shown -->
	<!-- facebook open graph ends here -->
	<!-- twitter card starts from here, if you don't need remove this section -->
	<meta name="twitter:card" content="<?php echo $params['description'] ;?>"/>
	<meta name="twitter:site" content="@grandrubicon"/>
	<meta name="twitter:creator" content="@grandrubicon"/>
	<meta name="twitter:url" content="http://twitter.com"/>
	<meta name="twitter:title" content="<?php echo $params['title'] ;?>"/> <!-- maximum 140 char -->
	<meta name="twitter:description" content="<?php echo $params['title'] ;?>"/> <!-- maximum 140 char -->
	<meta name="twitter:image" content="https://tripodmedia.org/uploads/<?php echo $params['image'] ;?>"/>  <!-- when you post this page url in twitter , this image will be shown -->
	<!-- twitter card ends here -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/png" href="assets/img/TRIPODMEDIALOGO.png">
	<meta name="description" content="<?php echo $params['description'] ;?>"/>
	<meta name="keywords" content="keyword1, keyword2"/>
	<meta name="author" content="TripodTimes"/>

	<!-- desktop bookmark -->
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="assets/img/TRIPODMEDIALOGO.png">
	<meta name="theme-color" content="#ffffff">
