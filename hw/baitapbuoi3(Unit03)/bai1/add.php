
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
            
            <div class="form-group">
                <label for="">Mã SV</label>
                <input type="text" class="form-control" id="" placeholder="Nhập mã sinh viên" name="msv">
            </div>
            
            <div class="form-group">
                <label for="">Họ và tên</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào họ tên" name="name">
            </div>  

            <div class="form-group">
                <label for="">Số điện thoại</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào số điện thoại" name="phone">
            </div> 

            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào Email" name="email">
            </div> 

            <div class="form-group">
                <label for="" style="width: 100%">Họ và tên</label>
                Male<input value="Male" type="radio" name="abc">
                Female<input value="Female" type="radio" name="abc">
                Other<input value="other" type="radio" name="abc">
            </div> 

            <div class="form-group">
                <label for="">Địa chỉ</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào địa chỉ" name="address">
            </div>
            <button type="submit" class="btn btn-primary">Lưu Thông Tin</button>
        </form>
    </div>
</body>
</html>