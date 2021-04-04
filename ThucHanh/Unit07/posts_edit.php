<?php
    $id = $_GET['id'];
    require_once('connection.php');
// Có thể dùng isset để kiểm tra tồn tại $_GET

    $query = "SELECT posts.id,posts.title,posts.thumbnail,categories.thumbnail,posts.content,posts.description,posts.view_count,posts.slug,posts.created_at,posts.user_id,posts.category_id,users.name1,categories.name FROM posts INNER JOIN users on posts.user_id = users.id INNER JOIN categories on posts.category_id = categories.id WHERE posts.id =".$id;

// Thực thi câu lệnh
    $result = $conn->query($query);
    $post = $result->fetch_assoc();
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
    <h3 align="center">Update New Category</h3>
    <hr><a href="posts.php" class="btn btn-success">quay lại</a>
        <form action="posts_edit_process.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" placeholder="" name="title" value="<?= $post['title'] ?>">
                <input type="hidden" name="id" value="<?= $post['id']; ?>">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                  <input type="text" class="form-control" id="description" placeholder="" name="description" value="<?= $post['description'] ?>">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <input type="text" class="form-control" id="content" placeholder="" name="content" value="<?= $post['content'];?>">
            </div>
            <div class="form-group">
                <label for="thumbnail">Thumbnail</label>
                <img src="uploads/<?= $post['thumbnail'];?>" width="100px" height="100px" alt="">
                <input type="file" class="form-control" id="thumbnail" placeholder="" name="thumbnail" >
            </div>
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" class="form-control" id="slug" placeholder="" name="slug" value="<?= $post['slug'];?>">
            </div>
            <div class="form-group">
                <label for="username">User name</label>
                <input type="text" class="form-control" id="username" placeholder="" name="username" value="<?= $post['name1'];?>">
            </div>
            <div class="form-group">
                <label for="category">Category name</label>
                <input type="text" class="form-control" id="category" placeholder="" name="category" value="<?= $post['name'];?>">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</body>
</html>