<?php 
	if (isset($_GET['text'])) {
		echo md5($_GET['text']);
	}
?>