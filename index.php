<?php
	/*
		MD5 BruteForce
		Coded by João Artur (K3N1)
		Designed by ZanutSec
	*/
	error_reporting(0);
	if (!isset($_POST['started'])) {
		require_once("inc/body.php");
	} else {
		require_once("inc/started.php");
	}
?>