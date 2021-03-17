<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    	<form action="detail.php" method="POST" role="form">
    		<legend style="text-align: center; !important">ZENT GROUP - PHP - Thực hành gửi dữ liệu dùng POST</legend>
    		<legend style="text-align: center; !important">Thông tin sinh viên</legend>

    		<?php
	    		$msv = '';
	    		$name = '';
	    		$phone = '';
	    		$email = '';
	    		$address = '';
	    		$gt;
	    		if (isset($_POST['msv'])) {
	    			$msv = $_POST['msv'];
	    			echo "<ul><li>Mã sinh viên : $msv</li></ul>";
	    		}
	    		if (isset($_POST['name'])) {
	    			$name = $_POST['name'];
	    			echo "<ul><li>Họ và tên : $name</li></ul>";
	    		}
	    		if (isset($_POST['phone'])) {
	    			$phone = $_POST['phone'];
	    			echo "<ul><li>Số điện thoại : $phone</li></ul> ";
	    		}
	    		if (isset($_POST['email'])) {
	    			$email = $_POST['email'];
	    			echo "<ul><li>Email : $email</li></ul> ";
	    		}
	    		if (isset($_POST['abc'])) {
	    			$gt = $_POST['abc'];
	    			echo "<ul><li>Giới tính : $gt</li></ul> ";
	    		}
	    		if (isset($_POST['address'])) {
	    			$address = $_POST['address'];
	    			echo "<ul><li>Địa chỉ : $address</li></ul>";
	    		}

    		?>
    	</form>
    </div>
</body>
</html>    		