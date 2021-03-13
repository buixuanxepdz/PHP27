<?php
	$info = array();
	$info[0] = "xep";
	$info[1] = "79328432";
	$info[2] = 30;
	$info[3] = array();
	$info[3][0] = array("mang 3 chieu");
	$info[3][1] = array("ABC");

	echo "<pre>";
		print_r($info);
	echo "</pre>";

	echo "<br> Mang 3 chieu : ".$info[3][0][0] ;
?>