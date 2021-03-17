<?php
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	session_start();
	$giohang = array(
		'SP01'=>array(
			'id' => 'SP01',
			'tensp' => 'Iphone 4 32GB',
			'dongia' => 5000000,
			'soluong' => 4234,
			'thoigian' =>NULL,
		),
		'SP02'=>array(
			'id' => 'SP02',
			'tensp' => 'Ipad Mini 16GB',
			'dongia' => 8000000,
			'soluong' => 4234243,
			'thoigian' =>NULL,
		),
		'SP03'=>array(
			'id' => 'SP03',
			'tensp' => 'Iphone 5 32GB',
			'dongia' => 7000000,
			'soluong' => 3234,
			'thoigian' =>NULL,
		),
		'SP04'=>array(
			'id' => 'SP04',
			'tensp' => 'Iphone 6 32GB',
			'dongia' => 10000000,
			'soluong' => 4234,
			'thoigian' =>NULL,
		),
		'SP05'=>array(
			'id' => 'SP05',
			'tensp' => 'Iphone 6 Plus 32GB',
			'dongia' => 15000000,
			'soluong' => 344234,
			'thoigian' =>NULL,
		),
	);
	/*$giohang['SP01'] = array(
		'id' => 'SP01',
		'tensp' => 'Iphone 4 32GB',
		'dongia' => 5000000,
		'soluong' => 4234,
	);
	$giohang['SP02'] = array(
		'id' => 'SP02',
		'tensp' => 'Ipad Mini 16GB',
		'dongia' => 8000000,
		'soluong' => 4234243,
	);
	$giohang['SP03'] = array(
		'id' => 'SP03',
		'tensp' => 'Iphone 5 32GB',
		'dongia' => 7000000,
		'soluong' => 3234,
	);
	$giohang['SP04'] = array(
		'id' => 'SP04',
		'tensp' => 'Iphone 6 32GB',
		'dongia' => 10000000,
		'soluong' => 4234,
	);
	$giohang['SP05'] = array(
		'id' => 'SP05',
		'tensp' => 'Iphone 6 Plus 32GB',
		'dongia' => 15000000,
		'soluong' => 344234,
	);*/
	$maSP = $_GET['id'];
	// if (isset($_SESSION[$masp])) {
	// 	$_SESSION[$masp]['soluong']++;
	// }else{
	// 	$value = $giohang[$masp];
	// 	$value['soluong'] = 1;
	// 	$_SESSION[$masp] = $value;
	// }


	if (isset($_SESSION['cart'][$maSP])) {
		// Tăng số lượng
		$_SESSION['cart'][$maSP]['soluong']++;
		$_SESSION['cart'][$maSP]['thoigian']= date('Y-m-d H:i:s');
	}else{
		// Chưa có trong giỏ hàng
		// B2: Lấy thông tin sản phẩm
		$giohang = $giohang[$maSP];
		$giohang['soluong'] = 1;

		// B3: Add vào giỏ hàng
		$_SESSION['cart'][$maSP]  = $giohang;
		$_SESSION['cart'][$maSP]['thoigian']  =  date('Y-m-d H:i:s');	
	}
	header('Location: addgiohang.php');
?>