<?php
session_start();
ob_start();
include "assets/connect2.php";
if(isset($_SESSION['msg'])){$msg = $_SESSION['msg'];}else{$msg = "you have been logged out !";}
session_unset();
session_destroy();
session_write_close();
setcookie(session_name(),'',0,'/');
session_regenerate_id(true);
header('Location:../login.php?msg='.$msg);
?>