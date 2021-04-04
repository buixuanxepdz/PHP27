<?php
    require_once('connection.php');
	 $id = $_GET['id'];
	 
// Viết câu lệnh để thêm dữ liệu
    $query = "SELECT * FROM users WHERE id = " . $id;

// Thực thi câu lệnh
    $result = $conn->query($query);
    $user = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
     <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <table class="table" width="1000px" align="center">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Avatar</th>
                <th>Email</th>
                <th>Password</th>
                <th>Creat at</th>
            </thead>
            <tr>
                
                    <td><?= $user['id']; ?></td>
                    <td><?= $user['name1']; ?></td>
                    <td>
                        <img src="<?= $user['avatar'] ?>" width="100px" height="100px">
                    </td>
                    <td><?= $user['email']; ?></td>
                    <td><?= $user['password']; ?></td>
                    <td><?= $user['created_at']; ?></td>
                </tr>
        </table>
        <a class="btn btn-primary" href="users.php">Quay lai trang chu</a>
</body>
</html>