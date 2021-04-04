<?php
    require_once('connection.php');
	 $id = $_GET['id'];
	 
// Viết câu lệnh để thêm dữ liệu
    $query = "SELECT posts.id,posts.title,posts.thumbnail,posts.content,posts.description,posts.view_count,posts.slug,posts.created_at,users.name1,categories.name FROM posts INNER JOIN users on posts.user_id = users.id INNER JOIN categories on posts.category_id = categories.id WHERE posts.id = ".$id;

// Thực thi câu lệnh
    $result = $conn->query($query);
    $post = $result->fetch_assoc();
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
                <th>Title</th>
                <th>Thumbnail</th>
                <th>Description</th>
                <th>Content</th>
                <th>View_count</th>
                <th>User name</th>
                <th>Category name</th>
                <th>Creat at</th>
            </thead>
            <tr>
                
                    <td><?= $post['id']; ?></td>
                    <td><?= $post['title']; ?></td>
                    <td>
                        <img src="uploads/<?= $post['thumbnail'] ?>" width="100px" height="100px">
                    </td>
                    <td><?= $post['description']; ?></td>
                    <td><?= $post['content']; ?></td>
                    <td><?= $post['view_count']; ?></td>
                    <td><?= $post['name1']; ?></td>
                    <td><?= $post['name']; ?></td>
                    <td><?= $post['created_at']; ?></td>
                </tr>
        </table>
        <a class="btn btn-primary" href="posts.php">Quay lai trang chu</a>
</body>
</html>