<?php
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$products = array(
		'SP01'=>array(
			'MaSp'=>"SP01",
			'TenSp'=>"Snack",
			'GiaTien'=>5000,
			'SoLuong'=>1000,
			'time'=>NULL,
			'Anh'=>'https://cdn.tgdd.vn/Products/Images/3364/79794/bhx/snack-tom-cay-oishi-45g-201907290845589650.JPG',
		),
		'SP02'=>array(
			'MaSp'=>"SP02",
			'TenSp'=>"Coca Cola",
			'GiaTien'=>9000,
			'SoLuong'=>1290,
			'time'=>NULL,
			'Anh'=>'https://product.hstatic.net/1000126467/product/untitled_db9fb83e036b4599900a77ba95f35739_grande.jpg',
		),
		'SP03'=>array(
			'MaSp'=>"SP03",
			'TenSp'=>"Giống Lợn",
			'GiaTien'=>2000000,
			'SoLuong'=>20,
			'time'=>NULL,
			'Anh'=>'https://www.canr.msu.edu/contentAsset/image/9c8f1a21-90e3-486d-9ca0-dd4a7b4b439d/fileAsset/filter/Resize,Jpeg/resize_w/720/jpeg_q/80',
		),
		'SP04'=>array(
			'MaSp'=>"SP04",
			'TenSp'=>"Lamborghini",
			'GiaTien'=>23000000000,
			'SoLuong'=>10,
			'time'=>NULL,
			'Anh'=>'https://kidsplaza-1.cdn.vccloud.vn/media/wysiwyg/product/be-ra-ngoai/xe-choi-chan/xe-choi-chan-hinh-o-to-mamago-mm217-1.JPG',
		),
		'SP05'=>array(
			'MaSp'=>"SP05",
			'TenSp'=>"Quần nhỏ",
			'GiaTien'=>900000,
			'SoLuong'=>390,
			'time'=>NULL,
			'Anh'=>'https://cardino.vn/wp-content/uploads/Quan-Lot-Nam-Cd02-600x701.jpg',
		),
	);

	$maSP = $_GET['MaSp'];

	// Kiểm tra xem đã có trong giỏ hàng chưa? 
	if (isset($_SESSION['cart'][$maSP])) {
		// Tăng số lượng
		$_SESSION['cart'][$maSP]['SoLuong']++;
		$_SESSION['cart'][$maSP]['time']= date('Y-m-d H:i:s');
	}else{
		// Chưa có trong giỏ hàng
		// B2: Lấy thông tin sản phẩm
		$product = $products[$maSP];
		$product['SoLuong'] = 1;

		// B3: Add vào giỏ hàng
		$_SESSION['cart'][$maSP]  = $product;
		$_SESSION['cart'][$maSP]['time']  =  date('Y-m-d H:i:s');	
	}
?>	