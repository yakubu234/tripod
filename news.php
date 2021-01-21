<?php
include "include/fetcher.php";
  if ($_GET['link']) {
  	$data = $_GET['link'];
  }

  if ($_GET['fetchTypeCat']) {
  	$data = $_GET['fetchTypeCat'];
  	$fetchTypeCat = fetchTypeCat($data);
  	$_SESSION['fetchTypeCat'] = $fetchTypeCat;
  	header('Location: category.php?data='.$data);
  }
  if ($_GET['fetchTypeLoc']) {
  	$data = $_GET['fetchTypeLoc'];
  	 $fetchTypeCat = fetchType($data);
    $_SESSION['fetchTypeCat'] = $fetchTypeCat;
    header('Location: category.php?data='.$data);
  }

  if ($_GET['read']) {
     $ter = $_GET['read'];
    $data = $_GET['dataID'];
     $news = view($data);
    $_SESSION['news'] = $news;
    header('Location: read.php?data='.$ter);
  }
?>