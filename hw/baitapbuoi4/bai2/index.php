<?php
    require('data.php');
  /*  echo '<pre>';
        print_r($products);
    echo '</pre>';*/
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
        <a href="cart.php" class="btn btn-primary">Xem giỏ hàng</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Mã SP</th>
                    <th>Tên SP</th>
                    <th>Giá Bán</th>
                    <th>Số Lượng</th>
                    <th>Ảnh</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($products as $product) {
                    
                    ?>
                <tr>
                    <td><?= $product['id'] ?></td>
                    <td><?= $product['tensp'] ?></td>
                    <td><?= $product['dongia'] ?></td>
                    <td><?= $product['soluong'] ?></td>
                    <td><img style="width: 80px; height: 100px;" src="<?= $product['anh'] ?>" alt=""></td>
                    <td>
                        <a href="add2cart.php?masp=<?= $product['id'] ?>" class="btn btn-primary">Thêm vào giỏ hàng</a>
                    </td>
                    
                </tr>
            <?php } ?>
            </tbody>  
        </table>    
    </div>
</body>
</html>