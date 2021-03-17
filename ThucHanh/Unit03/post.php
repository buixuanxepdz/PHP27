<?php
	$user = '';
	$pwd = '';
	if (isset($_POST['user'])) {
		$user = $_POST['user'];
	}
	if (isset($_POST['pwd'])) {
		$pwd = $_POST['pwd'];
	}

	if ($user == 'admin' && $pwd == '123') {
		echo "Đăng nhập thành công";
	} else{
		echo "Đăng nhập thất bại";
	}
?>