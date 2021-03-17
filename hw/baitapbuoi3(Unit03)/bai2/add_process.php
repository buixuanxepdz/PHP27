<?php
	session_start();
		if (isset($_POST['submit'])) {
			$msv = $_POST['msv'];
			$name = $_POST['name'];
			$phone = $_POST['phone'];
			$email = $_POST['email'];
			$gt = $_POST['abc'];
			$address = $_POST['address'];
			$_SESSION['student'][$msv] = [
				'msv' => $msv,
				'name' => $name,
				'phone' => $phone,
				'email' => $email,
				'abc' => $gt,
				'address' => $address,
			];
			echo print_r($_SESSION);
			setcookie('msg','Thêm mới thành công',time()+5);
			header("Location: list.php");
		}
		
?>