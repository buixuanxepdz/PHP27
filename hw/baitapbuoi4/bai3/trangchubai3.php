<?php
   session_start();
    if (isset($_SESSION['document'])) {
        $tailieu = $_SESSION['document']; 
    }else{
        $tailieu = array();
    }
 /*    echo "<pre>";
    print_r($_SESSION['document']);
    echo "</pre>";*/
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
        <a href="upload.php" class="btn btn-primary">Upload file</a>
        <table class="table">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên</th>
                    <th>Tải về</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
              <?php
                $i=0;
                foreach ($tailieu as $abc) {
                $i++;      
              ?>
                <tr>
                    <td><?= $i;?></td>
                    <td><?= $abc['ten']; ?></td>
                    <td><a href="<?= $abc['tailieu']; ?>" download="<?= $abc['tailieu']; ?>" class="btn btn-success">Tải xuống</a></td>
                    <td><a href="deletefile.php?ten=<?= $abc['ten']; ?>" class="btn btn-warning">Xóa</a></td>
                </tr>
            <?php } ?>
            </tbody>  
        </table>    
    </div>
</body>
</html>