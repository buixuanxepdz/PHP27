<?php
	session_start();
	$maSP = $_GET['id'];



	if($_SESSION['cart'][$maSP]['soluong'] > 1){
		// Giảm số lượng
		$_SESSION['cart'][$maSP]['soluong']--;
		// $_SESSION['cart'][$maSP]['time']= date('Y-m-d H:i:s');
	}else{
		// Bước 2: Xóa sản phẩm khỏi giỏ hàng
		unset($_SESSION['cart'][$maSP]);
	}

	header('Location: addgiohang.php')
?>