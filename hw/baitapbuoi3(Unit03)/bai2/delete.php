<?php
	session_start();
	if(isset($_GET['msv'])){
		$msv = $_GET['msv'];
		unset($_SESSION['student'][$msv]);
	}
	setcookie('msg','Xóa sinh viên thành công',time()+5);
	header('Location: list.php')
?>