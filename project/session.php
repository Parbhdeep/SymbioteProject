<?php
	session_start();
	$_SESSION['status'];
	
	if (empty($_SESSION['status']))
	{
     
	header("location:index.php");
	}

		
?>