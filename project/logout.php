<?php
ob_start();
session_start();
session_destroy();
$_SESSION['status']="";
header("location:index.php?ms=logout");

?>