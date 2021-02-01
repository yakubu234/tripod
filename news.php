<?php
include "include/fetcher.php";
  if ($_GET['link']) {
  	$data = $_GET['link'];
  }

  if ($_GET['fetchTypeCat']) {
  	$data = $_GET['fetchTypeCat'];
  	$fetchTypeCat = fetchTypeCat($data);
  	$_SESSION['fetchTypeCat'] = $fetchTypeCat;
  	header('Location:category.php?data='.$data);
  }
  if ($_GET['fetchTypeLoc']) {
  	$data = $_GET['fetchTypeLoc'];
  	 $fetchTypeCat = fetchType($data);
    $_SESSION['fetchTypeCat'] = $fetchTypeCat;
    header('Location:page.php?data='.$data);
  }

  if ($_GET['read']) {
     $ter = $_GET['read'];
     if (!empty($_GET['a'])) {
       $data = $_GET['a'];
     }else{
    $data = $_GET['dataID'];}
     $news = view($data);
    $_SESSION['news'] = $news;
    header('Location: read.php?a='.$data.'&data='.rawurldecode($ter));
  }
  // str_replace($search, $replace,$heading);
?>