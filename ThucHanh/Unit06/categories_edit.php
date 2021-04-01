<?php
    $id = $_GET['id'];
    require_once('connection.php');
// Có thể dùng isset để kiểm tra tồn tại $_GET

     $query = "SELECT * from categories WHERE id = ". $id;

// Thực thi câu lệnh
    $result = $conn->query($query);
    $category = $result->fetch_assoc();
    // Câu lệnh truy vấn
$query = "SELECT * FROM categories WHERE parent_id is NULL";

// Thực thi câu lệnh
$result = $conn->query($query);

// Tạo 1 mảng để chứa dữ liệu
$categories = array();

while($row = $result->fetch_assoc()) { 
    $categories[] = $row;
}
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
    <hr><a href="categories.php" class="btn btn-success">quay lại</a>
        <form action="categories_edit_process.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="" name="name" value="<?= $category['name'] ?>">
                <input type="hidden" name="id" value="<?= $category['id']; ?>">
            </div>
            <div class="form-group">
                <label for="category">Danh Mục Cha</label>
                <select name="category" id="category" class="form-control">
                    <option value="0">Là danh mục cha</option>
                    <?php foreach ($categories as $cate) { ?>
                        <option value="<?= $cate['id'] ?>"><?= $cate['name'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description" value="<?= $category['description'];?>">
            </div>
             <div class="form-group">
                <label for="thumbnail">Thumbnail</label>
                <input type="text" class="form-control" id="" placeholder="" name="thumbnail" value="<?= $category['thumbnail'];?>">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</body>
</html>