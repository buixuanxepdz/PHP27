<?php
    $id = $_GET['id'];
    require_once('connection.php');
// Có thể dùng isset để kiểm tra tồn tại $_GET

     $query = "SELECT * from users WHERE id = ". $id;

// Thực thi câu lệnh
    $result = $conn->query($query);
    $users = $result->fetch_assoc();
   
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DevMind - Education And Technology Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <h3 align="center">DevMind - Education And Technology Group</h3>
    <h3 align="center">Update New User</h3>
    <hr><a href="users.php" class="btn btn-success">quay lại</a>
        <form action="users_edit_process.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="" name="name" value="<?= $users['name'] ?>">
                <input type="hidden" name="id" value="<?= $users['id']; ?>">
            </div>
            <div class="form-group">
                <label for="avatar">Avatar</label>
                <input type="text" class="form-control" id="avatar" placeholder="" name="avatar" value="<?= $users['avatar'] ?>">
                <input type="hidden" name="id" value="<?= $users['id']; ?>">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="" name="email" value="<?= $users['email'];?>">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</body>
</html>