<?php 
error_reporting(0);
session_start();
session_destroy();
	
		setcookie("PHPSESSID", "", time()-1, "/");
		
		if (($_COOKIE['admin']) == "admin")
			{setcookie("admin", "admin", time()-1, "/");}

		if (($_COOKIE['patient']) == "patient")
			{setcookie("patient", "patient", time()-1, "/");}

		if (($_COOKIE['doctor']) == "doctor")
			{setcookie("doctor", "doctor", time()-1, "/");}

		header("location:home.php");



?>