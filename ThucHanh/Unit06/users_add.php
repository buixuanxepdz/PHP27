<?php
    require_once('connection.php');
// Câu lệnh truy vấn
$query = "SELECT * FROM users ";

// Thực thi câu lệnh
$result = $conn->query($query);

// Tạo 1 mảng để chứa dữ liệu
$users = array();

while($row = $result->fetch_assoc()) { 
    $users[] = $row;
}

/*foreach ($categories as $item){
     echo "<pre>";
          print_r($item);
     echo "</pre>";
 }*/

 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DevMind - Education And Technology Group</title>
    <!-- Latest compiled and minified CSS -->
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
<script type="text/javascript">
        $(document).ready(function(){

            $("#demoForm").validate({
                onfocusout: false,
                onkeyup: false,
                onclick: false,
                rules: {
                    "name": {
                        required: true
                    },
                    "email": {
                        required: true
                    },
                    "password":{
                        required:true
                    },
                },
                messages: {
                    "name": {
                        required: "Please enter name",
                    },
                    "email": {
                        required: "Please enter email",
                    },
                    "password": {
                        required: "Please enter password",
                    }
                }
            });
        })
    </script>
    <style type="text/css">
        .error{
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
    <h3 align="center">DevMind - Education And Technology Group</h3>
    <h3 align="center">Add New User</h3>
    <hr>
        <a href="users.php" class="btn btn-success">quay lại</a>
        <form id="demoForm" action="users_process.php" method="POST" role="form" enctype="multipart/form-data">

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="" name="name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" placeholder="" name="email">
            </div>
            <div class="form-group">
                <label for="avatar">Images</label>
                <input type="text" class="form-control" id="avatar" placeholder="" name="avatar">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</body>
</html>