<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form</title>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <style type="text/css">
        .error{
            color: red !important;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){

            $("#demoForm").validate({
                onfocusout: false,
                onkeyup: false,
                onclick: false,
                rules: {
                    "ten": {
                        required: true
                    }
                },
                messages: {
                    "ten": {
                        required: "Vui lòng nhập tên tệp",
                    }
                }
            });
        })
    </script>
</head>
<body>
    <div class="container">
        <form id="demoForm" action="" method="POST" role="form" enctype="multipart/form-data" >
            <legend style="text-align: center; !important">Upload</legend>
            <a href="trangchubai3.php" class="btn btn-primary">Quay lại trang chủ</a>
            <div class="form-group">
                <label for="ten">Tên tài liệu</label>
                <input type="text" class="form-control" id="ten" name="ten" required>
            </div>
            
            <div class="form-group">
                <label for="tailieu"></label>
                <input type="file" class="form-control" id="tailieu" name="tailieu">
            </div>  
            <button type="submit" class="btn btn-primary" name="submit">Upload</button>
        </form>
        
    </div>
</body>
</html>
<?php
   session_start();
       if(isset($_POST['submit'])){ // kiểm tra xem button Submit đã được click hay chưa ? 
        $ten = $_POST['ten'];

        $target_dir = "upload/";  // thư mục chứa file upload

        $target_file = $target_dir . basename($_FILES["tailieu"]["name"]); // link sẽ upload file lên
        
        if (move_uploaded_file($_FILES["tailieu"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi 
            echo "Tệp ". basename( $_FILES["tailieu"]["name"]). " vừa được đẩy lên.";
            $_SESSION['document'][$ten] = [
                'ten' => $ten,
                'tailieu' => $target_file,
            ];
        } else { // Upload file có lỗi 
            echo "Xin lỗi chưa thể đẩy lên tập tin của bạn";
        } 
        
    }
   /* echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";*/
?>