<?php
	session_start();
	if (isset($_SESSION['cart'])) {
		$products = $_SESSION['cart'];
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
        <h2 align="center">Danh sách sản phẩm</h2>
        <a href="index.php" class="btn btn-primary">Quay lại</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Mã SP</th>
                    <th>Tên SP</th>
                    <th>Giá Bán</th>
                    <th>Số Lượng</th>
                    <th>Thành Tiền</th>
                    <th>Ảnh</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sum = 0;
                foreach ($products as $product) {
                    $sum +=  $product['soluong']*$product['dongia'];
                    ?>
                <tr>
                    <td><?= $product['id'] ?></td>
                    <td><?= $product['tensp'] ?></td>
                    <td><?= $product['dongia'] ?></td>
                    <td><a style='margin-right:10px; ' href="add2cart.php?masp=<?= $product['id'] ?>&type=0" class="btn btn-danger">+</a><?= $product['soluong'] ?><a href="remove.php?masp=<?= $product['id'] ?>" style='margin-left:10px; ' class="btn btn-primary">-</a></td>
                    <td><?= number_format($product['soluong']*$product['dongia']) ?></td>
                    <td><img style="width: 80px; height: 100px;" src="<?= $product['anh'] ?>"alt=""></td>
                    <td>
                        <a href="remove.php?masp=<?= $product['id'] ?>&type=1" class="btn btn-danger">Xóa sản phẩm</a>
                    </td>
                    
                </tr>
            <?php } ?>
            	<tr>
            		<th colspan="4">Tổng tiền</th>
            		<th><?= number_format($sum) ?></th>
            	</tr>
            </tbody>  
        </table>    
    </div>
</body>
</html>