<?php
	session_start();

	if (isset($_GET['msv'])) {
		$msv = $_GET['msv'];
	}if (isset($_SESSION['student'])) {
		$data_arr= $_SESSION['student'][$msv];
	}
?>
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
    	<form role="form">
    		<legend style="text-align: center; !important">ZENT GROUP - PHP - SESSION</legend>
    		<legend style="text-align: center; !important">Thông tin sinh viên</legend>
    		<ul>
    			<li>Mã SV:
    				<?php
    					echo $data_arr['msv'];
    				?>
    			</li>
    			<li>Tên:
    				<?php
    					echo $data_arr['name'];
    				?>
    			</li>
    			<li>SĐT:
    				<?php
    					echo $data_arr['phone'];
    				?>
    			</li>
    			<li>Email:
    				<?php
    					echo $data_arr['email'];
    				?>
    			</li>
    			<li>Giới Tính:
    				<?php
    					echo $data_arr['abc'];
    				?>
    			</li>
    			<li>Địa chỉ:
    				<?php
    					echo $data_arr['address'];
    				?>
    			</li>
    		</ul>
    	</form>
    </div>
</body>
</html>    		