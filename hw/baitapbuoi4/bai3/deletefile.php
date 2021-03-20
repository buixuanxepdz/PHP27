<?php
	session_start();
	if (isset($_GET['ten'])) {
		$ten = $_GET['ten'];
		unset($_SESSION['document'][$ten]);
	}
	header('location:trangchubai3.php');
?>