<?php
	session_start();

	echo "<pre>";
		print_r($_SESSION);
	echo "</pre>";

	$_SESSION['name'] = 'Xep';

	//unset($_SESSION['name']); ham nay xoa mot session
	//session_destroy(); ham nay xoa toan bo session
	echo "<pre>";
		print_r($_SESSION);
	echo "</pre>";
?>