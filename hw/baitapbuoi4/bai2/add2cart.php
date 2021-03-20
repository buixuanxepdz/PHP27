<?php
	require('data.php');
	session_start();
	$masp = $_GET['masp'];

	if (isset($_SESSION['cart'][$masp])) {
		// Tăng số lượng
		$_SESSION['cart'][$masp]['soluong']++;
	}else{
		// Chưa có trong giỏ hàng
		// B2: Lấy thông tin sản phẩm
		$product = $products[$masp];
		$product['soluong'] = 1;

		// B3: Add vào giỏ hàng
		$_SESSION['cart'][$masp]  = $product;
	}
	header('Location:cart.php');
?>