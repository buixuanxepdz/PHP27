<?php
	session_start();
	$type = $_GET['type'];
	$masp = $_GET['masp'];
	
	if($_SESSION['cart'][$masp]['soluong'] > 1 && $type == 0){
		// Giảm số lượng
		$_SESSION['cart'][$masp]['soluong']--;
	}else{
		// Bước 2: Xóa sản phẩm khỏi giỏ hàng
		unset($_SESSION['cart'][$masp]);
	}
	header('Location: cart.php')
?>